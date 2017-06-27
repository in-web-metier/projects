 // Стилизация radio
    var itembox = $(".review_radio");
    itembox.click(function () {
        var _this = $(this);
        _this.addClass("active").siblings(itembox).removeClass("active").find("input[type='radio']").removeAttr("checked");

        if (_this.hasClass('active')) {
            _this.find("input[type='radio']").attr("checked", "checked");
        }
    });


    var itembox = $(".review_radio");
    itembox.click(function () {
        itembox.hide();
        $(".review_result").fadeIn();

        $(".green_result").addClass("green_view");
        $(".red_result").addClass("red_view");
        $(".blue_result").addClass("blue_view");
    });


    // Стилизация input[type=file]
    $('.min_input .button').click(function () {
        $(this).siblings('input[type=file]').click();
        return false;
    });

    if (!$.cookie('cnt') || $.cookie('cnt') == 'NaN') {
        $.cookie('cnt', '17789', {expires: 3, path: '/'});
    }
    count();
    (function loop() {
        var rand = Math.round(Math.random() * (11000 - 500)) + 2500;
        setTimeout(function () {
            count();
            loop();
        }, rand);
    }());


    