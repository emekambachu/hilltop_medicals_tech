@extends('layouts.main')

@section('title')
    Services
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
            <h1 class="section-title">Services</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Services</li>
            </ol>
        </div>
    </header>

    <section class="departments-3 main-blog">
        <div class="main-blog__bg">
            <div class="icon">
                <img src="{{ asset('main/images/png-shapes/form-shape.png') }}">
            </div>
            <div class="icon">
                <img src="{{ asset('main/images/png-shapes/specialists__left-bottom-shape.png') }}">
            </div>
        </div>
        <div class="container">
            <div class="departments-3__items">

                <a href="" class="item">
                    <div class="img">
                        <img src="{{ asset('main/medical/central_c_air_compact_piston_15.jpg') }}">
                    </div>
                    <h1 class="title">Medical Supplies</h1>
                    <p class="text">We are the information backbone for most of the largest integrated health care technologies.</p>
                </a>

                <a href="" class="item">
                    <div class="img">
                        <img src="{{ asset('main/medical/hospital-infusion-pump-500x500.jpg') }}">
                    </div>
                    <h1 class="title">Logistics</h1>
                    <p class="text">With our reliable logistics services, your products and mdical apliances are delivered at your doorstep</p>
                </a>

                <a href="" class="item">
                    <div class="img">
                        <img src="{{ asset('main/medical/hospital-stretcher-500x500.jpg') }}">
                    </div>
                    <h1 class="title">Care Management</h1>
                    <p class="text">Identify outreach and care gaps opportunities with custom patient cohorts across hundreds of clinical and decision support fields.</p>
                </a>

                <a href="" class="item">
                    <div class="img">
                        <img src="{{ asset('main/Healthcare/endoscopy-equipment-500x500.jpg') }}">
                    </div>
                    <h1 class="title">Health Diagnostics</h1>
                    <p class="text">Improve health performance with our analytics technologies provide greater flexibility to analyze raw data so you can be more efficient and focus on practice profitabilit.</p>
                </a>
                <a href="" class="item">
                    <div class="img">
                        <img src="{{ asset('main/Healthcare/surgical microscope1.jpg') }}">
                    </div>
                    <h1 class="title">24 Hours Professional Services</h1>
                    <p class="text">You get designated 24/7 support, system monitoring, and regular check-ups to ensure your long-term success and improvement.</p>
                </a>

                <a href="" class="item">
                    <div class="img">
                        <img src="{{ asset('main/Healthcare/ultrasound_machine.jpg') }}">
                    </div>
                    <h1 class="title">Technology Consultation</h1>
                    <p class="text">Common tasks are streamlined to get the job done fast. Our highly experienced staffs keep you abreast of further developments and guidiance.</p>
                </a>

            </div>
        </div>
    </section>

    <section class="medical-center-2" >
        <div class="container">
            <div class="img">
                <img src="{{ asset('main/home/h_medical.jpg') }}">
            </div>
            <div class="content">
                <p class="text">We offer specialized service for maintenance, repairs and calibration of a wide range of laboratory, hospital, neonatal and veterinary equipment. We wish to bring complete satisfaction through our products, people and services we offer, to ensure our clients are empowered to make the best possible decisions in their field of expertise.</p>
                <p>
                    Our Research expands patient access to groundbreaking clinical trials. These trials pave the way for new forms of prevention, diagnosis and treatment. OHRI welcomes industry-sponsored research in partnership with drug and device companies looking to test their investigational products at a large facility associated with excellent clinicians.<br>
                    Academic research focuses on educating and training our physicians and clinicians to develop and execute scholarly projects that enhance their skills, knowledge and leadership in advancing healthcare. OhioHealth also provides an ideal setting for federal and foundation funded research.
                </p>

            </div>
        </div>
    </section>

    <!-- End of .emergency-call -->
    <section class="emergency-call-2">
        <div class="emergency-call-2__bg"></div>
        <div class="container">
            <h3>Need an emengency help?</h3>
            <h1 class="section-title section-title_60 section-title_white">we care about you health!<br>call us now
            </h1>
            <div class="call">
                <div class="icon">
                    <svg width="24.375" height="24.343" viewBox="0 0 24.375 24.343">
                        <path id="phone.svg" class="cls-2" d="M831.817,365.478a10.864,10.864,0,0,0-10.852-10.851v-1.55a12.416,12.416,0,0,1,12.4,12.4h-1.551Zm-6.2,0a4.656,4.656,0,0,0-4.651-4.651v-1.55a6.208,6.208,0,0,1,6.2,6.2h-1.55Zm-4.651-9.3a9.312,9.312,0,0,1,9.3,9.3h-1.551a7.759,7.759,0,0,0-7.751-7.751v-1.55Zm3.779,13.4,1.938-1.937a0.578,0.578,0,0,1,.064-0.058,1.924,1.924,0,0,1,2.511-.006,0.72,0.72,0,0,1,.071.064l3.488,3.487a1.871,1.871,0,0,1,0,2.646l-2.325,2.326a5.527,5.527,0,0,1-3.942,1.314c-3.14,0-7.446-1.609-11.712-5.8l0.41-.418-0.417.41a19.929,19.929,0,0,1-5.5-9.163c-0.666-2.764-.288-5.19,1.01-6.489l2.325-2.325a1.917,1.917,0,0,1,2.647,0l3.488,3.488a0.8,0.8,0,0,1,.067.077,1.879,1.879,0,0,1-.009,2.5c-0.018.022-.038,0.043-0.058,0.064l-1.938,1.937a1.419,1.419,0,0,0,0,2l2.938,2.937h0l2.94,2.94A1.42,1.42,0,0,0,824.744,369.578Zm6.522,3.554,0.454-.454a0.322,0.322,0,0,0,0-.454l-3.434-3.433c-0.017-.015-0.034-0.029-0.049-0.045a0.277,0.277,0,0,0-.464,0c-0.015.014-.03,0.029-0.046,0.042l-0.4.4ZM817.25,359.116l0.4-.4a0.447,0.447,0,0,1,.042-0.045,0.328,0.328,0,0,0,0-.464,0.652,0.652,0,0,1-.05-0.055l-3.429-3.429a0.323,0.323,0,0,0-.455,0l-0.454.454Zm1.456,8.621h0l-2.94-2.94a2.97,2.97,0,0,1,0-4.2l0.388-.388-3.943-3.941-0.775.774c-0.9.9-1.129,2.827-.6,5.029A20.532,20.532,0,0,0,824.366,375.6c2.2,0.531,4.129.3,5.029-.6l0.775-.775-3.942-3.942-0.388.388a2.971,2.971,0,0,1-4.2,0Z" transform="translate(-809 -353.063)"></path></svg>
                </div>
                <a href="tel:+19174102553">+19174102553, +61488894091</a>
            </div>
            <a href="" class="btn btn-2_pink">book a consultation</a>
        </div>
    </section>
@endsection
