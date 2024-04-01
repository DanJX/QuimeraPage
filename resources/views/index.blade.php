@extends('layouts.main')
@section('meta')
    <title>Home - Quimera Creativa</title>
    <meta name="keywords"
        content="Fotografía Profesional, Diseño Creativo, Edición de Imágenes, Producción Audiovisual, Contenido Empresarial, Fotografía Corporativa, Diseño de Marca, Edición de Video, Estudio Fotográfico, Servicios Visuales, Creatividad Visual, Fotografía de Eventos, Diseño Publicitario, Producción de Video Corporativo, Retoque Fotográfico, Material Promocional, Captura de Momentos, Marketing Visual, Imágenes de Calidad, Contenido Impactante">
    <meta name="description"
        content="Bienvenido a QuimeraCreativa, tu socio creativo en el mundo visual y audiovisual. Nos destacamos como una firma dedicada a la excelencia en fotografía, diseño y edición, ofreciendo soluciones visuales innovadoras y de alta calidad para satisfacer las necesidades únicas de cada cliente">
@endsection

@section('main-body')
    <div id="banner-slider-demo-17" class="owl-carousel owl-theme">
        <div class="item slide block-call-to-action"
            style="background-image: url({{ asset('assets/images/slider-home/home.webp') }})">
            <div class="black-gradient"></div>
            <h2 class="title">Si puedes imaginarlo,<br> puedes producirlo</h2>
            <p class="below-title">Quimera Creativa</p>
        </div>
        <div class="item slide block-call-to-action"
            style="background-image: url({{ asset('assets/images/gallery/COMERCIAL/COMERCIAL-17.jpg') }})">
            <div class="black-gradient"></div>
            <h2 class="title">Si puedes imaginarlo,<br> puedes producirlo</h2>
            <p class="below-title">Quimera Creativa</p>
        </div>
        <div class="item slide block-call-to-action"
            style="background-image: url({{ asset('assets/images/gallery/GASTRONOMIA/GASTRONOMIA-27.jpg') }})">
            <div class="black-gradient"></div>
            <h2 class="title">Si puedes imaginarlo,<br> puedes producirlo</h2>
            <p class="below-title">Quimera Creativa</p>
        </div>
        <div class="item slide block-call-to-action"
            style="background-image: url({{ asset('assets/images/gallery/COMERCIAL/COMERCIAL-25.jpg') }})">
            <div class="black-gradient"></div>
            <h2 class="title">Si puedes imaginarlo,<br> puedes producirlo</h2>
            <p class="below-title">Quimera Creativa</p>
        </div>
        <div class="item slide block-call-to-action"
            style="background-image: url({{ asset('assets/images/gallery/COMERCIAL/COMERCIAL-16.jpg') }})">
            <div class="black-gradient"></div>
            <h2 class="title">Si puedes imaginarlo,<br> puedes producirlo</h2>
            <p class="below-title">Quimera Creativa</p>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .slide {
            grid-area: slide
        }

        .block-call-to-action {
            background-color: #000000;
            color: #fff;
            align-items: center;
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            height: 100vh;
            min-height: 500px;
            position: relative;
        }

        .black-gradient {
            position: absolute;
            height: 100%;
            width: 100%;
            background: linear-gradient(to bottom, #000000a1, #0000);

        }

        .title {
            font-size: 2rem;
            margin-bottom: 10px;
            font-weight: 300;
            text-align: center;
            z-index: 2;
            text-transform: uppercase;
            width: 60%
        }

        .below-title,
        .call-to-action {
            font-weight: lighter;
            text-align: center
        }

        .below-title {
            font-size: 1.4rem;
            line-height: 1.3;
            margin-bottom: 25px;
            z-index: 2
        }

        .call-to-action {
            background-color: #000;
            color: #fff;
            font-size: 1.2rem;
            letter-spacing: 1px;
            padding: 12px 67px;
            text-decoration: none
        }

        @media only screen and (max-width:425px) {
            .title {
                font-size: 1.4rem
            }

            .below-title {
                font-size: 14px
            }
        }

        .owl-dots {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
@endsection

@section('scripts')
    <script>
        carousal();

        function carousal() {
            $("#banner-slider-demo-17").owlCarousel({
                items: 1,
                autoplay: true,
                autoplayTimeout: 3000,
                nav: false,
                dots: true,
                navRewind: true,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                loop: true
            });
        }

        if ($('.preloader').length) {
            $('.preloader').delay(3400).fadeOut();
        }
    </script>
@endsection
