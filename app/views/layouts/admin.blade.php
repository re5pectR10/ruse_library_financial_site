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
    {{ HTML::style('css/lightbox.css'); }}

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
                    <!--<ul class="nav navbar-nav navbar-right">-->
                    <button type="button" class="btn btn-default">
                        <a href=<?php echo URL::to('/'); ?>>Отиди в сайта</a>
                    </button>

                </div>
            </div>
            @yield('acc_options')
        </div>
    </div>
</header>

<section style="padding-top: 20%; background-color: #EBFFFF">
    @yield('content')
</section>

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
{{ HTML::script('js/lightbox.min.js'); }}
{{ HTML::script('js/additional.js'); }}
</body>
</html>