@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Inicio - Quimera</title>
@endsection

@section('main-body')
    <div id="banner-slider-demo-17" class="owl-carousel owl-theme">
        <div class="item slide block-call-to-action"
            style="background-image: url('{{ asset('assets/images/slider-home/quimera-home.jpeg') }}')">
            <div class="black-gradient"></div>
            <h2 class="title">Slogan</h2>
            <p class="below-title">Texto adicional</p>
        </div>
        <div class="item slide block-call-to-action"
            style="background-image: url({{ asset('assets/images/slider-home/quimera-home.jpeg') }})">
            <div class="black-gradient"></div>
            <h2 class="title">Texto Extra 2</h2>
            <p class="below-title">Texto adicional 2</p>
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
            height: 750px;
            position: relative
        }

        .title {
            font-size: 3.5rem;
            letter-spacing: 8px;
            margin-bottom: 10px;
            font-weight: 500;
            text-align: center;
            z-index: 2;
            text-transform: uppercase
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
