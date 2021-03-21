<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Hilltop Medical Healthcare Technology</title>

    <link rel="icon" href="{{ asset('main/hilltop_logo_only.png') }}">

    <!-- wow animation style -->
    <!-- <link rel="stylesheet" href="./css/animate.css"> -->

    <!-- owl-carousel -->
    <link rel="stylesheet" href="{{ asset('main/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/owl.theme.default.min.css') }}">

    <!-- bootstrap style -->
    <link rel="stylesheet" href="{{ asset('main/css/bootstrap.min.css') }}">

    <!-- template style -->
    <link rel="stylesheet" href="{{ asset('main/css/main.css') }}">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <script src="//code.jivosite.com/widget/vMwwi77U8y" async></script>
</head>

<body>

<!-- Start of .preloader -->
<div class="preloader">
    <div class="loader"></div>
    <img src="{{ asset('main/hilltopmedical_logo.png') }}"/>
</div>
<!-- End of .preloader -->

<!------------------------------------------------------------------------>

<div class="page">

    <!-- Start of .header-top -->
    <header class="header-top">
        <div class="container">

            <!-- header-top__logo -->
            <div class="header-top__logo">
                <a href="{{ url('/') }}">
                    <img width="200" src="{{ asset('main/hilltopmedical_logo.png') }}"/>
                </a>
            </div>
            <!-- End of .header-top__logo -->

            <!-- .header-top__call -->
            <div class="header-top__call">

                <!-- header-top__call-item -->
                <div class="header-top__call-item">
                    <svg width="24.375" height="24.343" viewBox="0 0 24.375 24.343">
                        <path id="phone.svg" class="header-top__call-icon cls-1"
                              d="M831.817,365.478a10.864,10.864,0,0,0-10.852-10.851v-1.55a12.416,12.416,0,0,1,12.4,12.4h-1.551Zm-6.2,0a4.656,4.656,0,0,0-4.651-4.651v-1.55a6.208,6.208,0,0,1,6.2,6.2h-1.55Zm-4.651-9.3a9.312,9.312,0,0,1,9.3,9.3h-1.551a7.759,7.759,0,0,0-7.751-7.751v-1.55Zm3.779,13.4,1.938-1.937a0.578,0.578,0,0,1,.064-0.058,1.924,1.924,0,0,1,2.511-.006,0.72,0.72,0,0,1,.071.064l3.488,3.487a1.871,1.871,0,0,1,0,2.646l-2.325,2.326a5.527,5.527,0,0,1-3.942,1.314c-3.14,0-7.446-1.609-11.712-5.8l0.41-.418-0.417.41a19.929,19.929,0,0,1-5.5-9.163c-0.666-2.764-.288-5.19,1.01-6.489l2.325-2.325a1.917,1.917,0,0,1,2.647,0l3.488,3.488a0.8,0.8,0,0,1,.067.077,1.879,1.879,0,0,1-.009,2.5c-0.018.022-.038,0.043-0.058,0.064l-1.938,1.937a1.419,1.419,0,0,0,0,2l2.938,2.937h0l2.94,2.94A1.42,1.42,0,0,0,824.744,369.578Zm6.522,3.554,0.454-.454a0.322,0.322,0,0,0,0-.454l-3.434-3.433c-0.017-.015-0.034-0.029-0.049-0.045a0.277,0.277,0,0,0-.464,0c-0.015.014-.03,0.029-0.046,0.042l-0.4.4ZM817.25,359.116l0.4-.4a0.447,0.447,0,0,1,.042-0.045,0.328,0.328,0,0,0,0-.464,0.652,0.652,0,0,1-.05-0.055l-3.429-3.429a0.323,0.323,0,0,0-.455,0l-0.454.454Zm1.456,8.621h0l-2.94-2.94a2.97,2.97,0,0,1,0-4.2l0.388-.388-3.943-3.941-0.775.774c-0.9.9-1.129,2.827-.6,5.029A20.532,20.532,0,0,0,824.366,375.6c2.2,0.531,4.129.3,5.029-.6l0.775-.775-3.942-3.942-0.388.388a2.971,2.971,0,0,1-4.2,0Z"
                              transform="translate(-809 -353.063)" /></svg>
                    <div class="header-top__call-text">
                        <p>Call us for any question</p>
                        <a href="">+61480053125, +61488894091</a>
                    </div>
                </div>
                <!-- End of .header-top__call-item -->

                <!-- header-top__call-item -->
                <div class="header-top__call-item">
                    <svg width="18.88" height="25.719" viewBox="0 0 18.88 25.719">
                        <path id="address.svg" class="header-top__call-icon cls-1"
                              d="M1033.75,377.71l-7.99-11.282a9.433,9.433,0,1,1,16-.04Zm0-24.133a7.845,7.845,0,0,0-6.68,11.983l6.68,9.43,6.7-9.468A7.841,7.841,0,0,0,1033.75,353.577Zm0,11.78a3.927,3.927,0,1,1,3.93-3.928A3.931,3.931,0,0,1,1033.75,365.357Zm0-6.283a2.356,2.356,0,1,0,2.36,2.355A2.362,2.362,0,0,0,1033.75,359.074Z"
                              transform="translate(-1024.31 -352)" /></svg>
                    <div class="header-top__call-text">
                        <p>27 Princess Road 32112</p>
                        <a href="#">New York</a>
                    </div>
                </div>
                <!-- End of .header-top__call-item -->

                <!-- header-top__call-item -->
                <div class="header-top__call-item">
                    <svg width="25.16" height="25.157" viewBox="0 0 25.16 25.157">
                        <path id="envelope.svg" class="header-top__call-icon cls-1"
                              d="M1239.84,377.423v-16.85l3.15-2.723v-5.556h18.87v5.556l3.14,2.723v16.85h-25.16Zm22.48-1.57-6.57-6.557-3.33,2.884-3.33-2.884-6.56,6.557h19.79Zm-20.91-1.11,6.49-6.478-6.49-5.614v12.092Zm1.58-14.814-1.16,1,1.16,1v-2.005Zm17.29,3.359v-9.424h-15.72v9.424h-0.01l7.87,6.813,7.87-6.813h-0.01Zm1.58-3.359v2.005l1.15-1Zm1.57,2.722-6.49,5.614,6.49,6.478V362.651Zm-11.8-4.076h1.58v1.571h-1.58v-1.571Zm4.72,1.571h-1.57v-1.571h1.57v1.571Zm-7.86-1.571h1.57v1.571h-1.57v-1.571Z"
                              transform="translate(-1239.84 -352.281)" /> </svg>
                    <div class="header-top__call-text">
                        <p>Office Hour: 09:00am - 04:00pm</p>
                        <a href="mailto:info@hilltopmedicalstech.com">info@hilltopmedicalstech.com</a>
                    </div>
                </div>
                <!-- End of .header-top__call-item -->

            </div>
            <!-- End of .header-top__call -->
        </div>
    </header>
    <!-- End of .header-top -->

    <!-- Start of .header-middle -->
    <header class="header-middle header-middle_white-transparent">
        <div class="container">

            <!-- hidden navbar for mobiles -->
            <div class="navbar-logo">
                <a href="{{ url('/') }}">
                    <img width="200" src="{{ asset('main/hilltopmedical_logo.png') }}"/>
                </a>
            </div>

            <div class="navbar-icon">
                <span></span>
            </div>
            <!-- End of hidden navbar for mobiles -->

            <!-- navbar__menu-link clicked jquery -> event.preventDefoult() -->
            <div class="navbar">

                <ul class="navbar__menu font-weight-bold">
                    <li class="navbar__menu-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="navbar__menu-item">
                        <a href="{{ url('products') }}">Products</a>
                    </li>
                    <li class="navbar__menu-item">
                        <a href="{{ url('services') }}">Services</a>
                    </li>
                    <li class="navbar__menu-item">
                        <a href="{{ url('about') }}">About us</a>
                    </li>
                    <li class="navbar__menu-item">
                        <a href="{{ url('contact') }}">Contacts</a>
                    </li>
                </ul>

                <div class="navbar__right">

                    <div class="navbar__bag">
                        <div align="center" id="google_translate_element"></div>
                    </div>

                    <a href="{{ url('contact') }}" class="btn btn_pink" id="popup-form-open">MAKE AN APPOINTMENT</a>

                </div>
            </div>

        </div>
    </header>
    <!-- End of .header-middle -->

    @yield('contents')

    <!-- Start of .footer -->
    <footer class="footer">
        <div class="footer__bg">
            <div class="icon1">
                <img src="{{ asset('main/images/png-shapes/footer.png') }}">
            </div>
        </div>
        <!-- Start of .footer__top -->
        <div class="footer__top">
            <div class="footer__logo">
                <img src="{{ asset('main/hilltopmedical_logo.png') }}" alt="footer-logo">
            </div>
            <div class="container">
                <div>
                    <div class="footer__top-blocks">
                        <h1 class="title">Contacts</h1>
                        <div class="content">
                            <div class="content-item">
                                <div class="icon">
                                    <svg width="24.375" height="24.343" viewBox="0 0 24.375 24.343">
                                        <path id="phone.svg" class="header-top__call-icon cls-1"
                                              d="M831.817,365.478a10.864,10.864,0,0,0-10.852-10.851v-1.55a12.416,12.416,0,0,1,12.4,12.4h-1.551Zm-6.2,0a4.656,4.656,0,0,0-4.651-4.651v-1.55a6.208,6.208,0,0,1,6.2,6.2h-1.55Zm-4.651-9.3a9.312,9.312,0,0,1,9.3,9.3h-1.551a7.759,7.759,0,0,0-7.751-7.751v-1.55Zm3.779,13.4,1.938-1.937a0.578,0.578,0,0,1,.064-0.058,1.924,1.924,0,0,1,2.511-.006,0.72,0.72,0,0,1,.071.064l3.488,3.487a1.871,1.871,0,0,1,0,2.646l-2.325,2.326a5.527,5.527,0,0,1-3.942,1.314c-3.14,0-7.446-1.609-11.712-5.8l0.41-.418-0.417.41a19.929,19.929,0,0,1-5.5-9.163c-0.666-2.764-.288-5.19,1.01-6.489l2.325-2.325a1.917,1.917,0,0,1,2.647,0l3.488,3.488a0.8,0.8,0,0,1,.067.077,1.879,1.879,0,0,1-.009,2.5c-0.018.022-.038,0.043-0.058,0.064l-1.938,1.937a1.419,1.419,0,0,0,0,2l2.938,2.937h0l2.94,2.94A1.42,1.42,0,0,0,824.744,369.578Zm6.522,3.554,0.454-.454a0.322,0.322,0,0,0,0-.454l-3.434-3.433c-0.017-.015-0.034-0.029-0.049-0.045a0.277,0.277,0,0,0-.464,0c-0.015.014-.03,0.029-0.046,0.042l-0.4.4ZM817.25,359.116l0.4-.4a0.447,0.447,0,0,1,.042-0.045,0.328,0.328,0,0,0,0-.464,0.652,0.652,0,0,1-.05-0.055l-3.429-3.429a0.323,0.323,0,0,0-.455,0l-0.454.454Zm1.456,8.621h0l-2.94-2.94a2.97,2.97,0,0,1,0-4.2l0.388-.388-3.943-3.941-0.775.774c-0.9.9-1.129,2.827-.6,5.029A20.532,20.532,0,0,0,824.366,375.6c2.2,0.531,4.129.3,5.029-.6l0.775-.775-3.942-3.942-0.388.388a2.971,2.971,0,0,1-4.2,0Z"
                                              transform="translate(-809 -353.063)" /></svg>
                                </div>
                                <div class="text">
{{--                                    <a href="tel:+19174102553">+19174102553 (United States)</a>--}}
{{--                                    <a href="tel:+61488894091">+61488894091 (Australia)</a>--}}
                                </div>
                            </div>
                            <div class="content-item">
                                <div class="icon">
                                    <svg width="18.88" height="25.719" viewBox="0 0 18.88 25.719">
                                        <path id="address.svg" class="header-top__call-icon cls-1"
                                              d="M1033.75,377.71l-7.99-11.282a9.433,9.433,0,1,1,16-.04Zm0-24.133a7.845,7.845,0,0,0-6.68,11.983l6.68,9.43,6.7-9.468A7.841,7.841,0,0,0,1033.75,353.577Zm0,11.78a3.927,3.927,0,1,1,3.93-3.928A3.931,3.931,0,0,1,1033.75,365.357Zm0-6.283a2.356,2.356,0,1,0,2.36,2.355A2.362,2.362,0,0,0,1033.75,359.074Z"
                                              transform="translate(-1024.31 -352)" /></svg>
                                </div>
                                <div class="text">
                                    <p>405 Lan Street, New York, USA</p>
                                    <a href="#" class="location">Get directions on the map <i
                                            class="fa fa-map-marker"></i></a>
                                </div>
                            </div>
                            <div class="content-item">
                                <div class="icon">
                                    <svg width="25.16" height="25.157" viewBox="0 0 25.16 25.157">
                                        <path id="envelope.svg" class="header-top__call-icon cls-1"
                                              d="M1239.84,377.423v-16.85l3.15-2.723v-5.556h18.87v5.556l3.14,2.723v16.85h-25.16Zm22.48-1.57-6.57-6.557-3.33,2.884-3.33-2.884-6.56,6.557h19.79Zm-20.91-1.11,6.49-6.478-6.49-5.614v12.092Zm1.58-14.814-1.16,1,1.16,1v-2.005Zm17.29,3.359v-9.424h-15.72v9.424h-0.01l7.87,6.813,7.87-6.813h-0.01Zm1.58-3.359v2.005l1.15-1Zm1.57,2.722-6.49,5.614,6.49,6.478V362.651Zm-11.8-4.076h1.58v1.571h-1.58v-1.571Zm4.72,1.571h-1.57v-1.571h1.57v1.571Zm-7.86-1.571h1.57v1.571h-1.57v-1.571Z"
                                              transform="translate(-1239.84 -352.281)" /> </svg>
                                </div>
                                <div class="text">
                                    <a href="mailto:info@hilltopmedicalstech.com">info@hilltopmedicalstech.com</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer__top-blocks">
                        <h1 class="title">Opening hours</h1>
                        <div class="content">
                            <ul class="work-date">
                                <li><span>Mon - Thu</span><b>08:00 - 18:00</b></li>
                                <li><span>Wed - Thur</span><b>09:00 - 19:00</b></li>
                                <li><span>Friday</span><b>10:00 - 22:00</b></li>
                                <li><span>Saturday</span><b>09:00 - 14:00</b></li>
                                <li><span>Sunday</span><b>Closed</b></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="footer__top-blocks">
                        <h1 class="title">Subscribe</h1>
                        <div class="content">
                            <p class="text">To receive email releases, simply provide us with your email address below.
                            </p>
                            <form>
                                <div class="email">
                                    <input type="email" placeholder="Email Addres">
                                    <button type="submit"><i class="fa fa-send"></i></button>
                                </div>
                                <label>* Personal data will be encrypted</label>
                            </form>

                        </div>
                    </div>

                    <div class="footer__top-blocks">
                        <h1 class="title">Company</h1>
                        <div class="content">
                            <div class="socials">
                                <a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" title="instagram"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of .footer__top -->

        <!-- Start of .footer__bottom -->
        <div class="footer__bottom">
            <p>Copyright &copy; {{ date('Y') }} Hilltop Medical Technology | Privacy Policy</p>
        </div>
        <!-- End of .footer__bottom -->

    </footer>
    <!-- End of .footer -->

</div>

<!------------------------------------------------------------------------>

<!-- scroll top - to top page -->
<div class="to-top" id="scrollUp"><i class="fa fa-angle-up"></i></div>

<!-- Popup Form -->
<div class="popup-form">
    <div class="inner-block">
        <span class="popup-form-close" id="popup-form-close">&times;</span>
        <div class="img">
            <img src="{{ asset('main/images/jpg/popup-form.jpg') }}">
        </div>
        <form>
            <h1 class="section-title">make an appointment</h1>
            <div class="input-box">
                <label for="popup-name">Name *</label>
                <input type="text" id="popup-name" required>
            </div>

            <div class="input-box">
                <label for="popup-email">Email *</label>
                <input type="text" id="popup-email" required>
            </div>

            <div class="input-box">
                <label for="popup-phone">Phone *</label>
                <input type="tel" id="popup-phone" required>
            </div>

            <div class="select-box">
                <i class="fa fa-angle-down"></i>
                <select>
                    <option selected>Department</option>
                    <option selected>Department2</option>
                    <option selected>Department3</option>
                    <option selected>Department4</option>
                </select>
            </div>
            <button type="submit" class="btn btn-2_pink">send</button>
        </form>
    </div>
</div>

<!-- Scripts + Jquery plagins -->

<!-- .preloader  -->
<script src="{{ asset('main/js/my-preloader.js') }}"></script>

<!-- jQuery -->
<script src="{{ asset('main/js/jQuery-3.4.1.js') }}"></script>

<!-- wow js animation -->
<!-- <script src="./js/wow.min.js"></script> -->

<!-- owl-carousel js -->
<script src="{{ asset('main/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('main/js/carousel.js') }}"></script>

<!-- fancybox 3 js -->
<script src="{{ asset('main/js/jquery.fancybox.js') }}"></script>

<!-- Counter up -->
<script src="{{ asset('main/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('main/js/jquery.countup.min.js') }}"></script>

<!-- bootstrap js -->
<script src="{{ asset('main/js/bootstrap.min.js') }}"></script>

<!-- customer js -->
<script src="{{ asset('main/js/index.js') }}"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
