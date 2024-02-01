@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>About us - Quimera</title>
@endsection

@section('main-body')
    {{-- INFO --}}
    <section class="cta-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <img src="{{ asset('assets/images/resources/cta-2-1.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
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
        </div>
    </section>
@endsection
