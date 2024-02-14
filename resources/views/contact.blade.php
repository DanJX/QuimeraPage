@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Contact - Quimera</title>
@endsection

@section('main-body')
    <section class="contact-one">
        <div class="container">
            <div class="row">
                {{-- INFO --}}
                <div class="col-lg-5">
                    <div class="contact-one__content">
                        <div class="block-title text-center">
                            <h2 class="mb-4">Contact Us</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat nam in illum, saepe ratione
                                dicta! Velit excepturi assumenda consequuntur. Voluptas molestiae cumque perferendis aut,
                                enim minima libero quas repellendus eius.</p>
                            <div class="mt-5 d-flex flex-column">
                                <h4><i class="fa-solid fa-location-dot"></i> Address</h4>
                                <p>  Lorem ipsum dolor sit, amet consectetur</p>
                                <h4 class="mt-5"><i class="fa-solid fa-phone-volume"></i> Phone</h4>
                                <a href="">
                                     Lorem ipsum dolor sit, amet consectetur
                                </a>
                                <h4 class="mt-5"><i class="fa-solid fa-envelopes-bulk"></i> Email</h4>
                                <a href="">
                                     Lorem ipsum dolor sit, amet consectetur
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- FORM --}}
                <div class="col-lg-7">
                    <form action="{{ route('enviar-correo') }}" method="POST" class="contact-form" autocomplete="off">
                        @csrf
                        <div class="contact-one__form">
                            <h2 class="text-center white">Contact Form</h2>
                            <div class="row low-gutters">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input required type="text" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input required type="email" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input required type="number" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input required type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea required name="message" placeholder="Write Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="thm-btn contact-one__btn">Send
                                            message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    @if (session('success'))
                        <div class="success">
                            <h5>{{ session('success') }}</h5>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        .success {
            background: #d4edda;
            color: #155724;
            border-radius: 10px;
            text-align: center;
            padding: 10px;
            margin-top: 15px;
            border-color: #d4edda;
        }
    </style>
@endsection
