<?php include("./partials/header.php")?>

<section class="main-breadcrumb">
    <div class="container px-0">
        <div class="page-breadcrumb">
            <h4><span>Home</span> > <span>Study Abroad</span></h4>
        </div>
    </div>
</section>

<section class="abroad-countries">
    <div class="container">
    <h2>LEAVE YOUR DREAM TO STUDY ABROAD IN OUR HAND</h2>
    <div class="row">
        <div class="col-md-6 mb-4 img-container">
            <!-- <div class=""> -->
                <div class="country-img">
                    <img src="./images/Japan.png" alt="">
                </div>
                <p class="title">Study in Japan</p>
                <div class="overlay"></div>
                <div class="button"><a href="study_in_japan.php"> EXPLORE </a></div>
            <!-- </div> -->
        </div>
        <div class="col-md-6 mb-4 img-container">
            <div class="country-img">
                <img src="./images/southKorea.png" alt="">
            </div>
            <p class="title">Study in Korea</p>
            <div class="overlay"></div>
            <div class="button"><a href="study_in_japan.php"> EXPLORE </a></div>
        </div>
        <div class="col-md-6  mb-4 img-container">
            <div class="country-img">
                <img src="./images/Canada.png" alt="">
            </div>
            <p class="title">Study in Canada</p>
            <div class="overlay"></div>
            <div class="button"><a href="study_in_japan.php"> EXPLORE </a></div>
        </div>
        <div class="col-md-6  mb-4 img-container">
            <div class="country-img">
                <img src="./images/Australia.png" alt="">
            </div>
            <p class="title">Study in Australia</p>
            <div class="overlay"></div>
            <div class="button"><a href="study_in_japan.php"> EXPLORE </a></div>
        </div>
        <div class="col-md-6  mb-4 img-container">
            <div class="country-img">
                <img src="./images/UK.png" alt="">
            </div>
            <p class="title">Study in UK</p>
            <div class="overlay"></div>
            <div class="button"><a href="study_in_japan.php"> EXPLORE </a></div>
        </div>
        <div class="col-md-6  mb-4 img-container">
            <div class="country-img">
                <img src="./images/India.png" alt="">
            </div>
            <p class="title">Study in India</p>
            <div class="overlay"></div>
            <div class="button"><a href="study_in_japan.php"> EXPLORE </a></div>
        </div>
    </div>
    </div>
</section>

<section class="abroad-form mt-5">
    <div class="container">
        <div class="jumbotron py-2 text-center">
            <h3 class="display-4">Intrested in Studying Abroad  ?</h3>
            <i>fill the form below to take our services. We will reach out to you personally.</i>
        </div>

        <form action="" class = "pb-4">
            <div class="row">
                <div class="col-md-6">
                    <!-- <div class="form-group"> -->
                    <label for="formGroupExampleInput2">Your Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2">
                    <!-- </div> -->
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput2">Phone No.</label>
                    <div class="d-flex">
                        <select class="browser-default custom-select custom-select-md mb-3 country-width-limiter">
                            <option selected>Country</option>
                            <option value="1">Canada <i class="fab fa-canadian-maple-leaf"></i></option>
                            <option value="2">India</option>
                            <option value="3">Nepal</option>
                        </select>
                        <input class="form-control" type="number" placeholder="Number">
                    </div>

                </div>
            </div>
<br>
            <div class="row">
                <div class="col-md-6">
                    <!-- <div class="form-group"> -->
                    <label for="formGroupExampleInput2">Your Email</label>
                    <input type="email" class="form-control" id="formGroupExampleInput2">
                    <!-- </div> -->
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput2">Your Preferred Study Destination</label>
                    <input type="email" class="form-control" id="formGroupExampleInput2">
                </div>
            </div>
            <br>
            <div class="row">
                
                <div class="col-md-6">
                    <!-- <label for="exampleFormControlTextarea2">Small textarea</label> -->
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder = "your message"></textarea>
                </div>
                <div class="col-md-6">
                <!-- <label for="formGroupExampleInput2">Service you need</label>

                    <select class="browser-default custom-select">
                        <option selected>University Application Process Guidence</option>
                        <option value="1">Language Class</option>
                        <option value="2">Test Preparation</option>
                        <option value="3">Student Counselling</option>
                    </select> -->
                </div>
            </div>
<br>
        <div class="row d-flex justify-content-center">
            <button type="button" class="btn btn-unique btn-lg text-white">Send &nbsp <i class="fas fa-paper-plane"></i></button>
        </div>

        </form>
    </div>
</section>

<section class="brochure-download my-5">
    <div class="container">
        <h2><b>Download our <span>Company Brochure</span></b> </h2>
        <div class="row  my-4">
            <div class="col-md-8">
                <p>
                Know us better simply going through our company brochure. Let us help you serve more better with expert advice in different field that we have mastered in serving since 2008. 
                </p>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-unique download-btn"><a href="./images/services-1.png" download>Click to download</a></button>
            </div>
        </div>
    </div>
</section>

<?php include("./partials/footer.php")?>