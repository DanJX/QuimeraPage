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
                    <a href="/architecture"><img src="https://live.staticflickr.com/65535/53578823127_aefda472c8.jpg"
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
                    <a href="food-styling"><img src="https://live.staticflickr.com/65535/53580035614_cbd1a9377a.jpg"
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
                    <a href="/groups"><img src="https://live.staticflickr.com/65535/53580072299_b267bbe257.jpg"
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
                    <a href="/comercial"><img src="https://live.staticflickr.com/65535/53580183695_444024f996.jpg"
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
