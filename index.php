<?php include("./partials/header.php")?>

<section class="hero">
    <div class="hero-img">
        <img src="./images/hero-img.png" class="img-fluid banner-img"alt="">
    <div class="color-overlay"></div>
    <div class="overlay-image">
            <img src="./images/presenter.png" alt="">
    </div>
    <div class="overlay-container">
        <div class="container">
            <div class="overlay-content ">
               <div class="content d-flex flex-column justify-content-around">
                    <!-- <span class="mb-5">Since 1990.</span> -->
                    <h2 class = "mb-5">Since 1990.</h2>
                    <h1 class="tagline">
                        <span>Best Educational Institute <br> in Nepal</span>
                    </h1>
                </div>
               <div class="hero-btn d-flex justify-content-center">
                    <button class = "brand-btn"><a href="#">Explore more</a></button>
               </div>
            </div>
            
        </div>
    </div>
</div>
</section>

<section class="banner-points">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-around ver-line hor-line">
                <!-- <div class="row"> -->
                    <div class="point">
                        <div class="point-icon">
                            <img src="./images/test_prepration.svg" alt="Test prepration">
                        </div>
                        <p>Test Preparation</p>
                    </div>
                    <div class="ver-line"></div>
                    <div class="point">
                        <div class="point-icon">
                            <img src="./images/languages.svg" alt="Languages">
                        </div>
                        <p>Language Classes</p>
                    </div>
                <!-- </div> -->
            </div>
            <!-- <div class="ver-line"></div> -->
            <div class="col-md-6 d-flex justify-content-around">
                <div class="point">
                    <div class="point-icon">
                        <img src="./images/boook@3x.svg" alt="Books">
                    </div>
                    <p>Study materials</p>
                </div>
                <div class="ver-line"></div>
                <div class="point">
                    <div class="point-icon">
                        <img src="./images/Qa.svg" alt="Question and Answer">
                    </div>
                    <p>Questions and answer</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 d-flex align-items-center">
                <p class = "bold">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                </p>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <img class="img-fluid" src="./images/laptop-girl.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="home-form my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pr-0">
                <img src="./images/abrpad.png" alt="">
                <div class="side-overlay text-center mx-5 d-flex justify-content-start align-items-center">
                   <div class="flex-wrapper py-3">
                        <h4>Intrested in Studying Abroad ? </h4>
                        <p>Apply here and we will call you back for expert advice and your language classes and other possible assistance</p>
                   </div>
                </div>
            </div>
            <div class="col-md-6 home-page-form">
                <div class="abroad-form">
                    <div class="jumbotron py-3 text-center">
                        <h5 class="mb-0">LET US REACH YOU OUT FOR ANY HELP</h5>
                        <hr class="mb-0">
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <!-- <div class="form-group"> -->
                                <label for="formGroupExampleInput2">Your Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2">
                                <!-- </div> -->
                            </div>
                            <div class="col-md-6 mb-3">
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
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <!-- <div class="form-group"> -->
                                <label for="formGroupExampleInput2">Your Email</label>
                                <input type="email" class="form-control" id="formGroupExampleInput2">
                                <!-- </div> -->
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput2">Your Preferred Study Destination</label>
                                <input type="email" class="form-control" id="formGroupExampleInput2">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <!-- <div class="form-group"> -->
                                <label for="formGroupExampleInput2">Best time to give you a call ?</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2">
                                <!-- </div> -->
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput2">Preferred mode of counselling</label>
                                <div class="virtualorperson mt-2">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label" for="materialInline1">In-person</label>
                                      </div>
                                      
                                      <!-- Material inline 2 -->
                                      <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="materialInline2" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label" for="materialInline2">Virtual</label>
                                      </div>
                                </div>
                                  
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                            <!-- <div class="form-group"> -->
                                <label for="exampleFormControlTextarea2">Any notes</label>
                                <textarea class="form-control rounded-0 ml-1 mr-5" id="exampleFormControlTextarea2" rows="2"  placeholder = "optional"></textarea>
                            <!-- </div> -->
                            </div>
                        </div>
                        <br>
                        <div class="row d-flex justify-content-center">
                            <button type="button" class="btn btn-unique btn-lg">Submit &nbsp <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonail section started -->
<section>
    <!-- <div class="gtco-testimonials">
        <h2>Testimonials Carousel</h2>
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div>
                <div class="card text-center"><img class="card-img-top" src="./images/user_testimonial.png" alt="User testimonial 1">
                    <div class="card-body">
                        <h5>Ronne Galle <br />
                            <span> Project Manager </span>
                        </h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                        impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="./images/user_testimonial.png" alt="User testimonial 1">
                    <div class="card-body">
                        <h5>Missy Limana<br />
                            <span> Engineer </span>
                        </h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="./images/user_testimonial.png" alt="User testimonial 1">
                    <div class="card-body">
                        <h5>Martha Brown<br />
                            <span> Project Manager </span>
                        </h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="./images/user_testimonial.png" alt="User testimonial 1">
                    <div class="card-body">
                        <h5>Hanna Lisem<br />
                            <span> Project Manager </span>
                        </h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                        impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <?php include ('./partials/carousel_footer.php') ?>
    <div class="container">
        <h6 class="Header_6"><strong>Testimonial</strong></h6>
    </div>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="./images/user_testimonial.png" alt="User Testimonial">
        </div>
        <div class="item">
            <img src="./images/user_testimonial.png" alt="User Testimonial">
        </div>
        <div class="item">
            <img src="./images/user_testimonial.png" alt="User Testimonial">
        </div>
        <div class="item">
            <img src="./images/user_testimonial.png" alt="User Testimonial">
        </div>
        <div class="item">
            <img src="./images/user_testimonial.png" alt="User Testimonial">
        </div>
    </div>
</section>
<!-- Testimonail section Closed -->

<!-- Learn About us Opened -->
<!-- <section>
    <div class="container">
        <h2>Learn about us</h2>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6">
                <h5><strong>Who we are?</strong></h5>
                <p>We have won more than 5000 students heart by 
                    placing them in a right education institution in a right course of study. </p>
            </div>
            <div class="d-flex justify-content-end col-md-6">
                <iframe width="450" height="200" src="https://www.youtube.com/embed/nWwpyclIEu4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 d-flex justify-content-start mt-3">
                <img src="./images/students.png" alt="Our teaching methods">
            </div>
            <div class="col-md-6 mt-3">
                <h5 class=""><strong>What we got?</strong></h5>
                <p>We have won more than 5000 students heart by 
                    placing them in a right education institution in a right course of study. 
                    We have won more than 5000 students heart by placing them in a right education institution 
                    in a right course of study. We have won more than 5000 students heart by placing them in a 
                    right education institution in a right course of study. 
                </p>
            </div>
        </div>
    </div>
</section> -->
<!-- Learn About us Closed -->

<section class="services mt-5">
   <div class="container">
        <div class="row">
            
             <div class="col-md-6 order-md-1 px-0 service-description d-flex align-items-center">
                <div class="service-exerpt">
                    <h2><strong>Who are we ?</strong></h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.     
                    </p>
                    <button type="button" class="btn btn-secondary"><a href="services-single.php">Explore</a></button>
                </div>
            </div>
            <div class="col-md-6 order-md-12 service-description d-flex align-items-end">
                <div class="service-image">
                    <iframe width="550" height="200" src="https://www.youtube.com/embed/nWwpyclIEu4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 px-0">
                <div class="service-image">
                    <!-- <img src="../images/services-1.png" alt=""> -->
                    <img src="./images/about_us.png" alt="What do we do ?">
                </div>
            </div>
            <div class="col-md-6 service-description d-flex align-items-center">
                <div class="service-exerpt">
                    <h2><strong>What we do?</strong></h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.     
                    </p>
                    <button type="button" class="btn btn-secondary"><a href="services-single.php">Explore</a></button>
                </div>
            </div>
        </div>
        <br>
   </div>
</section>

<!-- News and Events section opened  -->
<section>
    <div class="containter d-flex justify-content-center">
        <h2><strong>News and Events</strong></h2>
    </div>
    <div class="container mb-5">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="./images/news-and_events/news_events_1.png" alt="News and Events 1">
                <div class="card-body">
                    <h5 class="card-title text-center">Seminar ..</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    <button class="btn btn-sm btn-primary float-right">Explore</button></p>
                    <p class="card-text"><small class="text-muted">2022-04-18 &nbsp;|&nbsp; <a href="index.php"><u>Events</u></a></small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="./images/news-and_events/news_events_1.png" alt="News and Events 2">
                <div class="card-body">
                    <h5 class="card-title text-center">Event..</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    <button class="btn btn-sm btn-primary float-right">Explore</button></p>
                    <p class="card-text"><small class="text-muted">2022-04-18 &nbsp;|&nbsp; <a href="index.php"><u>Events</u></a></small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="./images/news-and_events/news_events_1.png" alt="News and Events 3">
                <div class="card-body">
                    <h5 class="card-title text-center">Blogs...</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    <button class="btn btn-sm btn-primary float-right">Explore</button></p>
                    <p class="card-text"><small class="text-muted">2022-04-18 &nbsp; | &nbsp; <a href="index.php"><u> Blog</u></a></small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="./images/news-and_events/news_events_1.png" alt="News and Events 4">
                <div class="card-body">
                    <h5 class="card-title text-center">News...</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    <button class="btn btn-sm btn-primary float-right">Explore</button></p>
                    <p class="card-text"><small class="text-muted">2022-04-18 &nbsp; | &nbsp; <a href="index.php"><u> News</u></a></small></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News and Events section Closed  -->
<!-- Receive a call opened -->
<section class="container d-flex justify-content-center bg-warning mb-2">
    <div class="">
        <h2 class="pt-3 pb-4"><strong>Receive an Assitance Call / Email</strong></h2>
        <div class="form-check form-check-inline pb-4">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1"checked>Phone Number:</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Email:</label>
        </div>
        <div>   
            <input type="text" id="fname" name="fname">
            <button class="btn btn-success">submit</button>
        </div>
        
    </div>
</section>
<!-- Receive a call Closed -->

<?php include("./partials/footer.php")?>
   