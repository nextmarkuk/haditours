@extends('layouts.master')
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
                    <div class="col-md-12 col-lg-7 col-xl-7 hotel-parent-text">
                        <div class="hotel-desc">
                            <div class="flex-container">
                                <h3>Hotel <br>Emaar al khalil</h3>
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
                                <p>Emaar Al Khalil in Makkah offers comfortable 2-star accommodation with
                                    air-conditioned rooms equipped with a TV, electric kettle, and free Wi-Fi for a
                                    pleasant stay. The hotel provides convenient facilities including a 24-hour front
                                    desk, parking, and helpful reception staff who speak both Arabic and English.
                                    Ideally located about 92 km from King Abdulaziz International Airport, the property
                                    is within a 13-minute walk of Masjid Al Haram and less than 1 km from the Zamzam
                                    Well, with nearby attractions such as the Makkah Museum and Hira Cave also easily
                                    accessible.</p>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="hotel">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-12 col-lg-7 col-xl-7 hotel-parent-text">
                        <div class="hotel-desc">
                            <div class="flex-container">
                                <h3>Hotel <br>Odst al madina</h3>
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
                                <p>Odst Almadina Hotel provides comfortable accommodation in Al Madinah with
                                    complimentary Wi-Fi available throughout the property and an on-site restaurant for
                                    guests to enjoy. The rooms are well equipped with flat-screen satellite TVs, private
                                    bathrooms with bathtubs, and thoughtful amenities such as slippers, free toiletries,
                                    hairdryers, and in-room coffee machines, while select rooms also feature a seating
                                    area. Guests benefit from convenient services including a 24-hour front desk, ATM,
                                    gift shop, retail outlets, and car rental facilities. The hotel is ideally located
                                    just a short walk from the Prophet&rsquo;s Mosque and the Old Bazaar, with Prince
                                    Mohammed Airport approximately 8.1 miles away.</p>
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