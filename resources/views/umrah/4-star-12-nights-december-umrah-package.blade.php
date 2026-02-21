@extends('layouts.master')
@section('meta')
    <title>Trusted Islamic Travel Agency in the UK for Umrah Services</title>
    <meta name="description" content="Get Umrah services from a trusted Islamic travel agency in London, UK. We offer all-inclusive Umrah packages for families, groups, and individuals.">
@endsection
@section('content')
    <style>
        .package-slick-carousel img {
            max-height: 300px;
            width: 100%;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .package-slick-carousel {
            min-height: 300px; /* Pre-reserve space to prevent layout shift */
            background: #eee;
            border-radius: 10px 10px 0 0;
            overflow: hidden;
        }

        /* Prevent images from stacking vertically during page load before JS init */
        .package-slick-carousel:not(.slick-initialized) > div:not(:first-child) {
            display: none;
        }

        .package-slick-carousel:not(.slick-initialized) > div:first-child img {
            height: 300px;
        }

        .package-descrip {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        @media (max-width: 991px) {
            .package-slick-carousel, .package-slick-carousel img {
                max-height: 250px;
                min-height: 250px;
            }
        }
    </style>
    <section class="package-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="package-gallery">
                        <div class="package-slick-carousel">
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/1%20%285%29.webp')}}"
                                    alt="4 Star 12 Nights December Umrah Package"></div>
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/2%20%285%29.webp')}}"
                                    alt="4 Star 12 Nights December Umrah Package"></div>
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/3%20%285%29.webp')}}"
                                    alt="4 Star 12 Nights December Umrah Package"></div>
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/4%20%285%29.webp')}}"
                                    alt="4 Star 12 Nights December Umrah Package"></div>
                        </div>
                        <div class="slick-nav-container">
                            <div class="slick-carousel-nav">
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/1%20%285%29.webp')}}"
                                        alt="4 Star 12 Nights December Umrah Package"></div>
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/2%20%285%29.webp')}}"
                                        alt="4 Star 12 Nights December Umrah Package"></div>
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/3%20%285%29.webp')}}"
                                        alt="4 Star 12 Nights December Umrah Package"></div>
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/4%20%285%29.webp')}}"
                                        alt="4 Star 12 Nights December Umrah Package"></div>
                            </div>
                            <div class="slick-arrow left"><img class='svg' src='package-arrow.svg'></div>
                            <div class="slick-arrow right"><img class='svg' src='package-arrow.svg'></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="package-descrip">
                        <h1 class="heading">4 Star 12 Nights December Umrah Package</h1>
                        <p class="tagline">Perform Umrah with Best Price</p>
                        <div class="pkg-nights">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="nights">
                                        <div class="row no-gutters align-items-start">
                                            <div class="col-8">
                                                <p>Makkah Hotel Nights <small>VOCO MAKKAH </small></p>
                                            </div>
                                            <div class="col-4">
                                                <img class="svg" src="weather.svg" alt="weather icon"><strong
                                                    class="days">6</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="nights">
                                        <div class="row no-gutters align-items-start">
                                            <div class="col-8">
                                                <p>Madinah Hotel Nights <small>Saja Al Medina Hotel</small></p>
                                            </div>
                                            <div class="col-4">
                                                <img class="svg" src="weather.svg" alt="weather icon"><strong
                                                    class="days">6</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pkg-facilities">
                            <div class="facility">
                                <div class="facility-img">
                                    <img src="plane.svg" alt="Flight" class="svg">
                                </div>
                                <span>Flight</span>
                            </div>
                            <div class="facility">
                                <div class="facility-img">
                                    <img src="visa.svg" alt="Visa" class="svg">
                                </div>
                                <span>Visa</span>
                            </div>
                            <div class="facility">
                                <div class="facility-img">
                                    <img src="bed.svg" alt="Makkah Hotel" class="svg">
                                </div>
                                <span>Makkah Hotel</span>
                            </div>
                            <div class="facility">
                                <div class="facility-img">
                                    <img src="bed.svg" alt="Medinah Hotel" class="svg">
                                </div>
                                <span>Medinah Hotel</span>
                            </div>
                        </div>
                        <div class="pkg-star">
                            <div class="stars">
                                <img class="svg" src="star.svg" alt="package star">
                                <img class="svg" src="star.svg" alt="package star">
                                <img class="svg" src="star.svg" alt="package star">
                                <img class="svg" src="star.svg" alt="package star">
                                <img class="svg inactive" src="star.svg" alt="package star">
                            </div>
                            <span>4-Star</span>
                        </div>
                        <div class="price">
                            <p>Price <span>&pound; 1065</span></p>
                        </div>
                        <div class="pkg-button">
                            <a href="#packageInquiry" class="customBtn bookNow"><span class="image"><img class="svg"
                                        src="package-arrow.svg" alt="arrow"></span><span class="text">Book
                                    Now</span></a>
                            <a href="tel:0203 970 0002" class="customBtn callNow"><span class="image"><img class="svg"
                                        src="headphones.svg" alt="phone"></span><span class="text">0203 970
                                    0002</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--package detail section End-->
@endsection