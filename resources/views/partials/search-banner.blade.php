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
                            <img loading="lazy" width="21" height="21" src="{{asset('assets/images/hajjumrahhub-imgs-updated/from.png')}}" alt="Departure Airport"> Departure Airport
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
                            <img loading="lazy" width="21" height="21" src="{{asset('assets/images/hajjumrahhub-imgs-updated/calender.png')}}" alt="Date"> Departure Date
                        </label>
                        <input type="text" id="enquiry-departuredate" name="n[Departure Date]" class="DepartureDate form-control" readonly placeholder="Departure Date" required/>
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <label for="enquiry-hotelcategory">
                            <img loading="lazy" width="22" height="16" src="{{asset('assets/images/hajjumrahhub-imgs-updated/rooms.png')}}" alt="Hotel Category"> Hotel Category
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
                            <img loading="lazy" width="17" height="19" src="{{asset('assets/images/hajjumrahhub-imgs-updated/moon.png')}}" alt="Duration"> Duration
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
                            <img loading="lazy" width="21" height="20" src="{{asset('assets/images/hajjumrahhub-imgs-updated/travellers.png')}}" alt="Travellers"> Travelers
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
                        <label for="enquiry-name">Full Name</label>
                        <input type="text" class="form-control" id="enquiry-name" name="n[name]" placeholder="Full Name" required />
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <label for="enquiry-phone">
                            <img loading="lazy" width="22" height="18" src="{{asset('assets/images/hajjumrahhub-imgs-updated/phone.png')}}" alt="Phone Number"> Contact No
                        </label>
                        <input type="text" class="form-control" id="enquiry-phone" name="n[Phone Number]" placeholder="Contact No" required />
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <label for="enquiry-email">
                            <img loading="lazy" width="22" height="16" src="{{asset('assets/images/hajjumrahhub-imgs-updated/email.png')}}" alt="Email Address"> Email
                        </label>
                        <input type="email" class="form-control" name="n[email]" id="enquiry-email" placeholder="Email" required />
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <label for="answerform">
                            <img loading="lazy" width="20" height="15" src="{{asset('assets/images/hajjumrahhub-imgs-updated/checkanswer.png')}}" alt=""> Answer 
                            <span class='captcha-text' style='background: #1A1A1A; color: #fff; padding: 5px 10px; border-radius: 4px; font-weight: bold; margin-left: 10px; display: inline-block; min-width: 60px; text-align: center;'>Loading...</span>
                        </label>
                        <input class="form-control" id="answerform" type="number" name="InquiryAnswer" placeholder="1 + 2 = ?" required>
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <button type="submit" class="btn btn-primary btn-block" name="submit" value="Send Message">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--slider section End-->