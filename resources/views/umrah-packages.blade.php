@extends('layouts.master')
@section('meta')
    <title>Umrah Packages | affordable all-inclusive Deals from UK</title>
    <meta name="description" content="Cheap Umrah Packages from UK for families, groups and individual pilgrims. Cheap all-inclusive Umrah Deals with flights, hotels, visas, and transportation.">
@endsection
@section('content')
@include('partials.search-banner')
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
                    <h4>All-inclusive Cheap Umrah Packages</h4>
                    <p>03 Star Umrah Packages</p>
                </div>
                <div class="row">
                    <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/Madinah%20%284%29.webp')}}"
                                        alt="3 Star 7 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title">
                                        <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">3 Star 7 Nights Umrah Package</a>
                                    </p>
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
                                        <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS)">
                                        <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div>
                                    </div>
                                    <div class="col-6 d-flex">
                                        <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (4 NIGHTS)">
                                        <div class="icon-text">MADINA (4 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                        <span class="price">&pound; 699 <sub>/ pp</sub></span>
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
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/3%20Star%2010%20Nights%20Economy%20Umrah%20Package.webp')}}"
                                        alt="3 Star 10 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title">
                                        <a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">3 Star 10 Nights Umrah Package</a>
                                    </p>
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
                                        <span class="price">&pound; 749 <sub>/ pp</sub></span>
                                        <a class="viewMainPackage"
                                            href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}"><span><img loading="lazy"
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
                                <a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/madinah-%20%287%29.webp')}}"
                                        alt="3 Star 12 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title">
                                        <a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}">3 Star 12 Nights Umrah Package</a>
                                    </p>
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
                                        <span class="price">&pound; 789 <sub>/ pp</sub></span>
                                        <a class="viewMainPackage"
                                            href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}"><span><img loading="lazy"
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
                                <a href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/tawaf%20%281%29.webp')}}"
                                        alt="3 Star 14 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title">
                                        <a href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}">3 Star 14 Nights Umrah Package</a>
                                    </p>
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
                                        <span class="price">&pound; 829 <sub>/ pp</sub></span>
                                        <a class="viewMainPackage"
                                            href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}"><span><img loading="lazy"
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
<section class="featuredPackages">
    <div class="container">

        <div class="packagesCarousel withoutCarousel">
            <div class="featuredPackagesUid  owl-carousel owl-loaded owl-drag DisableCarousel">
                <div class="umrah-headings">
                    <p>04 Star Umrah Packages</p>
                </div>
                <div class="row">
                    <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/makkah-saudi-arabia%20%283%29.webp')}}"
                                        alt="4 Star 7 Nights Umrah Packages"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title">
                                        <a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}">4 Star 7 Nights Umrah Packages</a>
                                    </p>
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
                                        <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS)">
                                        <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div>
                                    </div>
                                    <div class="col-6 d-flex">
                                        <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (4 NIGHTS)">
                                        <div class="icon-text">MADINA (4 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                        <span class="price">&pound; 749 <sub>/ pp</sub></span>
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
                                        loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/tawaf.webp')}}"
                                        alt="4 Star 10 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title">
                                        <a href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}">4 Star 10 Nights Umrah Package</a>
                                    </p>
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
                                        <span class="price">&pound; 799 <sub>/ pp</sub></span>
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
                                <a href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/Dua-at-makkah%20%281%29.webp')}}"
                                        alt="4 Star 12 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title">
                                        <a href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}">4 Star 12 Nights Umrah Package</a>
                                    </p>
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
                                        <span class="price">&pound; 849 <sub>/ pp</sub></span>
                                        <a class="viewMainPackage"
                                            href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}"><span><img loading="lazy"
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
                                <a href="{{ route('umrahDetail', ['slug' => '4-star-14-nights-december-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/makkah-saudi-arabia%20%282%29.webp')}}"
                                        alt="5 Star 14 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title">
                                        <a href="{{ route('umrahDetail', ['slug' => '4-star-14-nights-december-umrah-package']) }}">5 Star 14 Nights Umrah Package</a>
                                    </p>
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
                                        <span class="price">&pound; 899 <sub>/ pp</sub></span>
                                        <a class="viewMainPackage"
                                            href="{{ route('umrahDetail', ['slug' => '4-star-14-nights-december-umrah-package']) }}"><span><img
                                                    loading="lazy" width="9" height="11" class="svg" src="package-arrow.svg"
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
<section class="featuredPackages">
    <div class="container">

        <div class="packagesCarousel withoutCarousel">
            <div class="featuredPackagesUid  owl-carousel owl-loaded owl-drag DisableCarousel">
                <div class="umrah-headings">
                    <p>05 Star Umrah Packages</p>
                </div>
                <div class="row">
                    <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/tawaf.webp')}}"
                                        alt="5 Star 10 nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title">
                                        <a href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}">5 Star 10 nights Umrah Package</a>
                                    </p>
                                    <div class="stars">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
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
                                        <span class="price">&pound; 999 <sub>/ pp</sub></span>
                                        <a class="viewMainPackage"
                                            href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}"><span><img loading="lazy"
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
                                <a href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/madinah-%20%288%29.webp')}}"
                                        alt="5 Star 12 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title">
                                        <a href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}">5 Star 12 Nights Umrah Package</a>
                                    </p>
                                    <div class="stars">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
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
                                        <span class="price">&pound; 1045 <sub>/ pp</sub></span>
                                        <a class="viewMainPackage"
                                            href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}"><span><img loading="lazy"
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
                                <a href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/makkah-kaabah%20%281%29.webp')}}"
                                        alt="5 Star 7 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title">
                                        <a href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}">5 Star 7 Nights Umrah Package</a>
                                    </p>
                                    <div class="stars">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-6 d-flex">
                                        <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS)">
                                        <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div>
                                    </div>
                                    <div class="col-6 d-flex">
                                        <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (4 NIGHTS)">
                                        <div class="icon-text">MADINA (4 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                        <span class="price">&pound; 1049 <sub>/ pp</sub></span>
                                        <a class="viewMainPackage"
                                            href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}"><span><img loading="lazy"
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
                                <a href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/makkah-kaabah.webp')}}"
                                        alt="5 Star 14 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title">
                                        <a href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}">5 Star 14 Nights Umrah Package</a>
                                    </p>
                                    <div class="stars">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                        <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
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
                                        <span class="price">&pound; 1199 <sub>/ pp</sub></span>
                                        <a class="viewMainPackage"
                                            href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}"><span><img loading="lazy"
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

        <h2>Umrah Packages from UK – ATOL Protected & Affordable Umrah Packages
</h2>

        <p>Umrah is a deeply spiritual journey that enables one to gain more faith and grace. At Hadi Tours, we offer professional Umrah Packages from UK that will make you completely forget about the travel and thus be fully focused on your prayers. From the flight ticket and visa processing to the hotel accommodation near Haram, the entire pilgrimage arrangement is done with utmost care and accuracy.
</p>

        <p>Moreover, our ATOL protected Umrah Packages UK depart from the main airports of London, Birmingham, and Manchester. If you are looking for cheap Umrah Packages, family, friendly packages, or top, notch 5, star accommodation near Haram, we have flexible options for you depending on your budget and travel dates. With clear pricing and UK, based customer service, planning your Umrah Package will be a breeze with us. Book your Umrah package with confidence and travel with complete peace of mind.
</p>

        <h2>Book Trusted Umrah Packages from the UK with Complete Peace of Mind</h2>

        <p>The success of your Umrah pilgrimage largely depends on your choice of a travel agency in the UK. Hadi Tours, with its extensive experience of serving pilgrims all over the UK, has perfected the delivery of its all-inclusive Umrah Packages combining trustworthiness, low prices, and utmost convenience. We are well aware of the needs and wishes of the UK travellers and guarantee that the whole process of the pilgrimage is well coordinated and thoroughly planned.</p>
        <h3>Our packages include:</h3>

        <p>
• Return flights protected by ATOL<br>
• Umrah visa processing for UK passport holders<br>
• Hotels in Makkah and Madinah within the vicinity of Haram<br>
• Ground transport in Saudi Arabia<br>
• Optional Ziyarat tours<br>
• 24/7 customer support
</p>

        <p>Our packages fit the needs of those travelling alone, couples, families, senior citizens and groups. Our crew is at your service from the moment you make an inquiry to the moment you arrive back safely in the UK. When purchasing Umrah Packages from UK, there is always a question of trust and transparency, and that is exactly what we offer.
</p>

<h2>What Is Included in Our Umrah Packages?</h2>

<p>Knowing the details of your Umrah Package will allow you to compare different options without any hesitations and thus avoid any hidden surprises. Our comprehensive Umrah Packages from UK are essentially made, up of all necessary travel components to guarantee a smooth pilgrimage experience.
</p>
<h3>Return Flights from Major UK Airports
</h3>
<p>We book return flights for you from London, Birmingham, Manchester, and a few other major UK airports. Your choice, as well as availability, will determine whether you select direct or indirect flights to Saudi Arabia. We choose flight schedules with great care to reduce inconvenience and increase comfort.
</p>

<p>Working with top airlines helps us to keep a fine balance between competitive prices and reliable service standards. We are ready to offer assistance with whichever of the two matters is more important to you and that can be a trade off between shorter layovers and cheaper flights.
</p>

<h2>Umrah Visa Processing for UK Citizens
</h2>

<p>The visa process can be complicated, especially for first time Umrah visitors. Our Umrah Packages come with full UK resident Umrah visa processing and we can be relied upon to handle all the required paperwork. We take you through the entire process in an easy, to understand way to help prevent you from getting into trouble with delay or missing out on the required documents.
</p>

<p>Handling the application on your behalf means that we do not only relieve the pressure of the paperwork but also provide you with a spiritual preparation possibility instead.
</p>

<h2>Hotels in Makkah and Madinah Near Haram</h2>
<p>Accommodation is a very crucial part of your Umrah pilgrimage experience. We offer to you the various levels of hotels including 3, 4, and 5 star hotels where distances from the Haram vary. There are pilgrim friendly rates available and at the same time, you can enjoy the luxury of being within the walking distance of Masjid al, Haram and Masjid an, Nabawi.
</p>

<p>Proximity to Haram is especially crucial for seniors and families with small children. Our staff makes sure that you get to know the details about hotel distance, facilities, and room configurations before finalizing your booking.
</p>

<H3>Ground Transportation & Ziyarat Tours</H3>
<p>Comfortable transport within Saudi Arabia is one of the main elements of our Umrah Packages. It includes not only airport, hotel transfers but also traveling between the cities of Makkah and Madinah. The vehicles are chosen to suit the size of the group and the luggage requirements.
</p>
<p>Optional Ziyarat tours are also offered, which give the opportunity to the pilgrims to visit the important Islamic landmarks of both cities. These tours deepen your spiritual insight and make your pilgrimage journey more meaningful.
</p>

<h2>Explore Our Range of Umrah Packages
</h2>

<p>We offer a range of different Umrah Packages UK that consider the seasons, different ways of travel, and finances. You can choose from our flexible options based on your personal requirements, whether you are a planner who likes to organize everything way ahead or a seeker of a particular time period.
</p>
<h3>Umrah Packages 2026 – Early Booking Deals
</h3>
<p>Securing your Umrah Package 2026 in advance to will get you many benefits. Early bookings not only allow you to book the hotels near Haram with the best availability but also get you the flights at more competitive prices. The demand for Umrah trips from the UK has been increasing every year, so if you plan your trip ahead, you will have more options to choose from and less stress.
</p>
<h3>Ramadan Umrah Packages from UK</h3>
<p>The journey of Umrah at Ramadan time brings a great deal of blessings and spiritual revival. And shortly after the rising of demand, we thus have made our Ramadan Umrah Packages in such a way that they still retain the comfort level and accommodate the requirements of the excited travel peak season. The hotels around Haram during this holy month of Ramadan are really the ones that are most desired.
</p>
<h4>December & School Holiday Umrah Packages</h4>
<p>School holiday Umrah Packages are perfect for the families who want to spend quality time travelling together without affecting the kids' school studies. Traveling in December also has the benefit of having somewhat moderate weather as compared to the hot months of summer.
</p>
<h4>Family Umrah Packages UK</h4>
<p>We have specially planned the Family Umrah Packages UK for our clients so that parents, kids, and elderly family members who are traveling together can meet their needs without any hassle. We focus on roomy accommodation options and short walks to Haram.
</p>
<h4>Luxury 5 Star Umrah Packages Near Haram
</h4>
<p>Our Luxury 5 Star Umrah Packages near Haram are the perfect choice for pilgrims looking for top, level comfort and convenience.Furthermore, these packages are a great option for senior pilgrims or those who prefer having better hotel facilities and superior room categories.

</p>
<h2>How Much Do Umrah Packages Cost from the UK?
</h2>
<P>The cost of Umrah Packages from UK depends on several factors. Pricing varies according to season, Hotels category, flight type, and duration of stay. Understanding these elements helps you select a package that matches your budget and expectations.</P>
    </div>
    <h4>3 Star Umrah Package Price from UK
</h4>
<P>3 star Umrah Packages are the best fit for the pilgrims who are looking for cheap accommodation without any unnecessary stuff. These packages are laid out for a few comforts thus the total expenses are very low especially if you travel during the months of low demand.
</P>
<h4>4 Star Umrah Packages Cost</h4>
<p>4 star packages are a good combination of quality and reasonable price. They are the most preferred for the families and couples who want to have a good time with better facilities and at the same time keep the costs at an acceptable level.</p>
<h4>5 Star Luxury Umrah Package Prices
</h4>
<p>5 star Umrah Packages near Haram give a private feeling, saving a few minutes of your walking and better hotel service. Even if their price is higher than the regular ones, they give you a bigger possibility of getting your rest and leisure.
</p>

<h2>Factors That Affect the Cost of Umrah Packages
</h2>

<p>Several elements influence Umrah Package prices:</p>

<ul>
  <li>Ramadan or peak season travel</li>
  <li>Hotel proximity to Haram</li>
  <li>Direct versus indirect flights</li>
  <li>Duration of stay (7 days, 10 days, or 14 days)</li>
  <li>Room occupancy type</li>
</ul>

<p>Travelling during less crowded months can significantly reduce overall Umrah costs.</p>

<h2>Why Choose Hadi Tours for Umrah Packages?</h2>

<p>Selecting a trusted travel agency ensures your pilgrimage remains focused on worship rather than logistical concerns.</p>

<ul>
  <li>Travel dates can be flexible throughout 2026 and flights are available from major UK airports</li>
  <li>First-time pilgrims and solo travellers benefit from well-organised arrangements</li>
  <li>Carefully selected accommodations near Haram</li>
  <li>Fully fledged Umrah visa support for 2026</li>
  <li>Reputable airlines offering direct and connecting flights</li>
  <li>Choice of 3-star, 4-star, and 5-star Umrah Packages 2026</li>
  <li>Family &amp; group packages available upon request</li>
  <li>Flights from London, Manchester, Birmingham, Glasgow, Leeds, and other UK cities</li>
  <li>Special arrangements for the elderly and those with additional needs</li>
  <li>Fair pricing with no hidden charges</li>
  <li>Secure payment gateway with proper documentation</li>
  <li>ATOL-protected Umrah Packages 2026 ensuring financial protection</li>
  <li>24/7 UK-based customer support before, during, and after travel</li>
</ul>

<h2>How to Book Your Umrah Package from the UK</h2>

 <p>
    Booking your Umrah Package from the UK is meant to be easy, clear, and professionally handled throughout. First, you choose the Umrah Package that fits your travel plans, budget, and preferred hotel category. Whether you decide on affordable 3-star hotels or luxury 5-star hotels near Haram, our team helps you select the most suitable option based on location, flight type, and duration of stay.
  </p>

  <p>
    Next, you provide your passport information and required documents so we can begin the Umrah visa process. Our experienced team carefully reviews all documents to ensure they comply with current Saudi regulations, helping to prevent delays or issues during the application stage. Throughout this process, you receive clear guidance and regular updates.
  </p>

  <p>
    Once your visa is granted, we reconfirm your full travel itinerary, including return flights to your selected UK airport, hotel arrangements in Makkah and Madinah, and ground transportation within Saudi Arabia. You will receive a well-organised travel pack containing your booking confirmations, flight tickets, hotel details, and all essential travel information.
  </p>

  <p>
    Our UK-based support team remains available to assist you with any last-minute questions or travel advice before departure. From the moment you leave the UK until you safely return home, every aspect of your pilgrimage is carefully managed, allowing you to focus fully on worship and spiritual reflection.
  </p>
  
  <h2>When Is the Best Time to Book Umrah from UK?</h2>
  
  <p>Umrah can be performed throughout the year except during the Hajj period. The best time to book your Umrah Package from UK depends on your budget, preferred travel dates, and spiritual goals. Factors such as school holidays, Ramadan demand, and hotel proximity to Haram all influence availability and pricing.
</p>

 <h3>Ramadan – The Most Rewarding Time for Umrah</h3>
  <p>
    Ramadan is regarded as the time with the deepest spirituality to perform Umrah, especially the last ten nights. Due to the very high demand, the UK Ramadan Umrah Packages are usually necessitating an early booking just to be able to secure the hotels near Haram and the flights at competitive prices. Although the prices are generally higher during this peak season, many pilgrims give the priority to the great spiritual rewards that come with travelling in this holy month.
  </p>

  <h3>Cheapest Months for Umrah Packages</h3>
  <p>
    The summer season, in particular June, July, and August, is generally when a lot of cheaper Umrah Packages UK will be available as a result of less demand and higher temperatures. Pilgrims who are looking for cheap Umrah Packages commonly decide to travel during the less busy periods so that they can enjoy the benefits of lower hotel prices and a higher availability of flights. In addition, making your reservation early in these months can also contribute to you obtaining competitive prices for your Umrah Package.
  </p>

  <h3>Off-Peak Umrah Travel Benefits</h3>
  <p>
    Going on a pilgrimage during the less busy times of the year means the pilgrim gets to enjoy a relaxed and comfortable spiritual journey. There are less people around the Haram making Tawaf and Sai simpler activities especially for the old age pilgrims. Besides that, off, peak travel not only means getting a lower price for your accommodation but also having a wider selection of hotels in the vicinity of Haram to choose from.
  </p>
  
  <h2>Book Your Umrah Package Today with Confidence</h2>
  
  <p>No doubt your spiritual journey should be well, planned and guided by reliable people. At Hadi Tours, we provide ATOL protected Umrah Packages from the UK, an expert support team, and a variety of options, thus making your pilgrimage spiritually focused and without hassle.</p>
  
  <p>Get in touch with us nowadays to grab your Umrah Package UK and start your trip with total peace of mind.
</p>

</div>
@endsection