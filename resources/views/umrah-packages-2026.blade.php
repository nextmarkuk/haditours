@extends('layouts.master')
@section('meta')
    <title>Trusted Islamic Travel Agency in the UK for Umrah Services</title>
    <meta name="description" content="Get Umrah services from a trusted Islamic travel agency in London, UK. We offer all-inclusive Umrah packages for families, groups, and individuals.">
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
                    <h4>Special Offers for Umrah Packages 2026</h4>
                    <p>03 Star Umrah Packages</p>
                </div>
                <div class="row">
                    <div class="item col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%2821%29.webp')}}"
                                        alt="3 Star 7 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">3 Star 7 Nights Umrah Package</a></p>
                                    <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                            width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                            loading="lazy" width="16" height="16" class="svg inactive" src="star.svg"
                                            alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg inactive" src="star.svg" alt="package star"></div>
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
                                        <span class="price">&pound; 745 <sub>/ pp</sub></span>
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
                                <a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/madinah-%20%287%29.webp')}}"
                                        alt="3 Star 12 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}">3 Star 12 Nights Umrah Package</a></p>
                                    <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                            width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                            loading="lazy" width="16" height="16" class="svg inactive" src="star.svg"
                                            alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg inactive" src="star.svg" alt="package star"></div>
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
                                <a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%288%29.webp')}}"
                                        alt="3 Star 10 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">3 Star 10 Nights Umrah Package</a></p>
                                    <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                            width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                            loading="lazy" width="16" height="16" class="svg inactive" src="star.svg"
                                            alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg inactive" src="star.svg" alt="package star"></div>
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
                                            href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}"><span><img
                                                    loading="lazy" width="9" height="11" class="svg" src="package-arrow.svg"
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
                                        loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%2819%29.webp')}}"
                                        alt="3 Star 14 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}">3 Star 14 Nights Umrah Package</a></p>
                                    <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                            width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                            loading="lazy" width="16" height="16" class="svg inactive" src="star.svg"
                                            alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg inactive" src="star.svg" alt="package star"></div>
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
                                        <span class="price">&pound; 859 <sub>/ pp</sub></span>
                                        <a class="viewMainPackage"
                                            href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}"><span><img
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
<div class="page-content">
    <div class="container scroll-page-content page-content-styling"> </div>
</div>
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
                                        loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%2820%29.webp')}}"
                                        alt="4 Star 7 Nights Umrah Packages"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}">4 Star 7 Nights Umrah Packages</a></p>
                                    <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                            width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                            loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                            alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg inactive" src="star.svg" alt="package star"></div>
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
                                        <span class="price">&pound; 825 <sub>/ pp</sub></span>
                                        <a class="viewMainPackage"
                                            href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}"><span><img
                                                    loading="lazy" width="9" height="11" class="svg" src="package-arrow.svg"
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
                                        loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%2822%29.webp')}}"
                                        alt="4 Star 10 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}">4 Star 10 Nights Umrah Package</a></p>
                                    <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                            width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                            loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                            alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg inactive" src="star.svg" alt="package star"></div>
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
                                        <span class="price">&pound; 899 <sub>/ pp</sub></span>
                                        <a class="viewMainPackage"
                                            href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}"><span><img
                                                    loading="lazy" width="9" height="11" class="svg" src="package-arrow.svg"
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
                                        loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%2825%29.webp')}}"
                                        alt="4 Star 12 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}">4 Star 12 Nights Umrah Package</a></p>
                                    <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                            width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                            loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                            alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg inactive" src="star.svg" alt="package star"></div>
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
                                        <span class="price">&pound; 945 <sub>/ pp</sub></span>
                                        <a class="viewMainPackage"
                                            href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}"><span><img
                                                    loading="lazy" width="9" height="11" class="svg" src="package-arrow.svg"
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
                                        loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%2827%29.webp')}}"
                                        alt="4 Star 14 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-14-nights-december-umrah-package']) }}">4 Star 14 Nights Umrah Package</a></p>
                                    <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                            width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                            loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                            alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg inactive" src="star.svg" alt="package star"></div>
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
                                        <span class="price">&pound; 1030 <sub>/ pp</sub></span>
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
<div class="page-content">
    <div class="container scroll-page-content page-content-styling"> </div>
</div>
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
                                        src="{{asset('assets/media/umrah/Dua-at-makkah.webp')}}"
                                        alt="5 Star 10 nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <div class="package-heading">
                                    <p class="title"><a href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}">5 Star 10 Nights Umrah Package</a></p>
                                    <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                            width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                            loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                            alt="package star"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"></div>
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
                                    <p class="title"><a href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}">5 Star 12 Nights Umrah Package</a></p>
                                    <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                            width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                            loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                            alt="package star"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"></div>
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
                                    <p class="title"><a href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}">5 Star 7 Nights Umrah Package</a></p>
                                    <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                            width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                            loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                            alt="package star"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"></div>
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
                                    <p class="title"><a href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}">5 Star 14 Nights Umrah Package</a></p>
                                    <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                            class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                            width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                            loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                            alt="package star"><img loading="lazy" width="16" height="16" class="svg "
                                            src="star.svg" alt="package star"></div>
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

        <h2>Get Umrah Packages 2026 With Hajj Umrah Hub Today</h2>

        <p>Umrah is a special journey for Muslims that helps them feel close to Allah. It is not like Hajj, which is
            necessary for those who can do it. People can do Umrah at any time of the year. During Umrah, Muslims
            wear simple white clothes called Ihram. They walk around the Kaaba, which is a holy place in Makkah.
            This walk is called Tawaf. They also walk between two small hills called Safa and Marwah. This is called
            Sa&#39;i. In the end, they cut or shave their hair. Many people do Umrah to ask Allah for blessings.
            They also pray for forgiveness and feel peace in Makkah and Madinah.</p>

        <p>If you want to go to Umrah in 2026, <a href="https://www.hajjumrahhub.co.uk/">Hajj Umrah Hub</a> helps
            you. We have Umrah packages 2026 from the UK. Our packages make your journey effortless and stress-free
            this year. You can choose a low-cost or luxury experience. We have options for every budget. Also, we
            keep our prices transparent and fair. So, there are no hidden costs.</p>

        <h2>Best Times to Book Umrah 2026 Packages</h2>

        <p>Choosing the best time to book your Umrah in 2026 is very important. So, this guide will help you pick
            the right time to book your package.</p>

        <h3>Winter Months (November to Mid-February)</h3>

        <ul>
            <li>The weather is better in winter, and Makkah and Madinah are not very hot. This makes it easier to do
                Umrah without feeling too tired.</li>
            <li>Fewer people visit in winter. So, you can pray without too much crowd. In 2026, Ramadan starts in
                mid-February. So, if you go before Ramadan, you can get lower prices.</li>
        </ul>

        <h3>Shoulder Seasons (April and October)</h3>

        <ul>
            <li>These months have good weather and fewer people. This makes Umrah easier and more comfortable.</li>
            <li>Since it is not the busiest time, prices are lower. This makes Umrah 2026 packages more affordable.
            </li>
        </ul>

        <h3>Ramadan</h3>

        <ul>
            <li>A lot of people go to Umrah during Ramadan. So, if you travel this month, you will see big crowds
                everywhere.</li>
            <li>Because of the high demand, flights and hotels fill up fast. So, if you want better choices, you
                should book your package early. This way, you can find good hotels and flights easily.</li>
        </ul>

        <h2>What to Expect in an Umrah Package for 2026</h2>

        <p>When you book your Umrah for 2026, it is good to know what you get. Hajj Umrah Hub makes sure to give the
            best <a href="{{ route('umrahPackages') }}">Umrah packages</a> from the UK. So,
            here&#39;s what you can expect.</p>

        <h3>Return Flights</h3>

        <p>Firstly, our packages include flights to and from Saudi Arabia. You will fly from big airports in the UK.
            We have different options to match your travel plans. So you can choose what fits your time and budget.
        </p>

        <h3>Hotels Near Holy Sites</h3>

        <p>It is important to stay near the holy places in Makkah and Madinah. This makes it easy for you to go for
            prayers. You can choose from 3, 4, or 5-star hotels in our packages. These are close to the sacred
            places, so you can pick the best one.</p>

        <h3>Umrah Visa</h3>

        <p>Moreover, we handle your <a href="{{ route('umrahVisa') }}">Umrah visa</a> from
            beginning to end, so you do not need to worry about anything. Our team helps you with all the needed
            papers and makes the whole process easy for you.</p>

        <h3>Ground Transport</h3>

        <p>You can also add ground transport between Jeddah, Makkah, and Madinah. This means you will have a vehicle
            to take you from one city to another. This will help you avoid any problems with transport at the last
            minute.</p>

        <h3>Meals</h3>

        <p>Additionally, you can add meals to your package. Options include breakfast only, meals for half the day,
            or the whole day. This makes your experience simple, as you will not have to find food options daily.
        </p>

        <h3>Ziarat Tours</h3>

        <p>Lastly, a guided Ziarat tour can make your Umrah even more special. A guide will take you to essential
            places in Makkah and Madinah, allowing you to learn about their history and their importance in Islam.
        </p>

        <h2>How to Prepare for Umrah 2026 Now</h2>

        <p>Getting ready for Umrah 2026 is not just about booking a flight and a hotel. You also need to prepare
            your heart and your mind. So, here is a simple guide to help you prepare for this holy experience.</p>

        <h3>Spiritual Preparation</h3>

        <p>Firstly, prepare your heart and mind before going for Umrah.</p>

        <ul>
            <li>Learn how to do each step of Umrah properly.</li>
            <li>Make sure your intentions are right. It is a time to ask for Allah&#39;s mercy and forgiveness. So,
                do it with honesty and a pure heart.</li>
            <li>You can watch videos by Islamic teachers. This will help you understand the deeper meaning of this
                journey.</li>
        </ul>

        <h3>Documentation</h3>

        <p>If you do not have the right papers, your Umrah from the UK might take longer or even get cancelled. But
            do not worry. We make sure you have everything you need.</p>

        <ul>
            <li>You will need a passport that is still good for at least six months.</li>
            <li>You also need a special travel pass called an Umrah visa. This paper permits you to enter Saudi
                Arabia for Umrah.</li>
            <li>Must have got the vaccine for meningitis.</li>
            <li>It is also a good idea to have extra copies of all your important papers.</li>
        </ul>

        <h3>Packing Essentials</h3>

        <p>Packing the right things makes travel simple and comfortable.</p>

        <ul>
            <li><strong>Ihram Clothing &ndash;</strong> Men must bring two sets of white clothes called Ihram. This
                is a special outfit for Umrah or Hajj. Women must wear loose and modest clothes that follow Islamic
                rules.</li>
            <li><strong>Comfortable Footwear &ndash;</strong> The best shoes are light sandals or slip-on shoes.
            </li>
            <li><strong>Clothes for the Weather &ndash;</strong> Saudi Arabia is very hot in the day. However, it
                can be cool at night. So pack clothes that work for both.</li>
        </ul>

        <h3>Understanding Local Rules</h3>

        <p>Learning the rules and traditions in Saudi Arabia will help you stay out of trouble and show respect.</p>

        <ul>
            <li>Dress in a way that covers your body. Women should wear a long, loose dress called an abaya. They
                should also cover their hair with a hijab. Men should not wear clothes that are too bright or too
                tight.</li>
            <li>Do not take pictures in holy places unless you have permission.</li>
            <li>Always put trash in a bin. Keep holy places neat and tidy.</li>
        </ul>

        <h3>FAQs</h3>

        <h4>What is the price of the Umrah package 2026 with Hajj Umrah Hub now?</h4>

        <p>At Hajj Umrah Hub, we ensure you get the best prices for your Umrah package for 2026 right now. Our
            packages start from as low as &pound;745.</p>

        <h4>Which airlines can I get direct flights with for my Umrah package?</h4>

        <p>Saudi Airlines and British Airways offer direct flights from the UK to Jeddah. So, if you opt for direct
            flights in your package, you will likely fly with one of these airlines.</p>

        <h4>How long does an Umrah visa last?</h4>

        <p>An Umrah visa lasts 90 days, after which you must leave the country.</p>

        <h4>What cities can I visit with an Umrah visa?</h4>

        <p>The Umrah visa only allows visits to the holy cities of Makkah, Madinah, and other cities of Saudi Arabia
        </p>

    </div>

</div>
@endsection