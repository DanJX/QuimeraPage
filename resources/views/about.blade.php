@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>About us - Quimera</title>
@endsection

@section('main-body')
    {{-- INFO --}}
    <section class="cta-two">
        <div class="row">
            <div class="col-lg-6 m-0 p-0 wow fadeInLeft">
                <img class="w-100" src="https://live.staticflickr.com/65535/53580017028_b10938f082.jpg" alt="Quimera Page"
                    class="img-fluid" style="border-radius: 0px 10px 10px 0">
            </div>
            <div class="col-lg-6 m-0 p-0 wow fadeInRight">
                <div class="cta-two__content text-justify m-5">
                    <div class="block-title text-left">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
                        <h3>Trusted & Award Winning <br></h3>
                    </div>
                    <div class="cta-two__content-highlight">
                        <p>Nulla facilisi. Integer elementum quam tempus, posuere libero et, condimentum nisi.
                            Suspendisse ac lacus sit amet libero pretium vestibulum venenatis tristique eros</p>
                    </div>
                    <ul class="list-unstyled cta-two__list">
                        <li><i class="fa fa-check"></i>Cras tincidunt elit sed lectus porta posuere.</li>
                        <li><i class="fa fa-check"></i>Nunc eget rhoncus orci. Sed malesuada risus eli.</li>
                        <li><i class="fa fa-check"></i>Donec mattis interdum dignissim. Nullam id sodales diam.</li>
                        <li><i class="fa fa-check"></i>Suspendisse congue dolor tincidunt nibh iaculis</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- CLIENTES --}}
    <div class="banner-three__box">
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
