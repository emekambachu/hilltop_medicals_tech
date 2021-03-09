@extends('layouts.main')

@section('title')
    Contact us
@endsection

@section('contents')
    <header class="header-bottom-4">
        <img src="{{ asset('main/slides/slide1.jpg') }}">
        <div class="header-bottom-4__bg">
            <div class="icon">
                <img src="{{ asset('main/images/banner/banner-shape.png') }}">
            </div>
        </div>
        <div class="container">
            <h1 class="section-title">Contact <span>Us</span></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Contact us</li>
            </ol>
        </div>
    </header>

    <section class="contact main-blog">
        <div class="main-blog__bg">
            <div class="icon">
                <img src="{{ asset('main/images/png-shapes/form-shape.png') }}">
            </div>
            <div class="icon">
                <img src="{{ asset('main/images/png-shapes/specialists__left-bottom-shape.png') }}">
            </div>
        </div>

        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40674.95943414137!2d-74.02830237109018!3d40.73596674750672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a197c06b7cb%3A0x40a06c78f79e5de6!2sOzodlik%20minorasi!5e0!3m2!1suz!2sus!4v1594532528185!5m2!1suz!2sus" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="100%" height="590px" frameborder="0">
            </iframe>
            <div class="container">
                <div class="contact-map__card">
                    <div class="img">
                        <img src="{{ asset('main/images/jpg/contact.jpg') }}">
                    </div>
                    <div class="content">
                        <div class="number">
                            <a href="tel:+19174102553">+19174102553</a>
                            <a href="tel:+61488894091">+61488894091</a>
                        </div>
                        <p class="adress">1560 Holden Street San Diego, CA 92139</p>
                        <a href="mailto:info@hilltopmedicalstech" class="email">info@hilltopmedicalstech</a>
                        <a href="#" class="btn btn-2_pink">get appointment</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container_right-sidebar">
            <div class="article">
                <h1 class="title">Get in Touch</h1>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-12">
                            <textarea class="form-control" placeholder="Type your texts"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-2_pink">Send</button>
                    <label>* Personal data will be encrypted</label>
                </form>
            </div>
            <div class="sidebar">
                <div class="blog-sidebar">
                    <div class="follow">
                        <h1 class="blog-sidebar-title">Follow Us</h1>
                        <div class="socials">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- End of .emergency-call -->
    <section class="emergency-call-2">
        <div class="emergency-call-2__bg"></div>
        <div class="container">
            <h3>Need an emengency help?</h3>
            <h1 class="section-title section-title_60 section-title_white">we care about your health!<br>call us now
            </h1>
            <div class="call">
                <div class="icon">
                    <svg width="24.375" height="24.343" viewBox="0 0 24.375 24.343">
                        <path id="phone.svg" class="cls-2" d="M831.817,365.478a10.864,10.864,0,0,0-10.852-10.851v-1.55a12.416,12.416,0,0,1,12.4,12.4h-1.551Zm-6.2,0a4.656,4.656,0,0,0-4.651-4.651v-1.55a6.208,6.208,0,0,1,6.2,6.2h-1.55Zm-4.651-9.3a9.312,9.312,0,0,1,9.3,9.3h-1.551a7.759,7.759,0,0,0-7.751-7.751v-1.55Zm3.779,13.4,1.938-1.937a0.578,0.578,0,0,1,.064-0.058,1.924,1.924,0,0,1,2.511-.006,0.72,0.72,0,0,1,.071.064l3.488,3.487a1.871,1.871,0,0,1,0,2.646l-2.325,2.326a5.527,5.527,0,0,1-3.942,1.314c-3.14,0-7.446-1.609-11.712-5.8l0.41-.418-0.417.41a19.929,19.929,0,0,1-5.5-9.163c-0.666-2.764-.288-5.19,1.01-6.489l2.325-2.325a1.917,1.917,0,0,1,2.647,0l3.488,3.488a0.8,0.8,0,0,1,.067.077,1.879,1.879,0,0,1-.009,2.5c-0.018.022-.038,0.043-0.058,0.064l-1.938,1.937a1.419,1.419,0,0,0,0,2l2.938,2.937h0l2.94,2.94A1.42,1.42,0,0,0,824.744,369.578Zm6.522,3.554,0.454-.454a0.322,0.322,0,0,0,0-.454l-3.434-3.433c-0.017-.015-0.034-0.029-0.049-0.045a0.277,0.277,0,0,0-.464,0c-0.015.014-.03,0.029-0.046,0.042l-0.4.4ZM817.25,359.116l0.4-.4a0.447,0.447,0,0,1,.042-0.045,0.328,0.328,0,0,0,0-.464,0.652,0.652,0,0,1-.05-0.055l-3.429-3.429a0.323,0.323,0,0,0-.455,0l-0.454.454Zm1.456,8.621h0l-2.94-2.94a2.97,2.97,0,0,1,0-4.2l0.388-.388-3.943-3.941-0.775.774c-0.9.9-1.129,2.827-.6,5.029A20.532,20.532,0,0,0,824.366,375.6c2.2,0.531,4.129.3,5.029-.6l0.775-.775-3.942-3.942-0.388.388a2.971,2.971,0,0,1-4.2,0Z" transform="translate(-809 -353.063)"></path></svg>
                </div>
{{--                <a href="tel:+19174102553">+19174102553, +61488894091</a>--}}
            </div>
            <a href="" class="btn btn-2_pink">book a consultation</a>
        </div>
    </section>
@endsection
