/**
 * Created by Re5PecT on 19.10.2014 г..
 */
$(document).ready(function () {
    var maxHeight = 0;
    var moreInfoButtonHeight = 0;

    if (showErrorForm != "0") {
        $(showErrorForm).removeClass('toggle-slide');
    }

    $(".cart").hoverIntent(function () {
        //$("#fbSidebar").slideToggle("slow");
        $("#fbSidebar").toggle('slide');//animate({width:'toggle'}, 200);
    });

    $(".atelieta").click(function () {
        $(this).toggleClass("is-clicked");
        $(".toggle-slide-atelieta").slideToggle();
    });

    $(".clicklogin").click(function (e) {
        e.stopPropagation();
        $(this).toggleClass("is-clicked");
        $(".toggle-slide-signin").slideUp();
        $(".toggle-slide-login").toggle();
    });

    $(".clicksignin").click(function (e) {
        e.stopPropagation();
        $(this).toggleClass("is-clicked");
        $(".toggle-slide-login").slideUp();
        $(".toggle-slide-signin").toggle();
    });

    $('.toggle-slide-signin').click(function(e){
        e.stopPropagation();
    });

    $('.toggle-slide-login').click(function(e){
        e.stopPropagation();
    });

    $(document).click(function(){
        $('.toggle-slide-signin').slideUp();
        $('.toggle-slide-login').slideUp();
    });

    function resizeSubmenuDivs() {
        $('.atelieta-info').each(function () {
            maxHeight = Math.max(maxHeight, $(this).height());
        });
        moreInfoButtonHeight = $(".more-info-button").outerHeight();
        $('.atelieta-info').css({height: (maxHeight + moreInfoButtonHeight) + 'px'});
    }

    $(".album1").click(function () {
        $(this).parent().toggleClass('selected-album');
        $(".album2").parent().removeClass('selected-album');
        $(".album3").parent().removeClass('selected-album');
        $(".album1-info").slideToggle();
        $(".album2-info").slideUp();
        $(".album3-info").slideUp();
    });
    $(".album2").click(function () {
        $(this).parent().toggleClass('selected-album');
        $(".album1").parent().removeClass('selected-album');
        $(".album3").parent().removeClass('selected-album');
        $(".album1-info").slideUp();
        $(".album2-info").slideToggle();
        $(".album3-info").slideUp();
    });
    $(".album3").click(function () {
        $(this).parent().toggleClass('selected-album');
        $(".album1").parent().removeClass('selected-album');
        $(".album2").parent().removeClass('selected-album');
        $(".album1-info").slideUp();
        $(".album2-info").slideUp();
        $(".album3-info").slideToggle();
    });

    $(".close-button-album").click(function () {
        $(".album1").parent().removeClass('selected-album');
        $(".album2").parent().removeClass('selected-album');
        $(".album3").parent().removeClass('selected-album');
        $(".album1-info").slideUp();
        $(".album2-info").slideUp();
        $(".album3-info").slideUp();
    });

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
        $.ajax({url: URLPath+'/atelieta', type: "GET",
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

                $('.atelieta-content a').remove();
                $counter = 0;
                $('.atelieta-content').each(function () {
                    if (result.length > $counter) {
                        $('.atelieta-content').eq($counter).find('h3').text(result[$counter]['title']);
                        $('.atelieta-content').eq($counter).find('p:first').text(result[$counter]['content']);
                        $.each(result[$counter]['docs']['path'], function (index) {

                            $path=result[$counter]['docs']['path'][index];
                            $name=result[$counter]['docs']['name'][index];
                            $('.atelieta-content').eq($counter).append('<a href="'+$path+'">'+$name+'</a>')


                        })
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

        $.ajax({url: URLPath+'/atelieta', type: "GET",
            data: { page: currentAtelietaPage - 1 }, dataType: "json", success: function (result) {
                currentAtelietaPage--;
                if (currentAtelietaPage == 1) {
                    $('#atelieta_left_page').fadeOut();
                    $('#atelieta_right_page').fadeIn();
                } else if (currentAtelietaPage == allPagesCount - 1) {
                    $('#atelieta_right_page').fadeIn();
                }

                $('.atelieta-content a').remove();
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
                    $.each(result[$counter]['docs']['path'], function (index) {

                            $path=result[$counter]['docs']['path'][index];
                            $name=result[$counter]['docs']['name'][index];
                            $('.atelieta-content').eq($counter).append('<a href="'+$path+'">'+$name+'</a>')


                    })
                    $counter++;
                })
            }});
    })

    var currentImagesPage = 1;
    $('#albums_right_page').click(function () {
        $.ajax({url: URLPath+'/albums', type: "GET",
            data: { page: currentImagesPage + 1 }, dataType: "json", success: function (result) {
                currentImagesPage++;
                if (currentImagesPage == allPagesImagesCount) {
                    $('#albums_right_page').fadeOut();
                    $('#albums_left_page').fadeIn();
                } else if (currentImagesPage == 2) {
                    $('#albums_left_page').fadeIn();
                }

                $('.albums-content div.album-images').remove();
                $counter = 0;
                $('.albums-info').each(function () {
                    if (result.length > $counter) {
                        $('.albums-info').eq($counter).find('h3').text(result[$counter]['name']);
                        $('.albums-info').eq($counter).find('img').attr("src", result[$counter]['path']);
                        $.each(result[$counter]['images']['path'], function (index) {

                            $path=result[$counter]['images']['path'][index];
                            $('.albums-content').eq($counter).append('<div class="col-md-1 album-images"><a href="'+$path+'" data-lightbox="album'+$counter+'"><img style="border-radius: 3px; max-width: 100%" src="'+$path+'"></a></div>')
                        })
                    } else {
                        $('.albums-info').eq($counter).find('h3').text("");
                        $('.albums-info').eq($counter).find('img').attr("src", "");
                        $('.albums-info').eq($counter).find('p').text("");
                    }

                    $counter++;
                })
            }});
    })

    $('#albums_left_page').click(function () {
        if (currentImagesPage == 1) {
            return;
        }

        $.ajax({url: URLPath+'/albums', type: "GET",
            data: { page: currentImagesPage - 1 }, dataType: "json", success: function (result) {
                currentImagesPage--;
                if (currentImagesPage == 1) {
                    $('#albums_left_page').fadeOut();
                    $('#albums_right_page').fadeIn();
                } else if (currentImagesPage == allPagesImagesCount - 1) {
                    $('#albums_right_page').fadeIn();
                }

                $('.albums-content div.album-images').remove();
                $counter = 0;
                $('.albums-info').each(function () {
                    $('.albums-info').eq($counter).find('h3').text(result[$counter]['name']);
                    $('.albums-info').eq($counter).find('img').attr("src", result[$counter]['path']);
                    $('.albums-info').eq($counter).find('p:last').text("vij vs pic");
                    $.each(result[$counter]['images']['path'], function (index) {

                        $path=result[$counter]['images']['path'][index];
                        $('.albums-content').eq($counter).append('<div class="col-md-1 album-images"><a href="'+$path+'" data-lightbox="album'+$counter+'"><img style="border-radius: 3px; max-width: 100%" src="'+$path+'"></a></div>')
                    })

                    $counter++;
                })
            }});
    })
});