$(document).ready(function(){
	$(".comments").slick({
	    dots: true,
	    arrows: false,
	    autoplay: true

	});

	initializeClock('timer1', deadline);
	initializeClock('timer2', deadline);

});