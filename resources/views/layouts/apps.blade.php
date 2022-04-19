<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">

    <link href="{{ asset('css/styles-merged.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans') }}" rel="stylesheet">
    <title>uiCookies:YouNine</title>
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<style>
.afont:hover{
    color: #4AD292!important;
}

</style>
<body>

<div class="probootstrap-header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
                <span><i class="icon-location2"></i>Farg'ona viloyati, Tojimahal binosi qarshisida</span>
                <span><i class="icon-phone2"></i>+998 90 123 45 67</span>
                <span><i class="icon-mail"></i>younine@gmail.com</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
                <ul>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    {{--                            <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>--}}
                </ul>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-default probootstrap-navbar">
    <div class="container">
        <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
                <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#" >
                <img src="{{ asset('images/logo.png') }}" alt="image">
            </a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="afont" href="/">Asosiy</a></li>
                <li><a class="afont"  href="{{ route('index') }}" >Kurslar</a></li>
                <li><a class="afont" href="{{route('teach')}}">O'qituvchilar</a></li>
                <li><a class="afont" href="{{route('future-event')}}">Jarayonlar</a></li>
                <li><a class="afont" href="/contact">Aloqa</a></li>
                <li><a class="afont" href="/home">Admin</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="probootstrap-footer probootstrap-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <h3>O'quv markazimiz haqida</h3>
                    <p>YouNine O‘quv markazi - Eng zamonaviy ta'lim texnologiyalari bilan faoliyat olib boruvchi innovatsion o'quv markaz.</p>
                    <h3>Ijtimoiy tarmoqlar</h3>
                    <ul class="probootstrap-footer-social">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-md-push-1">
                <div class="probootstrap-footer-widget">
                    <h3>Havolalar</h3>
                    <ul>
                        <li class="active"><a href="/">Asosiy</a></li>
                        <li><a href="{{ route('index') }}">Kurslar</a></li>
                        <li><a  href="{{route('teach')}}">O'qituvchilar</a></li>
                        <li><a  href="{{route('future-event')}}">Jarayonlar</a></li>
                        <li><a href="/contact">Aloqa</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <h3>Malumot</h3>
                    <ul class="probootstrap-contact-info">
                        <li><i class="icon-location2"></i> <span>Farg'ona viloyati Tojimahal binosi qarshisida</span></li>
                        <li><i class="icon-mail"></i><span>younine2gmail.com</span></li>
                        <li><i class="icon-phone2"></i><span>+998 90 123 45 67</span></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- END row -->

    </div>

    <div class="probootstrap-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-left">
                    <p>&copy; 2022 <a href="#">YouNine</a>  Developed by Biloliddin <i class="icon icon-heart"></i> <a href="https://t.me/biloliddin_abduqahhorov">@biloliddin_abduqahhorov</a></p>
                </div>
                <div class="col-md-4 probootstrap-back-to-top">
                    <p><a href="#" class="js-backtotop">Yuqoriga <i class="icon-arrow-long-up"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/scripts.min.js') }}"></script>
<script src="{{ asset('js/main.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

@stack('scripts')

</body>
</html>
