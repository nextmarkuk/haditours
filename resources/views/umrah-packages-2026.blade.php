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

        <h2>Umrah Packages 2026 from UK – Early Booking Now Open</h2>

        <p>Planning ahead allows you to secure the best hotels, preferred departure dates, and competitive fares for your sacred journey. Our Umrah Packages 2026 from UK are now open for early booking, offering flexible departures, carefully selected accommodation, and complete travel support for pilgrims across the UK.</p>
        
        <p>Whether you are planning Ramadan Umrah 2026, travelling during school holidays, or looking for off-peak 2026 Umrah deals, securing your place early ensures better availability and smoother visa processing.</p>
        <p>With demand increasing every year, booking your Umrah 2026 from UK in advance provides peace of mind and financial flexibility.</p>
        
        <h2>Why 2026 Is the Ideal Year to Plan Your Umrah Early</h2>
        
        <h3>Increasing Demand for Umrah 2026 from UK</h3>
  <p>
    Interest in Umrah Packages 2026 is already rising due to Ramadan 2026 falling in favourable travel months and increasing post-Hajj travel momentum. UK families often coordinate travel around school holidays, making Easter 2026 and December 2026 highly competitive periods.
  </p>
  <p>
    Early booking protects you from last-minute price increases and limited hotel choices.
  </p>

  <h3>Limited Hotel Availability Near Haram in 2026</h3>
  <p>
    Hotels close to Masjid al-Haram in Makkah and Al-Masjid an-Nabawi in Madinah fill quickly, especially during Ramadan and winter holidays.
  </p>
  <p>
    Premium properties such as Pullman ZamZam Makkah and Anwar Al Madinah Mövenpick are often reserved months ahead. Securing your 2026 Umrah package early gives you access to better room categories and walking-distance convenience.
  </p>

  <h3>Price Trends for Umrah Packages 2026</h3>
  <p>
    Flight costs and hotel rates typically increase as peak months approach. Ramadan Umrah 2026 packages and December departures are expected to be priced higher due to demand.
  </p>
  <p>
    Off-peak months such as January and February 2026 often provide more affordable Umrah 2026 deals, especially for longer stays.
  </p>
  
  <H2>Available Umrah 2026 Departure Months</H2>
  
  <p>We offer multiple departure options throughout the year to suit different schedules and budgets.
</p>

<h3>January & February 2026 Umrah Packages</h3>
  <p>
    Early 2026 offers cooler weather and fewer crowds, making January and February ideal for pilgrims seeking a peaceful Umrah experience. Families, elderly travelers, and solo pilgrims can enjoy easier access to Haram and a calm environment. These months also provide competitive Umrah 2026 packages from UK at attractive rates.
  </p>

  <h3>Ramadan Umrah 2026 Packages</h3>
  <p>
    Ramadan is the most spiritually rewarding period for Umrah, and our Ramadan Umrah 2026 packages from UK cater to all needs, from full-month stays to short 7–10 night options. Early booking is essential due to high demand, ensuring the best hotels near Haram and flexible flight options. Pilgrims can experience maximum blessings while enjoying comfortable arrangements and guided support.
  </p>

  <h3>Easter & Summer 2026 Umrah Packages</h3>
  <p>
    Easter and summer 2026 are popular for UK families, providing structured travel dates and convenient school holiday options. Our Easter & Summer Umrah 2026 packages offer a variety of hotel categories, flexible durations, and group-friendly arrangements. These months are perfect for pilgrims seeking extended stays with a combination of spiritual reflection and family-friendly travel.
  </p>

  <h3>Rabi al-Awwal & Post-Hajj 2026</h3>
  <p>
    Travelling in Rabi al-Awwal 2026 or after Hajj provides moderate crowds and balanced pricing, making it an ideal choice for value-conscious pilgrims. These months combine comfortable hotel options near Haram with quieter rituals for Tawaf and Sa’i. Pilgrims can enjoy a fulfilling spiritual journey without the rush of peak seasons.
  </p>

  <h3>December 2026 Umrah Packages</h3>
  <p>
    December departures coincide with winter holidays, offering convenient scheduling for UK families while maintaining a peaceful Umrah experience. Our December 2026 Umrah packages from UK include flexible hotel options, smooth flights, and guided tours. This period provides a blend of favorable weather, accessibility, and spiritual tranquility.
  </p>
  
  <h2>Types of Umrah Packages 2026 Available
</h2>
<p>We offer structured 2026 Umrah packages UK tailored to different preferences.</p>
        
        
        <h4>Economy Umrah 2026 Packages</h4>
  <p>
    Designed for budget-conscious pilgrims, these packages provide reliable accommodation, return flights, and visa support at competitive rates.
  </p>

  <h4>4 Star Umrah 2026 Packages</h4>
  <p>
    Ideal for pilgrims seeking comfort and proximity to Haram, 4★ options balance quality accommodation with value pricing.
  </p>

  <h4>5 Star Umrah 2026 Luxury Packages</h4>
  <p>
    For those prioritising convenience and premium facilities, our luxury 5 Star Umrah 2026 packages include top-rated hotels within walking distance of the holy mosques.
  </p>

  <h4>Family Umrah Packages 2026</h4>
  <p>
    Travelling with children or elderly relatives requires additional care. Our Family Umrah 2026 packages include flexible room options and convenient flight schedules.
  </p>

  <h4>Group Umrah 2026 Departures</h4>
  <p>
    Group departures provide structured itineraries, guided Ziyarat tours, and shared spiritual experience with fellow pilgrims.
  </p>
  
  <h2>What’s Included in Our Umrah Packages 2026?</h2>
  <P>Each Umrah 2026 package from UK includes essential services for a smooth pilgrimage:</P>
  
  <h4>Return Flights from Major UK Airports</h4>
  <p>
    Departures are available from London, Manchester, Birmingham, and other regional airports, with direct or connecting flights to Jeddah or Madinah.
  </p>

  <h4>3★, 4★ & 5★ Hotels in Makkah & Madinah</h4>
  <p>
    We carefully select accommodation options close to key religious sites, offering flexibility across different budgets.
  </p>

  <h4>Umrah Visa Processing for 2026</h4>
  <p>
    We assist with full visa documentation in accordance with regulations set by the Ministry of Hajj and Umrah, ensuring compliance and timely approvals.
  </p>

  <h4>Ground Transfers & Intercity Transport</h4>
  <p>
    Private transfers between airports, hotels, and travel between Makkah and Madinah are arranged for your convenience.
  </p>

  <h4>Guided Ziyarat Tours</h4>
  <p>
    Optional guided visits include historical Islamic landmarks such as Jabal al-Nour and Quba Mosque, enhancing your spiritual journey.
  </p>
        
    </div>

</div>
@endsection