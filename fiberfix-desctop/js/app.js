 $('.reviews').slick({
    arrows: true,
    autoplay: true,
    dots: true
  });


 $('.link-to-form').click( function(){
    var scroll_el = $(this).attr('href');
    if ($(scroll_el).length != 0) {
        $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 1000);
    }
    return false; 
});

let data = new Date();
let dataNow = data.getDate();

let res = document.getElementById("date");
res.innerHTML = dataNow;


