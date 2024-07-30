<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @if(Route::is('home'))
    <title>Netfix - Broadband & Internet Company in Khulna</title>
    @else
    <title>@yield('title') | Netfix - Broadband & Internet Company in Khulna</title>
    @endif

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/imgs/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.flipster.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    @livewireStyles
</head>

<body>


    <!-- Preloader -->
    <div id="preloader">
        <img src="{{ url('assets/frontend/imgs/preloader.gif') }}" alt="">
    </div>
    <!-- Preloader-end -->


    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <livewire:frontend.theme.header />
    <!-- header-area-end -->


    <!-- main-area -->
    <main>
        @yield('content')

    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    <livewire:frontend.theme.footer />
    <!-- footer-area-end -->



    <!-- JS here -->
    <script data-navigate-once="true" src="{{ asset('assets/frontend/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/frontend/js/jquery.odometer.min.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/frontend/js/jquery.appear.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/frontend/js/jquery.flipster.min.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/frontend/js/jquery-ui.min.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/frontend/js/jquery.nice-select.min.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/frontend/js/jarallax.min.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/frontend/js/main.js') }}"></script>

    @yield('scripts')
    @livewireScripts
</body>


</html>