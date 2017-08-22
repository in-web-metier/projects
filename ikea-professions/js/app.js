$(function() {


	qScore = 0;
	qCurrent = 1;
	qCount = $(".question-item").length;

	$(".radio").click(function() {

		if (!$(this).attr('disabled'))
		{
			var valid = $(this).data('valid');
			$(this).parents(".test-answers").find('.radio').attr("disabled", "disabled");

			if(valid=='1')
			{
				qScore =qScore + 1;
				$(this).siblings('label').css('color','green');
				$(this).parents(".test-answers").find('.positive').show();
			}
			else
			{
				$(this).siblings('label').css('color','red');
				$(this).parents(".test-answers").find('.negative').show();
			}
			$(this).siblings('.test-comment').show();

			$('.btn-test').show();

		}

	});

	$(".btn-test").click(function() {
		if (qCurrent<qCount)
		{
			qCurrent = qCurrent + 1;
			$(".test-pag1.pag-active").html(qCurrent);
			$('.btn-test').hide();
			$(".question-item").hide();
			$(".question-item.num"+qCurrent).fadeIn();

		} else {

			$('.test-score').html(qScore);
			$(".test-result__description").each(function(index){
				var from = parseInt($(this).data('from'));
				var to = parseInt($(this).data('to'));
				if (qScore>=from && qScore<=to){
					$(this).show();
				}
			});

			$(".question-item").hide();
			$(".depart__screen5").addClass('finish');
			$('.test-result-end').fadeIn();
		}
	})







	/* header-menu */

	$(".header__menu").click(function() {
		$(".header__menu-open").css("transform", "scale(1)");
	});

	$(".header__menu-close").click(function() {
		$(".header__menu-open").css("transform", "scale(0)");
	});

	$(".header-scroll").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $("#ikea-in-rus, #become-worker, #what-departments").offset().top;
		$('body,html').animate({scrollTop: top}, 1500);
	});

	$(".header__menu-open__list-link").click(function() {
		$(".header__menu-open").css("transform", "scale(0)");
	});

	/* header-menu END */


	/* work-life screens open */


	$(".work-life__screen2, .que-answ__list, .study-in-ikea, .compensations-in-ikea").slideUp(0);

	var click = 1;

	$(".work-life__screen1 .work-life__arrow").click(function() {
		if(click)
		{
			$(".work-life__screen1 .work-life__arrow").css("transform", "rotate(90deg)");
			$(".work-life__screen2").slideDown(1000);
			$(".work-life__screen2 .work-life__close").css("display", "block");
			click = 0;
		}
		else
		{
			$(".work-life__screen1 .work-life__arrow").css("transform", "rotate(0deg)");
			$(".work-life__screen2").slideUp(1000);
			$(".work-life__screen2 .work-life__close").css("display", "none");
			click = 1;
		}
	});

	$(".work-life__screen3 .work-life__arrow").click(function() {
		if(click)
		{
			$(".work-life__screen3 .work-life__arrow").css("transform", "rotate(90deg)");
			$(".que-answ__list").slideDown(1000);
			$(".work-life__screen3 .work-life__close").css("display", "block");
			click = 0;
		}
		else
		{
			$(".work-life__screen3 .work-life__arrow").css("transform", "rotate(0deg)");
			$(".que-answ__list").slideUp(1000);
			$(".work-life__screen3 .work-life__close").css("display", "none");
			click = 1;
		}
	});
	$(".work-life__screen4 .work-life__arrow").click(function() {
		if(click)
		{
			$(".work-life__screen4 .work-life__arrow").css("transform", "rotate(90deg)");
			$(".study-in-ikea").slideDown(1000);
			$(".work-life__screen4 .work-life__close").css("display", "block");
			click = 0;
		}
		else
		{
			$(".work-life__screen4 .work-life__arrow").css("transform", "rotate(0deg)");
			$(".study-in-ikea").slideUp(1000);
			$(".work-life__screen4 .work-life__close").css("display", "none");
			click = 1;
		}
	});
	$(".work-life__screen5 .work-life__arrow").click(function() {
		if(click)
		{
			$(".work-life__screen5 .work-life__arrow").css("transform", "rotate(90deg)");
			$(".compensations-in-ikea").slideDown(1000);
			$(".work-life__screen5 .work-life__close").css("display", "block");
			click = 0;
		}
		else
		{
			$(".work-life__screen5 .work-life__arrow").css("transform", "rotate(0deg)");
			$(".compensations-in-ikea").slideUp(1000);
			$(".work-life__screen5 .work-life__close").css("display", "none");
			click = 1;
		}
	});

	$(".work-life__screen2 .work-life__close").click(function() {
		$(".work-life__screen1 .work-life__arrow").css("transform", "rotate(0deg)");
		$(".work-life__screen2").slideUp(1000);
		$(".work-life__screen2 .work-life__close").css("display", "none");
		click = 1;
	});

	$(".work-life__screen3 .work-life__close").click(function() {
		$(".work-life__screen3 .work-life__arrow").css("transform", "rotate(0deg)");
		$(".que-answ__list").slideUp(1000);
		$(".work-life__screen3 .work-life__close").css("display", "none");
		click = 1;
	});

	$(".work-life__screen4 .work-life__close").click(function() {
		$(".work-life__screen4 .work-life__arrow").css("transform", "rotate(0deg)");
		$(".study-in-ikea").slideUp(1000);
		$(".work-life__screen4 .work-life__close").css("display", "none");
		click = 1;
	});

	$(".work-life__screen5 .work-life__close").click(function() {
		$(".work-life__screen5 .work-life__arrow").css("transform", "rotate(0deg)");
		$(".compensations-in-ikea").slideUp(1000);
		$(".work-life__screen5 .work-life__close").css("display", "none");
		click = 1;
	});

	/* work-life screens open end */


	/* more */

	if (screen.width > 414) {
		$('.more').slick({
			slidesToShow: 3,
			arrows: true,
			slidesToScroll: 3
		});
	}
	if (screen.width <= 414) {
		$('.more').slick({
			slidesToShow: 2,
			arrows: true,
			slidesToScroll: 2
		});
	}

	/* more END */
	/* work-life screens open end */
})
