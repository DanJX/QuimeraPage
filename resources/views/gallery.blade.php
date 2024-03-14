@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Gallery - Quimera</title>
@endsection

@section('main-body')
    {{-- CATEGORIAS --}}
    <section class="destinations-three">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="destinations-three__single">
                    <a href="/architecture"><img src="{{ asset('assets/images/gallery/ARQUITECTURA/ARQUITECTURA-31.jpg') }}"
                            alt="Galería de arquitecturas"></a>
                    <div class="destinations-three__content">
                        <h3><a href="/architecture">Architecture</a></h3>
                    </div>
                    <div class="destinations-three__hover-content">
                        <h3><a href="/architecture">Architecture</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="destinations-three__single">
                    <a href="/food-styling"><img src="{{ asset('assets/images/gallery/GASTRONOMIA/GASTRONOMIA-19.jpg') }}"
                            alt="Galería de Food Styling"></a>
                    <div class="destinations-three__content">
                        <h3><a href="/food-styling">Food Styling</a></h3>
                    </div>
                    <div class="destinations-three__hover-content">
                        <h3><a href="/food-styling">Food Styling</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="destinations-three__single">
                    <a href="/groups"><img src="{{ asset('assets/images/gallery/CONGRESOS/CONGRESOS-5.jpg') }}"
                            alt="Galería de Grupos. congresos y convenciones"></a>
                    <div class="destinations-three__content">
                        <h3><a href="/groups">Conferences</a></h3>
                    </div>
                    <div class="destinations-three__hover-content">
                        <h3><a href="/groups">Conferences</a></h3>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="destinations-three__single">
                    <a href="/comercial"><img src="{{ asset('assets/images/gallery/COMERCIAL/COMERCIAL-10.jpg') }}"
                            alt="Galería de Galería"></a>
                    <div class="destinations-three__content">
                        <h3><a href="/comercial">Comercial</a></h3>
                    </div>
                    <div class="destinations-three__hover-content">
                        <h3><a href="/comercial">Comercial</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
