$(document).ready(function() {
	// slick slider 
  $('.comments .container').slick({
  	dots: true,
  	arrows: false,
    autoplay: true
  });
    //soft move to form
      $('a.free-consultation').click( function(){
          var scroll_el = $(this).attr('href');
          if ($(scroll_el).length != 0) {
              $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 1500);
          }
          return false;
      });
})