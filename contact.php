<?php include("./partials/header.php")?>

<section class="main-breadcrumb">
    <div class="container px-0">
        <div class="page-breadcrumb">
            <h4><span>Home</span> > <span>Contact us</span></h4>
        </div>
    </div>
</section>

<section class="services mt-5">
    <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="" class = "pb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- <div class="form-group"> -->
                                <label for="formGroupExampleInput2"><strong>First Name</strong></label>
                                <input type="text" class="form-control" id="formGroupExampleInput2">
                                <!-- </div> -->
                            </div>
                            <div class="col-md-6">
                                <!-- <div class="form-group"> -->
                                <label for="formGroupExampleInput2" class="text_color"><strong>Last Name</strong></label>
                                <input type="text" class="form-control" id="formGroupExampleInput2">
                                <!-- </div> -->
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <div class="form-group"> -->
                                <label for="formGroupExampleInput2" class="text_color"><strong>Your Email</strong></label>
                                <input type="email" class="form-control" id="formGroupExampleInput2">
                                <!-- </div> -->
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="exampleFormControlTextarea2" class="text_color"><strong>Message</strong></label>
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder ="Your message.."></textarea>
                            </div>  
                        </div>
                        <br>
                        <div class="row d-flex justify-content-center">
                            <button type="button" class="btn b_color text-capitalize btn-lg text-white">Send &nbsp <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 px-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.743291758804!2d85.34342851506176!3d27.694327982797407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb193d190665f5%3A0x9b12cdecdef62987!2sSewa%20Tech%20Pvt%20Ltd!5e0!3m2!1sen!2snp!4v1640067818546!5m2!1sen!2snp" width="570" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <br>
    </div>
    <div class="container footer-social-icon pb-5">
        <h2 class="d-flex justify-content-center text_color"><strong>Our location</strong></h2>
        <div class="row mt-5 mb-2">
            <div class="col-md-4 col-sm-4 single-cta d-flex justify-content-center">
                    <i class="far fa-envelope-open p-1"></i>
                <div>
                    <a href= "mailto:">
                        <span class="pt-2 pl-2 text_color"><strong>example@gmail.com</strong></span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 single-cta d-flex justify-content-center">
                <a href="tel:98000000"><i class="fas fa-phone-alt"></i>&nbsp;<span class="pt-2 text_color"><strong> 980-000000</strong></span></a>
            </div>
            <div class="col-md-4 col-sm-4 single-cta d-flex justify-content-center">
            <a href="https://g.page/sewa-tech?share"><i class="fas fa-map-marker-alt"></i>&nbsp;<span class="pt-2 text_color"><strong>Address here</strong></span></a>
            </div>
        </div>
    </div>
</section>

<?php include("./partials/interest_page.php")?>

<?php include("./partials/footer.php")?>