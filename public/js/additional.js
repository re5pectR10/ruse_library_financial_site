/**
 * Created by Re5PecT on 19.10.2014 г..
 */
$(document).ready(function () {
    var maxHeight = 0;
    var moreInfoButtonHeight = 0;

    if (typeof showErrorForm != 'undefined'){
        if (showErrorForm != "0") {
            $(showErrorForm).removeClass('toggle-slide');
        }
    }
    $('.user_content_wrap').hide();
    $(".cart").hoverIntent(function () {
        //$("#fbSidebar").slideToggle("slow");
        $("#fbSidebar").toggle('slide');//animate({width:'toggle'}, 200);
    });

    $('img[usemap]').rwdImageMaps();

    /*$(".atelieta").click(function () {
        $(this).toggleClass("is-clicked");
        $(".toggle-slide-atelieta").slideToggle();
    });*/

    $('#divRss').FeedEk({
        FeedUrl:'http://smartmoney.bg/feed/',
        MaxCount : 5,
        ShowDesc : true,
        ShowPubDate:true,
        DescCharacterLimit:100,
        TitleLinkTarget:'_blank'
    });

    $('#logo').mapster({
        fillColor: 'E6E6E6',
        fillOpacity: 0.3
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
    $album1Empty = true;
    $(".album1").click(function () {
        $(this).parent().toggleClass('selected-album');

        $(".album2").parent().removeClass('selected-album');
        $(".album3").parent().removeClass('selected-album');
        if ($album1Empty)
        {
            $('.albums-content').eq(0).append('<img class="loader" src="'+load+'">');
            $id = $(this).prev().text();
            $.ajax({url: URLPath+'/pics', type: "GET",
                data: { id: $id }, dataType: "json", success: function (result) {

                    $.each(result['images']['path'], function (index) {

                        $path=result['images']['path'][index];
                        $desc = result['images']['desc'][index];
                        $('.albums-content').eq(0).append('<div class="col-sm-2 col-xs-6 album-images"><div><a href="'+$path+'" data-lightbox="album1" data-title="' + $desc + '"><img style="border-radius: 3px; max-width: 100%" src="'+$path+'"></a></div></div>');

                    });

                    $('.albums-content').eq(0).append('<div class="row album-info"><div class="col-xs-12">'+result['description']+'</div></div>');

                    /*$('.album-images').find('img').load(function() {
                        $('.albums-content').eq(0).find('.loader').remove();
                    });*/
                    $('.album-images').imagesLoaded()
                        .always(function() {
                            $('.albums-content').eq(0).find('.loader').remove();
                        });
        }});
            $album1Empty=false;
        }

        $(".album1-info").slideToggle();
        $(".album2-info").slideUp();
        $(".album3-info").slideUp();
    });

    $album2Empty = true;
    $(".album2").click(function () {
        $(this).parent().toggleClass('selected-album');
        $(".album1").parent().removeClass('selected-album');
        $(".album3").parent().removeClass('selected-album');

        if ($album2Empty)
        {
            $('.albums-content').eq(1).append('<img class="loader" src="'+load+'">');
            $id = $(this).prev().text();
            $.ajax({url: URLPath+'/pics', type: "GET",
                data: { id: $id }, dataType: "json", success: function (result) {

                    $.each(result['images']['path'], function (index) {

                        $path=result['images']['path'][index];
                        $desc = result['images']['desc'][index];
                        $('.albums-content').eq(1).append('<div class="col-sm-2 col-xs-6 album-images"><div><a href="'+$path+'" data-lightbox="album1" data-title="' + $desc + '"><img style="border-radius: 3px; max-width: 100%" src="'+$path+'"></a></div></div>');

                    });
                    $('.albums-content').eq(1).append('<div class="row album-info"><div class="col-xs-12">'+result['description']+'</div></div>');
                    $('.album-images').imagesLoaded()
                        .always(function() {
                            $('.albums-content').eq(1).find('.loader').remove();
                        });
                }});
            $album2Empty = false;
        }

        $(".album1-info").slideUp();
        $(".album2-info").slideToggle();
        $(".album3-info").slideUp();
    });

    $album3Empty = true;
    $(".album3").click(function () {
        $(this).parent().toggleClass('selected-album');
        $(".album1").parent().removeClass('selected-album');
        $(".album2").parent().removeClass('selected-album');

        if ($album3Empty)
        {
            $('.albums-content').eq(2).append('<img class="loader" src="'+load+'">');
            $id = $(this).prev().text();
            $.ajax({url: URLPath+'/pics', type: "GET",
                data: { id: $id }, dataType: "json", success: function (result) {

                    $.each(result['images']['path'], function (index) {

                        $path=result['images']['path'][index];
                        $desc = result['images']['desc'][index];
                        $('.albums-content').eq(2).append('<div class="col-sm-2 col-xs-6 album-images"><div><a href="'+$path+'" data-lightbox="album1" data-title="' + $desc + '"><img style="border-radius: 3px; max-width: 100%" src="'+$path+'"></a></div></div>');

                    });
                    $('.albums-content').eq(2).append('<div class="row album-info"><div class="col-xs-12">'+result['description']+'</div></div>');
                    $('.album-images').imagesLoaded()
                        .always(function() {
                            $('.albums-content').eq(2).find('.loader').remove();
                        });
                }});
            $album3Empty = false;
        }

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
        $(this).prev().toggleClass('atelie-clicked');
        $(".atelie2").prev().removeClass('atelie-clicked');
        $(".atelie3").prev().removeClass('atelie-clicked');
        $(".atelie1-info").slideToggle();
        $(".atelie2-info").slideUp();
        $(".atelie3-info").slideUp();
    });
    $(".atelie2").click(function () {
        $(this).prev().toggleClass('atelie-clicked');
        $(".atelie1").prev().removeClass('atelie-clicked');
        $(".atelie3").prev().removeClass('atelie-clicked');
        $(".atelie1-info").slideUp();
        $(".atelie2-info").slideToggle();
        $(".atelie3-info").slideUp();
    });
    $(".atelie3").click(function () {
        $(this).prev().toggleClass('atelie-clicked');
        $(".atelie1").prev().removeClass('atelie-clicked');
        $(".atelie2").prev().removeClass('atelie-clicked');
        $(".atelie1-info").slideUp();
        $(".atelie2-info").slideUp();
        $(".atelie3-info").slideToggle();
    });

    $(".close-button").click(function () {
        $(".atelie1").prev().removeClass('atelie-clicked');
        $(".atelie2").prev().removeClass('atelie-clicked');
        $(".atelie3").prev().removeClass('atelie-clicked');
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
                });

                $('.atelieta-content a').remove();
                $counter = 0;
                $('.atelieta-content').each(function () {
                    if (result.length > $counter) {
                        $('.atelieta-content').eq($counter).find('h3').text(result[$counter]['title']);
                        $('.atelieta-content').eq($counter).find('.atelie-content').empty();
                        $('.atelieta-content').eq($counter).find('.atelie-content').append(result[$counter]['content']);

                        if (typeof (result[$counter]['docs']) != "undefined") {
                            $.each(result[$counter]['docs']['path'], function (index) {

                                $path = result[$counter]['docs']['path'][index];
                                $name = result[$counter]['docs']['name'][index];
                                $('.atelieta-content').eq($counter).find('.files').append('<a href="' + $path + '">' + $name + '</a>')


                            })
                        }
                    } else {
                        $('.atelieta-content').eq($counter).find('h3').text("");
                            $('.atelie-content').eq($counter).empty();
                    }

                    $counter++;
                })
            }});
    });

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
                });

                $counter = 0;
                $('.atelieta-content').each(function () {
                    $('.atelieta-content').eq($counter).find('h3').text(result[$counter]['title']);
                    $('.atelieta-content').eq($counter).find('.atelie-content').empty();
                    $('.atelieta-content').eq($counter).find('.atelie-content').append(result[$counter]['content']);


                    if (typeof (result[$counter]['docs']) != "undefined"){
                        $.each(result[$counter]['docs']['path'], function (index) {

                            $path=result[$counter]['docs']['path'][index];
                            $name=result[$counter]['docs']['name'][index];
                            $('.atelieta-content').eq($counter).find('.files').append('<a href="'+$path+'">'+$name+'</a>')
                            });
                    }

                    $counter++;
                })
            }});
    });

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
                $('.albums-content div.album-info').remove();
                $album1Empty = true;
                $album2Empty = true;
                $album3Empty = true;
                $(".album1-info").slideUp();
                $(".album2-info").slideUp();
                $(".album3-info").slideUp();
                $(".album3").parent().removeClass('selected-album');
                $(".album1").parent().removeClass('selected-album');
                $(".album2").parent().removeClass('selected-album');

                $('#about').append('<img class="loader" src="'+load+'">');
                $counter = 0;
                $('.albums-info').each(function () {
                    if (result.length > $counter) {
                        $('.albums-info').eq($counter).find('h3').text(result[$counter]['name']);
                        $('.albums-info').eq($counter).find('img').attr("src", result[$counter]['path']);
                        $('.albums-info').eq($counter).find('.album-id').text(result[$counter]['id']);
                        /*$.each(result[$counter]['images']['path'], function (index) {

                            $path=result[$counter]['images']['path'][index];
                            $desc = result[$counter]['images']['desc'][index];
                            $('.albums-content').eq($counter).append('<div class="col-sm-2 col-xs-6 album-images"><div><a href="'+$path+'" data-lightbox="album'+$counter+'" data-title="' + $desc + '"><img style="border-radius: 3px; max-width: 100%" src="'+$path+'"></a></div></div>')
                        })*/
                    } else {
                        $('.albums-info').eq($counter).hide();
                    }

                    $counter++;
                })

                $('.albums-info').imagesLoaded()
                    .always(function() {
                        $('#about').find('.loader').remove();
                    });
            }});
    });

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
                $('.albums-content div.album-info').remove();
                $album1Empty = true;
                $album2Empty = true;
                $album3Empty = true;
                $(".album1-info").slideUp();
                $(".album2-info").slideUp();
                $(".album3-info").slideUp();
                $(".album3").parent().removeClass('selected-album');
                $(".album1").parent().removeClass('selected-album');
                $(".album2").parent().removeClass('selected-album');

                $('#about').append('<img class="loader" src="'+load+'">');
                $counter = 0;
                $('.albums-info').each(function () {
                    $('.albums-info').eq($counter).show();
                    $('.albums-info').eq($counter).find('h3').text(result[$counter]['name']);
                    $('.albums-info').eq($counter).find('img').attr("src", result[$counter]['path']);
                    $('.albums-info').eq($counter).find('.album-id').text(result[$counter]['id']);

                    /*$.each(result[$counter]['images']['path'], function (index) {

                        $path = result[$counter]['images']['path'][index];
                        $desc = result[$counter]['images']['desc'][index];
                        $('.albums-content').eq($counter).append('<div class="col-sm-2 col-xs-6 album-images"><div><a href="'+$path+'" data-lightbox="album'+$counter+'" data-title="' + $desc + '"><img style="border-radius: 3px; max-width: 100%" src="'+$path+'"></a></div></div>')
                    })*/

                    $counter++;
                })

                $('.albums-info').imagesLoaded()
                    .always(function() {
                        $('#about').find('.loader').remove();
                    });
            }});
    });

    $('a.ajaxmsg').click(function(e) {
        var url = $(this).attr('href'),
            id = $(this).attr('data-id'),
            parent= $(this).parent();

        e.preventDefault();
        $(this).remove();
        parent.append('<img src="'+load+'">');

        $.ajax({
            url: URLPath+url,
            type: 'GET',
            data: {id: id},
            dataType: 'json',
            statusCode: {
                200: function() {
                    parent.append('<i class="glyphicon glyphicon-ok" style="color: #00a800; margin: auto; padding-left: 40%"></i>');
                    parent.find('img').remove();
                    parent.parent().parent().next().find('td').removeClass('unseen-msg');
                    $('.msg-count').html(function(i, val) { return val-1 });
                }
            }
        })
    });
});