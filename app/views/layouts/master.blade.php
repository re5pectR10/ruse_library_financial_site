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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('images/ico/apple-touch-icon-144-precomposed.png'); }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('images/ico/apple-touch-icon-114-precomposed.png'); }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('images/ico/apple-touch-icon-72-precomposed.png'); }}">
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
            <div class="toggle-slide toggle-slide-atelieta">
                <div class="col-md-3 col-md-offset-1 atelieta-info">
                    <h3>АТЕЛИЕ: „Парите на мама и тати“</h3>

                    <p>откъде идват парите, придобиване нанавици за отговорно отношение към парите и умения да се харчат
                        разумно.</p>

                    <div class="more-info-button atelie1">
                        <p>
                            Прочети повече...
                        </p>
                    </div>
                </div>
                <div class="col-md-3 atelieta-info">
                    <h3>АТЕЛИЕ: „Времето на парите“</h3>

                    <p>от натуралната размяна до БитКойн –поява, история и развитие на парите.</p>

                    <div class="more-info-button atelie2">
                        <p>
                            Прочети повече...
                        </p>
                    </div>
                </div>
                <div class="col-md-3 atelieta-info">
                    <h3>АТЕЛИЕ: „Парите – как да се използват“</h3>

                    <p>четирите основни стълба нафинансите – спестяване, харчене, даряване, инвестиране.</p>

                    <div class="more-info-button atelie3">
                        <p>
                            Прочети повече...
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row toggle-slide toggle-slide-atelieta">
            <div class="col-md-offset-2 col-md-10 atelie1-info toggle-slide">
                <div class="close-button">
                    <img  src="{{ URL::asset('images/close_button.png'); }}">
                </div>
                <h3 class="align-center">„Парите на мама и тати“</h3>

                <p>Децата научават, че парите се получават за положения от хората труд.Участниците се запознават с
                    професиите чрез игрите
                    „Кой знае повече професии” и„Познай какъв съм“. Правят разлика между различните професии,
                    споделятинформация за професиите
                    на родителите си и мечтите си за своите бъдещи професии.От презентацията „Откъде идват парите“
                    научават за някои от най-известните
                    и вечепознати професии, както и за най-интересните и тези на бъдещето.Децата придобиват знания за
                    същността, източниците и
                    формирането насемейния бюджет, разграничават понятията приходи и разходи в семейството.Запознават се
                    с източниците на приходите:
                    заплата, пенсия, стипендия, наем, награда,рента и др. и разходите: данъци, комунално-битови разходи,
                    кредити, застраховки,
                    разходи за образование и здравеопазване и др. След презентация „Нужди и желания“участниците
                    дискутират за разумното разпределение на
                    бюджета и разликата междунужда и желание. Наученото прилагат в ролевата игра „Моето семейство”.
                    Разделени насемейства, децата съставят
                    семеен бюджет, като описват внимателно своите приходи иразходи. Използвайки компютри и таблети се
                    запознават с игри и приложения в GooglePlay
                    за пари и семеен бюджет и игри за различни професии.
                </p>
            </div>
            <div class="col-md-offset-2 col-md-10 atelie2-info toggle-slide">
                <div class="close-button">
                    <img src="{{ URL::asset('images/close_button.png'); }}">
                </div>
                <h3 class="align-center"> „Времето на парите“</h3>

                <p>Децата се запознават с историята на парите чрез презентацията „Пари. Какво сапарите? За какво
                    служат?“. Разглеждат днешните български
                    банкноти и монети изащитните елементи на българския лев: холограмна лента, осигурителна нишка,
                    водензнак и др. и начините за
                    разпознаване на фалшиви банкноти. Запознават се с най-красивите и интересни пари по света.
                    Разглеждат каталози
                    „Световните пари“ сбанкноти и монети от цял свят. Посещават Регионален исторически музей,
                    залаАнтичност, където по-специално
                    внимание се обръща на античните монети, и офис наУниКредит Булбанк – Русе. Служители на банката им
                    показват интерактивната дъска,интернет
                    зоната, устройството за заявяване на пореден номер, демонстрират как сепроверяват и разпознават
                    фалшивите банкноти.Видяното и
                    чутото им помага да се справят с практическата задача, в коятоизработват свои банкноти и монети.С
                    компютри, таблети и интерактивна
                    дъска децата имат възможност да сглобятпъзели с евробанкноти; с различни викторини да проверят
                    познанията си за страните отЕвропейския съюз
                    и техните валути.
                </p>
            </div>
            <div class="col-md-offset-2 col-md-10 atelie3-info toggle-slide">
                <div class="close-button">
                    <img src="{{ URL::asset('images/close_button.png'); }}">
                </div>
                <h3 class="align-center">„Парите – как да се използват“</h3>

                <p>Чрез презентация участниците в групата се запознават с четирите основнистълба на финансите –
                    спестяване, харчене, даряване,
                    инвестиране. Децатазатвърждават познанията си за семеен бюджет, приход, разход, заплата, стипендия,
                    наеми др. Чрез играта „Искам – мога да
                    си позволя” сами определят своите нужди и своитежелания. Онагледяват ги чрез изобразяването им на
                    табло. В ролевата игра „Продавачии купувачи”
                    децата използват изработените от тях пари. Демонстрират разумноотношение към парите, като сравняват
                    различните цени, за да се вместят
                    в бюджета си.Чрез събеседване се разяснява понятието дарителство. Целта е изграждане наотношение към
                    даряването. Децата изработват предмети,
                    с които организиратдарителска кампания.Във финансовата образователна игра SmartMoney („Умни пари”)
                    участницитеимат възможност сами да
                    определят как да изхарчат своите заплати, учат се в игровасреда от своите погрешни решения, и
                    осъзнават, че ако пестят, ще могат да инвестират
                    вакции, недвижими имоти и бизнес! Попълват дневници за приходи и разходи. Товазатвърждава уменията
                    им за разумно харчене и инвестиране.
                    Целта на провежданите занимания е децата да придобият навици за отговорноотношение към парите и
                    умения да ги харчат разумно; умения да планират
                    и спестяватдоходите си; умения за правилен избор на подходящ продукт, отговарящ на личните имнужди;
                    навици и увереност при ползването на
                    съвременни технологии и услуги отфинансовия сектор.
                </p>
            </div>
        </div>
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
        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FLibrary.Ruse%3Ffref%3Dts&amp;width=200&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true"
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
                                        <img class="img-responsive" src="../../../public/images/event/event1.jpg" alt="event-image">
                                        <h4>Chester Bennington</h4>
                                        <h5>Vocal</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="../../../public/images/event/event2.jpg" alt="event-image">
                                        <h4>Mike Shinoda</h4>
                                        <h5>vocals, rhythm guitar</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="../../../public/images/event/event3.jpg" alt="event-image">
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
                                        <img class="img-responsive" src="../../../public/images/event/event1.jpg" alt="event-image">
                                        <h4>Chester Bennington</h4>
                                        <h5>Vocal</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="../../../public/images/event/event2.jpg" alt="event-image">
                                        <h4>Mike Shinoda</h4>
                                        <h5>vocals, rhythm guitar</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="../../../public/images/event/event3.jpg" alt="event-image">
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
                                <li><a href="#"><img class="img-responsive" src="../../../public/images/sponsor/sponsor1.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="../../../public/images/sponsor/sponsor2.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="../../../public/images/sponsor/sponsor3.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="../../../public/images/sponsor/sponsor4.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="../../../public/images/sponsor/sponsor5.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="../../../public/images/sponsor/sponsor6.png"
                                                     alt=""></a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <li><a href="#"><img class="img-responsive" src="../../../public/images/sponsor/sponsor6.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="../../../public/images/sponsor/sponsor5.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="../../../public/images/sponsor/sponsor4.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="../../../public/images/sponsor/sponsor3.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="../../../public/images/sponsor/sponsor2.png"
                                                     alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="../../../public/images/sponsor/sponsor1.png"
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
        <div class="ear-piece">
            <img class="img-responsive" src="../../../public/images/ear-piece.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-4">
                    <div class="contact-text">
                        <h3>Contact</h3>
                        <address>
                            E-mail: promo@party.com<br>
                            Phone: +1 (123) 456 7890<br>
                            Fax: +1 (123) 456 7891
                        </address>
                    </div>
                    <div class="contact-address">
                        <h3>Contact</h3>
                        <address>
                            Unit C2, St.Vincent's Trading Est.,<br>
                            Feeder Road,<br>
                            Bristol, BS2 0UY<br>
                            United Kingdom
                        </address>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div id="contact-section">
                        <h3>Send a message</h3>

                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post"
                              action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required"
                                       placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required"
                                       placeholder="Email ID">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="4"
                                          placeholder="Enter your message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right">Send</button>
                            </div>
                        </form>
                    </div>
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
{{ HTML::script('js/additional.js'); }}
</body>
</html>