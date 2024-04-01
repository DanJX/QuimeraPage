@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description"
        content="En Quimera Creativa, valoramos la comunicación abierta y estamos aquí para responder cualquier pregunta que puedas tener. Si estás interesado en nuestros servicios, tienes alguna consulta o simplemente deseas ponerte en contacto con nosotros, estaremos encantados de escucharte.">
    <title>Contact - Quimera Creativa</title>
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
                            <div class="mt-5 d-flex flex-column contact-infoad">
                                <a aria-label="Call us" href="tel:+529982350990">
                                    <img class="icons" src="{{ asset('assets/images/icons/phone.webp') }}"
                                        alt="Icon Phone">
                                    +52 9982 3509 90
                                </a>
                                <a aria-label="Send email" href="mailto:hola@quimeracreativa.mx">
                                    <img class="icons" src="{{ asset('assets/images/icons/email.webp') }}"
                                        alt="Icon E-mail">
                                    hola@quimeracreativa.mx
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- FORM API --}}
                <div class="col-lg-7">
                    <form action="https://api.web3forms.com/submit" method="POST" class="contact-form">
                        <input type="hidden" name="access_key" value="03179320-7eb0-45cf-9291-03abc3b21e03">
                        <input type="hidden" name="redirect" value="http://127.0.0.1:8000/thankyou">
                        <div class="contact-one__form">
                            <h2 class="text-center white">Contact Form</h2>
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
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">
                                    <textarea name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="thm-btn contact-one__btn">Send
                                        message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
