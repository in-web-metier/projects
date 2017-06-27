
var date = new Date;

var dd = date.getDate();
	if (dd < 10) dd = '0' + dd;

var mm = date.getMonth() + 1;
	if (mm < 10) mm = '0' + mm;

var yy = date.getFullYear() % 100;
	if (yy < 10) yy = '0' + yy;

var fullDate = dd + "." + mm + "." + yy;

$(".date").html(fullDate);

$(document).ready(function(){
    $('.btn-link').click( function(){
        var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
        	$('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 2000);
        }
        return false;
    });
});