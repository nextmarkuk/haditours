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
                <form class="form" method="post" action="{{ route('sendInquiry') }}">
                    @csrf
                    <div class="form-group Half">
                        <label for="fromform">
                            <img loading="lazy" width="21" height="21" src="{{asset('assets/images/hajjumrahhub-imgs-updated/from.png')}}" alt="Departure Airport"> Departure
                            Airport
                        </label>
                        <select class="form-control" name="n[From]" id="fromform" required>
                            <option value="" disabled selected> Select Depature</option>
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
                            <option value="" disabled selected> Select Arrival</option>
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
                            readonly required placeholder="10 Oct 2026">
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <!--<input class="form-control" type="text" name="phone" placeholder="Phone" required>-->
                        <label for="Phoneform"><img loading="lazy" width="22" height="18"
                                src="{{asset('assets/images/hajjumrahhub-imgs-updated/phone.png')}}" alt="Phone Number"> Phone
                            Number</label>020 3103 0264
                        <input class="form-control" id="Phoneform" name="n[Phone Number]" type="text" placeholder="Enter Number etc. 0203 970 0002" required>
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <!--<input class="form-control" type="text" name="email" placeholder="Email" required>-->
                        <label for="emailform"><img loading="lazy" width="22" height="16"
                                src="{{asset('assets/images/hajjumrahhub-imgs-updated/email.png')}}" alt="Email Address"> Email
                            Address</label>
                        <input class="form-control" name="n[Email]" id="emailform" type="email" placeholder="Enter email etc. info@hajjumrahhub.co.uk" required>
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group nights">
                        <div class="form-group threeQuater">
                            <label for="nightform"><img loading="lazy" width="17" height="19"
                                    src="{{asset('assets/images/hajjumrahhub-imgs-updated/moon.png')}}" alt="Nights"> Nights</label>
                            <select class="form-control" id="nightform" name="n[makkah_nights]">
                                <option value="" disabled selected> Select Mark</option>
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
                                <option value="" disabled selected> Select Med</option>
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
                            <option value="" disabled selected> Select Rooms</option>
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
                                src="{{asset('assets/images/hajjumrahhub-imgs-updated/checkanswer.png')}}" alt=""> Answer <span
                                class='captcha-text'
                                style='background: #1A1A1A; color: #fff; padding: 5px 10px; border-radius: 4px; font-weight: bold; margin-left: 10px; display: inline-block; min-width: 60px; text-align: center;'>Loading...</span></label>
                        <input class="form-control" id="answerform" type="text" name="InquiryAnswer" placeholder="1 + 2 = 3" required>
                        <span class="borderBottom"></span>
                    </div>

                    <div class="form-group Half">
                        <button type="submit" class="btn btn-primary btn-block" name="submit"
                            value="Send Message">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!--slider section End-->