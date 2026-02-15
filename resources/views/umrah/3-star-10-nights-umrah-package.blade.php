@extends('layouts.master')
@section('content')
    <section class="package-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-6">
                    <div class="package-gallery">
                        <div class="package-slick-carousel">
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/2%20%289%29.webp')}}"
                                    alt="3 Star 10 Nights Umrah Package"></div>
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/3%20%289%29.webp')}}"
                                    alt="3 Star 10 Nights Umrah Package"></div>
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/4%20%289%29.webp')}}"
                                    alt="3 Star 10 Nights Umrah Package"></div>
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/5%20%288%29.webp')}}"
                                    alt="3 Star 10 Nights Umrah Package"></div>
                        </div>
                        <div class="slick-nav-container">
                            <div class="slick-carousel-nav">
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/2%20%289%29.webp')}}"
                                        alt="3 Star 10 Nights Umrah Package"></div>
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/3%20%289%29.webp')}}"
                                        alt="3 Star 10 Nights Umrah Package"></div>
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/4%20%289%29.webp')}}"
                                        alt="3 Star 10 Nights Umrah Package"></div>
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/5%20%288%29.webp')}}"
                                        alt="3 Star 10 Nights Umrah Package"></div>
                            </div>
                            <div class="slick-arrow left"><img class='svg' src='package-arrow.svg'></div>
                            <div class="slick-arrow right"><img class='svg' src='package-arrow.svg'></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-xl-6">
                    <div class="package-descrip">
                        <h1 class="heading">3 Star 10 Nights Umrah Package</h1>
                        <p class="tagline">Perform Umrah with Best Price</p>
                        <div class="pkg-nights">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="nights">
                                        <div class="row no-gutters align-items-start">
                                            <div class="col-8">
                                                <p>Makkah Hotel Nights <small>AL KISWAH TOWER </small></p>
                                            </div>
                                            <div class="col-4">
                                                <img class="svg" src="weather.svg" alt="weather icon"><strong
                                                    class="days">5</strong>
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
                                                    class="days">5</strong>
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
                            <p>Price <span>&pound; 749</span></p>
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

    <!--Accomodation section Start-->
    <section class="accomodation">
        <div class="container">
            <div class="accomoHeading">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3>Accommodation Features</h3>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
            <!--hotel gallery and description section Strat-->
            <div class="hotel">
                <div class="row no-gutters align-items-center">
                    <div class="offset-md-2 col-md-8 offset-lg-0 col-lg-5 col-xl-5 hotel-parent-swip">
                        <div class="hotel-gallery">
                            <div id="Makkah-hotel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid d-block" src="{{asset('assets/media/hotel/AL%20KISWAH%20TOWER01.jpg')}}"
                                            alt="AL KISWAH TOWER ">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid d-block" src="{{asset('assets/media/hotel/AL%20KISWAH%20TOWER02.jpg')}}"
                                            alt="AL KISWAH TOWER ">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid d-block" src="{{asset('assets/media/hotel/AL%20KISWAH%20TOWER03.jpg')}}"
                                            alt="AL KISWAH TOWER ">
                                    </div>
                                </div>
                                <a class="carousel-control carousel-control-prev" href="#Makkah-hotel" role="button"
                                    data-slide="prev">
                                    <img class="svg" src="carousel-arrow.svg" alt="slider arrow">
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control carousel-control-next" href="#Makkah-hotel" role="button"
                                    data-slide="next">
                                    <img class="svg" src="carousel-arrow.svg" alt="slider arrow">
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7 col-xl-7 hotel-parent-text">
                        <div class="hotel-desc">
                            <div class="flex-container">
                                <h3>Hotel <br>AL KISWAH TOWER </h3>
                                <p class="hotel-where">Hotel In Makkah</p>
                                <div class="pkg-star">
                                    <div class="stars">
                                        <img class="svg" src="star.svg" alt="package star">
                                        <img class="svg" src="star.svg" alt="package star">
                                        <img class="svg" src="star.svg" alt="package star">
                                        <img class="svg inactive" src="star.svg" alt="package star">
                                        <img class="svg inactive" src="star.svg" alt="package star">
                                    </div>
                                </div>
                                <p>
                                <p style="text-align: justify;">The ideal location for the guests of Allah&nbsp;because
                                    this 3-star hotel is just 10 minutes walking distance away from the sacred Masjid Al
                                    Haram. The rooms of the hotel are fully equipped and attached bathroom for each
                                    room. They offer the multi-services to their customers such as dining halls, 24/7
                                    room services, complimentary Wi-Fi etc. Shuttle or transport service will be
                                    available with low-cost price.&nbsp;</p>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="hotel">
                <div class="row no-gutters align-items-center">
                    <div class="offset-md-2 offset-lg-0 col-md-8 col-lg-5 col-xl-5 hotel-parent-swip">
                        <div class="hotel-gallery">
                            <div id="Madinah-hotel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid d-block" src="{{asset('assets/media/hotel/1_11zon%20%281%29.webp')}}"
                                            alt="EMAAR TAIBAH ">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid d-block" src="{{asset('assets/media/hotel/2_11zon%20%281%29.webp')}}"
                                            alt="EMAAR TAIBAH ">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid d-block" src="{{asset('assets/media/hotel/3_11zon%20%281%29.webp')}}"
                                            alt="EMAAR TAIBAH ">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid d-block" src="{{asset('assets/media/hotel/4_11zon%20%281%29.webp')}}"
                                            alt="EMAAR TAIBAH ">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid d-block" src="{{asset('assets/media/hotel/5_11zon%20%281%29.webp')}}"
                                            alt="EMAAR TAIBAH ">
                                    </div>
                                </div>
                                <a class="carousel-control carousel-control-prev" href="#Madinah-hotel" role="button"
                                    data-slide="prev">
                                    <img class="svg" src="carousel-arrow.svg" alt="slider arrow">
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control carousel-control-next" href="#Madinah-hotel" role="button"
                                    data-slide="next">
                                    <img class="svg" src="carousel-arrow.svg" alt="slider arrow">
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7 col-xl-7 hotel-parent-text">
                        <div class="hotel-desc">
                            <div class="flex-container">
                                <h3>Hotel <br>EMAAR TAIBAH </h3>
                                <p class="hotel-where">Hotel In Madinah</p>
                                <div class="pkg-star">
                                    <div class="stars">
                                        <img class="svg" src="star.svg" alt="package star">
                                        <img class="svg" src="star.svg" alt="package star">
                                        <img class="svg" src="star.svg" alt="package star">
                                        <img class="svg inactive" src="star.svg" alt="package star">
                                        <img class="svg inactive" src="star.svg" alt="package star">
                                    </div>
                                </div>
                                <p>
                                <p>Emaar Taiba Hotel in Al Madinah provides well-appointed family rooms featuring air
                                    conditioning, private bathrooms with bidets and walk-in showers, refrigerators,
                                    wardrobes, televisions, electric kettles, and complimentary toiletries for a
                                    comfortable stay. Guests benefit from essential services such as free Wi-Fi, a
                                    24-hour front desk, concierge assistance, room service, a coffee shop, private
                                    check-in and check-out, elevator access, and free on-site private parking.
                                    Conveniently located just 12 minutes on foot from Al-Masjid an-Nabawi and
                                    approximately 9.3 miles from Prince Mohammad bin Abdulaziz International Airport,
                                    the hotel also offers easy access to nearby attractions including Quba Mosque, Mount
                                    Uhud, and Al Hukeer Lowna Park, with visitors frequently praising its prime
                                    location, helpful staff, and excellent value for money.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--hotel gallery and description section End-->
        </div>
    </section>
    <!--Accomodation section End-->

    <!--package Detail content section Start-->
    <section class="package-content">
        <div class="container">
            <h3>DETAILS</h3>
        </div>
    </section>
    <!--package Detail content section End-->

    <!--package inquiry section Start-->
    <section class="packageInquiry" id="packageInquiry">
        <div class="container">
            <div class="inquiryForm">
                <form method="post" class="form inquiry-form" id="inquiry-form" action="../inquery.php">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Inquiry Form</h3>
                                    <label class="label">Departure Date <span>( Choose Any )</span></label>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Name"
                                            name="n[fullName]" required value="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Id" name="n[email]"
                                            required value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number"
                                            name="n[phone]" required value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Message"
                                            name="n[inqMessage]" required value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group Answer">
                                        <input class="form-control" type="text" name="InquiryAnswer"
                                            placeholder="Answer" required>
                                        <span class='captcha-text' style='background: #1A1A1A; color: #fff; padding: 5px 10px; border-radius: 4px; font-weight: bold; margin-left: 10px; display: inline-block; min-width: 50px; text-align: center;'></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 offset-xl-1 col-xl-5">
                            <div class="selectDepart">
                                <label class="label">Departure Date <span>( Choose Any )</span></label>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-secondary active">
                                        <input type="radio" name="n[Fixed]" value="Fixed" id="option1"
                                            autocomplete="off"> Fixed
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input type="radio" name="n[Flexiblen]" value="Flexible" id="option2"
                                            autocomplete="off"> Flexible
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input type="radio" name="n[Anytime]" value="Anytime" id="option3"
                                            autocomplete="off"> Anytime
                                    </label>
                                </div>
                            </div>
                            <div class="form-group departDate collapse show">
                                <input class="form-control DepartureDate" type="text" name="n[Departure Date]"
                                    placeholder="Departure Date" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <button class="inquiryBtn" type="submit" name="submit" value="send inquiry">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section> <!--package inquiry section End-->
@endsection