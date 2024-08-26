<!-- global Header -->
<?php include './header.php'; ?>



<section class="py-5 bg-primary">
  <div class="container">
    <div class="row py-5">
      <div class="col-lg-5">
        <img src="images/Group Pic.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-7 d-flex align-items-center">
        <div class="p-4">
          <h1 class="display-5 text-white poppins-bold">Get in touch </h1>
          <p class="h2 text-white poppins-medium my-3">
          We are here to save your time
          </p>
          <p class="text-white poppins-regular w-75">
          We know the value of your time and money. We're passionate about simplifying your taxes and accounting with powerful digital solutions. Don't hesitate to reach out – our team is eager to connect with you and help you embrace a paperless future! 
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="py-5 bg-light">
  <div class="container">
    <div class="row py-2 col-lg-10 mx-auto">
      <h4 class="txt-primary text-center poppins-medium text-capitalize">Please fill up the information</h4>
      <div class="card p-4 pt-5 mt-4">
        <div class="row">
          <div class="col-lg-6 mb-4">
            <input type="text" placeholder="Name" class="form-control">
          </div>
          <div class="col-lg-6 mb-4">
            <input type="email" placeholder="Email" class="form-control">
          </div>
          <div class="col-lg-6 mb-4">
            <input type="number" placeholder="Phone" class="form-control">
          </div>
          <div class="col-lg-6 mb-4">
            <input type="text" placeholder="Business Name" class="form-control">
          </div>
          <div class="col-lg-6 mb-4">
            <input type="number" placeholder="Yearly Turnover" class="form-control">
          </div>
        
          <div class="col-lg-6 mb-4">
            <p class="txt-primary mb-3  poppins-medium">
            The service you are interested in
            </p>
             <label for="accountung" class="txt-primary  poppins-medium">
              <input type="checkbox" name="" id="accountung"> Accounting
             </label> <br>
             <label for="tax" class="txt-primary poppins-medium">
            <input type="checkbox" name="" id="tax">  TAX 
             </label>
          </div>
          <div class="col-lg-12 mb-4">
            <label for="" class="txt-primary mb-3  poppins-medium">
            Tell us what makes you awake at night
            </label>
           <textarea name="" id="" class="form-control " style="height: 160px;" placeholder="Describe your topic"></textarea>
          </div>
          <div class="col-lg-12 text-center">
           <button type="submit" class="btn  bg-primary text-light py-1 px-3">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="py-5 position-relative bg-light mb-5">
    <div class="container">
        <div class="row text-center">
             <h2 class="poppins-bold txt-primary">Book Your Free Consultation</h2> 
        </div>
        <div class="row mt-5">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-4 ">
                            <div class="p-4">
                                <div class="previous-btn mb-3 d-none" onclick="gotoPrev();" id="prev" class="d-none">
                                    <iconify-icon icon="octicon:chevron-left-12"></iconify-icon>
                                </div>
                                <img src="images/Ellipse 18.png" class="img-curcle mb-3" alt="">
                                <div class="">
                                    <h5 class="poppins-bold txt-primary">Shultan Mahmud, PhD</h5>
                                    <p class="fw-normal txt-primary poppins-medium">Director, HD Accountancy LTD</p>
                                </div>
                                <div>
                                    <p class="text-muted poppins-medium d-flex  align-items-center"><iconify-icon icon="uil:clock" class="fs-4"></iconify-icon> <span class="ms-2">30 min</span>
                                    </p>
                                    <p class="text-muted poppins-medium d-flex  align-items-center"><iconify-icon icon="wpf:phone" class="fs-4"></iconify-icon> <span class="ms-2"> phone</span>
                                    </p>
                                    <p class="text-muted poppins-medium d-flex  align-items-center"><iconify-icon icon="material-symbols-light:event-available-rounded" class="fs-4"></iconify-icon> <span class="ms-2">Thursday, 20 June 2024</span>
                                    </p>
                                    <p class="text-muted poppins-medium d-flex  align-items-center"><iconify-icon icon="fe:globe" class="fs-4"></iconify-icon> <span class="ms-2"> 3:00 PM - 3:30 PM, UK, London Time</span>
                                    </p>

                                    <small class="txt-primary mt-4 text-center poppins-medium d-flex  align-items-center"> <span class="ms-2"> 30 Minutes discussion on your specific topic</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="border-start border-1 h-100 p-4">
                                <div id="stepOne" class="">
                                    <div class="row">
                                        <div class="col-lg-6">

                                            <p class="txt-primary poppins-medium d-flex  align-items-center"> <span class="">
                                                    Select A Date & Time </span>
                                            </p>
                                        </div>
                                        <div class="col-lg-6 text-end">
                                            <a class="navbar-brand" href="index.php">
                                                <img src="images/logo.png" width="90px" alt="df">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            calender goes here
                                        </div>
                                        <div class="col-lg-5 d-flex flex-wrap gx-1 justify-content-center my-4">
                                            <div class="mb-2">
                                                <input type="radio" class="timepick invisible" name="timepick" id="11">
                                                <label for="11" class=""> 11:00 Am </label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="timepick invisible" name="timepick" id="1130">
                                                <label for="1130" class=""> 11:00 Am </label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="timepick invisible" name="timepick" id="12">
                                                <label for="12" class=""> 11:00 Am </label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="timepick invisible" name="timepick" id="1230">
                                                <label for="1230" class=""> 11:00 Am </label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="timepick invisible" name="timepick" id="100">
                                                <label for="100" class=""> 11:00 Am </label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="timepick invisible" name="timepick" id="130">
                                                <label for="130" class=""> 11:00 Am </label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="timepick invisible" name="timepick" id="2">
                                                <label for="2" class=""> 11:00 Am </label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="timepick invisible" name="timepick" id="230">
                                                <label for="230" class=""> 11:00 Am </label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="timepick invisible" name="timepick" id="3">
                                                <label for="3" class=""> 11:00 Am </label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="timepick invisible" name="timepick" id="330">
                                                <label for="330" class=""> 11:00 Am </label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="timepick invisible" name="timepick" id="4">
                                                <label for="4" class=""> 11:00 Am </label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="timepick invisible" name="timepick" id="430">
                                                <label for="430" class=""> 11:00 Am </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="txt-primary poppins-bold">
                                                Time Zone
                                            </h6>
                                            <div class="d-flex align-items-center">
                                                <iconify-icon icon="fe:globe" class="txt-primary fw-bold"></iconify-icon>
                                                <select name="" id="" class="txt-primary poppins-medium border-0">
                                                    <option value="">UK, London Time</option>
                                                    <option value="">UK, London Time</option>
                                                    <option value="">UK, London Time</option>
                                                    <option value="">UK, London Time</option>
                                                </select>
                                            </div>
                                            <a class="btn btn-theme-outline my-3 d-inline-block  mx-auto rounded-5 fs-6">Not Working? </a>
                                        </div>
                                        <div class="col-lg-8 px-4">
                                            <h6 class="txt-primary poppins-bold">
                                                How would you like to meet?
                                            </h6>
                                            <div class="d-flex gap-2 align-items-center flex-wrap lh-1">
                                                <label for="video">
                                                    <input type="checkbox" name="meet" id="video">
                                                    Video Conference
                                                </label>
                                                <label for="phone">
                                                    <input type="checkbox" name="meet" id="phone">
                                                    Phone
                                                </label>
                                                <label for="face">
                                                    <input type="checkbox" name="meet" id="face">
                                                    Face to face
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div id="stepTwo" class="d-none">
                                    <p class="txt-primary poppins-medium ">Enter Your Details</p>
                                    <div class="card p-4 pt-5 mt-4">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <input type="text" star-data="*" placeholder="First Name" class="form-control">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <input type="text" placeholder="Last Name" class="form-control">
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <input type="email" placeholder="Email" class="form-control">
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <input type="number" placeholder="Telephone No" class="form-control">
                                            </div>

                                            <div class="col-lg-12 mb-4">
                                                <label for="" class="txt-primary mb-3  poppins-medium">
                                                    Please let me know what do you want to discuss <span class="text-danger "> *</span>
                                                </label>
                                                <textarea name="" id="" class="form-control " style="height: 160px;" placeholder="Describe your meeting agenda"></textarea>
                                            </div>
                                            <div class="col-lg-12 text-center">
                                                <button type="submit" class="btn btn-theme-outline  text-light py-2 px-3">Schedule your meeting</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-end">
                                        <a onclick="gotoNext();" id="nxtBtn" class="btn mt-2 btn-theme-outline d-inline w-auto mx-auto rounded-3 fs-6 float-end">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- global footer -->
<?php include './footer.php'; ?>