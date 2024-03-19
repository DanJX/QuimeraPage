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
                <div class="col-lg-8">
                    <div class="contact-one__content">
                        <div class="block-title text-justify">
                            <h2 class="mb-4 text-center">Thank you for your message</h2>
                            <p>
                                We appreciate your trust, thank you very much for contacting us, we will be in touch with
                                you to follow up on your request.
                            </p>
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
                            <div class="success contact">
                                <h5>Email sent successfully</h5>
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
        .success {
            background: #d4edda;
            color: #155724;
            border-radius: 10px;
            text-align: center;
            padding: 10px;
            margin-top: 15px;
            border-color: #d4edda;
        }

        .failed {
            background: #eec0c0;
            color: white;
            border-radius: 10px;
            text-align: center;
            padding: 10px;
            margin-top: 15px;
            border-color: #edd4d4;
        }
    </style>
@endsection
