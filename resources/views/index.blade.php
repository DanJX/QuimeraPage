@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Inicio - Quimera</title>
@endsection

@section('main-body')
    <div class="banner-three__wrap">
        {{-- BANNER --}}
        <section class="banner-three">
            <div class="container">
                <div class="banner-three__top">
                    <div class="banner-three__top-inner">
                        <img src="{{ asset('assets/images/logo quimera creativa.png') }}" alt="Logotipo Quimera">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
