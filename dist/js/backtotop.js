$(document).ready(function(){
    var id = "#back-to-top";
    var fadeSpeed = 1000;
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $(id).fadeIn(fadeSpeed);
            //$(id).slideUp("slow", function() {});
        } else {
            $(id).fadeOut(fadeSpeed);
            //$(id).slideDown("slow", function () { });
        }
    });
    // scroll body to 0px on click
    $(id).click(function () {
        //$(id).tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, fadeSpeed);
        return false;
    });
    
    //$(id).tooltip('show');
});
