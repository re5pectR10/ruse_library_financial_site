<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Evento | Free Onepage Event Template | ShapeBootstrap</title>

    {{ HTML::style('css/bootstrap.min.css'); }}
    {{ HTML::style('css/font-awesome.min.css'); }}
    {{ HTML::style('css/main.css'); }}
    {{ HTML::style('css/animate.css'); }}
    {{ HTML::style('css/responsive.css'); }}

    <!--[if lt IE 9]>
    {{ HTML::style('css/html5shiv.css'); }}
    {{ HTML::style('css/respond.css'); }}
    <![endif]-->

    <link rel="shortcut icon" href="{{ URL::asset('images/ico/favicon.ico'); }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{ URL::asset('images/ico/apple-touch-icon-144-precomposed.png'); }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{ URL::asset('images/ico/apple-touch-icon-114-precomposed.png'); }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{ URL::asset('images/ico/apple-touch-icon-72-precomposed.png'); }}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('images/ico/apple-touch-icon-57-precomposed.png'); }}">
</head>

<body>
<!--#header-->
<header id="header" role="banner">
    <div class="main-nav">
        <div class="container">
            <div class="header-top">
                <div class="pull-right social-icons">
                    <a href="https://www.facebook.com/Library.Ruse" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="http://www.youtube.com/user/libruse" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="navbar-header navbar-header-menu">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img class="img-responsive" src="{{ URL::asset('images/logo.png'); }}" alt="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="scroll active"><a href="#home">Начало</a></li>
                        <li class="scroll"><a href="#explore">Финанси</a></li>
                        <li class="scroll"><a href="#event">Бюджет</a></li>
                        <li class="scroll"><a href="#about">Събития</a></li>
                        <li class="no-scroll"><a href="#twitter">Ресурси</a></li>
                        <li><a class="no-scroll" href="#" target="_blank">В медиите</a></li>
                        <li class="scroll"><a href="#contact">За нас</a></li>
                    </ul>
                </div>
            </div>
            @yield('user_auth')
            @yield('acc_options')
        </div>
    </div>
</header>
<!--/#header-->

<section id="home">
    <div id="main-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="{{ URL::asset('images/slider/bg1.jpg'); }}" alt="slider">

                <div class="carousel-caption">
                    <h2>register for our next event </h2>
                    <h4>full event package only @$199</h4>
                    <a href="#contact">GRAB YOUR TICKETS <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ URL::asset('images/slider/bg2.jpg'); }}" alt="slider">

                <div class="carousel-caption">
                    <h2>register for our next event </h2>
                    <h4>full event package only @$199</h4>
                    <a href="#contact">GRAB YOUR TICKETS <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ URL::asset('images/slider/bg3.jpg'); }}" alt="slider">

                <div class="carousel-caption">
                    <h2>register for our next event </h2>
                    <h4>full event package only @$199</h4>
                    <a href="#contact">GRAB YOUR TICKETS <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#home-->

<section id="explore">
    <div class="container">

        <div class="row ">
            <div class="col-md-1 atelieta">
                <p>Ателиета</p>
            </div>
            <div class="toggle-slide toggle-slide-atelieta" id="atelietaDescription">
                <?php
                $counter = 1;
                foreach ($atelieta as $atelie): ?>
                    <div class="col-md-3 <?php if ($counter == 1) echo 'col-md-offset-1'; ?> atelieta-info">
                        <h3><?php echo $atelie->title; ?></h3>
                        <p><?php echo $atelie->description; ?></p>
                        <div class="more-info-button atelie<?php echo $counter ?>">
                            <p>Прочети повече...</p>
                        </div>
                    </div>
                    <?php
                    $counter++;
                endforeach; ?>
                <div id="atelieta_left_page">levo</div>
                <div id="atelieta_right_page">desno</div>
            </div>
        </div>
        <div class="row toggle-slide toggle-slide-atelieta">
            <?php
            $counter = 1;
            foreach ($atelieta as $atelie): ?>
                <div class="col-md-offset-2 col-md-10 atelie<?php echo $counter ?>-info toggle-slide atelieta-content">
                    <div class="close-button">
                        <img src="{{ URL::asset('images/close_button.png'); }}">
                    </div>
                    <h3 class="align-center"><?php echo $atelie->title; ?></h3>
                    <p><?php echo $atelie->content; ?></p>
                    <?php foreach($atelie->doc as $d)
                    {
                        echo '<a href="'.URL::to('/').'/file?name='.$d->name.'&article_id='.$atelie->id.'">'.$d->name.'</a>';
                    } ?>
                </div>
                <?php
                $counter++;
            endforeach; ?>
        </div>
    </div>
</section>

<!--<section id="explore">
    <div class="container">
        <div class="row">
            <div class="watch">
                <img class="img-responsive" src="images/watch.png" alt="">
            </div>
            <div class="col-md-4 col-md-offset-2 col-sm-5">
                <h2>our next event in</h2>
            </div>
            <div class="col-sm-7 col-md-6">
                <ul id="countdown">
                    <li>
                        <span class="days time-font">00</span>
                        <p>days </p>
                    </li>
                    <li>
                        <span class="hours time-font">00</span>
                        <p class="">hours </p>
                    </li>
                    <li>
                        <span class="minutes time-font">00</span>
                        <p class="">minutes</p>
                    </li>
                    <li>
                        <span class="seconds time-font">00</span>
                        <p class="">seconds</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>--><!--/#explore-->

<!-- facebook sidebar -->
<div class="cart hide">
    <i class="fa fa-facebook"></i>

    <div id="fbSidebar">
        <iframe
            src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FLibrary.Ruse%3Ffref%3Dts&amp;width=200&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true"
            scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:290px;"
            allowTransparency="true">
        </iframe>
    </div>
</div>

<section id="event">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div id="event-carousel" class="carousel slide" data-interval="false">
                    <h2 class="heading">THE ROCKING Performers</h2>
                    <a class="even-control-left" href="#event-carousel" data-slide="prev"><i
                            class="fa fa-angle-left"></i></a>
                    <a class="even-control-right" href="#event-carousel" data-slide="next"><i
                            class="fa fa-angle-right"></i></a>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="../../../public/images/event/event1.jpg"
                                             alt="event-image">
                                        <h4>Chester Bennington</h4>
                                        <h5>Vocal</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="../../../public/images/event/event2.jpg"
                                             alt="event-image">
                                        <h4>Mike Shinoda</h4>
                                        <h5>vocals, rhythm guitar</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="../../../public/images/event/event3.jpg"
                                             alt="event-image">
                                        <h4>Rob Bourdon</h4>
                                        <h5>drums</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="../../../public/images/event/event1.jpg"
                                             alt="event-image">
                                        <h4>Chester Bennington</h4>
                                        <h5>Vocal</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="../../../public/images/event/event2.jpg"
                                             alt="event-image">
                                        <h4>Mike Shinoda</h4>
                                        <h5>vocals, rhythm guitar</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="../../../public/images/event/event3.jpg"
                                             alt="event-image">
                                        <h4>Rob Bourdon</h4>
                                        <h5>drums</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="guitar">
                <img class="img-responsive" src="../../../public/images/guitar.png" alt="guitar">
            </div>
        </div>
    </div>
</section>
<!--/#event-->

<section id="about">
    <div class="guitar2">
        <img class="img-responsive" src="../../../public/images/guitar2.jpg" alt="guitar">
    </div>
    <div class="about-content">
        <h2>About Evento</h2>

        <p>We have created an extremely positive and relaxed environment all geared towards developing your skills
            whether you are an absolute beginner trying to get off the ground or an accomplished player looking to move
            to the next level. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
            has been the industry's standard dummy text ever since the 1500s</p>
        <a href="#" class="btn btn-primary">View Date & Place <i class="fa fa-angle-right"></i></a>

    </div>
</section>
<!--/#about-->

<section id="twitter">
    <div id="twitter-feed" class="carousel slide" data-interval="false">
        <div class="twit">
            <img class="img-responsive" src="../../../public/images/twit.png" alt="twit">
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="text-center carousel-inner center-block">
                    <div class="item active">
                        <img src="../../../public/images/twitter/twitter1.png" alt="">

                        <p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
                        <a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
                    </div>
                    <div class="item">
                        <img src="../../../public/images/twitter/twitter2.png" alt="">

                        <p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
                        <a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
                    </div>
                    <div class="item">
                        <img src="../../../public/images/twitter/twitter3.png" alt="">

                        <p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
                        <a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
                    </div>
                </div>
                <a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i
                        class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!--/#twitter-feed-->

<section id="sponsor">
    <div id="sponsor-carousel" class="carousel slide" data-interval="false">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h2>Sponsors</h2>
                    <a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i
                            class="fa fa-angle-left"></i></a>
                    <a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i
                            class="fa fa-angle-right"></i></a>

                    <div class="carousel-inner">
                        <div class="item active">
                            <ul>
                                <li><a href="#"><img class="img-responsive"
                                                     src="../../../public/images/sponsor/sponsor1.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive"
                                                     src="../../../public/images/sponsor/sponsor2.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive"
                                                     src="../../../public/images/sponsor/sponsor3.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive"
                                                     src="../../../public/images/sponsor/sponsor4.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive"
                                                     src="../../../public/images/sponsor/sponsor5.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive"
                                                     src="../../../public/images/sponsor/sponsor6.png"
                                                     alt=""></a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <li><a href="#"><img class="img-responsive"
                                                     src="../../../public/images/sponsor/sponsor6.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive"
                                                     src="../../../public/images/sponsor/sponsor5.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive"
                                                     src="../../../public/images/sponsor/sponsor4.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive"
                                                     src="../../../public/images/sponsor/sponsor3.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive"
                                                     src="../../../public/images/sponsor/sponsor2.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive"
                                                     src="../../../public/images/sponsor/sponsor1.png"
                                                     alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="light">
            <img class="img-responsive" src="../../../public/images/light.png" alt="">
        </div>
    </div>
</section>
<!--/#sponsor-->

<section id="contact">
    <div id="map">
        <div id="gmap-wrap">
            <div id="gmap">
            </div>
        </div>
    </div>
    <!--/#map-->
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-4">
                    <div class="contact-text">
                        <h3>Контакти</h3>
                        <address>
                            И-мейл: libruse@libruse.bg<br>
                            Телефон: (+ 359 82) 820 126<br>
                            Факс: (+ 359 82) 820 134
                        </address>
                    </div>
                    <div class="contact-address">
                        <h3>Адрес</h3>
                        <address>
                            гр. Русе 7000,<br>
                            ул. "Дондуков-Корсаков" 1,<br>
                            РБ "Любен Каравелов"<br>
                        </address>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div id="contact-section">
                        @yield('send_message')
                     </div>
                </div>
             </div>
    </div>
 </section>
 <!--/#contact-->

<footer id="footer">
    <div class="container">
        <div class="text-center">
            <p> Copyright &copy;2014<a target="_blank" href="http://shapebootstrap.net/"> Evento </a>Theme. All Rights
                Reserved. <br> Designed by <a target="_blank" href="http://shapebootstrap.net/">ShapeBootstrap</a></p>
        </div>
    </div>
</footer>
<!--/#footer-->

{{ HTML::script('js/jquery.js'); }}
{{ HTML::script('js/bootstrap.min.js'); }}
{{ HTML::script('http://maps.google.com/maps/api/js?sensor=true'); }}
{{ HTML::script('js/gmaps.js'); }}
{{ HTML::script('js/smoothscroll.js'); }}
{{ HTML::script('js/jquery.parallax.js'); }}
{{ HTML::script('js/coundown-timer.js'); }}
{{ HTML::script('js/jquery.scrollTo.js'); }}
{{ HTML::script('js/main.js'); }}
{{ HTML::script('js/jquery.nav.js'); }}
{{ HTML::script('js/jquery.hoverIntent.js'); }}

<script type="text/javascript">
    <?php
        echo 'var allPagesCount=' . ceil($atelieta->getTotal() / $atelieta->getPerPage()) . ';';
        echo 'var URLPath="' . URL::current() . '/atelieta";';
        echo 'var showErrorForm="';
        if (Session::has('showForm'))
            echo '.toggle-slide-' . Session::get('showForm');
        else
            echo '0';
        echo '";';
    ?>
</script>
{{ HTML::script('js/additional.js'); }}
</body>
</html>