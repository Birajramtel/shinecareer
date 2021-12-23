<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shine Career</title>

    <!-- Font Awesome -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
<!-- Google Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Custom CSS File -->
<link rel="stylesheet" href="./css/header.css">
<link rel="stylesheet" href="./css/indexPage.css">
<link rel="stylesheet" href="./css/servicesPage.css">
<link rel="stylesheet" href="./css/services-singlePage.css">
<link rel="stylesheet" href="./css/study-abroadPage.css">
<link rel="stylesheet" href="../css/testimonial.css">
<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">
<link rel="stylesheet" href="./css/style.css">

</head>

<body>
  
<section class="abroad-form mt-5">
    <div class="container pt-5">
        <div class="jumbotron py-2 text-center">
            <h3 class="display-4 text_color">Apply now</h3>
            <i class="text_color">Fill the form below to take our services. We will reach out to you personally.</i>
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
                <button type="button" class="btn button_color btn-lg text-white text-capitalize">Send &nbsp <i class="fas fa-paper-plane"></i></button>
            </div>
        </form>
    </div>
</section>