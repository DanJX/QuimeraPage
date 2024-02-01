@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Contact - Quimera</title>
@endsection

@section('main-body')
    {{-- INFO EMPRESA --}}
    <section class="contact-info-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info-one__single">
                        <div class="contact-info-one__icon">
                            <i class="tripo-icon-placeholder"></i>
                        </div>
                        <div class="contact-info-one__content">
                            <p>77 Broklyn Street, D Capital <br>
                                Road New York. USA 6666</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-one__single">
                        <div class="contact-info-one__icon">
                            <i class="tripo-icon-phone-call"></i>
                        </div>
                        <div class="contact-info-one__content">
                            <p><a href="">666 999 0000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-one__single">
                        <div class="contact-info-one__icon">
                            <i class="tripo-icon-message"></i>
                        </div>
                        <div class="contact-info-one__content">
                            <p><a href="">example@example.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- TXT & FORM --}}
    <section class="contact-one">
        <div class="container">
            <div class="row">
                {{-- INFO --}}
                <div class="col-lg-5">
                    <div class="contact-one__content">
                        <div class="block-title text-left">
                            <p>Contact with us</p>
                            <h3>Have any Question? <br>
                                feel free to contact <br>
                                with us.</h3>
                        </div>
                        <div class="contact-one__content-text">
                            <p>Lorem ipsum available isn but the majority have suffered alteratin <br> in some or form
                                injected.</p>
                        </div>
                    </div>
                </div>
                {{-- FORM --}}
                <div class="col-lg-7">
                    <div class="contact-one__form">
                        <div class="row low-gutters">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">
                                    <button type="submit" class="thm-btn contact-one__btn">Send
                                        message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
