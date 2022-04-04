<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    Document Title
    =============================================
    -->
    <title>Service Box</title>
    <!--
    Favicons
    =============================================
    -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="icon" type="image/png" sizes="16x16" href={{asset("assets/images/favicons/favicon-16x16.png")}}>

    <meta name="theme-color" content="#ffffff">
    <!--
    Stylesheets

    =============================================

    -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Default stylesheets //   -->
    <link href="{{ asset('assets/lib/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate.css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets//lib/et-line-font/et-line-font.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/flexslider/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/simple-text-rotator/simpletextrotator.css') }}" rel="stylesheet">

    <!-- Main stylesheet and color file-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link id="color-scheme" href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
<main>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <img src= {{asset("assets/images/favicons/logo.png" )}} width="50" height="50">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="/">service box</a>
            </div>
            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown"><a class="dropdown-toggle" href="/notes/05_10" data-toggle="dropdown">Обьявления</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('advt/create ') }}" >создать обьявление</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" href="05" data-toggle="dropdown">Авто</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/notes/05_10">Продам авто </a></li>
                                    <li><a href="/notes/05_11">Запчасти</a></li>
                                    <li><a href="/notes/05_12">Шины диски</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Отдам бесплатно</a>

                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Бытовая техника</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_full_width_col_2.html">электроника</a></li>
                                    <li><a href="portfolio_full_width_col_3.html">смартфоны</a></li>
                                    <li><a href="portfolio_full_width_col_4.html">компьютеры</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">техника и железо</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_full_width_gutter_col_2.html">2 Columns</a></li>
                                    <li><a href="portfolio_full_width_gutter_col_3.html">3 Columns</a></li>
                                    <li><a href="portfolio_full_width_gutter_col_4.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">недвижимость</a>
                                <ul class="dropdown-menu">
                                    <li><a href="contact1.html">продажа </a></li>
                                    <li><a href="contact2.html">покупка</a></li>
                                    <li><a href="contact3.html">аренда</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">животные</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_masonry_boxed_col_2.html">2 Columns</a></li>
                                            <li><a href="portfolio_masonry_boxed_col_3.html">3 Columns</a></li>
                                            <li><a href="portfolio_masonry_boxed_col_4.html">4 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_masonry_full_width_col_2.html">2 Columns</a></li>
                                            <li><a href="portfolio_masonry_full_width_col_3.html">3 Columns</a></li>
                                            <li><a href="portfolio_masonry_full_width_col_4.html">4 Columns</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Hover Style</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_hover_black.html">Black</a></li>
                                    <li><a href="portfolio_hover_gradient.html">Gradient</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Single</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Image</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_single_featured_image1.html">Style 1</a></li>
                                            <li><a href="portfolio_single_featured_image2.html">Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Slider</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_single_featured_slider1.html">Style 1</a></li>
                                            <li><a href="portfolio_single_featured_slider2.html">Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Video</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_single_featured_video1.html">Style 1</a></li>
                                            <li><a href="portfolio_single_featured_video2.html">Style 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Услуги</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">такси</a>
                             <!--   <ul class="dropdown-menu">
                                    <li><a href="">Такси  Рощино</a></li>
                                    <li><a href="">Такси Новопокровка</a></li>
                                    <li><a href="">Такси Дальнереченск</a></li>
                                </ul> -->
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">ногти</a>
                                <ul class="dropdown-menu">
                                    <li><a href="">ногти раз</a></li>
                                    <li><a href=""> ногти два </a></li>
                                    <li><a href="">ногти три</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">суши роллы</a>
                                <ul class="dropdown-menu">
                                    <li><a href="pricing1.html">Рощино</a></li>
                                    <li><a href="pricing2.html">Новопокровка</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">стрижка укладка</a>
                                <ul class="dropdown-menu">
                                    <li><a href="gallery_col_2.html">2 Columns</a></li>
                                    <li><a href="gallery_col_3.html">3 Columns</a></li>
                                    <li><a href="gallery_col_4.html">4 Columns</a></li>
                                    <li><a href="gallery_col_6.html">6 Columns</a></li>
                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" href="documentation.html" data-toggle="dropdown">контакты</a>

                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" style="color:red ">экстра инфо</a>
                                <ul class="dropdown-menu">
                                    <li><a href="tel: +79020648016">скорая</a></li>
                                    <li><a href="tel: +79020648016">полиция </a></li>
                                    <li><a href="tel: +79020648016">мчс</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" >вы вошли как: {{ Auth::user() ? Auth::user()->name : 'guest' }}</a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('выйти') }}
                                        </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>

                        <!--    <li><a href="">Восстановить пароль</a></li> -->
                            <li><a href="{{'/about'}}">О сервисе</a></li>
                            <li><a href="{{'/send_message'}}">напишите нам</a></li>


                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
@yield('content')
<!--
    JavaScripts
    =============================================
    -->
    <script src="{{ asset('assets/lib/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/lib/wow/dist/wow.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('assets/lib/isotope/dist/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('assets/lib/imagesloaded/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('assets/lib/flexslider/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('assets/lib/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/smoothscroll.js') }}"></script>
    <script src="{{ asset('assets/lib/magnific-popup/dist/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/myscript.js') }}"></script>
</body>
</html>
