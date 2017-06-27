var gulp = require('gulp');
var sass = require('gulp-sass');
var prettify = require('gulp-prettify');
var imagemin = require('gulp-imagemin');
var watch = require('gulp-watch');
var browserSync = require('browser-sync').create();
var runSequence = require('run-sequence');
var plumber = require('gulp-plumber');
var autoprefixer = require('gulp-autoprefixer');
var gutil = require('gulp-util');
var spritesmith = require('gulp.spritesmith');
var cached = require('gulp-cached');
var merge = require('merge-stream');
var buffer = require('vinyl-buffer');
var nunjucksRender = require('gulp-nunjucks-render');
var clean = require('gulp-clean');

var errorHandler = function(error){
  gutil.log([
    (`${error.name} in ${error.plugin}`).bold.red,
    '',
    error.message,
    ''
  ].join('\n'));

  if (gutil.env.beep) {
    gutil.beep();
  }
}
gulp.task('watch', function(){
  global.watch = true;
  watch('./app/scss/**/*.scss', function(){
    runSequence('sass');
  });
  watch('./app/*.html',  function(){
    runSequence('html', browserSync.reload);
  });
  watch('./app/images/**/*.{jpg,jpeg}', function(){
    runSequence('images:minify', browserSync.reload);
  });
  watch('./app/images/**/*.{png,gif,svg,ico}', function(){
    runSequence('images:copy', browserSync.reload);
  });
  watch('./app/png-sprite/*.png', function(){
    runSequence('sprite', browserSync.reload);
  });
  watch('./app/js/**/*', function(){
    runSequence('scripts', browserSync.reload);
  });
  watch('./app/fonts/**/*', function(){
    runSequence('fonts', browserSync.reload);
  });
});
gulp.task('sass', function() {
  return gulp
    .src('./app/scss/index.scss')
    .pipe(plumber({
      errorHandler
    }))
    .pipe(sass.sync().on('erorr', sass.logError))
    .pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
    .pipe(gulp.dest('./dist/css'))
    .pipe(browserSync.stream());
});
gulp.task('html', function() {
  return gulp
    .src('./app/*.html')
    .pipe(plumber({
      errorHandler
    }))
    .pipe(nunjucksRender({
      path: './app/includes'
    }))
    .pipe(prettify({
      indent_size: 2
    }))
    .pipe(gulp.dest('./dist/'));
});
gulp.task('images:minify', function() {
  return gulp
    .src('./app/images/**/*.{jpg,jpeg}')
    .pipe(imagemin())
    .pipe(gulp.dest('./dist/images'));
});
gulp.task('images:copy', function() {
  return gulp
    .src('./app/images/**/*.{png,svg,ico}')
    .pipe(gulp.dest('./dist/images'));
});
gulp.task('sprite', function() {
  var spriteData = gulp.src('./app/png-sprite/*.png')
    .pipe(spritesmith({
    imgName: 'sprite.png',
    imgPath: '/images/sprite.png',
    cssName: '_png-sprite.css',
    padding: 5
  }));

  spriteData.img
    .pipe(gulp.dest('./dist/images'));

  spriteData.css
   .pipe(gulp.dest('./app/scss'));
});

gulp.task('scripts', function(){
  gulp.src('./app/js/**/*')
    .pipe(gulp.dest('./dist/js'));
});
gulp.task('fonts', function(){
  gulp.src('./app/fonts/**/*')
    .pipe(gulp.dest('./dist/fonts'));
});
gulp.task('serve', function() {
  browserSync.init({
    server: "./dist"
  });
});
gulp.task('clean', function(){
  return gulp
    .src('./dist')
    .pipe(clean());
})
gulp.task('default', ['html', 'fonts', 'sprite', 'sass', 'scripts', 'images:copy', 'images:minify', 'serve',  'watch']);
