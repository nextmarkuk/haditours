@extends('layouts.master')
@section('meta')
    <title>Trusted Islamic Travel Agency in the UK for Umrah Services</title>
    <meta name="description" content="Get Umrah services from a trusted Islamic travel agency in London, UK. We offer all-inclusive Umrah packages for families, groups, and individuals.">
@endsection
@section('content')
    <!--package detail section Start-->
    <section class="package-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-6">
                    <div class="package-gallery">
                        <div class="package-slick-carousel">
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/2%20%2811%29.webp')}}"
                                    alt="3 Star 14 Nights Umrah Package"></div>
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/3%20%2811%29.webp')}}"
                                    alt="3 Star 14 Nights Umrah Package"></div>
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/4%20%2811%29.webp')}}"
                                    alt="3 Star 14 Nights Umrah Package"></div>
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/5%20%2810%29.webp')}}"
                                    alt="3 Star 14 Nights Umrah Package"></div>
                        </div>
                        <div class="slick-nav-container">
                            <div class="slick-carousel-nav">
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/2%20%2811%29.webp')}}"
                                        alt="3 Star 14 Nights Umrah Package"></div>
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/3%20%2811%29.webp')}}"
                                        alt="3 Star 14 Nights Umrah Package"></div>
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/4%20%2811%29.webp')}}"
                                        alt="3 Star 14 Nights Umrah Package"></div>
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/5%20%2810%29.webp')}}"
                                        alt="3 Star 14 Nights Umrah Package"></div>
                            </div>
                            <div class="slick-arrow left"><img class='svg' src='package-arrow.svg'></div>
                            <div class="slick-arrow right"><img class='svg' src='package-arrow.svg'></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-xl-6">
                    <div class="package-descrip">
                        <h1 class="heading">3 Star 14 Nights Umrah Package</h1>
                        <p class="tagline">Perform Umrah with Best Price</p>
                        <div class="pkg-nights">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="nights">
                                        <div class="row no-gutters align-items-start">
                                            <div class="col-8">
                                                <p>Makkah Hotel Nights <small>Emaar al khalil</small></p>
                                            </div>
                                            <div class="col-4">
                                                <img class="svg" src="weather.svg" alt="weather icon"><strong
                                                    class="days">7</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="nights">
                                        <div class="row no-gutters align-items-start">
                                            <div class="col-8">
                                                <p>Madinah Hotel Nights <small>Odst al madina</small></p>
                                            </div>
                                            <div class="col-4">
                                                <img class="svg" src="weather.svg" alt="weather icon"><strong
                                                    class="days">7</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pkg-facilities">
                            <div class="facility">
                                <div class="facility-img">
                                    <img src="bed.svg" alt="Makkah Hotel" class="svg">
                                </div>
                                <span>Makkah Hotel</span>
                            </div>
                            <div class="facility">
                                <div class="facility-img">
                                    <img src="bed.svg" alt="Madinah Hotel" class="svg">
                                </div>
                                <span>Madinah Hotel</span>
                            </div>
                            <div class="facility">
                                <div class="facility-img">
                                    <img src="visa.svg" alt="Visa" class="svg">
                                </div>
                                <span>Visa</span>
                            </div>
                        </div>
                        <div class="pkg-star">
                            <div class="stars">
                                <img class="svg" src="star.svg" alt="package star">
                                <img class="svg" src="star.svg" alt="package star">
                                <img class="svg" src="star.svg" alt="package star">
                                <img class="svg inactive" src="star.svg" alt="package star">
                                <img class="svg inactive" src="star.svg" alt="package star">
                            </div>
                            <span>3-Star</span>
                        </div>
                        <div class="price">
                            <p>Price <span>&pound; 829</span></p>
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