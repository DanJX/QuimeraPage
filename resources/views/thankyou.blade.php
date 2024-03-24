@extends('layouts.main')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description"
        content="En Quimera Creativa, valoramos la comunicación abierta y estamos aquí para responder cualquier pregunta que puedas tener. Si estás interesado en nuestros servicios, tienes alguna consulta o simplemente deseas ponerte en contacto con nosotros, estaremos encantados de escucharte.">
    <title>Correo Envíado - Quimera Creativa</title>
@endsection

@section('main-body')
    <section class="contact-one">
        <div class="container">
            <div class="row d-flex justify-content-center">
                {{-- INFO --}}
                <div class="col-lg-6">
                    <div class="contact-one__content">
                        <div class="block-title text-justify">
                            <div class="d-flex justify-content-center mb-4">
                                <img class="icon-check" src="{{ asset('assets/images/icons/check.webp') }}"
                                    alt="Icon confirmed send email">
                            </div>
                            <h2 class="mb-4 text-center">Thank you for your message</h2>
                            <p>
                                Thank you for contacting us. We appreciate your message. Our team will get in touch with you
                                to follow your request.
                            </p>
                            <div class="mt-5 d-flex flex-column contact-infoad text-center">
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
                            <div class="d-flex justify-content-center mt-5">
                                <a aria-label="Go to the home" href="/" class="thm-btn contact-one__btn">Go to the
                                    home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        .icon-check {
            width: 80px;
            filter: invert(100%);
        }
    </style>
@endsection
