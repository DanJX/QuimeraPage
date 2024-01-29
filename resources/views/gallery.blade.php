@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Gallery - Quimera</title>
@endsection

@section('main-body')
    {{-- BANNER --}}
    <section class="page-header"
        style="background-image: url({{ asset('assets/images/backgrounds/page-header-contact.jpg') }});">
        <div class="container">
            <h2>Gallery</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Gallery</span></li>
            </ul>
        </div>
    </section>
    {{-- GALLERY --}}
    <section class="gallery-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-one__single">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}" alt="">
                        <a class="gallery-one__link img-popup" href="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}"><i
                                class="tripo-icon-plus-symbol"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-one__single">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}" alt="">
                        <a class="gallery-one__link img-popup" href="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}"><i
                                class="tripo-icon-plus-symbol"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-one__single">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}" alt="">
                        <a class="gallery-one__link img-popup" href="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}"><i
                                class="tripo-icon-plus-symbol"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-one__single">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}" alt="">
                        <a class="gallery-one__link img-popup" href="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}"><i
                                class="tripo-icon-plus-symbol"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-one__single">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}" alt="">
                        <a class="gallery-one__link img-popup" href="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}"><i
                                class="tripo-icon-plus-symbol"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-one__single">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}" alt="">
                        <a class="gallery-one__link img-popup" href="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}"><i
                                class="tripo-icon-plus-symbol"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
