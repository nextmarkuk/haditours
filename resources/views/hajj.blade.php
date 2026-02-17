@extends('layouts.master')
@section('content')
@include('partials.search-banner')
<div class="page-content">
    <div class="container">
        <p style="text-align: justify;">
    </div>
</div>
<section class="hajjPackages">
    <div class="container">
        <div class="packagesCarousel">
            <div class="viewMore-carouselArrow">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2></h2>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#" class="viewAll">view all</a>
                        <span class="owl-nav customNav featuredPackagesButton"></span>
                    </div>
                </div>
            </div>
            <div id="hajjPackages" class="owl-carousel owl-loaded owl-drag" data-items="4" data-nav="true"
                data-dots="true" data-margin="30" data-responsive-margin="15" data-center="false"
                data-responsive-small="2" data-responsive-medium="2" data-responsive-large="3"
                data-responsive-Xlarge="4" data-autoplay="false">
                <div class="item">
                    <div class="hajjpackage">
                        <div class="hajjpackageImage">
                            <a href="#"><img class="img-fluid"
                                    loading="lazy" width="337" height="190" src="{{asset('assets/media/hajj/00-min%20%283%29.webp')}}"
                                    alt="4 Weeks Hajj Package (Non Shifting)"></a>
                            <div class="HoverDiv">
                                <div class="HoverFlexContainer">

                                    <a href="#">Economical Package<img
                                            loading="lazy" width="31" height="20" class="img-fluid"
                                            src="{{asset('assets/images/icons/hajj-arrow.png')}}"
                                            alt="4 Weeks Hajj Package (Non Shifting)"></a>
                                    <p>2026</p>
                                </div>
                            </div>
                        </div>
                        <div class="hajjpackageDesc"><span class="hajjType">Non shifting hajj packages</span>
                            <p class="title"><a href="#">4 Weeks Hajj
                                    Package (Non Shifting)</a></p>
                            <div class="starsAndPrice">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p class="price">&pound; 6499</p>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="stars"><img loading="lazy" height="16" width="16" class="svg "
                                                src="star.svg" alt="package star"><img loading="lazy" height="16"
                                                width="16" class="svg " src="star.svg" alt="package star"><img
                                                loading="lazy" height="16" width="16" class="svg " src="star.svg"
                                                alt="package star"><img loading="lazy" height="16" width="16"
                                                class="svg inactive" src="star.svg" alt="package star"><img
                                                loading="lazy" height="16" width="16" class="svg inactive"
                                                src="star.svg" alt="package star"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="moreDetail" href="#">View
                                Details</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hajjpackage">
                        <div class="hajjpackageImage">
                            <a href="#"><img class="img-fluid"
                                    loading="lazy" width="337" height="190" src="{{asset('assets/media/hajj/00-min%20%281%29.webp')}}"
                                    alt="2-3 Weeks Non Shifting Hajj Package "></a>
                            <div class="HoverDiv">
                                <div class="HoverFlexContainer">

                                    <a href="#">Economical Package<img
                                            loading="lazy" width="31" height="20" class="img-fluid"
                                            src="{{asset('assets/images/icons/hajj-arrow.png')}}"
                                            alt="2-3 Weeks Non Shifting Hajj Package "></a>
                                    <p>2026</p>
                                </div>
                            </div>
                        </div>
                        <div class="hajjpackageDesc"><span class="hajjType">Non shifting hajj packages</span>
                            <p class="title"><a href="#">2-3 Weeks Non
                                    Shifting Hajj Package </a></p>
                            <div class="starsAndPrice">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p class="price">&pound; 6999</p>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="stars"><img loading="lazy" height="16" width="16" class="svg "
                                                src="star.svg" alt="package star"><img loading="lazy" height="16"
                                                width="16" class="svg " src="star.svg" alt="package star"><img
                                                loading="lazy" height="16" width="16" class="svg " src="star.svg"
                                                alt="package star"><img loading="lazy" height="16" width="16"
                                                class="svg inactive" src="star.svg" alt="package star"><img
                                                loading="lazy" height="16" width="16" class="svg inactive"
                                                src="star.svg" alt="package star"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="moreDetail" href="#">View
                                Details</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hajjpackage">
                        <div class="hajjpackageImage">
                            <a href="#"><img class="img-fluid"
                                    loading="lazy" width="337" height="190" src="{{asset('assets/media/hajj/00-min.webp')}}"
                                    alt="2-3 Weeks Hajj Package (Non Shifting) "></a>
                            <div class="HoverDiv">
                                <div class="HoverFlexContainer">

                                    <a href="#">Economical Package<img
                                            loading="lazy" width="31" height="20" class="img-fluid"
                                            src="{{asset('assets/images/icons/hajj-arrow.png')}}"
                                            alt="2-3 Weeks Hajj Package (Non Shifting) "></a>
                                    <p>2026</p>
                                </div>
                            </div>
                        </div>
                        <div class="hajjpackageDesc"><span class="hajjType">Non shifting hajj packages</span>
                            <p class="title"><a href="#">2-3 Weeks Hajj
                                    Package (Non Shifting) </a></p>
                            <div class="starsAndPrice">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p class="price">&pound; 7499</p>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="stars"><img loading="lazy" height="16" width="16" class="svg "
                                                src="star.svg" alt="package star"><img loading="lazy" height="16"
                                                width="16" class="svg " src="star.svg" alt="package star"><img
                                                loading="lazy" height="16" width="16" class="svg " src="star.svg"
                                                alt="package star"><img loading="lazy" height="16" width="16"
                                                class="svg inactive" src="star.svg" alt="package star"><img
                                                loading="lazy" height="16" width="16" class="svg inactive"
                                                src="star.svg" alt="package star"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="moreDetail" href="#">View
                                Details</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hajjpackage">
                        <div class="hajjpackageImage">
                            <a href="#"><img class="img-fluid" loading="lazy"
                                    width="337" height="190" src="{{asset('assets/media/hajj/0.webp')}}"
                                    alt="5 Star Hajj Package (non-shifting)"></a>
                            <div class="HoverDiv">
                                <div class="HoverFlexContainer">

                                    <a href="#">Hajj Packages<img
                                            loading="lazy" width="31" height="20" class="img-fluid"
                                            src="{{asset('assets/images/icons/hajj-arrow.png')}}"
                                            alt="5 Star Hajj Package (non-shifting)"></a>
                                    <p>2026</p>
                                </div>
                            </div>
                        </div>
                        <div class="hajjpackageDesc"><span class="hajjType">Non shifting hajj packages</span>
                            <p class="title"><a href="#">5 Star Hajj Package
                                    (non-shifting)</a></p>
                            <div class="starsAndPrice">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p class="price">&pound; 8299</p>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="stars"><img loading="lazy" height="16" width="16" class="svg "
                                                src="star.svg" alt="package star"><img loading="lazy" height="16"
                                                width="16" class="svg " src="star.svg" alt="package star"><img
                                                loading="lazy" height="16" width="16" class="svg " src="star.svg"
                                                alt="package star"><img loading="lazy" height="16" width="16"
                                                class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                                height="16" width="16" class="svg " src="star.svg"
                                                alt="package star"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="moreDetail" href="#">View Details</a>
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

        <h2>Understanding the Importance of Hajj</h2>

        <p>The Hajj pilgrimage is a significant religious journey for Muslims worldwide. It&#39;s not just a visit;
            it&#39;s an important spiritual experience that holds great value in a Muslim&#39;s life.</p>

        <h3>Spiritual Importance</h3>

        <p>Hajj is the highest form of worship and shows a Muslim&#39;s dedication to their faith. During Hajj,
            Muslims ask for forgiveness, renew their faith, and feel spiritually cleansed. They perform rituals like
            walking around the Kaaba (Tawaf) and walking between the hills of Safa and Marwah (Sa&#39;i) to show
            their devotion and connection with God, following the example of the Prophet Muhammad (PBUH).</p>

        <h3>Historical Background</h3>

        <p>The pilgrimage has its roots in the early days of Islam, going back to the Prophet Ibrahim and his
            family. It remembers important events, like Ibrahim&#39;s readiness to sacrifice his son Ismail and
            Hagar&#39;s search for water, which led to the discovery of the Zamzam well. These stories teach
            important lessons about faith and trusting Allah in all matters.</p>

        <h3>Symbol of Unity and Equality</h3>

        <p>Moreover, Hajj shows brotherhood and equality among Muslims. No matter where they come from or their
            social status, all pilgrims wear simple white clothes called Ihram, which emphasises that everyone is
            equal before God. This creates a strong sense of brotherhood as millions of Muslims from different
            backgrounds come together.</p>

        <h3>Religious Duty</h3>

        <p>Lastly, Hajj is one of the Five Pillars of Islam, which must be followed to complete faith. It is
            required for all Muslims who can go both financially and physically. Completing Hajj fulfils this vital
            duty and shows a Muslim&#39;s commitment to their faith.</p>

        <h2 style="text-align: justify;">Hajj Packages 2026</h2>

        <p style="text-align: justify;">&quot;Hajj&quot; is a sacred term for all Muslims, and the desire to visit
            not only the House of Allah Almighty but also the places where His beloved Prophet (PBUH) lived and
            spent time is the craving of all belonging to the religion Islam. It was one of the five pillars of
            Islam which are declared mandatory for those Muslims who are financially stable to pay the visit. Hajj
            Umrah Hub offers cheap Hajj packages in 2026, which are not only economical but also reasonable in terms
            of providing the best Hajj packages. These best hajj packages include providing visa services, flight,
            Qurbani, Hotel stay, transport, and Hajj draft. Affordable hajj packages are every Muslim&rsquo;s
            desire. Those looking for affordable Hajj packages will be very pleased to know that Hajj Umrah Hub is
            offering the following exciting and cheap Hajj packages for 2026:</p>

        <h2 style="text-align: justify;">Amazing and affordable Hajj Packages 2026&nbsp;for Muslim Community</h2>

        <p style="text-align: justify;"><strong>3 weeks 5 star best Hajj package</strong></p>

        <p style="text-align: justify;">Hajj Umrah Hub brings the best Hajj package for the Muslim community
            residing in the UK to perform this holy obligation with comfort and ease. Around 70,000 believers travel
            in intention to pay a visit to Allah&rsquo;s House, Hajj Umrah travel becomes a luxurious bridge between
            the faithful and their Creator.<br />
            Hajj Umrah Hub offers 3 weeks 5-star cheap Hajj packages present following privileged stays at the
            below-mentioned venues:</p>

        <ul>
            <li style="text-align: justify;">Makkah Hotel nights (Lamar Hotel)</li>
            <li style="text-align: justify;">Madinah Hotel nights (Millenium Taiba Madinah)</li>
            <li style="text-align: justify;">Mina tents</li>
            <li style="text-align: justify;">Arafat tents</li>
        </ul>

        <p style="text-align: justify;">More specifically, the cheap Hajj package includes 10 nights in Makkah, 6
            nights in Madinah, 3 nights in the tents of Mina, and 3 intents of Arafat.</p>

        <h2 style="text-align: justify;">Affordable and best Hajj Package for our Valued Citizens&nbsp;</h2>

        <p style="text-align: justify;"><strong>4 Weeks non- shifting best Hajj packages</strong></p>

        <p style="text-align: justify;">We value our customers&rsquo; comfort and holy needs, presenting another
            package among the cheap Hajj packages 2026, which is not only the best Hajj package in terms of the way
            it facilitates but is also affordable to the majority of our valued citizens of the UK. This is a
            complete month, a non-shifting package which is providing the opportunity to the residents of the UK to
            pay a visit to the Holy cities of Makkah and Madinah and have &ldquo;Ziarat&rdquo; of sacred places like
            Mina, Arafat, etc. Missing this amazing opportunity to avail of these affordable hajj packages will not
            be a wise decision to make. So don&rsquo;t think twice and make use of this holy month of Hajj out of
            these affordable Hajj packages.<br />
            This exciting 4 weeks non-shifting best packages primarily offer to stay at the following places:</p>

        <ul>
            <li style="text-align: justify;">Makkah Hotel nights (Lamar Hotel)</li>
            <li style="text-align: justify;">Madinah Hotel nights (Millenium Taiba Madinah)</li>
            <li style="text-align: justify;">Mina tents&nbsp;</li>
            <li style="text-align: justify;">Arafat tents</li>
        </ul>

        <h3 style="text-align: justify;">Economical and affordable Hajj packages for desiring Muslims</h3>

        <p style="text-align: justify;"><strong>2-3 Weeks non-shifting best hajj packages</strong></p>

        <p style="text-align: justify;">In this age, each one of us is looking towards tasks to be completed
            economically, Hajj Umrah Hub presents its customers in the UK with cheap and affordable Hajj packages
            for all those desiring to perform this sacred religious obligation. So don&rsquo;t think twice and avail
            of this low-cost and reasonable offer and pay a visit to the House of Allah this year.</p>

        <p style="text-align: justify;">2-3 weeks non-shifting cheap Hajj packages cover stay at the following
            desirable places:</p>

        <ul>
            <li style="text-align: justify;">Makkah Hotel nights (Lamar Hotel)</li>
            <li style="text-align: justify;">Madinah Hotel Nights (Mubarak Al Masi)</li>
            <li style="text-align: justify;">Mina tents&nbsp;</li>
            <li style="text-align: justify;">Arafat tents</li>
        </ul>

        <p style="text-align: justify;">These are the affordable Hajj packages as they are designed by our
            professional planners and are not only cheap Hajj packages but are also the best Hajj packages.</p>

        <h2>The Logistics and Rituals of Hajj</h2>

        <p>Now that you know all about our packages, it&#39;s time to understand the essentials of a Hajj
            pilgrimage. Going on the Hajj pilgrimage requires a lot of planning and understanding of the necessary
            steps and rituals. It is one of the biggest annual gatherings in the world, so it&#39;s essential to
            prepare well to have a smooth and fulfilling experience.</p>

        <h3>Getting Ready for Hajj: Key Steps</h3>

        <ul>
            <li><strong>Visa and Documents:</strong> First, you need to get a Hajj visa. This is possible with a
                recognised travel agency like <a href="https://www.hajjumrahhub.co.uk/">Hajj Umrah Hub</a>. Make
                sure you have all the necessary paperwork, such as a current passport, medical certificates, and
                vaccination records, especially for meningitis and COVID-19.</li>
            <li><strong>Flights and Hotels:</strong> It&#39;s best to book your flights and hotels early because
                demand is high during the Hajj season. But with HUH, there&#39;s no need for concern. As soon as you
                book a package, we will arrange your return flights and hotels near the holy sites.</li>
            <li><strong>Health and Safety:</strong> Lastly, your health is very important during Hajj. Have a
                thorough medical check-up prior to departing, and remember to stay hydrated. Also, bring a basic
                medical kit with medications for common illnesses and personal prescriptions.</li>
        </ul>

        <h3>Rituals of Hajj</h3>

        <ul>
            <li><strong>Ihram:</strong> The first step of the Hajj is to put on the Ihram, a holy garment of purity.
                Men wear simple white clothes, while women cover themselves with loose clothes.</li>
            <li><strong>Tawaf and Sa&#39;i: </strong>Tawaf is circling the Kaaba seven times in a counterclockwise
                direction. Afterwards, Sa&#39;i involves walking seven times between the hills of Safa and Marwah.
            </li>
            <li><strong>Standing at Arafat: </strong>The Day of Arafat, when pilgrims assemble on the plains of
                Arafat to pray from noon to dusk, is the most significant day of the Hajj.</li>
            <li><strong>Muzdalifah: </strong>After Arafat, pilgrims go to Muzdalifah to gather stones for the Rami
                ritual.</li>
            <li><strong>Rami al-Jamarat:</strong> Rami involves throwing stones at three pillars in Mina to
                represent rejecting evil.</li>
            <li><strong>Qurbani (Animal Sacrifice):</strong> Pilgrims perform the sacrifice of an animal, usually a
                sheep or goat, to remember Ibrahim&#39;s willingness to sacrifice his son for Allah.</li>
            <li><strong>Halq or Taqsir:</strong> Male pilgrims shave their heads (Halq), while female pilgrims trim
                a portion of their hair (Taqsir), symbolising a fresh start and the shedding of past sins.</li>
            <li><strong>Tawaf al-Wida:</strong> The final ritual is Tawaf al-Wida, the farewell circling around the
                Kaaba.</li>
        </ul>

        <h3>FAQs</h3>

        <h4>What are the dates of Hajj?</h4>

        <p>Every year, the dates of the Hajj are different. However, in the Islamic calendar, it occurs from the 8th
            to the 13th of Dhul Hijjah.</p>

        <h4>How early should I book to get a good price and availability of Hajj packages?</h4>

        <p>It is best to book Hajj packages well in advance, almost six to twelve months before the pilgrimage.</p>

        <h4>Can I customise my Hajj package?</h4>

        <p>Yes, we always offer travellers the option to customise the Hajj package. Changes can be made to the
            hotels, flight classes, and package durations.</p>

        <h4>Are there any health risks during Hajj?</h4>

        <p>Because of the huge crowds and physical activities, pilgrims may face health problems. The most common
            issues include dehydration and heatstrokes. So, it&#39;s advisable to have a water bottle on you at all
            times.</p>

    </div>

</div>
@endsection