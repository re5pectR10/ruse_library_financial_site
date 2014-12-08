/**
 * Created by Re5PecT on 19.10.2014 г..
 */
$(document).ready(function() {
    var maxHeight = 0;
    var moreInfoButtonHeight = 0;

    $(".cart").hover(function () {
        //$("#fbSidebar").slideToggle("slow");
        $("#fbSidebar").toggle('slide');//animate({width:'toggle'}, 200);
    });

    $(".atelieta").click(function () {
        $(this).toggleClass("is-clicked");
        $(".toggle-slide-atelieta").slideToggle();
    });

    function resizeSubmenuDivs() {
        $('.atelieta-info').each(function() {
            maxHeight = Math.max(maxHeight, $(this).height());
        });
        moreInfoButtonHeight = $(".more-info-button").outerHeight();
        $('.atelieta-info').css({height:(maxHeight + moreInfoButtonHeight) + 'px'});
    }

    $(".atelie1").click(function () {
        $(".atelie1-info").slideToggle();
        $(".atelie2-info").slideUp();
        $(".atelie3-info").slideUp();
    });
    $(".atelie2").click(function () {
        $(".atelie1-info").slideUp();
        $(".atelie2-info").slideToggle();
        $(".atelie3-info").slideUp();
    });
    $(".atelie3").click(function () {
        $(".atelie1-info").slideUp();
        $(".atelie2-info").slideUp();
        $(".atelie3-info").slideToggle();
    });

    $(".close-button").click(function () {
        $(".atelie1-info").slideUp();
        $(".atelie2-info").slideUp();
        $(".atelie3-info").slideUp();
    });
});