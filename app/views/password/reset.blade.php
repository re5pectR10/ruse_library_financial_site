<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Забавна финансова грамотност</title>

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
                    <a class="navbar-brand">
                        <img class="img-responsive" src="{{ URL::asset('images/logo.png'); }}" alt="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse" role="navigation">
                    <!--<ul class="nav navbar-nav navbar-right">-->

                    <a class="no-scroll btn btn-default" href=<?php echo URL::to('/'); ?>>Отиди в сайта</a>

                </div>
            </div>
        </div>
    </div>
</header>
<div style="padding-top: 20%; margin-left: 20%">
    <form action=<?php echo '"' . URL::to('/') . '/reset"' ?> method="POST">
        <input type="hidden" name="token" value=<?php echo '"' . $token . '"' ?>>
        <h2 class="panel-title" style="font-family: Arial">Напишете вашият e-mail:</h2>
        <input placeholder="email" type="email" name="email">
        <h2 class="panel-title" style="font-family: Arial">Напишете новата си парола:</h2>
        <input placeholder="new password" type="password" name="password">
        <h2 class="panel-title" style="font-family: Arial">Напишете новата си парола отново:</h2>
        <input placeholder="new password again" type="password" name="password_confirmation">
        <input type="submit" value="Reset Password">

        <p><?php
            if (Session::has('error'))
            {
                echo Session::get('error');
            }
            ?>
        </p>
    </form>
</div>
<footer id="footer">
    @include('footer')
</footer>
</body>
</html>