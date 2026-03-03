<a href="https://www.haditours.co.uk/umrah-packages.html">Umrah Packages</a>@extends('layouts.master')
@section('meta')
    <title>Trusted Islamic Travel Agency in the UK for Umrah Services</title>
    <meta name="description" content="Get Umrah services from a trusted Islamic travel agency in London, UK. We offer all-inclusive Umrah packages for families, groups, and individuals.">
    <link rel="canonical" href="https://www.haditours.co.uk/december-umrah-packages.html" />
@endsection

@verbatim
 <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://www.haditours.co.uk/december-umrah-packages.html#decemberumrah",
  "name": "December Umrah Packages from UK",
  "url": "https://www.haditours.co.uk/december-umrah-packages.html",
  "description": "Explore specially crafted December Umrah packages with Hadi Tours, offering affordable and convenient pilgrimage options from the UK. Choose from 3 star, 4 star, and 5 star hotel packages with return flights, visa processing, ground transport, and guided support. Our December Umrah deals provide comfortable stays in Makkah and Madinah, ideal weather, and flexible durations from 7 to 14 nights. Whether you seek budget-friendly Umrah packages or premium all-inclusive deals, Hadi Tours ensures a smooth, spiritually fulfilling journey. Book your December Umrah 2026 package today and experience a peaceful pilgrimage with expert travel assistance every step of the way.",
  "provider": {
    "@type": "TravelAgency",
    "@id": "https://www.haditours.co.uk/#travelagency",
    "name": "Hadi Tours",
    "url": "https://www.haditours.co.uk/"
  },
  "serviceType": "December Umrah Packages",
  "areaServed": {
    "@type": "Country",
    "name": "United Kingdom"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "December Umrah Packages",
    "@id": "https://www.haditours.co.uk/december-umrah-packages.html#catalog",
    "itemListElement": [
      {
        "@type": "AggregateOffer",
        "name": "3-Star December Umrah Packages",
        "url": "https://www.haditours.co.uk/december-umrah-packages.html#3star",
        "description": "Affordable 3-star December Umrah packages including flights, visa, hotels, and transport.",
        "priceCurrency": "GBP",
        "lowPrice": 720,
        "highPrice": 830,
        "offerCount": 12,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "3-Star December Umrah Package"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "4-Star December Umrah Packages",
        "url": "https://www.haditours.co.uk/december-umrah-packages.html#4star",
        "description": "Comfortable 4-star December Umrah packages with hotels near Haram, flights, visa and transport.",
        "priceCurrency": "GBP",
        "lowPrice": 760,
        "highPrice": 955,
        "offerCount": 10,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "4-Star December Umrah Package"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "5-Star December Umrah Packages",
        "url": "https://www.haditours.co.uk/december-umrah-packages.html#5star",
        "description": "Luxury 5-star December Umrah packages with premium hotels, visa, VIP transport, and optional business-class flights.",
        "priceCurrency": "GBP",
        "lowPrice": 975,
        "highPrice": 1450,
        "offerCount": 8,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "5-Star December Umrah Package"
        }
      }
    ]
  }
}
</script>
@endverbatim



@section('content')
    <section class="search-banner">
        <!--slider section Start-->
        <div class="banner">
            <img src="{{asset('assets/media/pages/home-page-banner-for-huh-1.jpeg')}}" class="img-fluid" alt="Banner Image">
            <div class="banner-text">
                <h1>Trusted Islamic Travel Agency&nbsp;in UK</h1>
                <h4>For Umrah Services</h4>
                </h4>
            </div>
        </div>
        <div class="searchEngine" id="packageInquiry">
            <div class="searchFields">
                <form class="form" method="post" action="{{ route('sendInquiry') }}" id="frm-enquiry" name="frm-enquiry">
                    @csrf
                    
                    <div class="form-group Half">
                        <label for="enquiry-departure">
                            <i class="fa fa-plane fa-2x text-warning mr-1" style="color: #85641E !important;font-size: 1.4em;"></i> Departure Airport
                        </label>
                        <select class="form-control" id="enquiry-departure" name="n[Departure Airport]" required>
                            <option value="">Departure Airport</option>
                            <option value="London Heathrow">London Heathrow</option>
                            <option value="London Gatwick">London Gatwick</option>
                            <option value="Manchester">Manchester</option>
                            <option value="London Stansted">London Stansted</option>
                            <option value="London Luton">London Luton</option>
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="Birmingham">Birmingham</option>
                            <option value="Glasgow">Glasgow</option>
                            <option value="Bristol">Bristol</option>
                            <option value="Liverpool">Liverpool</option>
                            <option value="Newcastle">Newcastle</option>
                            <option value="East Midlands">East Midlands</option>
                            <option value="Aberdeen">Aberdeen</option>
                            <option value="London City">London City</option>
                            <option value="Leeds Bradford">Leeds Bradford</option>
                            <option value="Cardiff">Cardiff</option>
                            <option value="Norwich">Norwich</option>
                            <option value="Humberside">Humberside</option>
                        </select>
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <label for="enquiry-departuredate">
                            <i class="fa fa-calendar fa-2x text-warning mr-1"   style="color: #85641E !important; font-size: 1.4em;"></i> Departure Date
                        </label>
                        <input type="text" id="enquiry-departuredate" name="n[Departure Date]" class="DepartureDate form-control" readonly placeholder="Departure Date" required/>
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <label for="enquiry-hotelcategory">
                            <i class="fa fa-hotel fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Hotel Category
                        </label>
                        <select class="form-control" id="enquiry-hotelcategory" name="n[Hotel Category]">
                            <option value="">Hotel Category</option>
                            <option value="3 Star">3 Star</option>
                            <option value="4 Star">4 Star</option>
                            <option value="5 Star">5 Star</option>
                        </select>
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <label for="enquiry-duration">
                            <i class="fa fa-moon-o fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Duration
                        </label>
                        <select class="form-control" id="enquiry-duration" name="n[Duration]">
                            <option value="">Duration</option>
                            <option value="1 Night">1 Night</option>
                            <option value="2 Nights">2 Nights</option>
                            <option value="3 Nights">3 Nights</option>
                            <option value="4 Nights">4 Nights</option>
                            <option value="5 Nights">5 Nights</option>
                            <option value="6 Nights">6 Nights</option>
                            <option value="7 Nights">7 Nights</option>
                            <option value="8 Nights">8 Nights</option>
                            <option value="9 Nights">9 Nights</option>
                            <option value="10 Nights">10 Nights</option>
                            <option value="11 Nights">11 Nights</option>
                            <option value="12 Nights">12 Nights</option>
                            <option value="13 Nights">13 Nights</option>
                            <option value="14 Nights">14 Nights</option>
                            <option value="14+ Nights">14+ Nights</option>
                        </select>
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <label for="enquiry-travelers">
                            <i class="fa fa-users fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Travelers
                        </label>
                        <select class="form-control" id="enquiry-travelers" name="n[No. of Travelers]">
                            <option value="">No. of Travelers</option>
                            <option value="1 Travel">1</option>
                            <option value="2 Travelers">2</option>
                            <option value="3 Travelers">3</option>
                            <option value="4 Travelers">4</option>
                            <option value="5 Travelers">5</option>
                            <option value="6 Travelers">6</option>
                            <option value="7 Travelers">7</option>
                            <option value="8 Travelers">8</option>
                            <option value="9 Travelers">9</option>
                            <option value="10 Travelers">10</option>
                            <option value="11 Travelers">11</option>
                            <option value="12 Travelers">12</option>
                            <option value="13 Travelers">13</option>
                            <option value="14 Travelers">14</option>
                            <option value="14+ Travelers">14+</option>
                        </select>
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <label for="enquiry-name"><i class="fa fa-user fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Full Name</label>
                        <input type="text" class="form-control" id="enquiry-name" name="n[name]" placeholder="Full Name" required />
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <label for="enquiry-phone">
                            <i class="fa fa-phone-square fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Contact No
                        </label>
                        <input type="text" class="form-control" id="enquiry-phone" name="n[Phone Number]" placeholder="Contact No" required />
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <label for="enquiry-email">
                            <i class="fa fa-envelope fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Email
                        </label>
                        <input type="email" class="form-control" name="n[email]" id="enquiry-email" placeholder="Email" required />
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <label for="answerform">
                            <i class="fa fa-check fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Answer 
                            <span class='captcha-text' style='background: #1A1A1A; color: #fff; padding: 5px 10px; border-radius: 4px; font-weight: bold; margin-left: 10px; display: inline-block; min-width: 60px; text-align: center;'>Loading...</span>
                        </label>
                        <input class="form-control" id="answerform" type="number" name="InquiryAnswer" placeholder="1 + 2 = ?" required>
                        <span class="borderBottom"></span>
                    </div>

                <div class="form-group Half"><button type="submit" class="btn btn-block" style="height: 3rem;background-color:#85641E;border-color:#85641E;color:#fff;" name="submit" value="Send Message">Submit</button></div>
                </form>
            </div>
        </div>
    </section>
    <!--slider section End-->
    <!--slider section End-->
    <div class="page-content">

        <div class="container">

            <p>
        </div>
    </div>
    <section class="featuredPackages">
        <div class="container">
            <div class="packagesCarousel">
                <div class="sectionMainHeading">
                    <h2>All-inclusive December Umrah Packages</h2>
                </div>
                <div class="featuredPackagesUid featured-slick-carousel">
                    <div class="item">
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
                                                href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="item">
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
                                                href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="item">
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
                                                href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="item">
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
                                                href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">View Details</a>
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
            <div class="packagesCarousel">
                <div class="sectionMainHeading">
                    <h2>Special December Umrah Packages</h2>
                </div>
                <div class="featuredPackagesUid featured-slick-carousel">
                    <div class="item">
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
                                            <span class="price">&pound; 8000 <sub>/ pp</sub></span>
                                            <a class="viewMainPackage"
                                                href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="item">
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
                                                href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="item">
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
                                                href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="item">
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
                                                href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}">View Details</a>
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
            <div class="packagesCarousel">
                <div class="sectionMainHeading">
                    <h2>December Holidays Umrah Packages</h2>
                </div>
                <div class="featuredPackagesUid featured-slick-carousel">
                    <div class="item">
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
                                                href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
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
                                                href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
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
                                                href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
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
                                                href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}">View Details</a>
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
        
        <h2>December Umrah Packages 2026 from UK – Winter & School Holiday Deals</h2>

<p>Our December Umrah Packages 2026 from UK are specially tailored for those pilgrims who intend to perform Umrah during the winter season and UK school holidays. December is often the most requested month for Umrah 2026 as the weather is cooler, departure dates are more fixed, and there is a high demand for Christmas and end-of-year travel.</p>

<p>When December Umrah 2026 is your choice, and you are looking for cheap packages, luxurious 5-star accommodation near Haram or even family packages, we provide you with flexible durations, a wide range of hotel categories, plus full visa and flight assistance.</p>

<h2>Why Choose December 2026 for Umrah?</h2>

<h3>Comfortable Winter Weather in Saudi Arabia</h3>
<p>December is undoubtedly the most enjoyable time for the performance of Umrah in Makkah and Madinah. Day temperature is far more bearable than during the summer months. Tawaf at Masjid Al Haram and prayers at Al, Masjid An, Nabawi can be done with more ease, and without getting tired that much or dehydrated especially if one is an elderly person.</p>
<p>Many UK pilgrims who ask, "Is December 2026 a good time for Umrah?" usually get this reply: yes, especially if they prefer the weather that is not too hot and the physical condition is not so hard.</p>

<h3>Ideal for School Holidays & Family Travel</h3>
<p>With December Umrah 2026 coinciding with the UK school holidays period and Christmas break, it is perfect for the whole family. Our Family December Umrah 2026 travel packages offer a variety of comfortable room choices and accessible flight schedules out of London, Manchester, and Birmingham.</p>
<p>When travelling during school holidays, parents and kids can perform Umrah together without worries of academic schedules being disturbed.</p>

<h3>Peak Season – Book Early to Secure Availability</h3>
<p>December is known as the busy season when accommodating close to Haram and direct flights are spots fast. A December Umrah 2026 early booking can help one to get a hotel of a better category, a flight at the most convenient time, and a reasonable price. In case you are on a limited budget December Umrah 2026, it is highly advisable to book in advance.</p>

<h2>Types of December Umrah Packages 2026 Available</h2>

<p>We are offering a range of December Umrah Packages 2026 from UK to cater to different budgets and preferences of the pilgrims.</p>

<h3>Economy December Umrah 2026 Packages</h3>
<p>Our cheap December Umrah 2026 packages are perfect for the pilgrims who are on a tight budget. These packages come with the inclusion of return flights, visa processing, and decent 3-star accommodation not too far from Haram. They deliver an excellent price, quality ratio while maintaining the necessary essentials for a hassle, free pilgrimage.</p>

<h3>4 Star December Umrah 2026 Packages</h3>
<p>If you are looking for better proximity and upgraded comfort, our 4-star December Umrah 2026 packages offer a nice balance of affordability and convenience. Hotels are carefully chosen near Haram to reduce the walking distance. This option is still one of the most popular choices among UK travellers.</p>

<h3>5 Star December Umrah 2026 Luxury Packages</h3>
<p>Our 5 star December Umrah 2026 packages cater to the pilgrims who are more concerned about convenience and top, notch service. These star, rated hotels are located within the walking distance of Haram, thus during the peak season, you can enjoy a higher level of comfort.</p>

<h3>Group & Family December Umrah 2026</h3>
<p>Along with that, we also manage Group December Umrah 2026 packages with programmed itineraries and Ziyarat tours at the pilgrim's discretion. Visiting a holy place, performing Umrah, going to Ziyarat, or other touristy sightseeing tours should be your decision. Family members planning to travel together can benefit from organized support and structured travel arrangements.</p>

<h2>What's Included in Our December Umrah 2026 Packages? :</h2>

<p>Each December Umrah 2026 package from UK that we offer is meticulously planned to give the pilgrims a hassle- free and spiritually enriching journey. Your package will have return flights from major UK airports like London, Manchester, and Birmingham, with both direct and connecting options based on availability and travel dates.</p>

<p>We provide accommodation in carefully selected hotels in Makkah and Madinah, with options ranging in 3-star, 4-star and 5-star categories of <a href="https://www.haditours.co.uk/umrah-packages.html">Umrah Packages</a> to meet different budgets. Additionally, we take care of your full Umrah visa 2026 processing to make sure your papers are in line with the latest Saudi regulations for an easy and stress-free approval.</p>

<p>For your smooth convenience, we have arranged ground transfers between the airports and hotels, as well as intercity transport MakkahMadinah. Furthermore, pilgrims can also select guided Ziyarat tours as an option to explore the Islamic historical sites like Jabal al, Nour, Quba Mosque, etc., which will be a great add-on to your December Umrah 2026 experience.</p>

<h2>Price of December Umrah 2026 from UK:</h2>

<p>The price of Umrah during December 2026 from UK differs based on various major elements. These include the hotel category chosen, the hotel distance from Haram, the availability of flights, the length of the stay, as well as the departure city selected. In general, packages last for 7 to 14 nights and the price is adjusted according to the closeness to Masjid al, Haram and Al, Masjid an, Nabawi.</p>

<p>December being a peak season for Umrah travel as a result of the school holidays and the demand for winter, the prices might be higher than those of off-peak months. Nevertheless, if you book your December Umrah Packages 2026 from UK in advance, you will be able to get more affordable rates and better hotel availability. To facilitate the planning, we not only offer flexible installment arrangements but also allow pilgrims to book their package with reasonable staged payments.
</p>

<h2>Is December 2026 a busy period for Umrah? :</h2>

<p>Application for Umrah travel is likely to rise in December 2026, especially since that time corresponds to school holidays in the UK as well as the winter travel season. A lot of families use this period to focus on their spirituality before the new year, thus making December Umrah packages 2026 one of the most popular travel windows of the year.</p>

<p>Despite the fact that the number of people around Masjid al-Haram might be significantly higher than during less busy months, the fact that it is winter and the temperature is lower makes the worship more comfortable as compared to hotter seasons. Those pilgrims who decide early are usually rewarded with better locations near Haram as well as less trouble during their journey ensuring that the whole experience is not only well-organised but also spiritually very satisfying.</p>

<h3>Direct Flights & UK Departure Cities</h3>
<p>We offer December Umrah 2026 packages from London, Manchester, and Birmingham, with both direct and connecting flight options. Flight availability plays a major role in pricing, particularly during Christmas and post-Christmas departures.</p>
<p>If you are searching for:</p>
<ul>
<li>December Umrah 2026 packages from London</li>
<li>December Umrah 2026 from Manchester</li>
<li>Direct flights December Umrah 2026</li>
</ul>
<p>Our team can provide customized quotations based on your preferred dates.</p>

<h2>Step-by-Step Booking Process for December Umrah 2026 :</h2>

<p>It is very straightforward and well-structured to book your December Umrah Packages 2026 from UK. Select the dates in December that you want to travel and the type of hotel, pay a deposit to hold your spot, and our team will get your Umrah visa 2026 and your flight confirmation sorted. You will be handed over the complete set of travel documents as well as the details of the support at your disposal for a hassle-free trip, prior to your departure.</p>

<h2>Book your December Umrah Packages 2026 now:</h2>

<p>As a result of high demand in the winter peak, December Umrah 2026 deals are scarce and hotels right next to Haram get booked up very fast. By booking early, you gain the advantage of lower prices, preferred accommodation, and the timely processing of visas. Get in touch with us now to book your December Umrah Packages 2026 from UK worry, free.</p>


        </div>

    </div>
@endsection

@push('scripts')
<style>
    .featured-slick-carousel {
        margin-bottom: 80px !important;
        padding: 0;
        position: relative;
        display: flex;
    }
    .featured-slick-carousel:not(.slick-initialized) {
        flex-wrap: nowrap;
        overflow: hidden;
    }
    .featured-slick-carousel:not(.slick-initialized) .item {
        flex: 0 0 33.333%;
        max-width: 33.333%;
    }
    @media (max-width: 1100px) {
        .featured-slick-carousel:not(.slick-initialized) .item {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
    @media (max-width: 768px) {
        .featured-slick-carousel:not(.slick-initialized) .item {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
    .featured-slick-carousel.slick-initialized {
        display: block;
        overflow: visible;
    }
    .featured-slick-carousel .item {
        padding: 10px;
    }
    .featured-slick-carousel .umrah-headings {
        display: none !important;
    }
    .featured-slick-carousel .mainPackageImage {
        min-height: auto !important;
    }
    .featured-slick-carousel .mainPackageImage img {
        height: 17rem !important;
        object-fit: cover;
    }
    .featured-slick-carousel .mainPackageDesc .package-heading {
        padding: 8px 15px !important;
    }
    .featured-slick-carousel .mainPackageDesc .package-heading p.title {
        font-size: 15px !important;
        line-height: 1.2;
    }
    .featured-slick-carousel .mainPackageDesc .row.p-3 {
        padding: 10px !important;
    }
    .featured-slick-carousel .mainPackageDesc .icon-text {
        font-size: 11px !important;
        line-height: 1.2;
    }
    .featured-slick-carousel .mainPackageDesc .row.py-2.px-4 {
        padding: 5px 15px !important;
    }
    .featured-slick-carousel .mainPackageDesc .viewMainPackage {
        padding: 6px 12px !important;
        font-size: 12px !important;
    }
    .featured-slick-carousel .mainPackageDesc .price {
        font-size: 24px !important;
    }

    .featured-slick-carousel .slick-prev,
    .featured-slick-carousel .slick-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        width: 35px;
        height: 35px;
        background: rgba(61, 62, 66, 0.8) !important;
        border: none;
        border-radius: 50%;
        display: flex !important;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }
    .featured-slick-carousel .slick-prev {
        left: 10px !important;
    }
    .featured-slick-carousel .slick-next {
        right: 10px !important;
    }
    .featured-slick-carousel .slick-prev i,
    .featured-slick-carousel .slick-next i {
        color: #fff;
        font-size: 14px;
    }
    .featured-slick-carousel .slick-dots {
        position: absolute;
        bottom: -45px;
        display: flex !important;
        justify-content: center;
        width: 100%;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .featured-slick-carousel .slick-dots li {
        margin: 0 5px;
    }
    .featured-slick-carousel .slick-dots li button {
        font-size: 0;
        width: 10px;
        height: 10px;
        background: #3D3E42;
        border-radius: 50%;
        border: none;
        opacity: 0.2;
        padding: 0;
    }
    .featured-slick-carousel .slick-dots li.slick-active button {
        opacity: 1;
    }
</style>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        function initFeaturedSlider() {
            if (window.jQuery && $.fn.slick) {
                $('.featured-slick-carousel').each(function() {
                    if (!$(this).hasClass('slick-initialized')) {
                        $(this).slick({
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            arrows: true,
                            dots: true,
                            autoplay: true,
                            autoplaySpeed: 2000,
                            prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
                            nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
                            responsive: [
                                {
                                    breakpoint: 1300,
                                    settings: {
                                        slidesToShow: 3
                                    }
                                },
                                {
                                    breakpoint: 1100,
                                    settings: {
                                        slidesToShow: 2
                                    }
                                },
                                {
                                    breakpoint: 768,
                                    settings: {
                                        slidesToShow: 1
                                    }
                                }
                            ]
                        });
                    }
                });
            } else {
                setTimeout(initFeaturedSlider, 50);
            }
        }
        initFeaturedSlider();
    });
</script>
@endpush