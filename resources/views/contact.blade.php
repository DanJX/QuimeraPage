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
                                <h4>Address</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur</p>
                                <h4 class="mt-5">Phone</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur</p>
                                <h4 class="mt-5">Email</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- FORM --}}
                <div class="col-lg-7">
                    <div class="contact-form">
                        <div class="contact-one__form">
                            <h2 class="text-center white">Contact Form</h2>
                            <div class="row low-gutters">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="text" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea name="message" placeholder="Write Message"></textarea>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center w-100 mt-5">
                                    <div class="col-md-4">
                                        <button type="submit" class="thm-btn contact-one__btn">Send
                                            message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
