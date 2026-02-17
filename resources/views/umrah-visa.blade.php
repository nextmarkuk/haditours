@extends('layouts.master')
@section('content')
<section class="search-banner">
    <div class="banner">
        <img width="1826" height="937" src="{{asset('assets/media/pages/umrah-visa-from-uk-banner.webp')}}" class="img-fluid"
            alt="Banner Image">
        <div class="banner-text">
            <h1>Umrah Visa from UK</h1>
        </div>
    </div>
    <div class="searchEngine" id="packageInquiry">
        <div class="searchFields">
            <form class="form" method="post" action="inquery.php">

                <div class="form-group Half">
                    <label for="fromform"><img loading="lazy" width="21" height="21"
                            src="{{asset('assets/images/hajjumrahhub-imgs-updated/from.png')}}" alt="Departure Airport"> Departure
                        Airport</label>
                    <select class="form-control" name="n[From]" id="fromform" required>
                        <option value=""></option>
                        <option value="Aberdeen (ABZ)">Aberdeen (ABZ)</option>
                        <option value="Amsterdam (AMS)">Amsterdam (AMS)</option>
                        <option value="Belfast Intl (BFS)">Belfast Intl (BFS)</option>
                        <option value="Birmingham (BHX)">Birmingham (BHX)</option>
                        <option value="Bristol (BRS)">Bristol (BRS)</option>
                        <option value="Cardiff (CWL)">Cardiff (CWL)</option>
                        <option value="Dublin (DUB)">Dublin (DUB)</option>
                        <option value="Eindhoven (EIN)">Eindhoven (EIN)</option>
                        <option value="Glasgow (GLA)">Glasgow (GLA)</option>
                        <option value="London (LON)">London (LON)</option>
                        <option value="London Gatwick (LGW)">London Gatwick (LGW)</option>
                        <option value="London Heathrow (LHR)">London Heathrow (LHR)</option>
                        <option value="Manchester (MAN)">Manchester (MAN)</option>
                        <option value="Newcastle (NCL)">Newcastle (NCL)</option>
                        <option value="Rotterdam The Hague (RTM)">Rotterdam The Hague (RTM)</option>
                    </select>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="toform"><img loading="lazy" width="26" height="21"
                            src="{{asset('assets/images/hajjumrahhub-imgs-updated/to.png')}}" alt="Arrival Airport"> Arrival
                        Airport</label>
                    <select class="form-control" name="n[To]" id="toform" required>
                        <option value=""></option>
                        <option value="Jeddah">Jeddah</option>
                        <option value="Dammam">Dammam</option>
                        <option value="Abha">Abha</option>
                        <option value="Yanbu">Yanbu</option>
                        <option value="Taif">Taif</option>
                        <option value="Riyadh">Riyadh</option>
                    </select>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <!--<input class="form-control MaintoDate" type="text" name="depart_date" placeholder="Dates" required>-->
                    <label for="dateform"><img loading="lazy" width="21" height="21"
                            src="{{asset('assets/images/hajjumrahhub-imgs-updated/calender.png')}}" alt="Date"> Date</label>
                    <input class="form-control DepartureDate" id="dateform" name="n[Departure Date]" type="text"
                        readonly required>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <!--<input class="form-control" type="text" name="phone" placeholder="Phone" required>-->
                    <label for="Phoneform"><img loading="lazy" width="22" height="18"
                            src="{{asset('assets/images/hajjumrahhub-imgs-updated/phone.png')}}" alt="Phone Number"> Phone
                        Number</label>
                    <input class="form-control" id="Phoneform" name="n[Phone Number]" type="text" required>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <!--<input class="form-control" type="text" name="email" placeholder="Email" required>-->
                    <label for="emailform"><img loading="lazy" width="22" height="16"
                            src="{{asset('assets/images/hajjumrahhub-imgs-updated/email.png')}}" alt="Email Address"> Email
                        Address</label>
                    <input class="form-control" name="n[Email]" id="emailform" type="email" required>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group nights">
                    <div class="form-group threeQuater">
                        <label for="nightform"><img loading="lazy" width="17" height="19"
                                src="{{asset('assets/images/hajjumrahhub-imgs-updated/moon.png')}}" alt="Nights"> Nights</label>
                        <select class="form-control" id="nightform" name="n[makkah_nights]">
                            <option value="">MAK</option>
                            <option value="1">MAK 1</option>
                            <option value="2">MAK 2</option>
                            <option value="3">MAK 3</option>
                            <option value="4">MAK 4</option>
                            <option value="5">MAK 5</option>
                            <option value="6">MAK 6</option>
                            <option value="7">MAK 7</option>
                            <option value="8">MAK 8</option>
                            <option value="9">MAK 9</option>
                            <option value="10">MAK 10</option>
                        </select>
                        <span class="borderBottom"></span>
                    </div>
                    <div class="form-group Quater">
                        <label for="nightform1"><img loading="lazy" width="17" height="19"
                                src="{{asset('assets/images/hajjumrahhub-imgs-updated/moon.png')}}" alt="Nights"> Nights</label>
                        <select class="form-control" id="nightform1" name="n[madinah_nights]">
                            <option value="">MED</option>
                            <option value="1">MED 1</option>
                            <option value="2">MED 2</option>
                            <option value="3">MED 3</option>
                            <option value="4">MED 4</option>
                            <option value="5">MED 5</option>
                            <option value="6">MED 6</option>
                            <option value="7">MED 7</option>
                            <option value="8">MED 8</option>
                            <option value="9">MED 9</option>
                            <option value="10">MED 10</option>
                        </select>
                        <span class="borderBottom"></span>
                    </div>
                </div>

                <div class="form-group Half">
                    <label for="roomform"><img loading="lazy" width="22" height="16"
                            src="{{asset('assets/images/hajjumrahhub-imgs-updated/rooms.png')}}" alt="Rooms"> Rooms</label>
                    <select class="form-control" id="roomform" name="n[room]">
                        <option value=""></option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
                        <option value="Triple">Triple</option>
                        <option value="Quad">Quad</option>
                    </select>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group passenger-contain Half">
                    <label for="count-pass"><img loading="lazy" width="21" height="20"
                            src="{{asset('assets/images/hajjumrahhub-imgs-updated/travellers.png')}}" alt="Travellers">
                        Travellers</label>
                    <div class="input-group-main">
                        <div class="input-group">
                            <input class="form-control select inputValue PassengersField" id="count-pass"
                                type="text" data-bs-toggle="collapse" placeholder=""
                                data-bs-target=".beat-passenger-dropdown" required>

                        </div>
                    </div>
                    <div class="passenger-dropdown beat-passenger-dropdown collapse">
                        <div class="form-group mt-0">
                            <label for="adult_p">Adults [+12]</label>
                            <div class="input-group passenger adult-pass">
                                <button class="btn  minus" type="button">
                                    <img loading="lazy" width="12" height="12" class="img-fluid"
                                        src="{{asset('assets/images/hajjumrahhub-imgs-updated/minus.png')}}" alt="minus">
                                </button>
                                <input class="form-control passengerInput totalAdult" type="number"
                                    placeholder="Adults" min="0" max="10" name="n[Adults]" value="1" id="adult_p"
                                    selected>
                                <button class="btn  plus" type="button">
                                    <img loading="lazy" width="12" height="12" class="img-fluid"
                                        src="{{asset('assets/images/hajjumrahhub-imgs-updated/plus.png')}}" alt="plus">
                                </button>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="child_p">Children [2 to 12]</label>
                            <div class="input-group passenger child-pass">
                                <button class="btn  minus" type="button">
                                    <img loading="lazy" width="12" height="12" class="img-fluid"
                                        src="{{asset('assets/images/hajjumrahhub-imgs-updated/minus.png')}}" alt="minus">
                                </button>
                                <input id="child_p" class="form-control passengerInput totalChild" type="number"
                                    placeholder="Childs" min="0" max="10" name="n[Childs]" value="0" selected>
                                <button class="btn  plus" type="button">
                                    <img loading="lazy" width="12" height="12" class="img-fluid"
                                        src="{{asset('assets/images/hajjumrahhub-imgs-updated/plus.png')}}" alt="plus">
                                </button>
                            </div>
                        </div>
                        <div class="form-group mt-2 mb-2">
                            <label for="infant_p">Infants [0 to 2]</label>
                            <div class="input-group passenger infant-pass">
                                <button class="btn  minus" type="button">
                                    <img loading="lazy" width="12" height="12" class="img-fluid"
                                        src="{{asset('assets/images/hajjumrahhub-imgs-updated/minus.png')}}" alt="minus">
                                </button>
                                <input id="infant_p" class="form-control passengerInput totalInfant" type="number"
                                    placeholder="Infants" min="0" max="10" name="n[Infants]" value="0" selected>
                                <button class="btn  plus" type="button">
                                    <img loading="lazy" width="12" height="12" class="img-fluid"
                                        src="{{asset('assets/images/hajjumrahhub-imgs-updated/plus.png')}}" alt="plus">
                                </button>
                            </div>
                        </div>
                        <button class="btn general-btn btn-block" type="button" data-bs-toggle="collapse"
                            data-bs-target=".passenger-dropdown">Select</button>
                    </div>
                </div>

                <div class="form-group Answer  Half">
                    <label for="answerform"><img loading="lazy" width="20" height="15"
                            src="{{asset('assets/images/hajjumrahhub-imgs-updated/checkanswer.png')}}" alt=""> Answer <span class='captcha-text' style='background: #1A1A1A; color: #fff; padding: 5px 10px; border-radius: 4px; font-weight: bold; margin-left: 10px; display: inline-block; min-width: 60px; text-align: center;'>Loading...</span></label>
                    <input class="form-control" id="answerform" type="text" name="InquiryAnswer" required> <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <button type="submit" class="btn btn-primary btn-block" name="submit"
                        value="Send Message">Submit</button>
                </div>

            </form>
        </div>
    </div>
</section>
<div class="page-content">
    <div class="container">
        <h2>Get an Umrah Visa With Hajj Umrah Hub</h2>
        <p>If you live in the UK and want to go on a unique journey to Saudi Arabia for Umrah, you&#39;ve come to
            the right spot. We are aware that it can be thrilling and confusing to plan your Umrah journey.
            That&#39;s why we made this helpful guide to show you how to get your Umrah visa and make your journey
            easier.</p>
        <p>With Hajj Umrah Hub, getting a Saudi Umrah visa is easier than ever. We&#39;re here to guide you every
            step of the way and make sure your application process is smooth.</p>

        <h2>Apply for an Umrah Visa from the UK</h2>

        <p>Without a Saudi Umrah visa from the UK, you won&#39;t be allowed to enter Saudi Arabia for religious
            purposes. So, let&#39;s break down the entire process.</p>

        <p><strong>Contact Us:</strong></p>

        <p>The first step is to reach out to us. We&#39;ll help you every step of the way, including your
            application. So, with us, you can not only get the visa application, but we will also help you fill it
            out and obtain the visa.</p>

        <p><strong>Documents:</strong></p>

        <p>The next action is to collect every document required for the application. The validity of your passport
            should be at least six months from your intended travel date. If the expiration date of your passport is
            approaching, renew it before you begin the application process. You&#39;ll also need a recent
            passport-sized photo for your visa application. Lastly, fill out the application form carefully,
            ensuring no errors. You can also apply for an e-visa. The documents are the same but need an active
            email address.</p>

        <p><strong>Book Package: </strong></p>

        <p>Before you apply for your Umrah visa to Saudi Arabia, it&#39;s a good idea to plan your visit. This means
            you should know when and where you&#39;re going. It&#39;s essential to have your flight information and
            hotel reservations ready. This way, it will be simpler to obtain your visa. The best way to do this is
            by <strong><a href="{{ route('umrahPackages') }}">booking an
                    umrah&nbsp;package</a></strong> with us. But if you want only a visa, without booking a package,
            we can do that too!</p>

        <p><strong>Submit: </strong></p>

        <p>Once you have all your documents in order and have filled out the application form, it&#39;s time to
            submit your application. Be prepared for some processing time. For e-visas, it&#39;s usually only 72
            hours. But to avoid issues, apply in advance of the date you intend to travel.</p>

        <h2>Purpose of Umrah Visa</h2>

        <p>You might be wondering why you need an Umrah visa from the UK. How does it function for your travel, and
            what is its purpose? So, let&#39;s talk about what an Umrah visa does and why it&#39;s essential.</p>

        <p>The primary purpose is simple. An Umrah visa is the only way to make Umrah in Saudi Arabia. You can
            access the holy sites in Makkah and Medina with a Saudi Umrah visa. No other visa permits you to <a
                href="{{ route('umrahPackages2026') }}"><strong>perform Umrah in
                    2026</strong></a>. A tourist visa only allows you to enter Suadi Arabia for tourism
            purposes, and a Hajj visa is to perform Hajj.</p>

        <p>The access to holy sites in Makkah and Medina means you get to visit the cities that are very important
            in Islam. They have sacred places like the Prophet&#39;s Mosque in Medina and the Kaaba in Makkah. The
            Umrah visa is like your special pass to visit these holy places. With it, you can do religious rituals,
            pray, and participate in spiritual activities at the Grand Mosque and other important places.</p>

        <p>But you must remember that Umrah visas are short-term visas. You are usually only allowed to stay in
            Saudi Arabia for two weeks. After that, you must leave. In Ramadan, you may get to stay till the end of
            the month. This time frame is set up to handle the number of pilgrims and ensure everyone can visit the
            holy cities without any problems. You must ensure your journey fits within the dates on your visa and
            follow those dates carefully.</p>

        <p style="text-align: center;"><strong>UMRAH Visa Only &nbsp;Dial <a href="tel:0203 970 0002">0203 970
                    0002</a></strong></p>

        <h3>On a Final Note</h3>

        <p>Your Umrah visa is like a unique permission slip from the Saudi government. It&#39;s a key that allows
            you to visit Saudi Arabia for spiritual purposes. You need this special permission to leave the UK and
            enter Saudi Arabia for your religious journey.</p>

        <p>So, if you are planning to perform Umrah any time soon, it&#39;s time to apply for your Umrah visa UK.
            With Hajj Umrah Hub, the process is extremely smooth, and we&#39;ll help you every step of the way.</p>

        <h3>FAQs</h3>

        <h4>How often can I enter Saudi Arabia with an Umrah visa from the UK?</h4>

        <p>An Umrah visa is a single entry visa. This means that you can only enter Saudi Arabia once for Umrah. So,
            if you want to perform Umrah again after exiting Saudi Arabia, you must apply for a visa again.</p>

        <h4>What is the Umrah visa fee from the UK?</h4>

        <p>For British citizens, the Umrah visa fee is usually between &pound;115 to &pound;190.</p>

        <h4>Will I get a Saudi Umrah visa from Hajj Umrah Hub with my Umrah package?</h4>

        <p>Yes, if you book an Umrah package with us, you automatically get an Umrah visa.</p>

    </div>
</div>
@endsection