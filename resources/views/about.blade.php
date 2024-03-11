@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>About us - Quimera</title>
@endsection

@section('main-body')
    {{-- INFO --}}
    <section class="cta-two">
        <div class="row m-5">
            <div class="col-lg-6 wow fadeInLeft">
                <img class="w-100" src="https://live.staticflickr.com/65535/53580017028_b10938f082.jpg" alt="Quimera Page"
                    class="img-fluid" style="border-radius: 10px">
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="cta-two__content">
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
                    <img src="{{ asset('assets/images/logos-empresas/XAILING.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/XCARET.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/XENOTES.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/XENSES.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/XOXIMILCO.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/XPLOR.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/HXA.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/HXM.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/CIRCLE-K.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/DOLPHIN.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/DREAMS.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/ECHO.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/GNP.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/HOTELSHOPS.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/YACHTS.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/BREATHLESS.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/IMPRESSIONS.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/LCDLP.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/MEXICANA.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/PEPSICO.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/royal-hide.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/SECRETS.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/TORK.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/UNICARIBE.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/VITROCAR.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/ANAHUAC.png') }}" alt="">
                </div>
            </div>
            <div class="banner-three__col">
                <div class="banner-three__box-single">
                    <img src="{{ asset('assets/images/logos-empresas/APPLEleisure.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
