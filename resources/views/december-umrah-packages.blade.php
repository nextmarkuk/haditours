@extends('layouts.master')
@section('meta')
    <title>Trusted Islamic Travel Agency in the UK for Umrah Services</title>
    <meta name="description" content="Get Umrah services from a trusted Islamic travel agency in London, UK. We offer all-inclusive Umrah packages for families, groups, and individuals.">
@endsection
@section('content')
@include('partials.search-banner')
    <!--slider section End-->
    <div class="page-content">

        <div class="container">

            <p>
        </div>
    </div>
    <section class="featuredPackages">
        <div class="container">

            <div class="packagesCarousel withoutCarousel">
                <div class="featuredPackagesUid  owl-carousel owl-loaded owl-drag DisableCarousel">
                    <div class="umrah-headings">
                        <h4>All-inclusive December Umrah Packages</h4>
                    </div>
                    <div class="row">
                        <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                            <div class="mainPackage">
                                <div class="mainPackageImage">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}"><img class="img-fluid"
                                            loading="lazy" width="336" height="279"
                                            src="{{asset('assets/media/umrah/00-min%20%2836%29.webp')}}"
                                            alt="4 Star 10 Nights December Umrah Package"></a>
                                </div>
                                <div class="mainPackageDesc">
                                    <div class="package-heading">
                                        <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}">4 Star 10 Nights December Umrah Package</a></p>
                                        <div class="stars">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS)">
                                            <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (5 NIGHTS)">
                                            <div class="icon-text">MADINA (5 NIGHTS) <br> EMAAR TAIBAH</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 br-b d-flex justify-content-between px-4">
                                            <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                            <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                            <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                            <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 d-flex justify-content-between px-4">
                                            <span class="price">&pound; 800 <sub>/ pp</sub></span>
                                            <a class="viewMainPackage"
                                                href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}"><span><img loading="lazy"
                                                        width="9" height="11" class="svg" src="package-arrow.svg"
                                                        alt="package arrow"></span>View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                            <div class="mainPackage">
                                <div class="mainPackageImage">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}"><img class="img-fluid"
                                            loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%285%29.webp')}}"
                                            alt="4 Star 14 Nights December Umrah Package"></a>
                                </div>
                                <div class="mainPackageDesc">
                                    <div class="package-heading">
                                        <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}">4 Star 14 Nights December Umrah Package</a></p>
                                        <div class="stars">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS)">
                                            <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (7 NIGHTS)">
                                            <div class="icon-text">MADINA (7 NIGHTS) <br> EMAAR TAIBAH</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 br-b d-flex justify-content-between px-4">
                                            <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                            <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                            <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                            <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 d-flex justify-content-between px-4">
                                            <span class="price">&pound; 900 <sub>/ pp</sub></span>
                                            <a class="viewMainPackage"
                                                href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}"><span><img loading="lazy"
                                                        width="9" height="11" class="svg" src="package-arrow.svg"
                                                        alt="package arrow"></span>View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                            <div class="mainPackage">
                                <div class="mainPackageImage">
                                    <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><img class="img-fluid"
                                            loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0.webp')}}"
                                            alt="3 Star 7 Nights December Umrah Package"></a>
                                </div>
                                <div class="mainPackageDesc">
                                    <div class="package-heading">
                                        <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">3 Star 7 Nights December Umrah Package</a></p>
                                        <div class="stars">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (4 NIGHTS)">
                                            <div class="icon-text">Makkah (4 NIGHTS) <br> AL KISWAH TOWER</div>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (3 NIGHTS)">
                                            <div class="icon-text">MADINA (3 NIGHTS) <br> EMAAR TAIBAH</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 br-b d-flex justify-content-between px-4">
                                            <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                            <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                            <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                            <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 d-flex justify-content-between px-4">
                                            <span class="price">&pound; 955 <sub>/ pp</sub></span>
                                            <a class="viewMainPackage"
                                                href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><span><img loading="lazy"
                                                        width="9" height="11" class="svg" src="package-arrow.svg"
                                                        alt="package arrow"></span>View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                            <div class="mainPackage">
                                <div class="mainPackageImage">
                                    <a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}"><img class="img-fluid"
                                            loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%281%29.webp')}}"
                                            alt="3 Star 10 Nights December Umrah Package"></a>
                                </div>
                                <div class="mainPackageDesc">
                                    <div class="package-heading">
                                        <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">3 Star 10 Nights December Umrah Package</a></p>
                                        <div class="stars">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS)">
                                            <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (5 NIGHTS)">
                                            <div class="icon-text">MADINA (5 NIGHTS) <br> EMAAR TAIBAH</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 br-b d-flex justify-content-between px-4">
                                            <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                            <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                            <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                            <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 d-flex justify-content-between px-4">
                                            <span class="price">&pound; 985 <sub>/ pp</sub></span>
                                            <a class="viewMainPackage"
                                                href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}"><span><img loading="lazy"
                                                        width="9" height="11" class="svg" src="package-arrow.svg"
                                                        alt="package arrow"></span>View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-content">
        <div class="container scroll-page-content page-content-styling">
            </p>

            <p>
        </div>
    </div>
    <section class="featuredPackages">
        <div class="container">

            <div class="packagesCarousel withoutCarousel">
                <div class="featuredPackagesUid  owl-carousel owl-loaded owl-drag DisableCarousel">
                    <div class="umrah-headings">
                        <h4>Special December Umrah Packages</h4>
                    </div>
                    <div class="row">
                        <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                            <div class="mainPackage">
                                <div class="mainPackageImage">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}"><img class="img-fluid"
                                            loading="lazy" width="336" height="279"
                                            src="{{asset('assets/media/umrah/00-min%20%2836%29.webp')}}"
                                            alt="4 Star 10 Nights December Umrah Package"></a>
                                </div>
                                <div class="mainPackageDesc">
                                    <div class="package-heading">
                                        <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}">4 Star 10 Nights December Umrah Package</a></p>
                                    <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                            width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                            loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                            alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg inactive" src="star.svg" alt="package star"></div>
                                    <p class="price">&pound; 800</p>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}"><span><img loading="lazy"
                                                width="9" height="11" class="svg" src="package-arrow.svg"
                                                alt="package arrow"></span>View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                            <div class="mainPackage">
                                <div class="mainPackageImage">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}"><img class="img-fluid"
                                            loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%285%29.webp')}}"
                                            alt="4 Star 14 Nights December Umrah Package"></a>
                                </div>
                                <div class="mainPackageDesc">
                                    <div class="package-heading">
                                        <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}">4 Star 14 Nights December Umrah Package</a></p>
                                        <div class="stars">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS)">
                                            <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (7 NIGHTS)">
                                            <div class="icon-text">MADINA (7 NIGHTS) <br> EMAAR TAIBAH</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 br-b d-flex justify-content-between px-4">
                                            <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                            <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                            <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                            <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 d-flex justify-content-between px-4">
                                            <span class="price">&pound; 900 <sub>/ pp</sub></span>
                                            <a class="viewMainPackage"
                                                href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}"><span><img loading="lazy"
                                                        width="9" height="11" class="svg" src="package-arrow.svg"
                                                        alt="package arrow"></span>View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                            <div class="mainPackage">
                                <div class="mainPackageImage">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}"><img class="img-fluid"
                                            loading="lazy" width="336" height="279"
                                            src="{{asset('assets/media/umrah/00-min%20%288%29.webp')}}"
                                            alt="4 Star 7 Nights December Umrah Package"></a>
                                </div>
                                <div class="mainPackageDesc">
                                    <div class="package-heading">
                                        <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}">4 Star 7 Nights December Umrah Package</a></p>
                                        <div class="stars">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (4 NIGHTS)">
                                            <div class="icon-text">Makkah (4 NIGHTS) <br> AL KISWAH TOWER</div>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (3 NIGHTS)">
                                            <div class="icon-text">MADINA (3 NIGHTS) <br> EMAAR TAIBAH</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 br-b d-flex justify-content-between px-4">
                                            <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                            <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                            <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                            <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 d-flex justify-content-between px-4">
                                            <span class="price">&pound; 1015 <sub>/ pp</sub></span>
                                            <a class="viewMainPackage"
                                                href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}"><span><img loading="lazy"
                                                        width="9" height="11" class="svg" src="package-arrow.svg"
                                                        alt="package arrow"></span>View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                            <div class="mainPackage">
                                <div class="mainPackageImage">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}"><img class="img-fluid"
                                            loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%283%29.webp')}}"
                                            alt="4 Star 10 Nights December Umrah Package"></a>
                                </div>
                                <div class="mainPackageDesc">
                                    <div class="package-heading">
                                        <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}">4 Star 10 Nights December Umrah Package</a></p>
                                        <div class="stars">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS)">
                                            <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (5 NIGHTS)">
                                            <div class="icon-text">MADINA (5 NIGHTS) <br> EMAAR TAIBAH</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 br-b d-flex justify-content-between px-4">
                                            <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                            <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                            <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                            <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 d-flex justify-content-between px-4">
                                            <span class="price">&pound; 1050 <sub>/ pp</sub></span>
                                            <a class="viewMainPackage"
                                                href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}"><span><img loading="lazy"
                                                        width="9" height="11" class="svg" src="package-arrow.svg"
                                                        alt="package arrow"></span>View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-content">
        <div class="container scroll-page-content page-content-styling">
            </p>

            <p>
        </div>
    </div>
    <section class="featuredPackages">
        <div class="container">

            <div class="packagesCarousel withoutCarousel">
                <div class="featuredPackagesUid  owl-carousel owl-loaded owl-drag DisableCarousel">
                    <div class="umrah-headings">
                        <h4>December Holidays Umrah Packages</h4>
                    </div>
                    <div class="row">
                        <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                            <div class="mainPackage">
                                <div class="mainPackageImage">
                                    <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><img class="img-fluid"
                                            loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0.webp')}}"
                                            alt="3 Star 7 Nights December Umrah Package"></a>
                                </div>
                                <div class="mainPackageDesc">
                                    <div class="package-heading">
                                        <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">3 Star 7 Nights December Umrah Package</a></p>
                                        <div class="stars">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (4 NIGHTS)">
                                            <div class="icon-text">Makkah (4 NIGHTS) <br> AL KISWAH TOWER</div>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (3 NIGHTS)">
                                            <div class="icon-text">MADINA (3 NIGHTS) <br> EMAAR TAIBAH</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 br-b d-flex justify-content-between px-4">
                                            <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                            <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                            <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                            <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 d-flex justify-content-between px-4">
                                            <span class="price">&pound; 955 <sub>/ pp</sub></span>
                                            <a class="viewMainPackage"
                                                href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><span><img loading="lazy"
                                                        width="9" height="11" class="svg" src="package-arrow.svg"
                                                        alt="package arrow"></span>View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                            <div class="mainPackage">
                                <div class="mainPackageImage">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}"><img class="img-fluid"
                                            loading="lazy" width="336" height="279"
                                            src="{{asset('assets/media/umrah/00-min%20%288%29.webp')}}"
                                            alt="4 Star 7 Nights December Umrah Package"></a>
                                </div>
                                <div class="mainPackageDesc">
                                    <div class="package-heading">
                                        <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}">4 Star 7 Nights December Umrah Package</a></p>
                                        <div class="stars">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (4 NIGHTS)">
                                            <div class="icon-text">Makkah (4 NIGHTS) <br> AL KISWAH TOWER</div>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (3 NIGHTS)">
                                            <div class="icon-text">MADINA (3 NIGHTS) <br> EMAAR TAIBAH</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 br-b d-flex justify-content-between px-4">
                                            <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                            <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                            <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                            <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 d-flex justify-content-between px-4">
                                            <span class="price">&pound; 1015 <sub>/ pp</sub></span>
                                            <a class="viewMainPackage"
                                                href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}"><span><img loading="lazy"
                                                        width="9" height="11" class="svg" src="package-arrow.svg"
                                                        alt="package arrow"></span>View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                            <div class="mainPackage">
                                <div class="mainPackageImage">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}"><img class="img-fluid"
                                            loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%283%29.webp')}}"
                                            alt="4 Star 10 Nights December Umrah Package"></a>
                                </div>
                                <div class="mainPackageDesc">
                                    <div class="package-heading">
                                        <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}">4 Star 10 Nights December Umrah Package</a></p>
                                        <div class="stars">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS)">
                                            <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (5 NIGHTS)">
                                            <div class="icon-text">MADINA (5 NIGHTS) <br> EMAAR TAIBAH</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 br-b d-flex justify-content-between px-4">
                                            <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                            <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                            <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                            <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 d-flex justify-content-between px-4">
                                            <span class="price">&pound; 1050 <sub>/ pp</sub></span>
                                            <a class="viewMainPackage"
                                                href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}"><span><img loading="lazy"
                                                        width="9" height="11" class="svg" src="package-arrow.svg"
                                                        alt="package arrow"></span>View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                            <div class="mainPackage">
                                <div class="mainPackageImage">
                                    <a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}"><img
                                            class="img-fluid" loading="lazy" width="336" height="279"
                                            src="{{asset('assets/media/umrah/3%20Star%2012%20Nights%20December%20Holidays%20Umrah%20Package.jpg')}}"
                                            alt="3 Star 12 Nights December Holidays Umrah Package"></a>
                                </div>
                                <div class="mainPackageDesc">
                                    <div class="package-heading">
                                        <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}">3 Star 12 Nights December Holidays Umrah Package</a></p>
                                        <div class="stars">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                            <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (6 NIGHTS)">
                                            <div class="icon-text">Makkah (6 NIGHTS) <br> AL KISWAH TOWER</div>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (6 NIGHTS)">
                                            <div class="icon-text">MADINA (6 NIGHTS) <br> EMAAR TAIBAH</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 br-b d-flex justify-content-between px-4">
                                            <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                            <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                            <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                            <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 px-4">
                                        <div class="col-12 d-flex justify-content-between px-4">
                                            <span class="price">&pound; 948 <sub>/ pp</sub></span>
                                            <a class="viewMainPackage"
                                                href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}"><span><img loading="lazy"
                                                        width="9" height="11" class="svg" src="package-arrow.svg"
                                                        alt="package arrow"></span>View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-content">
        <div class="container scroll-page-content page-content-styling">
            </p>

            <p>&nbsp;</p>

            <h2>December Umrah Packages</h2>

            <p>December isn&#39;t only about decorations and songs for the holidays. It&#39;s also important for
                Muslims. The start of December begins the holiday season with everyone on break. So, just like how
                Christians have their celebration, Muslims who live in the UK also get a chance to connect more with
                their beliefs.</p>

            <p>With all the free time during the holiday season, many Muslims want to go to Umrah to feel closer to God.
                People look for December Umrah packages to connect with their faith and show devotion. And that&#39;s
                why Hajj Umrah Hub is here to help search for the ideal package for your Umrah in December.</p>

            <h2>From Luxury to Cheap December Umrah Packages</h2>

            <p>At Hajj Umrah Hub, we know that each pilgrim is unique. Therefore, we are happy to provide different
                choices for Umrah in December, from luxury to more affordable ones. We believe that your religious
                journey shouldn&#39;t be limited by how much money you have. So, we&#39;ve put together various options
                that fit what you like and can afford.</p>

            <p>Firstly, for all those wanting a lavish experience, our luxury December Umrah packages are made to be
                even better than you might hope. You&#39;ll get to stay in the best hotels, fly in the best seats, and
                have excellent service. Everything will be taken care of just for you, so you can feel comfortable while
                making your important pilgrimage.</p>

            <p>But we firmly believe that everyone should have the chance to experience the blessings of Umrah, no
                matter their budget. So, our cheap December Umrah packages are carefully created to help you fulfil your
                dream of going on a pilgrimage without spending too much. Our primary focus is on making your journey
                memorable. We work hard to provide options that are friendly to your budget while keeping the experience
                meaningful.</p>

            <p>Whichever package you select, one thing remains constant: your journey of a lifetime. At Hajj Umrah Hub,
                we&#39;re happy to be a part of this significant experience for you. We&#39;ll help you all along the
                journey. We&#39;re committed to ensuring your pilgrimage is special and something you&#39;ll never
                forget.</p>

            <h2>Airlines Offering Flights to Saudi Arabia from UK</h2>

            <ul>
                <li>British Airways</li>
                <li>Saudi Arabian Airlines</li>
                <li>Turkish Airlines</li>
                <li>Emirates</li>
                <li>Qatar Airways</li>
                <li>Middle Eastern Airlines</li>
                <li>Royal Jordanian</li>
                <li>Kuwait Airways</li>
                <li>Egypt Air</li>
            </ul>

            <h2>Services Included in December Umrah Packages</h2>

            <p>Your Umrah should be easy and comfortable. So, we carefully design our packages to include lots of
                different services. This way, you can be confident that your experience is perfect.</p>

            <ul>
                <li><strong>Umrah Visa:</strong>&nbsp;Getting a visa for your Umrah might seem challenging, but not if
                    you select one of our Umrah packages. Our staff will guide you through the application process to
                    ensure you have all the correct papers. This allows you to focus on getting ready for your spiritual
                    journey without stress.</li>
                <li><strong>Flights:</strong>&nbsp;Every traveller is unique, so we have many flight options for your
                    schedule and preferences. We provide everything, whether you like direct or connecting flights,
                    economy or business class. We aim to make your journey to Makkah easy and problem-free.</li>
                <li><strong>Accommodation:</strong>&nbsp;Rest is essential for a successful journey, so we make sure you
                    get good rest. You can stay in luxury hotels or cosy places close to the holy sites. Our packages
                    have different choices, so you can pick what you like. We know that sleeping well at night helps you
                    feel more connected spiritually, so we work hard to find the best accommodations.</li>
                <li><strong>Transportation:</strong>&nbsp;To further improve your experience, we also give you the
                    choice of adding transportation to your package. We provide transportation to your hotel from the
                    airport and vice versa.</li>
                <li><strong>Ziarat:</strong>&nbsp;Lastly, if you want to learn about the history of the holy sites, we
                    provide optional Ziarat tours. So, you can discover more information about the past of Islam.</li>
            </ul>

            <h3>On a Final Note</h3>

            <p>Umrah is about feeling close to your faith and finding inner peace. It&#39;s a chance to make memories,
                form strong bonds, and reflect on your life in busy cities and calm mosques. It&#39;s a way to honour a
                journey that has personal significance for everyone.</p>

            <p>So, don&#39;t miss this chance to experience our December Umrah Packages. Book your spot now and prepare
                for a journey that will touch your heart and leave you with memories that will last a lifetime.</p>

            <h2>FAQs</h2>

            <h3>Do December Umrah packages from the UK have direct flights?</h3>

            <p>If you choose our December Umrah packages from London, you can fly directly with British Airways and
                Saudi Arabian Airlines.</p>

            <h3>Can I change my December Umrah package to include a hotel of my choice?</h3>

            <p>Our Umrah packages are customisable, so feel free to add any hotels you want.</p>

            <h3>What documents should I provide at Hajj Umrah Hub for an Umrah visa?</h3>

            <ul>
                <li>Filled Umrah Visa Application Form</li>
                <li>Passport Size Photograph</li>
                <li>Valid Passport</li>
                <li>Meningitis Vaccination Proof</li>
            </ul>

            <h3>How early should I book my Umrah package for the best deals?</h3>

            <p>Booking your Umrah package 3 to 4 months in advance is a good idea for the best prices and availability.
                This helps us get you the finest accommodations and travel options that suit your requirements.</p>

            <h3>How long is an Umrah package?</h3>

            <p>Our usual Umrah packages last for 7, 10 or 14 nights. But if you&#39;d like to extend it for 21 or 30
                days, we can arrange that.</p>

        </div>

    </div>
@endsection