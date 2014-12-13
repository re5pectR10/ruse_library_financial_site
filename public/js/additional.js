/**
 * Created by Re5PecT on 19.10.2014 г..
 */
$(document).ready(function () {
    var maxHeight = 0;
    var moreInfoButtonHeight = 0;

    $(".cart").hoverIntent(function () {
        //$("#fbSidebar").slideToggle("slow");
        $("#fbSidebar").toggle('slide');//animate({width:'toggle'}, 200);
    });

    $(".atelieta").click(function () {
        $(this).toggleClass("is-clicked");
        $(".toggle-slide-atelieta").slideToggle();
    });

    $(".clicklogin").click(function () {
        $(this).toggleClass("is-clicked");
        $(".toggle-slide-signin").slideUp();
        $(".toggle-slide-login").toggle();
    });

    $(".clicksignin").click(function () {
        $(this).toggleClass("is-clicked");
        $(".toggle-slide-login").slideUp();
        $(".toggle-slide-signin").toggle();
    });

    function resizeSubmenuDivs() {
        $('.atelieta-info').each(function () {
            maxHeight = Math.max(maxHeight, $(this).height());
        });
        moreInfoButtonHeight = $(".more-info-button").outerHeight();
        $('.atelieta-info').css({height: (maxHeight + moreInfoButtonHeight) + 'px'});
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

    var currentAtelietaPage = 1;
    $('#atelieta_right_page').click(function () {
        $.ajax({url: 'http://localhost/libproject/laravel/public/atelieta', type: "GET",
            data: { page: currentAtelietaPage + 1 }, dataType: "json", success: function (result) {
                currentAtelietaPage++;
                if (currentAtelietaPage == allPagesCount) {
                    $('#atelieta_right_page').fadeOut();
                    $('#atelieta_left_page').fadeIn();
                } else if (currentAtelietaPage == 2) {
                    $('#atelieta_left_page').fadeIn();
                }

                $counter = 0;
                $('.atelieta-info').each(function () {
                    if (result.length > $counter) {
                        $('.atelieta-info').eq($counter).find('h3').text(result[$counter]['title']);
                        $('.atelieta-info').eq($counter).find('p:first').text(result[$counter]['description']);
                    } else {
                        $('.atelieta-info').eq($counter).find('h3').text("");
                        $('.atelieta-info').eq($counter).find('p').text("");
                    }

                    $counter++;
                })

                $counter = 0;
                $('.atelieta-content').each(function () {
                    if (result.length > $counter) {
                        $('.atelieta-content').eq($counter).find('h3').text(result[$counter]['title']);
                        $('.atelieta-content').eq($counter).find('p:first').text(result[$counter]['content']);
                    } else {
                        $('.atelieta-content').eq($counter).find('h3').text("");
                        $('.atelieta-content').eq($counter).find('p').text("");
                    }

                    $counter++;
                })
            }});
    })

    $('#atelieta_left_page').click(function () {
        if (currentAtelietaPage == 1) {
            return;
        }

        $.ajax({url: 'http://localhost/libproject/laravel/public/atelieta', type: "GET",
            data: { page: currentAtelietaPage - 1 }, dataType: "json", success: function (result) {
                currentAtelietaPage--;
                if (currentAtelietaPage == 1) {
                    $('#atelieta_left_page').fadeOut();
                    $('#atelieta_right_page').fadeIn();
                } else if (currentAtelietaPage == allPagesCount - 1) {
                    $('#atelieta_right_page').fadeIn();
                }

                $counter = 0;
                $('.atelieta-info').each(function () {
                    $('.atelieta-info').eq($counter).find('h3').text(result[$counter]['title']);
                    $('.atelieta-info').eq($counter).find('p:first').text(result[$counter]['description']);
                    $('.atelieta-info').eq($counter).find('p:last').text("Прочети повече...");
                    $counter++;
                })

                $counter = 0;
                $('.atelieta-content').each(function () {
                    $('.atelieta-content').eq($counter).find('h3').text(result[$counter]['title']);
                    $('.atelieta-content').eq($counter).find('p:first').text(result[$counter]['content']);
                    $counter++;
                })
            }});
    })
});