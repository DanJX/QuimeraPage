@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description"
        content="En Quimera Creativa, estamos dedicados a dar vida a tu visión a través de la fotografía, el diseño y la producción audiovisual. Desde nuestros humildes comienzos hasta convertirnos en líderes en la industria, nuestra pasión por la creatividad y la excelencia nos impulsa a superar constantemente los límites y a inspirar a nuestros clientes.">
    <title>About us - Quimera Creativa</title>
@endsection

@section('main-body')
    {{-- INFO --}}
    <section class="cta-two mb-3">
        <div class="row">
            <div class="col-lg-6 m-0 p-0 wow fadeInLeft">
                <img class="w-100 h-100" style="object-fit:cover;"
                    src="{{ asset('assets/images/slider-home/home.webp') }}" alt="Quimera Creativa About us"
                    class="img-fluid" style="border-radius: 0px 10px 10px 0">
            </div>
            <div class="col-lg-6 m-0 p-0 wow fadeInRight">
                <div class="cta-two__content text-justify m-5">
                    <div class="block-title text-left">
                        <p>Sumérgete en la Experiencia Visual</p>
                        <h3>Calidad que Marca la Diferencia <br></h3>
                    </div>
                    <div class="cta-two__content-highlight">
                        <p>En Quimera Creativa, nos comprometemos a ofrecer la más alta calidad en cada producción.
                            Desde la captura de imágenes hasta la postproducción, cada etapa se realiza con meticulosidad y
                            atención al detalle para garantizar resultados sobresalientes que superen tus expectativas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- CLIENTES --}}
    <div class="banner-three__box mt-5">
        <div class="block-title">
            <h3 class="text-center mb-3">Customers</h3>
            <hr>
        </div>
        <div class="row">
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/XAILING.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/xplor.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/xenotes.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/xenses.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/xoximilco.webp') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/XCARET.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/HXA.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/HXM.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/LCDLP.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/yachts.webp') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/DREAMS.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/SECRETS.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/BREATHLESS.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/royal-hide.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/APPLEleisure.webp') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/HOTELSHOPS.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/IMPRESSIONS.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/DOLPHIN.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/MEXICANA.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/PEPSICO.webp') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/ECHO.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/GNP.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/TORK.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/CIRCLE-K.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/VITROCAR.webp') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/ANAHUAC.webp') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/UNICARIBE.webp') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
