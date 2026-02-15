@extends('layouts.master')
@section('content')
<div class="page-content">

    <div class="container">

        <p>
    </div>
</div>
<div class="page-content">
    <div class="container">
        <div class="review-form-button collapse show collapse-review">
            <div class="row">
                <div class="col-md-12">
                    <h2>
                        <span class="heading">Customer Reviews</span>
                        <p>Send us your feedback</p>
                    </h2>
                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                        data-target=".collapse-review">Write a Review</button>
                </div>
            </div>
        </div>
        <div class="review-form collapse collapse-review">
            <form method="post" class="form">
                <div class="row align-items-end">
                    <div class="offset-xl-3 col-xl-6 offset-lg-1 col-lg-8 col-md-12 col-sm-12">
                        <button class="close-form" type="button" data-toggle="collapse"
                            data-target=".collapse-review"><img src="close.svg" alt="close image"
                                class="svg"></button>
                        <span class="heading">Please Send Us Your Feedback</span>
                        <strong>Submit your Review</strong>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="n[fullname]" placeholder="Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="n[email]"
                                        placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="n[bookingrefrence]"
                                        placeholder="Booking Refrence" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group ratings">
                                    <span>Rating</span>
                                    <fieldset class="rating">
                                        <input type="radio" id="star5" name="n[reviewstars]" value="5"
                                            checked=""><label class="full" for="star5"
                                            title="Awesome - 5 stars"></label>
                                        <input type="radio" id="star4" name="n[reviewstars]" value="4"><label
                                            class="full" for="star4" title="Pretty good - 4 stars"></label>
                                        <input type="radio" id="star3" name="n[reviewstars]" value="3"><label
                                            class="full" for="star3" title="Meh - 3 stars"></label>
                                        <input type="radio" id="star2" name="n[reviewstars]" value="2"><label
                                            class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                        <input type="radio" id="star1" name="n[reviewstars]" value="1"><label
                                            class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="n[review]" rows="7"
                                        placeholder="Review Description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-12 col-sm-12">

                        <div class="form-group">
                            <div class="product_media_collection">
                                <div class="imageUpload clearfix product_media">
                                    <label class="custom-file-upload col-sm-12 ui-state-disabled"
                                        for="catalog_product_image">
                                        <div class="up-msg">
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                            <span>size of image <br> ( 200 * 200 )</span>
                                        </div>
                                    </label>
                                    <input type="file" style="display:none;" placeholder="File Upload" name="files"
                                        id="catalog_product_image" class="catalog_product_image form-control"
                                        data-inp-name="n[images]" data-path="reviews" data-size="200x200"
                                        data-image-count="1">
                                    <!-- remoed -->

                                </div>
                            </div>
                            <label>Upload Image</label>
                        </div>
                    </div>
                    <div class="offset-xl-3 col-xl-6 offset-lg-1 col-lg-8 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group Answer">
                                    <input class="form-control" type="text" name="ReviewAnswer" placeholder="Answer"
                                        required>
                                    <span class='captcha-text' style='background: #1A1A1A; color: #fff; padding: 5px 10px; border-radius: 4px; font-weight: bold; margin-left: 10px; display: inline-block; min-width: 50px; text-align: center;'></span>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <input type="checkbox" id="privacy-check" name="policy_check" required>
                                <label for="privacy-check"><span class="box"></span> <span class="box-text"> By
                                        Checking This Box You Agreed With Our Terms And Conditions And Privacy
                                        Policy. <span
                                            class="error_check text-danger">(Required)</span></span></span></label>
                            </div>
                        </div>
                    </div>

                    <div class="offset-xl-3 col-xl-6 offset-lg-1 col-lg-8 col-md-12 col-sm-12 mt-2">
                        <button class="btn btn-primary" type="submit" name="submit"
                            value="Send Review Message">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<section class="testimonials withoutCarousel">
    <div class=" container-fluid p-0">
        <div class="testimonialCarousel">
            <div class="sectionMainHeading">
                <p>Customer Reviews</p>
            </div>
            <div id="testimonial" class="owl-carousel owl-loaded owl-drag DisableCarousel">
                <div class="item">
                    <div class="testimonial">
                        <div class="testimonialImage">
                            <img loading="lazy" width="130" height="130" class="img-fluid"
                                src="{{asset('assets/media/reviews/testimonial-image.webp')}}" alt="testimonial image">
                        </div>
                        <div class="testimonialDesc">
                            <div class="stars"><img loading="lazy" height="16" width="16" class="svg "
                                    src="star.svg" alt="package star"><img loading="lazy" height="16" width="16"
                                    class="svg " src="star.svg" alt="package star"><img loading="lazy" height="16"
                                    width="16" class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                    height="16" width="16" class="svg " src="star.svg" alt="package star"><img
                                    loading="lazy" height="16" width="16" class="svg inactive" src="star.svg"
                                    alt="package star"></div><br>
                            <p><span>Sultana Sameer</span></p> <sup>"</sup>I booked my Umrah package with
                            Hajjumrahhub and went to perform umrah in April 2018. I stayed in fairmont Royal clock
                            tower hotel which was minutes away from masjid Al Haram gate number 1 everything was
                            absolutely amazing. In Madinah I stayed in<sup>"</sup></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial">
                        <div class="testimonialImage">
                            <img loading="lazy" width="130" height="130" class="img-fluid"
                                src="{{asset('assets/media/reviews/testimonial-image3.webp')}}" alt="testimonial image">
                        </div>
                        <div class="testimonialDesc">
                            <div class="stars"><img loading="lazy" height="16" width="16" class="svg "
                                    src="star.svg" alt="package star"><img loading="lazy" height="16" width="16"
                                    class="svg " src="star.svg" alt="package star"><img loading="lazy" height="16"
                                    width="16" class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                    height="16" width="16" class="svg inactive" src="star.svg"
                                    alt="package star"><img loading="lazy" height="16" width="16"
                                    class="svg inactive" src="star.svg" alt="package star"></div><br>
                            <p><span>Saika Khan</span></p> <sup>"</sup>Jazakallah for everything you did for us to
                            make our journey amazing will be definitely using your company again in 18 months
                            Inshaallah Words cant describe how amazing it was nd service was fantastic no problems
                            no hiccups transport was bang on<sup>"</sup></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial">
                        <div class="testimonialImage">
                            <img loading="lazy" width="130" height="130" class="img-fluid"
                                src="{{asset('assets/media/reviews/testimonial-image2%20%281%29.webp')}}" alt="testimonial image">
                        </div>
                        <div class="testimonialDesc">
                            <div class="stars"><img loading="lazy" height="16" width="16" class="svg "
                                    src="star.svg" alt="package star"><img loading="lazy" height="16" width="16"
                                    class="svg " src="star.svg" alt="package star"><img loading="lazy" height="16"
                                    width="16" class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                    height="16" width="16" class="svg " src="star.svg" alt="package star"><img
                                    loading="lazy" height="16" width="16" class="svg inactive" src="star.svg"
                                    alt="package star"></div><br>
                            <p><span>Ismael Peerally</span></p> <sup>"</sup>I booked my Umrah package with Hajj
                            Umrah Hub and went to perform umrah in April 2018. I stayed in fairmont Royal clock
                            tower hotel which was minutes away from masjid Al Haram gate number 1 everything was
                            absolutely amazing. In Madinah I stayed in<sup>"</sup></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial">
                        <div class="testimonialImage">
                            <img loading="lazy" width="130" height="130" class="img-fluid"
                                src="{{asset('assets/media/reviews/image.jpg')}}" alt="testimonial image">
                        </div>
                        <div class="testimonialDesc">
                            <div class="stars"><img loading="lazy" height="16" width="16" class="svg "
                                    src="star.svg" alt="package star"><img loading="lazy" height="16" width="16"
                                    class="svg " src="star.svg" alt="package star"><img loading="lazy" height="16"
                                    width="16" class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                    height="16" width="16" class="svg " src="star.svg" alt="package star"><img
                                    loading="lazy" height="16" width="16" class="svg " src="star.svg"
                                    alt="package star"></div><br>
                            <p><span>Iqbal Husain</span></p> <sup>"</sup>I booked my Umrah package with Hajj Umrah
                            Hub and went to perform Umrah in April 2023. I stayed in the Fairmont Royal clock tower
                            hotel, which was minutes away from masjid Al Haram gate number 1. Everything was
                            absolutely amazing. In Madinah, I stayed in a hotel nearby the Prophet's Mosque, which
                            was also very convenient. The entire experience was truly unforgettable, and I highly
                            recommend Hajj Umrah Hub to anyone looking to make the journey.<sup>"</sup></p>
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

    </div>

</div>
@endsection