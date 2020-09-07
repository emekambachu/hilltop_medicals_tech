@extends('layouts.main')

@section('title')
    Our Products
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
            <h1 class="section-title">Our <span>Products</span></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Our Products</li>
            </ol>
        </div>
    </header>

    <section class="shop main-blog">
        <div class="main-blog__bg">
            <div class="icon">
                <img src="{{ asset('main/images/png-shapes/form-shape.png') }}">
            </div>
            <div class="icon">
                <img src="{{ asset('main/images/png-shapes/specialists__left-bottom-shape.png') }}">
            </div>
        </div>
        <div class="container container_left-sidebar">
            <div class="article">
                <div class="shop-block">

                    <div class="shop-block__card">

                        <a href="" class="shop-block__card-item new">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/1823255.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Steel Surgical Tools</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item sale">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/5022560.png') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Black Leather Surgery Bed</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/a200dc_aim-200-surgical-light-double-ceiling-mount.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Double Ceiling Surgical Light</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/electro-surgical-unit-500x500.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Electronic Surgical Unit</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/endoscopy-equipment-500x500.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Endoscopy Equipment</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/flexible endoscopes.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Flexible Endoscope</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/Hill-Rom_Advance_Hospital_Bed_large.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Advanced Hospital Bed</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/Mindray-A3-Anesthesia-Machine-For-Sale-2.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">A3 Anastasia Machine</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/Olympus-CV-180-Video-Endoscopy-System.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Video Endoscopy System</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/patient-monitor-500.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Patient Monitor</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/Skytron-Aurora-LED-Surgical-Light-Hybrid-OR.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Surgical Light Hybrid OR</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/Steris-5085.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Series 5085 Hospital Bed</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/surgical microscope1.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Surgical Microscope</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/patient_warmer.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Patient Warmer</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="" class="shop-block__card-item">
                            <div class="img">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"><path id="arrow-right-hover.svg" class="cls-2" d="M3302.09,1957v-1h-22.83v1h22.83Zm-4.35,4.2,0.82,0.79,4.89-4.71,0.81-.78-0.81-.79-4.89-4.7-0.82.78,4.89,4.71Z" transform="translate(-3279.25 -1951)"></path></svg>
                                </div>
                                <img src="{{ asset('main/products/Infusion-Pumps_lg1.jpg') }}">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <h1 class="name">Infusion Pumps</h1>
                                </div>
                                <div class="basket">
                                    <svg width="25.16" height="25.125" viewBox="0 0 25.16 25.125">
                                        <path id="bag.svg" class="cls-2" d="M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z" transform="translate(-1024 -427.875)"></path></svg>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
            <div class="sidebar">
                <div class="shop-sidebar">
                    <div class="shop-sidebar__filter-price">
                        <h1 class="title">Filter by Price</h1>
                        <form class="filter-price">
                            <input type="range" id="input-range-left" min="0" max="100" value="25">
                            <input type="range" id="input-range-right" min="0" max="100" value="75">
                            <div class="show-range">
                                <div class="track"></div>
                                <div class="range" style="left: 25%; right: 25%;"></div>
                                <div class="thumb left" style="left: 25%;">
                                    <span class="range-value left">$<span>25</span></span>
                                </div>
                                <div class="thumb right" style="right: 25%;">
                                    <span class="range-value right">$<span>75</span></span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="shop-sidebar__new-arrivals">
                        <h1 class="title">New Arrivales</h1>
                        <ul class="list">
                            <li class="list-item">
                                <a href="#">
                                    <div class="img">
                                        <img src="{{ asset('main/products/Infusion-Pumps_lg1.jpg') }}">
                                    </div>
                                    <div class="content">
                                        <span class="name">Infusion Pumps</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="#">
                                    <div class="img">
                                        <img src="{{ asset('main/products/Skytron-Aurora-LED-Surgical-Light-Hybrid-OR.jpg') }}">
                                    </div>
                                    <div class="content">
                                        <span class="name">Surgical Light Hybrid</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="#">
                                    <div class="img">
                                        <img src="{{ asset('main/products/flexible endoscopes.jpg') }}">
                                    </div>
                                    <div class="content">
                                        <span class="name">Flexible Endoscope</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="#">
                                    <div class="img">
                                        <img src="{{ asset('main/products/Mindray-A3-Anesthesia-Machine-For-Sale-2.jpg') }}">
                                    </div>
                                    <div class="content">
                                        <span class="name">A3 Anastasia Machine</span>
                                    </div>
                                </a>
                            </li>

                        </ul>
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
