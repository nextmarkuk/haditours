@extends('layouts.master')
@section('meta')
    <title>Trusted Islamic Travel Agency in the UK for Umrah Services</title>
    <meta name="description" content="Get Umrah services from a trusted Islamic travel agency in London, UK. We offer all-inclusive Umrah packages for families, groups, and individuals.">
@endsection
@section('content')
<div class="page-content">

    <div class="container">

        <h1>Contact Us</h1>

        <p>Fields marked with * are mandatory</p>

        <p>
    </div>
</div>
<div class="contact-us">
    <div class="container">
        <div class="contact-info">
            <div class="row">
                <div class="col-md-6 col-lg-6 offset-xl-1 col-xl-5">
                    <div class="contact-form">
                        <h2>Contact</h2>
                        <p><strong>Fill The Form Below</strong> ( Choose Any )</p>
                        <form class="form" method="post" action="inquery.php">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="n[name]" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="n[email]" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="n[subject]"
                                            placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="n[phone]" placeholder="Phone"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea name="n[Message]" class="form-control"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group Answer">
                                        <input class="form-control" type="text" name="InquiryAnswer"
                                            placeholder="Answer" required>
                                        <span class='captcha-text'
                                            style='background: #1A1A1A; color: #fff; padding: 5px 10px; border-radius: 4px; font-weight: bold; margin-left: 10px; display: inline-block; min-width: 60px; text-align: center;'>Loading...</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="customBtn" type="submit" name="submit"
                                        value="Send Contact Message"><span class="image"><img class="svg"
                                                src="package-arrow.svg" alt="arrow"></span><span class="text">Send
                                            Now</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 offset-xl-1 col-xl-4">
                    <div class="contact-desc">
                        <h4>Address</h4>

                        <div class="contact-detail">
                            <p>Phone Number <a href="tel:0203 970 0002">0203 970 0002</a></p>
                            <p>Email Address <a href="mailto:info@hajjumrahhub.co.uk">info@hajjumrahhub.co.uk</a>
                            </p>
                            <p>Address <span>Suite No.5, The Old Dispensary , 30 Romford Road , Stratford London,
                                    England, E15 4BZ</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content">
    <div class="container scroll-page-content page-content-styling">
        </p>

    </div>

</div>
@endsection