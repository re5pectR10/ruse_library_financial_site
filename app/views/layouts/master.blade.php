<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Сайт на русенската библиотека Л.Каравелов по проект Забавна финансова грамотност за деца и младежи от EIFL по програма PLIP(Програма за иновации в библиотеките)">
    <meta name="author" content="">
    <title>Забавна финансова грамотност</title>

    {{ HTML::style('css/bootstrap.min.css'); }}
    {{ HTML::style('css/font-awesome.min.css'); }}
    {{ HTML::style('css/main.css'); }}
    {{ HTML::style('css/animate.css'); }}
    {{ HTML::style('css/responsive.css'); }}
    {{ HTML::style('css/lightbox.css'); }}
    {{ HTML::style('css/FeedEk.css'); }}

    <!--[if lt IE 9]>
    {{ HTML::script('js/html5shiv.js'); }}
    {{ HTML::script('js/respond.min.js'); }}
    <![endif]-->
</head>

<body>

<!--#header-->
<header id="header" role="banner">
    <div class="main-nav">
        <div class="container">
            <div class="header-top">
                <div class="pull-right social-icons">
                    <!-- Microsoft Translator -->
                    <div id='MicrosoftTranslatorWidget' class='Light' style='margin-top: -25px;color:white;background-color:#555555'></div>
                    <script type='text/javascript'>
                        setTimeout(function(){
                            {
                                var s=document.createElement('script');
                                s.type='text/javascript';s.charset='UTF-8';
                                s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=bg';
                                var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild);
                            }
                        },0);
                    </script>
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
                        <img id="" class="img-responsive" src="{{ URL::asset('images/logo.png'); }}" usemap="#logos" alt="logo">
                        <map name="logos">
                        <area shape="circle" coords="48,45,49" href="http://www.libruse.bg/" title="Регионална библиотека Любен Каравелов - Русе" alt="libruse">
                        <area shape="rect" coords="100,20,195,80" href="http://www.eifl.net/" title="EIFL" alt="eifl">
                        </map>
                    </a>
                </div>
                <div class="collapse navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="scroll active"><a href="#home" data-toggle="collapse" data-target=".navbar-collapse">Начало</a></li>
                        <li class="scroll"><a href="#explore" data-toggle="collapse" data-target=".navbar-collapse">Ателиета</a></li>
                        <li class="scroll"><a href="#event" data-toggle="collapse" data-target=".navbar-collapse">Видео</a></li>
                        <li class="scroll"><a href="#about" data-toggle="collapse" data-target=".navbar-collapse">Галерия</a></li>
                        <li class="scroll"><a href="#twitter" data-toggle="collapse" data-target=".navbar-collapse">Новини</a></li>
                        <li class="scroll"><a  href="#sponsor" data-toggle="collapse" data-target=".navbar-collapse">Спонсори</a></li>
                        <li class="scroll"><a href="#contact" data-toggle="collapse" data-target=".navbar-collapse">Контакти</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="auth-forms">
        @yield('user_auth')
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
                    <h2>{{ isset($slides[0]->title) ? $slides[0]->title : '' }}</h2>
                    <h4>{{ isset($slides[0]->content) ? $slides[0]->content : '' }}</h4>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ URL::asset('images/slider/bg2.jpg'); }}" alt="slider">

                <div class="carousel-caption">
                    <h2>{{ isset($slides[1]->title) ? $slides[1]->title : '' }}</h2>
                    <h4>{{ isset($slides[1]->content) ? $slides[1]->content : '' }}</h4>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ URL::asset('images/slider/bg3.jpg'); }}" alt="slider">

                <div class="carousel-caption">
                    <h2>{{ isset($slides[2]->title) ? $slides[2]->title : '' }}</h2>
                    <h4>{{ isset($slides[2]->content) ? $slides[2]->content : '' }}</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#home-->

<section id="explore">
    <div class="container">
        <div class="row ">
            <div class="col-xs-12">
                <h2 class="title title-box">Ателиета</h2>
                <div id="atelieta_left_page"><div class="btn btn-warning"><span class="glyphicon glyphicon-chevron-left"></span></div></div>
                <div id="atelieta_right_page"><div class="btn btn-warning"><span class="glyphicon glyphicon-chevron-right"></span></div></div>
            </div>
        </div>
            <div class="row ">
                <?php
                $counter = 1;
                foreach ($atelieta as $atelie): ?>
                    <div class="col-sm-4 atelieta-info">
                        <div class="panel panel-default">
                            <div class="panel-body">
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

        <div class="row toggle-slide-atelieta">
            <?php
            $counter = 1;
            unset($atelie);
            foreach ($atelieta as $atelie): ?>
                <div class="col-sm-12 atelie<?php echo $counter ?>-info toggle-slide atelieta-content">
                    <div class="close-button">
                        <button class="close">Close</button>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body" style="background-color: #FFC266">
                            <h3 class="align-center"><?php echo $atelie->title; ?></h3>
                        <div class="atelie-content">
                          <?php echo $atelie->content; ?>
                        </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="files panel-body" style="background-color: #FFC266">
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
</section>

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
            <div class="col-sm-12 col-md-10">
                <div id="event-carousel" class="carousel slide" data-interval="false">
                    <h2 class="heading video-box">ВИДЕО</h2>
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

                        echo '<div class="col-sm-4"><div class="single-event">';
                        echo '<iframe width="100%" height="100%" src="' . $v->path . '" frameborder="0" allowfullscreen></iframe>';
                        echo '<h4 class="videos-title">' . $v->name . '</h4>';
                        echo '</div></div>';

                        if ($i%3==2)
                        {
                            echo '</div></div>';
                        }

                        $i++;
                    }

                    if ($i%3!=0)
                    {
                        echo '</div></div>';
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#event-->

<section id="about"><!-- class="img-responsive" -->
    <div class="container">
<div class="row">
    <div class="col-xs-12">
        <h2 class="galery-title-box">ГАЛЕРИЯ</h2>
        <div id="albums_left_page"><div class="btn btn-warning"><span class="glyphicon glyphicon-chevron-left"></span></div></div>
        <div id="albums_right_page"><div class="btn btn-warning"><span class="glyphicon glyphicon-chevron-right"></span></div></div>
    </div>
</div>
          <div class="row">
                  <?php
                  $counter = 1;
                  foreach ($albums as $a): ?>
                      <div class="col-sm-4 albums-info text-center">
                          @if (isset($a->images[0]))
                          <div class="thumbnail"><div>
                              {{ HTML::image('pictures/' . $a->id . '/' . $a->images[0]->id . '.' . $a->images[0]->extension, $alt="image", $attributes = array('max-width' => '100%')) }}
                          </div></div>
                          @else
                          <div class="thumbnail">
                              <div>
                              {{ HTML::image('images/does_not_exist.png', $alt="image", $attributes = array('max-width' => '100%')) }}
                          </div> </div>
                          @endif
                          <h3  class="videos-title"><p><?php echo $a->name; ?></p></h3>

                          <p class="album-id" style="display: none"><?php echo $a->id; ?></p><!-- ajax -->

                          <div class="more-info-button album<?php echo $counter ?>">
                              <p>Покажи албума</p>
                          </div>
                      </div>
                      <?php
                      $counter++;
                  endforeach; ?>
          </div>

          <div class="row toggle-slide-albums selected-album">
              <?php
              $counter = 1;
              unset($a);
              foreach ($albums as $a): ?>
                  <div style="padding: 20px" class="col-sm-12 album<?php echo $counter ?>-info toggle-slide albums-content">
                      <div class="close-button-album">
                          <button class="close">Close</button>
                      </div>
                  </div>
                  <?php
                  $counter++;
              endforeach; ?>
          </div>
      </div>

</section>
<!--/#about-->

<section id="twitter">
    <div class="container">
        <div id="twitter-feed" class="carousel slide" data-interval="false">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="heading">За проекта</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 media-hover">
                    <h4>Забавна финансова грамотност за деца и младежи</h4>
                    <p>Сайтът е създаден по проект “Забавна финансова грамотност”, финансиранот международната нестопанска организация  EIFL – Electronic information for libraries (Електронна информация за библиотеки) по програма PLIP – Public Library Innovation Programme (Програма за иновации в библиотеките).</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 media-hover">
                    <h4>Идеята на проект</h4>
                    <p>„Забавна финансова грамотност“ е да създаде модерна, достъпна и иновативна среда за деца и младежи за придобиване на основна финансова грамотност и формиране на осъзнати бъдещи потребители. Да бъде изградена среда, която да отговаря на техните нужди и очаквания, среда, която е близка до тяхното разбиране за света.</p>
                </div>
                <div class="col-sm-4 media-hover">
                    <h4>За Библиотеката</h4>
                    <p>- Библиотеката се утвърди като мощен фактор за насърчаването на информационната грамотност и укрепна нейната  значимост в обществото.
                        - изгради  достъпна иновативна среда, която насърчава, поощрява и  осигурява познания, умения за изследвания и открития в областта на технологиите.</p>
                </div>
                <div class="col-sm-4 media-hover">
                    <h4>За обществото</h4>
                    <p>Ефектът от проекта ще се разпростре вълнообразно и ще надхвърли конкретните бенефициенти, носейки полза за цялото общество.Ще се повиши нивото на признаване и одобрение на неформални и неофициални процеси на знание и четене.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 media-hover">
                    <h4>Юношите и младежите на възраст до 24 г. </h4>
                    <p>Юношите и младежите на възраст до 24 г. се запознават с финансови продукти и услуги, включително спестявания и депозитни сметки, дебитни и кредитни карти, кредити и лихви. Те също така научат повече за финансовото планиране, за защитата на потребителите, както и услуги и операции, извършвани през банкомат  (ATM). Усвоените в хода на проекта познания са насочени към развиване на умения за планиране и спестяване, за правилен избор на подходящ продукт, отговарящ на личните им нужди. Обученията включват използване на софтуер за водене на семейния  бюджет, онлайн банкиране, безопасно използване на мобилни устройства за извършване на преводи и плащания. Това изграджа в младежите навиции увереност при ползването на съвременни технологии и услуги от финансовия сектор. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 media-hover">
                    <h4> резултат на проекта</h4>
                    <p>В резултат на проекта 150 деца и младежи са:- обучени да използват иновативни образователни технологии и онлайн платформи, осъзнават и разбират информационните си потребности.- вземат информирани решения, като ползватели на информационните ресурси. - повишават интереса си към знание и четене, чрез включване в забавни и иновативни практически полезни занимания, които удовлетворяват  техните интереси и предпочитани.</p>
                </div>
                <div class="col-sm-3 media-hover">
                    <h4>Целта на проекта </h4>
                    <p>Целта на проекта  е деца и младежи до 24 годишна възраст за придобият основни финансови знания и изградят практически умения за използване на мобилни приложения чрез забавни и атрактивни обучение и посредством съвременните информационни и комуникационни технологии.</p>
                </div>
                <div class="col-sm-3 media-hover">
                    <h4>Устойчивост</h4>
                    <p>Сформираната публично-частна партньорска мрежа между представители на обществени институции, частния и финансов сектори и неправителствена организация изгражда капацитет за включване в други програми, насочени към преодоляване на специфични проблеми на общността и създава предпоставка за устойчивост на проектните дейности</p>
                </div>
                <div class="col-sm-3 media-hover">
                    <h4>Дейностите по проекта </h4>
                    <p>Дейностите по проектта са свързани с участието на деца и младежи  в работни ателиета. За децата на възраст до 14 години са разработени забавни и атрактивни занимания в неформална среда, сред които „Времето на парите - от натурална размяна до БитКойн”, което запознава участниците с появата, историята и развитието на парите. Друго интереснои изключително полезно ателие е &quot;Парите на мама и татко”, насочено към повишаване на информираността за формирането на семейния бюджет, към придобиване на навици за отговорно отношение към парите и умения да се харчат разумно.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-9">
                    <h2 class="heading news-box">Медии</h2>
                    <a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="text-center carousel-inner center-block">
                        <?php
                        $i = 0;
                        foreach ($media as $m)
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

                            echo '<div class="col-sm-4 media-hover">';
                            if ($m->extension != '0')
                            {
                                $path = 'media/' . $m->id . '/media.' . $m->extension;
                                echo '<a href="' . $path . '" data-lightbox="'.$m->id.'">';
                                echo HTML::image($path, $alt="image");
                                echo '</a>';
                            }

                            echo '<h3>' . $m->title . '</h3>';
                            echo '<p>' . $m->description . '</p>';
                            echo '<p>' . $m->date . '</p>';
                            if ($m->link != '')
                            {
                                echo '<a href="' . $m->link . '" target="_blank">Прочети повече</a>';
                            }

                            echo '</div>';

                            if ($i%3==2)
                            {
                                echo '</div></div>';
                            }

                            $i++;
                        }

                        if ($i%3!=0)
                        {
                            echo '</div></div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xs-3" id="divRss"></div>
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
                    <h2>Партньори</h2>
                    <a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i
                            class="fa fa-angle-left"></i></a>
                    <a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i
                            class="fa fa-angle-right"></i></a>

                    <div class="carousel-inner">
                        <div class="item active">
                            <ul>
                                <li><a href="http://www.unicreditbulbank.bg/bg/index.htm" target="_blank"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor1.jpg'); }}" height="200" width="200" alt="sponsor1"></a></li>
                                <li><a href="http://www.ruse-bg.eu/index.php" target="_blank"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor2.jpg'); }}" height="200" width="200" alt="sponsor2"></a></li>
                                <li><a href="http://obs.ruse-bg.eu/" target="_blank"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor3.jpg'); }}" height="200" width="200" alt="sponsor3"></a></li>
                                <li><a href="http://networx.bg/" target="_blank"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor4.png'); }}" height="200" width="200" alt="sponsor4"></a></li>
                                <li><a href="http://www.bgfound.org/bg/" target="_blank"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor5.jpg'); }}" height="200" width="200" alt="sponsor5"></a></li>
                                <li><a href="http://www.eifl.net/" target="_blank"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor6.png'); }}" height="200" width="200" alt="sponsor6"></a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <li><a href="http://sever.bg/" target="_blank"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor7.jpg'); }}" height="200" width="200" alt="sponsor7"></a></li>
                                <li><a href="http://ruseplus.com/" target="_blank"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor8.jpg'); }}" height="200" width="200" alt="sponsor8"></a></li>
                                <li><a href="http://jooble.org/" target="_blank"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor9.jpg'); }}" height="200" width="200" alt="sponsor9"></a></li>
                                <li><a href="http://www.nalis.bg/" target="_blank"><img class="img-responsive" src="{{ URL::asset('images/sponsor/sponsor10.jpg'); }}" height="250" width="300" alt="sponsor10"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="col-sm-3 col-sm-offset-3 elegant-aero">
                    <div class="contact-text">
                        <h3>Контакти</h3>
                        <address class="letterpress">
                            И-мейл: libruse@libruse.bg<br>
                            Телефон: (+ 359 82) 820 126<br>
                            Факс: (+ 359 82) 820 134
                        </address>
                    </div>
                    <div class="contact-address">
                        <h3>Адрес</h3>
                        <address class="letterpress">
                            гр. Русе 7000,<br>
                            ул. "Дондуков-Корсаков" 1,<br>
                            РБ "Любен Каравелов"<br>
                        </address>
                    </div>
                </div>
                <div class="col-sm-5 col-sm-offset-1">
                    <div id="contact-section">
                        @yield('send_message')
                     </div>
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
{{ HTML::script('js/jquery.imagemapster.js'); }}
{{ HTML::script('js/lightbox.min.js'); }}
{{ HTML::script('js/FeedEk.js'); }}
{{ HTML::script('js/jQuery-rwdImageMaps/jquery.rwdImageMaps.min.js'); }}
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
{{ HTML::script('js/imagesloaded.pkgd.min.js'); }}

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
        echo 'var load="' . asset('images/loader.gif') . '";';
        if (Session::has('msg'))
            echo 'window.scrollTo(0,document.body.scrollHeight);';
    ?>
</script>
{{ HTML::script('js/additional.js'); }}
</body>
</html>