@extends('layouts.master')
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
                    <h4>All-inclusive Easter Umrah Packages</h4>
                </div>
                <div class="row">
                    <div class="item col-md-4 col-lg-4 col-xl-3 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/00-min%20%2819%29.webp')}}"
                                        alt="4 Star 7 Nights Easter Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}">4 Star
                                        7 Nights Easter Umrah Package</a></p>
                                <p class="tagline">Perform Umrah with Best Price</p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                                <p class="price">&pound; 600</p>
                                <a class="viewMainPackage"
                                    href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}"><span><img
                                            loading="lazy" width="9" height="11" class="svg" src="package-arrow.svg"
                                            alt="package arrow"></span>View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-4 col-lg-4 col-xl-3 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/00-min%20%2837%29.webp')}}"
                                        alt="7 Nights 3 star Easter Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">7 Nights 3 star
                                        Easter Umrah Package</a></p>
                                <p class="tagline">Perform Umrah with Best Price</p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg inactive" src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                                <p class="price">&pound; 925</p>
                                <a class="viewMainPackage"
                                    href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><span><img loading="lazy"
                                            width="9" height="11" class="svg" src="package-arrow.svg"
                                            alt="package arrow"></span>View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-4 col-lg-4 col-xl-3 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/00-min%20%2821%29.webp')}}"
                                        alt="5 Star 10 Nights Easter Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}">5 Star
                                        10 Nights Easter Umrah Package</a></p>
                                <p class="tagline">Perform Umrah with Best Price</p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"></div>
                                <p class="price">&pound; 945</p>
                                <a class="viewMainPackage"
                                    href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}"><span><img
                                            loading="lazy" width="9" height="11" class="svg" src="package-arrow.svg"
                                            alt="package arrow"></span>View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-4 col-lg-4 col-xl-3 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/00-min%20%2817%29.webp')}}"
                                        alt="3 Star 10 Nights Easter Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">3 Star
                                        10 Nights Easter Umrah Package</a></p>
                                <p class="tagline">Perform Umrah with Best Price</p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg inactive" src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                                <p class="price">&pound; 1015</p>
                                <a class="viewMainPackage"
                                    href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}"><span><img
                                            loading="lazy" width="9" height="11" class="svg" src="package-arrow.svg"
                                            alt="package arrow"></span>View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-4 col-lg-4 col-xl-3 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/00-min%20%2814%29.webp')}}"
                                        alt="10 Nights 4 Star Easter Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}">10 Nights 4
                                        Star Easter Umrah Package</a></p>
                                <p class="tagline">Perform Umrah with Best Price</p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                                <p class="price">&pound; 1070</p>
                                <a class="viewMainPackage"
                                    href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}"><span><img loading="lazy"
                                            width="9" height="11" class="svg" src="package-arrow.svg"
                                            alt="package arrow"></span>View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-4 col-lg-4 col-xl-3 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/00-min%20%2818%29.webp')}}"
                                        alt="3 Star 12 Nights Easter Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}">3 Star
                                        12 Nights Easter Umrah Package</a></p>
                                <p class="tagline">Perform Umrah with Best Price</p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg inactive" src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                                <p class="price">&pound; 1130</p>
                                <a class="viewMainPackage"
                                    href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}"><span><img
                                            loading="lazy" width="9" height="11" class="svg" src="package-arrow.svg"
                                            alt="package arrow"></span>View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-4 col-lg-4 col-xl-3 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/00-min%20%2820%29.webp')}}"
                                        alt="4 Star 12 Nights Easter Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}">4 Star
                                        12 Nights Easter Umrah Package</a></p>
                                <p class="tagline">Perform Umrah with Best Price</p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                                <p class="price">&pound; 1145</p>
                                <a class="viewMainPackage"
                                    href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}"><span><img
                                            loading="lazy" width="9" height="11" class="svg" src="package-arrow.svg"
                                            alt="package arrow"></span>View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-4 col-lg-4 col-xl-3 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/00-min%20%2822%29.webp')}}"
                                        alt="5 Star 14 Nights Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}">5 Star
                                        14 Nights Umrah Package</a></p>
                                <p class="tagline">Perform Umrah with Best Price</p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"></div>
                                <p class="price">&pound; 1199</p>
                                <a class="viewMainPackage"
                                    href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}"><span><img
                                            loading="lazy" width="9" height="11" class="svg" src="package-arrow.svg"
                                            alt="package arrow"></span>View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-4 col-lg-4 col-xl-3 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/00-min%20%2834%29.webp')}}"
                                        alt="12 Nights 5 star Easter Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}">12 Nights 5
                                        star Easter Umrah Package</a></p>
                                <p class="tagline">Perform Umrah with Best Price</p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"></div>
                                <p class="price">&pound; 1210</p>
                                <a class="viewMainPackage"
                                    href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}"><span><img loading="lazy"
                                            width="9" height="11" class="svg" src="package-arrow.svg"
                                            alt="package arrow"></span>View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-4 col-lg-4 col-xl-3 col-sm-6 col-xs-12">
                        <div class="mainPackage">
                            <div class="mainPackageImage">
                                <a href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}"><img class="img-fluid"
                                        loading="lazy" width="336" height="279"
                                        src="{{asset('assets/media/umrah/00-min%20%2823%29.webp')}}"
                                        alt="5 Star 7 Nights Easter Umrah Package"></a>
                            </div>
                            <div class="mainPackageDesc">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}">5 Star 7
                                        Nights Easter Umrah Package</a></p>
                                <p class="tagline">Perform Umrah with Best Price</p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"></div>
                                <p class="price">&pound; 1245</p>
                                <a class="viewMainPackage"
                                    href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}"><span><img
                                            loading="lazy" width="9" height="11" class="svg" src="package-arrow.svg"
                                            alt="package arrow"></span>View Details</a>
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

        <h2>Get the Most Affordable Easter Umrah Packages</h2>

        <p>Umrah is recognised as one of the most beneficial Sunnah with great rewards and blessings. It comprises
            visiting Makkah&#39;s Holy land and carrying out compulsory rites there. Unlike the mandatory Hajj,
            there are no specified days to perform Umrah. But you cannot perform it in the Hajj days. So, Muslims
            always look for opportunities to get a faith revival through Umrah any time of the year.</p>

        <p>Due to work and other purposes, UK Muslims want their Umrah to be scheduled during the holidays.
            Therefore, if you want Easter Umrah packages, we can surely help you. Hajj Umrah Hub is known for
            providing all-inclusive reliable, and <a href="{{ route('umrahPackages') }}"
                target="_self">cheap&nbsp;Umrah packages</a>. We have the best packages for you whether you want to
            go for an Umrah during the Easter holidays or Ramadan.</p>

        <p><a href="{{ route('contactUs') }}" target="_self"><strong>Contact Us
                    Now!</strong></a></p>

        <h2>Why Should You Trust Hajj Umrah Hub?</h2>

        <p>Hajj Umrah Hub is one of the best travel agencies in the UK, serving for years with the best Umrah
            packages. Therefore, we understand the importance of arranging the Umrah during holidays. Most UK
            Muslims prefer to perform Umrah during the holidays because they don&rsquo;t have to compromise on their
            work or businesses. So, if you want Easter Umrah packages for 2026, we are your guys.</p>

        <p>From flights and hotel accommodations to customised food and transport options, we provide it with all in
            our all-inclusive Umrah holiday packages. Our vigilant team understands the importance of a smooth
            journey and stay. So you can focus more on your spiritual journey and faith revival. Moreover, you will
            get the most affordable Easter Umrah packages with us.</p>

        <h2>Umrah and its Importance for Muslims</h2>

        <p>Just like in Hajj, in Umrah, the Muslims also visit the Sacred House of the Almighty and repent of their
            sins. The main goal of this Sunnah is to cleanse your soul of all your past sins. Also, Muslims spend
            their time and wealth in the Almighty&rsquo;s way to please Him and ask for His countless mercies and
            blessings. Therefore, it can also be seen as a way to remove poverty and burden from a person&rsquo;s
            life.</p>

        <p>Moreover, Umrah is known to have countless benefits. It brings not only happiness and faith revival but
            also decency and forgiveness. Even though the reward of performing an Umrah is equivalent to Hajj in
            Ramadan, it doesn&rsquo;t replace the obligation of performing the mandatory Hajj.</p>

        <p>As the Prophet (PBUH) himself performed Umrah multiple times in his lifetime, Muslims are looking for
            opportunities to perform Umrah at least once in their lives. So, if you think it is time to embark on
            this spiritual journey, we can help you get the most ideal Easter holiday Umrah packages.</p>

        <h2>Our Customisable Easter Umrah Packages</h2>

        <p>As mentioned earlier, Hajj Umrah Hub has always provided its customers with the best Umrah packages no
            matter what. Our Easter Umrah package gives you the best opportunity to go on a spiritual journey with
            your loved ones. Hajj Umrah Hub offers three kinds of <a
                href="{{ route('umrahPackages2026') }}">Umrah packages 2026</a>&nbsp;that are
            3-star, 4-star, and 5-star for 7, 10, 12, and 14 nights but this is different. We can customise these
            packages for you according to your requirements.</p>

        <p>The star rating of the package depends on the type of hotel included in the package. The most popular
            hotels near Kaaba are usually expensive and considered 5-star. Most hotels included in our Easter Umrah
            packages contain complimentary breakfast. So, you will have the satisfaction that the first meal of your
            day is covered.</p>

        <p>We can provide other meals and transportation. Our Umrah packages are customisable, and everything will
            be according to your requirements.</p>

        <p><strong>Contact Us Now!</strong></p>

        <h2>FAQs</h2>

        <h3>Can Umrah be performed any time of the year?</h3>

        <p>Like Hajj, there is no compulsion for Umrah to be performed at a specific time of the year. Therefore,
            you can perform this Sunnah any time of the year, excluding the Hajj days.</p>

        <h3>Do Hajj Umrah Hub Umrah packages contain an Umrah visa?</h3>

        <p>Yes, the all-inclusive Umrah packages at Hajj Umrah Hub cover everything from your Umrah visa and flights
            to accommodation and food.</p>

        <h3>Can I do Umrah in one week?</h3>

        <p>Yes, you can do Umrah in one week. We have multiple 7-day packages for you at Hajj Umrah Hub that you can
            choose from.</p>

        <h3>Which airlines fly from the UK for Umrah?</h3>

        <p>Airlines that offer flights from the UK for Umrah include;</p>

        <ul>
            <li>Qatar Airways</li>
            <li>Lufthansa</li>
            <li>Saudi Airlines</li>
            <li>British Airways</li>
            <li>Turkish Airlines</li>
            <li>Royal Jordanian&nbsp;</li>
            <li>Emirates</li>
            <li>Etihad Airways</li>
            <li>Egypt Air</li>
            <li>Oman Air</li>
        </ul>

        <h3>What is the fastest way of getting to Makkah from Jeddah airport?</h3>

        <p>You can use a train or a taxi to get to Makkah from the nearest airport. Travelling from Abdulaziz
            Airport in Jeddah to Makkah will take approximately an hour.</p>

    </div>

</div>
@endsection