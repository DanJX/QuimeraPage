@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Inicio - Quimera</title>
@endsection

@section('main-body')
    <div class="banner-three__wrap">
        <div class="banner-three__floated-text">Quimera</div>
        {{-- TXT --}}
        <section class="banner-three">
            <div class="container">
                <div class="banner-three__top">
                    <div class="banner-three__top-inner">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

        {{-- CLIENTES --}}
        <div class="banner-three__box">
            <div class="container">
                <div class="row">
                    <div class="banner-three__col">
                        <div class="banner-three__box-single">
                            <img src="assets/images/gallery/gallery-h3-1.jpg" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                    <div class="banner-three__col">
                        <div class="banner-three__box-single">
                            <img src="assets/images/gallery/gallery-h3-2.jpg" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                    <div class="banner-three__col">
                        <div class="banner-three__box-single">
                            <img src="assets/images/gallery/gallery-h3-3.jpg" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                    <div class="banner-three__col">
                        <div class="banner-three__box-single">
                            <img src="assets/images/gallery/gallery-h3-4.jpg" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                    <div class="banner-three__col">
                        <div class="banner-three__box-single">
                            <img src="assets/images/gallery/gallery-h3-5.jpg" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </div>
@endsection
