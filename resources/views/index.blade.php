@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Inicio - Quimera</title>
@endsection

@section('main-body')
    {{-- SLIDER --}}
    <div class="slider-video">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            {{-- MENU --}}
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            {{-- SLIDER --}}
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="item-slider" src="{{ asset('assets/images/backgrounds/banner-1-1-bg.jpg') }}"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="item-slider" src="{{ asset('assets/images/backgrounds/banner-1-1-bg.jpg') }}"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="item-slider" src="{{ asset('assets/images/backgrounds/banner-1-1-bg.jpg') }}"
                        class="d-block w-100" alt="...">
                </div>
                <div class="txt-slider">
                    <h1>Quimera</h1>
                </div>
                <div class="btn-slider">
                    <a href="/portfolio" class="thm-btn contact-one__btn">Portfolio</a>
                    <a href="/contact" class="thm-btn contact-one__btn">Contact</a>
                </div>
            </div>
            {{-- BTNS --}}
            <button class="carousel-control-prev border-0 bg-transparent" type="button"
                data-target="#carouselExampleIndicators" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next border-0 bg-transparent" type="button"
                data-target="#carouselExampleIndicators" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>

    {{-- QUIENES SOMOS --}}
    <section class="cta-four" style="background-image: url(assets/images/backgrounds/cta-4-bg.jpg);">
        <div class="container">
            <h3>¿Quiénes somos</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad laudantium nihil eos id voluptates autem, hic
                sequi consequuntur cum ipsum quos dignissimos laboriosam, quidem ullam rem commodi, magni nulla harum?</p>
            <br>
            <a href="#" class="thm-btn cta-four__btn">Start</a>
        </div>
    </section>

    {{-- COLABORACIONES --}}
    <section class="tour-one">
        <div class="container">
            <div class="block-title text-center">
                <p>Colaboraciones</p>
                <h3>Empresas que confían en nosotros</h3>
            </div>
            <div class="tour-one__carousel tour-one__carousel-no-overflow thm__owl-carousel  owl-carousel owl-theme"
                data-options='{"nav": false, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 700, "dots": true, "margin": 30, "loop": true, "responsive": { "0": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "767": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "991": { "items": 2 }, "1199": { "items": 2 }, "1200": { "items": 3 } }}'>
                <div class="item">
                    <div class="tour-one__single">
                        <div class="tour-one__image">
                            <img src="{{ asset('assets/images/tour/tour-1-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="tour-one__single">
                        <div class="tour-one__image">
                            <img src="{{ asset('assets/images/tour/tour-1-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="tour-one__single">
                        <div class="tour-one__image">
                            <img src="{{ asset('assets/images/tour/tour-1-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="tour-one__single">
                        <div class="tour-one__image">
                            <img src="{{ asset('assets/images/tour/tour-1-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-one" style="background-image: url(assets/images/backgrounds/video-bg-1-1.jpg);">
        <div class="container text-center">
            <a href="https://www.youtube.com/watch?v=i9E_Blai8vk" class="video-one__btn video-popup"><i
                    class="fa fa-play"></i></a><!-- /.video-one__btn -->
            <p>Love where you're going</p>
            <h3><span>Tripo</span> is a World Leading <br> Online <span>Tour Booking Platform</span></h3>
        </div><!-- /.container -->
    </section>
@endsection
