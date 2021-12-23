<?php include("./partials/header.php")?>

<section class="main-breadcrumb">
    <div class="container px-0">
        <div class="page-breadcrumb">
            <h4><span>Home</span> > <span>About us</span></h4>
        </div>
    </div>
</section>

<section class="services mt-5">
   <div class="container">
        <div class="row">
            <div class="col-md-6 service-description d-flex align-items-center">
                <div class="service-exerpt">
                    <h2 class="text_color"><strong>Message from our Chairman</strong></h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.     
                    </p>
                    <button type="button" class="btn b_color"><a href="services-single.php">Explore</a></button>
                </div>
            </div>
            <div class="col-md-6 px-0">
                <div class="service-image">
                    <!-- <img src="../images/services-1.png" alt=""> -->
                    <img src="./images/Manager.png" alt="What does our manager has to say">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 order-md-12 px-0 service-description d-flex align-items-center">
                <div class="service-exerpt">
                    <h2 class="text_color"><strong>Who are we ?</strong></h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.     
                    </p>
                    <button type="button" class="btn b_color"><a href="services-single.php">Explore</a></button>
                </div>
            </div>
            <div class="col-md-6 order-md-1 service-description d-flex align-items-center">
                <div class="service-image">
                    <iframe width="450" height="200" src="https://www.youtube.com/embed/nWwpyclIEu4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 service-description d-flex align-items-center">
                <div class="service-exerpt">
                    <h2 class="text_color"><strong>What we do?</strong></h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.     
                    </p>
                    <button type="button" class="btn b_color"><a href="services-single.php">Explore</a></button>
                </div>
            </div>
            <div class="col-md-6 px-0">
                <div class="service-image">
                    <!-- <img src="../images/services-1.png" alt=""> -->
                    <img src="./images/about_us.png" alt="What do we do ?">
                </div>
            </div>
        </div>
        <br>
   </div>
</section>

<section class="abroad-form mt-5">
    <div class="container">
        <div class="jumbotron py-2 text-center">
            <h3 class="display-4">Interested in Studying Abroad  ?</h3>
            <i>fill the form below to take our services. We will reach out to you personally.</i>
        </div>
        <form action="" class = "pb-4">
            <div class="row">
                <div class="col-md-6">
                    <!-- <div class="form-group"> -->
                    <label for="formGroupExampleInput2" class="text-white">Your Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2">
                    <!-- </div> -->
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput2" class="text-white">Phone No.</label>
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
                    <label for="formGroupExampleInput2" class="text-white">Your Email</label>
                    <input type="email" class="form-control" id="formGroupExampleInput2">
                    <!-- </div> -->
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput2" class="text-white">Your Preferred Study Destination</label>
                    <input type="email" class="form-control" id="formGroupExampleInput2">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                <label for="formGroupExampleInput2" class="text-white">Service you need</label>

                    <select class="browser-default custom-select">
                        <option selected class="text_color">University Application Process Guidence</option>
                        <option value="1" class="text_color">Language Class</option>
                        <option value="2" class="text_color">Test Preparation</option>
                        <option value="3" class="text_color">Student Counselling</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlTextarea2" class="text-white">Message</label>
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder = "Your message..."></textarea>
                </div>  
            </div>
            <br>
            <div class="row d-flex justify-content-center">
                <button type="button" class="btn button_color btn-lg text-white">Send &nbsp <i class="fas fa-paper-plane"></i></button>
            </div>
        </form>
    </div>
</section>

<section class="brochure-download my-5">
    <div class="container">
        <h2 class="text_color"><b>Download our <span>Company Brochure</span></b> </h2>
        <div class="row  my-4">
            <div class="col-md-8">
                <p>
                Know us better simply going through our company brochure. Let us help you serve more better with expert advice in different field that we have mastered in serving since 2008. 
                </p>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-lg float-right button_color download-btn"><a href="./images/services-1.png" download>Click to download</a></button>
            </div>
        </div>
    </div>
</section>

<?php include("./partials/footer.php")?>