@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Videos - Quimera</title>
@endsection

@section('main-body')
    <section class="destinations-three">
        <div class="row">
            <div class="video-gallery">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/banner-gifs/test.gif')}}"
                        alt="TestVideoGift" />
                    <div class="gallery-item-caption">
                        <div>
                            <h2>Titulos</h2>
                            <p>Lorem ipsum dolor</p>
                        </div>
                        <a class="vimeo-popup" href="https://vimeo.com/329303545"></a>
                    </div>
                </div>

                <div class="gallery-item ">
                    <img src="{{ asset('assets/images/banner-gifs/test2.gif')}}"
                        alt="TestVideoGift" />
                    <div class="gallery-item-caption">
                        <div>
                            <h2>Titulos</h2>
                            <p>Lorem ipsum dolor</p>
                        </div>
                        <a class="vimeo-popup" href="https://vimeo.com/246980224"></a>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="{{ asset('assets/images/banner-gifs/test3.gif')}}"
                        alt="TestVideoGift" />
                    <div class="gallery-item-caption">
                        <div>
                            <h2>Titulos</h2>
                            <p>Lorem ipsum dolor</p>
                        </div>
                        <a class="image-link" href="https://vimeo.com/246980224"></a>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="{{ asset('assets/images/banner-gifs/test4.gif')}}"
                        alt="TestVideoGift" />
                    <div class="gallery-item-caption">
                        <div>
                            <h2>Titulos</h2>
                            <p>Lorem ipsum dolor</p>
                        </div>
                        <a class="vimeo-popup" href="https://vimeo.com/171540296"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        .video-gallery {
            position: relative;
            width: 100%
        }

        .video-gallery .gallery-item {
            position: relative;
            float: left;
            overflow: hidden;
            margin: 15px 0;
            height: 600px;
            width: 100%;
            background: #000;
            cursor: pointer;
        }

        .video-gallery .gallery-item img {
            position: relative;
            display: block;
            opacity: 0.45;
            width: 100%;
            height: 600px;
            object-fit: cover;
            transition: opacity 0.35s, transform 0.35s;
            transform: translate3d(-23px, 0, 0);
            backface-visibility: hidden;
        }

        .video-gallery .gallery-item .gallery-item-caption {
            padding: 2em;
            color: #fff;
            text-transform: uppercase;
            font-size: 1.25em;
        }

        .video-gallery .gallery-item .gallery-item-caption,
        .video-gallery .gallery-item .gallery-item-caption>a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .video-gallery .gallery-item h2 {
            font-weight: 300;
            overflow: hidden;
            padding: 0.5em 0;
        }

        .video-gallery .gallery-item h2,
        .video-gallery .gallery-item p {
            position: relative;
            margin: 0;
            z-index: 10;
        }

        .video-gallery .gallery-item p {
            letter-spacing: 1px;
            font-size: 68%;

            padding: 1em 0;
            opacity: 0;
            transition: opacity 0.35s, transform 0.35s;
            transform: translate3d(10%, 0, 0);
        }

        .video-gallery .gallery-item:hover img {
            opacity: 0.3;
            transform: translate3d(0, 0, 0);
        }

        .video-gallery .gallery-item .gallery-item-caption {
            display: grid;
            align-items: center;
            text-align: center;
        }

        .video-gallery .gallery-item h2::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 15%;
            height: 1px;
            background: #fff;

            transition: transform 0.3s;
            transform: translate3d(-100%, 0, 0);
        }

        .video-gallery .gallery-item:hover h2::after {
            /* transform: translate3d(0, 0, 0); */
            left: 50%;
            transform: translateX(-50%);
        }

        .video-gallery .gallery-item:hover p {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }

        @media screen and (max-width: 50em) {
            .video-gallery .gallery-item {
                display: inline-block;
                float: none;
                margin: 10px auto;
                width: 100%;
            }
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $(".video-gallery").magnificPopup({
                delegate: "a",
                type: "iframe",
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
@endsection
