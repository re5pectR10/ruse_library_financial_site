<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Регионална библиотека "Любен Каравелов" - Русе - Проект</title>

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
                 @yield('user_auth')
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
                    <ul class="nav navbar-nav navbar-right">
                        <li class="scroll active"><a href="#home">Начало</a></li>
                        <li class="scroll"><a href="#explore">Ателиета</a></li>
                        <li class="scroll"><a href="#event">Видео</a></li>
                        <li class="scroll"><a href="#about">Галерия</a></li>
                        <li class="no-scroll"><a href="#twitter">Новини</a></li>
                        <li class="no-scroll"><a  href="#sponsor">Спонсори</a></li>
                        <li class="scroll"><a href="#contact">Контакти</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @yield('acc_options')
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
                    <h3>{{ isset($slides[0]->title) ? $slides[0]->title : '' }}</h3>
                    <h5>{{ isset($slides[0]->content) ? $slides[0]->content : '' }}</h5>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ URL::asset('images/slider/bg2.jpg'); }}" alt="slider">

                <div class="carousel-caption">
                    <h3>{{ isset($slides[1]->title) ? $slides[1]->title : '' }}</h3>
                    <h5>{{ isset($slides[1]->content) ? $slides[1]->content : '' }}</h5>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ URL::asset('images/slider/bg3.jpg'); }}" alt="slider">

                <div class="carousel-caption">
                    <h3>{{ isset($slides[2]->title) ? $slides[2]->title : '' }}</h3>
                    <h5>{{ isset($slides[2]->content) ? $slides[2]->content : '' }}</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#home-->

<section id="explore">
    <div class="container">
        <div class="row ">
            <div class="col-xs-1 atelieta">
                <p>Ателиета</p>
            </div>
            <div class="toggle-slide toggle-slide-atelieta" id="atelietaDescription">
                <div class="col-xs-1">
                    <div id="atelieta_left_page"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-chevron-left"></span>Наляво</button></div>
                    <div id="atelieta_right_page"><button type="button" class="btn btn-warning">Надясно<span class="glyphicon glyphicon-chevron-right"></span></button></div>
                </div>
                <?php
                $counter = 1;
                foreach ($atelieta as $atelie): ?>
                    <div class="col-xs-3 <?php if ($counter == 1) echo 'col-md-offset-1'; ?> atelieta-info">
                        <div class="panel panel-default">
                            <div class="panel-body" style="background-color: #FFC266">
                                <h3><?php echo $atelie->title; ?></h3>
                                <p><?php echo $atelie->description; ?></p>
                            </div>
                        </div>
                        <div class="more-info-button atelie<?php echo $counter ?>">
                            <p>Прочети повече...</p>
                        </div>
                    </div>
                    <?php
                    $counter++;
                endforeach; ?>
            </div>
        </div>

        <div class="row toggle-slide toggle-slide-atelieta">
            <?php
            $counter = 1;
            foreach ($atelieta as $atelie): ?>
                <div class="col-md-offset-2 col-md-10 atelie<?php echo $counter ?>-info toggle-slide atelieta-content">
                    <div class="close-button" style="margin-right:15px; margin-top: 10px;">
                        <img src="{{ URL::asset('images/close_button.png'); }}">
                    </div>
                    <div class="panel panel-default" style="margin-top:10px">
                        <div class="panel-body" style="background-color: #FFC266">
                            <h3 class="align-center"><?php echo $atelie->title; ?></h3>
                            <p><?php echo $atelie->content; ?></p>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body" style="background-color: #FFC266">
                            <?php foreach($atelie->doc as $d)
                            {
                                echo '<a href="'.URL::to('/').'/file?name='.$d->name.'&article_id='.$atelie->id.'">'.$d->name.'</a>';
                            } ?>
                        </div>
                    </div>
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
                    <h2 class="heading">ВИДЕО</h2>
                    <a class="even-control-left" href="#event-carousel" data-slide="prev"><i
                            class="fa fa-angle-left"></i></a>
                    <a class="even-control-right" href="#event-carousel" data-slide="next"><i
                            class="fa fa-angle-right"></i></a>
                    <div class="carousel-inner">
                    <?php
                    $i = 0;
                    foreach ($videos as $v)
                    {
                        if ($i%3==0)
                        {
                            if ($i==0)
                            {
                                echo '<div class="item active">';
                            } else
                            {
                                echo '<div class="item">';
                            }

                            echo '<div class="row">';
                        }

                        echo '<div class="col-xs-4"><div class="single-event">';
                        echo '<iframe width="100%" height="100%" src="' . $v->path . '" frameborder="0" allowfullscreen></iframe>';
                        echo '<h4 style="word-wrap: break-word"><mark>' . $v->name . '</mark></h4>';
                        echo '</div></div>';

                        if ($i%3==2)
                        {
                            echo '</div></div>';
                        }

                        $i++;
                    }
                    ?>
                    </div><h4></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#event-->

<section id="about"><!-- class="img-responsive" -->
    <div class="container">
      <div class="row" style="padding-top:30px; padding-bottom: 10px;">
          <div class="row">
              <div>
                    <div class="col-md-3">
                        <div id="albums_left_page"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-chevron-left"></span>Наляво</button></div>
                        <div id="albums_right_page"><button type="button" class="btn btn-warning">Надясно<span class="glyphicon glyphicon-chevron-right"></span></button></div>
                    </div>
                  <?php
                  $counter = 1;
                  foreach ($albums as $a): ?>
                      <div class="col-md-3 albums-info text-center">
                          @if (isset($a->images[0]->id))
                          <div class="row thumbnail">
                            <img style="max-width: 100%; height: 192px;" src=<?php echo '"' . URL::to('/') . '/pictures/' . $a->id . '/' . $a->images[0]->id . '.' . $a->images[0]->extension . '"'; ?>/>
                          </div>
                          @endif
                          <h3><p class="bg-primary text-center"><?php echo $a->name; ?></p></h3>
                          <div class="more-info-button album<?php echo $counter ?>">
                              <button type="button" class="btn btn-default">Покажи албума</button>
                          </div>
                      </div>
                      <?php
                      $counter++;
                  endforeach; ?>
              </div>
          </div>
          <div class="row toggle-slide-albums">
              <?php
              $counter = 1;
              foreach ($albums as $a): ?>
                  <div class="col-md-12 album<?php echo $counter ?>-info toggle-slide albums-content">
                      <div class="close-button-album" style="margin-top: 15px; margin-right: 12px;">
                          <img src="{{ URL::asset('images/close_button.png'); }}">
                      </div>
                      <h3><p class="bg-warning align-center"><?php echo $a->name; ?></p></h3>
                      <?php
                      foreach($a->images as $img){
                          echo '<div class="col-md-3 album-images" style="width:10%"><a href="'.URL::to('/').'/pictures/'.$a->id . '/'. $img->id .'.'.$img->extension.'" data-lightbox="album'.$a->id.'"><img style="border-radius: 3px; max-width: 100%" src="'.
                              URL::to('/').'/pictures/'.$a->id . '/'. $img->id .'.'.$img->extension .'"></a></div>';
                      }
                      ?>
                      <!--<p><?php// echo '"' . URL::to('/') . '/pictures/' . $a->id . '/' . $a->images[0]->id . '.' . $a->images[0]->extension . '"'; ?></p>-->
                  </div>
                  <?php
                  $counter++;
              endforeach; ?>
          </div>
      </div>
    </div>
</section>
<!--/#about-->

<section id="twitter">
    <div id="twitter-feed" class="carousel slide" data-interval="false">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="text-center carousel-inner center-block">
                    <div class="item active">
                        <img src="../../../public/images/twitter/twitter1.png" alt="">

                        <p>Скоро</p>
                        <a href="#">http://</a>
                    </div>
                    <div class="item">
                        <img src="../../../public/images/twitter/twitter2.png" alt="">

                        <p>Скоро</p>
                        <a href="#">http://</a>
                    </div>
                    <div class="item">
                        <img src="../../../public/images/twitter/twitter3.png" alt="">

                        <p>Скоро</p>
                        <a href="#">http://</a>
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
                    <h2>Спонсори</h2>
                    <a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i
                            class="fa fa-angle-left"></i></a>
                    <a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i
                            class="fa fa-angle-right"></i></a>

                    <div class="carousel-inner">
                        <div class="item active">
                            <ul>
                                <li><a href="#"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor1.jpg'); }}" alt="sponsor1"></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor2.jpg'); }}" alt="sponsor2"></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor3.jpg'); }}" alt="sponsor3"></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor4.png'); }}" alt="sponsor4"></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor5.jpg'); }}" alt="sponsor5"></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor6.jpg'); }}" alt="sponsor6"></a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <li><a href="#"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor7.jpg'); }}" alt="sponsor7"></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor8.jpg'); }}" alt="sponsor8"></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor9.jpg'); }}" alt="sponsor9"></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor10.jpg'); }}" alt="sponsor10"></a></li>
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
    @include('footer')
</footer>
<!--/#footer-->

{{ HTML::script('js/jquery.js'); }}
{{ HTML::script('js/lightbox.min.js'); }}
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
        echo 'var allPagesImagesCount=' . ceil($albums->getTotal() / $albums->getPerPage()) . ';';
        echo 'var URLPath="' . URL::current() . '";';
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