  <div class="container">
    <div class="row pt-5">
        <div class="col-md-6"></div>
      <div class="col-md-6 p-0">
          <div class="bg-dark p-4 mb-5 umrah-form-box">
              <h4 class="text-center text-white mb-4">Let's Plan Your Umrah</h4>
        <form id="frm-enquiry" name="frm-enquiry" method="post" onsubmit="return false;">
          <div class="row formfield">
            <div class="col-md-6 mb-2">
              <select class="form-select" id="enquiry-departure" name="enquiry-departure">
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
            </div>

            <div class="col-md-6 mb-2"><input type="text" id="enquiry-departuredate" name="enquiry-departuredate" class="datetimepicker form-select" placeholder="Departure Date"/> </div>
            <div class="font-weight-300 text-white fs-16" id="msg1"></div>
            <div class="font-weight-300 text-white fs-16" id="msg2"></div>
          </div>

          <div class="row formfield">
            <div class="col-md-6 mb-2">
              <select class="form-select" id="enquiry-hotelcategory" name="enquiry-hotelcategory">
                    <option value="">Hotel Category</option>
                    <option value="3 Star">3 Star</option>
                    <option value="4 Star">4 Star</option>
                    <option value="5 Star">5 Star</option>
                </select>
            </div>

            <div class="col-md-6">
              <select class="form-select mb-2" id="enquiry-duration" name="enquiry-duration">
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
            </div>

            <div class="font-weight-300 text-white fs-16" id="msg4"></div>
            <div class="font-weight-300 text-white fs-16" id="msg5"></div>
          </div>

          <div class="row formfield">
            <div class="col-md-6">
              <select class="form-select mb-2" id="enquiry-travelers" name="enquiry-travelers">
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
            </div>
            <div class="col-md-6 mb-2">
              <input type="text" class="form-select form-control" id="enquiry-name" name="enquiry-name" placeholder="Full Name" />
            </div>
          </div>
          <div class="font-weight-300 text-white fs-16" id="msg6"></div>
          <div class="font-weight-300 text-white fs-16" id="msg9"></div>
          <div class="row formfield">
            <div class="col-md-6 mb-2">
               <input type="text" class="form-select form-control" id="enquiry-phone" name="enquiry-phone" placeholder="Contact No"/>
            </div>
            <div class="col-md-6 mb-3">
               <input type="email" class="form-select form-control" name="enquiry-email" id="enquiry-email" placeholder="Email"/>
            </div>