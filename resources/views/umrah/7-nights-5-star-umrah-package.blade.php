@extends('layouts.master')
@section('meta')
    <title>Trusted Islamic Travel Agency in the UK for Umrah Services</title>
    <meta name="description" content="Get Umrah services from a trusted Islamic travel agency in London, UK. We offer all-inclusive Umrah packages for families, groups, and individuals.">
@endsection
@section('content')
    <!--package detail section Start-->
    <section class="package-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-6">
                    <div class="package-gallery">
                        <div class="package-slick-carousel">
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/01%20%285%29.webp')}}"
                                    alt="7 Nights 5 Star March Umrah Package"></div>
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/02%20%285%29.webp')}}"
                                    alt="7 Nights 5 Star March Umrah Package"></div>
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/03%20%285%29.webp')}}"
                                    alt="7 Nights 5 Star March Umrah Package"></div>
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/04%20%285%29.webp')}}"
                                    alt="7 Nights 5 Star March Umrah Package"></div>
                            <div><img class="img-fluid" src="{{asset('assets/media/umrah/05%20%282%29.webp')}}"
                                    alt="7 Nights 5 Star March Umrah Package"></div>
                        </div>
                        <div class="slick-nav-container">
                            <div class="slick-carousel-nav">
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/01%20%285%29.webp')}}"
                                        alt="7 Nights 5 Star March Umrah Package"></div>
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/02%20%285%29.webp')}}"
                                        alt="7 Nights 5 Star March Umrah Package"></div>
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/03%20%285%29.webp')}}"
                                        alt="7 Nights 5 Star March Umrah Package"></div>
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/04%20%285%29.webp')}}"
                                        alt="7 Nights 5 Star March Umrah Package"></div>
                                <div><img class="img-fluid" src="{{asset('assets/media/umrah/05%20%282%29.webp')}}"
                                        alt="7 Nights 5 Star March Umrah Package"></div>
                            </div>
                            <div class="slick-arrow left"><img class='svg' src='package-arrow.svg'></div>
                            <div class="slick-arrow right"><img class='svg' src='package-arrow.svg'></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-xl-6">
                    <div class="package-descrip">
                        <h1 class="heading">7 Nights 5 Star March Umrah Package</h1>
                        <p class="tagline">Perform Umrah in March</p>
                        <div class="pkg-nights">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="nights">
                                        <div class="row no-gutters align-items-start">
                                            <div class="col-8">
                                                <p>Makkah Hotel Nights <small>Swissotel Makkah</small></p>
                                            </div>
                                            <div class="col-4">
                                                <img class="svg" src="weather.svg" alt="weather icon"><strong
                                                    class="days">4</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="nights">
                                        <div class="row no-gutters align-items-start">
                                            <div class="col-8">
                                                <p>Madinah Hotel Nights <small>Anwar Al Madinah Movenpick</small></p>
                                            </div>
                                            <div class="col-4">
                                                <img class="svg" src="weather.svg" alt="weather icon"><strong
                                                    class="days">3</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pkg-facilities">
                            <div class="facility">
                                <div class="facility-img">
                                    <img src="plane.svg" alt="Flight" class="svg">
                                </div>
                                <span>Flight</span>
                            </div>
                            <div class="facility">
                                <div class="facility-img">
                                    <img src="bed.svg" alt="Makkah Hotel" class="svg">
                                </div>
                                <span>Makkah Hotel</span>
                            </div>
                            <div class="facility">
                                <div class="facility-img">
                                    <img src="bed.svg" alt="Medina Hotel" class="svg">
                                </div>
                                <span>Medina Hotel</span>
                            </div>
                            <div class="facility">
                                <div class="facility-img">
                                    <img src="transport.svg" alt="Transports" class="svg">
                                </div>
                                <span>Transports</span>
                            </div>
                            <div class="facility">
                                <div class="facility-img">
                                    <img src="breakfast2.svg" alt="Breakfast" class="svg">
                                </div>
                                <span>Breakfast</span>
                            </div>
                        </div>
                        <div class="pkg-star">
                            <div class="stars">
                                <img class="svg" src="star.svg" alt="package star">
                                <img class="svg" src="star.svg" alt="package star">
                                <img class="svg" src="star.svg" alt="package star">
                                <img class="svg" src="star.svg" alt="package star">
                                <img class="svg" src="star.svg" alt="package star">
                            </div>
                            <span>5-Star</span>
                        </div>
                        <div class="price">
                            <p>Price <span>&pound; 785</span></p>
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