<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')
    {{-- FAVICON --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}">
    {{-- FOUNT --}}
    <link
        href="https://fonts.googleapis.com/css?family=Barlow+Condensed:200,300,400,400i,500,600,700,800,900%7CSatisfy&display=swap"
        rel="stylesheet">
    {{-- FONT AWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tripo-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.pips.css') }}">
    {{-- STYLE OWNER --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @yield('css')
</head>

<body>
    {{-- PRELOADER --}}
    <div class="preloader">
        <img src="{{ asset('assets/images/logos/QuimeraCreativa-Blanco.webp') }}" class="preloader__image"
            alt="Preloader Quimera">
    </div>

    {{-- MAIN --}}
    <div class="page-wrapper">
        {{-- HEADER --}}
        <div class="site-header__header-one site-header__home-two-wrap">
            <header class="main-nav__header-three">
                <nav class="header-navigation stricky">
                    <div class="row">
                        {{-- LOGO --}}
                        <div class="main-nav__logo-box col-lg-6 col-md-12">
                            <a aria-label="Go to the home page" href="/" class="main-nav__logo">
                                <img src="{{ asset('assets/images/logos/QuimeraCreativa-Blanco.webp') }}"
                                    class="main-logo" width="123" alt="Logotipo Quimera Creativa" />
                            </a>
                            <a aria-label="Open menu" href="#" class="side-menu__toggler"><i
                                    class="fa fa-bars"></i></a>
                        </div>
                        {{-- MENU --}}
                        <div class="main-nav__main-navigation col-lg-6 col-md-12">
                            <ul class="main-nav__navigation-box">
                                <li>
                                    <a aria-label="Go gallery" href="/gallery">Gallery</a>
                                </li>
                                <li>
                                    <a aria-label="Go Videos" href="/videos">Videos</a>
                                </li>
                                <li>
                                    <a aria-label="Go about us" href="/about">About us</a>
                                </li>
                                <li>
                                    <a aria-label="Go contact us" href="/contact">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        {{-- BODY --}}
        @yield('main-body')
        {{-- COPYRIGHT & SOCIAL MEDIA --}}
        <div class="site-footer__bottom site-footer__bottom-home-3">
            <div class="container">
                <p>@ All copyright 2024, Quimera</p>
                <div class="site-footer__social">
                    <a aria-label="Whatsapp" target="_blank"
                        href="https://api.whatsapp.com/send?phone=+9982350990&text=Hola,%20Deseo%20hacer%20una%20cotización.">
                        <i aria-hidden="true" class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a aria-label="Instagram" href="https://www.instagram.com/quimeracreativamx" target="_blank">
                        <i aria-hidden="true" class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- BTN UP --}}
        <a aria-label="Go to top" href="#" data-target="html" class="scroll-to-target scroll-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>

        {{-- SECTION MOBILE --}}
        <div class="side-menu__block">
            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
            <div class="side-menu__block-inner ">
                <div class="side-menu__top justify-content-end">
                    <a aria-label="Close menu" href="#" class="side-menu__toggler side-menu__close-btn">
                        <i aria-hidden="true" class="fa-solid fa-xmark"></i>
                    </a>
                </div>
                {{-- MENU MOBILE --}}
                <div class="side-menu__logo">
                    <a aria-label="Go to the home page" href="/">
                        <img src="{{ asset('assets/images/logos/QuimeraCreativa-Blanco.webp') }}"
                            alt="Image logotipo quimera creativa">
                    </a>
                </div>
                <nav class="mobile-nav__container">
                </nav>
                <div class="side-menu__sep"></div>
                <div class="side-menu__content">
                    <p>
                        <a aria-label="Send email"
                            href="mailto:quimeracreativamx@gmail.com">Quimeracreativamx@gmail.com</a>
                        <br>
                        <a aria-label="Call us" href="tel:+9982350990">9982 3509 90 </a>
                    </p>
                    {{-- SOCIAL MEDIA --}}
                    <div class="side-menu__social">
                        <a aria-label="Whatsapp" target="_blank"
                            href="https://api.whatsapp.com/send?phone=+9982350990&text=Hola,%20Deseo%20hacer%20una%20cotización.">
                            <i aria-hidden="true" class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a aria-label="Instagram" target="_blank"
                            href="https://www.instagram.com/quimeracreativamx/">
                            <i aria-hidden="true" class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- SCRIPTS --}}
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <script src="{{ asset('assets/js/typed-2.0.11.js') }}"></script>
        <script src="{{ asset('assets/js/vegas.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/countdown.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.js') }}"></script>
        <script src="{{ asset('assets/js/theme.js') }}"></script>
        @yield('scripts')
</body>

</html>
