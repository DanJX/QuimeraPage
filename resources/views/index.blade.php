@extends('layouts.main')
@section('meta')
    <title>Home - Quimera</title>
    <meta name="keywords"
        content="Fotografía Profesional, Diseño Creativo, Edición de Imágenes, Producción Audiovisual, Contenido Empresarial, Fotografía Corporativa, Diseño de Marca, Edición de Video, Estudio Fotográfico, Servicios Visuales, Creatividad Visual, Fotografía de Eventos, Diseño Publicitario, Producción de Video Corporativo, Retoque Fotográfico, Material Promocional, Captura de Momentos, Marketing Visual, Imágenes de Calidad, Contenido Impactante">
    <meta name="description"
        content="Bienvenido a QuimeraCreativa, tu socio creativo en el mundo visual y audiovisual. Nos destacamos como una firma dedicada a la excelencia en fotografía, diseño y edición, ofreciendo soluciones visuales innovadoras y de alta calidad para satisfacer las necesidades únicas de cada cliente">
@endsection

@section('main-body')
    <div id="banner-slider-demo-17" class="owl-carousel owl-theme">
        <div class="item slide block-call-to-action"
            style="background-image: url({{asset('assets/images/slider-home/home.jpeg')}})">
            <div class="black-gradient"></div>
            <h2 class="title">Si puedes imaginarlo, puedes producirlo</h2>
            <p class="below-title">Quimera Creativa</p>
        </div>
        <div class="item slide block-call-to-action"
            style="background-image: url({{asset('assets/images/slider-home/home2.jpg')}})">
            <div class="black-gradient"></div>
            <h2 class="title">Si puedes imaginarlo, puedes producirlo</h2>
            <p class="below-title">Quimera Creativa</p>
        </div>
        <div class="item slide block-call-to-action"
            style="background-image: url({{asset('assets/images/slider-home/home3.jpg')}})">
            <div class="black-gradient"></div>
            <h2 class="title">Si puedes imaginarlo, puedes producirlo</h2>
            <p class="below-title">Quimera Creativa</p>
        </div>
        <div class="item slide block-call-to-action"
            style="background-image: url({{asset('assets/images/slider-home/home4.jpg')}})">
            <div class="black-gradient"></div>
            <h2 class="title">Si puedes imaginarlo, puedes producirlo</h2>
            <p class="below-title">Quimera Creativa</p>
        </div>
        <div class="item slide block-call-to-action"
            style="background-image: url({{asset('assets/images/slider-home/home5.jpg')}})">
            <div class="black-gradient"></div>
            <h2 class="title">Si puedes imaginarlo, puedes producirlo</h2>
            <p class="below-title">Quimera Creativa</p>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .below-title,
        .title {
            text-shadow: 0 4px 4px #000, 2px 8px 8px #000, 4px 16px 16px #000
        }

        .slide {
            grid-area: slide
        }

        .block-call-to-action {
            background-color: #fff;
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
            min-height: 600px;
            position: relative;
        }

        .black-gradient {
            position: absolute;
            height: 100%;
            width: 100%;
            background: linear-gradient(to bottom, #000000a1, #0000);

        }

        .title {
            font-size: 3.5rem;
            letter-spacing: 8px;
            margin-bottom: 10px;
            font-weight: 500;
            text-align: center;
            z-index: 2;
            text-transform: uppercase;
            width: 60%
        }

        .below-title,
        .call-to-action {
            font-weight: 300;
            text-align: center
        }

        .below-title {
            font-size: 1.8rem;
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
                font-size: 2.5rem
            }

            .below-title {
                font-size: 1.2rem
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
    </script>
@endsection
