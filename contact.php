<?php
include 'common/session_conn_db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.css">

        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/rangeslider.css">

        <link rel="stylesheet" href="css/style.css">
        <!--<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="select_jquery.js"></script>
    </head>
    <body>
             <div class="site-wrap">

            <div class="site-mobile-menu">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <?php include './header.php'; ?>


            <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/contactsus.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">

                        <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                            <div class="row justify-content-center mt-5">
                                <div class="col-md-12 text-center">
                                    <h1>Contact Us</h1>
                                    <?php include './searchbox.php';?>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>  <br>
            
             <h1 style="text-align: center; text-decoration: underline; margin-top: 15px">Find Us On Google Maps</h1><br>
            <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.138301400062!2d72.93347705079624!3d19
                .145422486984497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b90da9bdca71%3A0xf5c8832254920380!
                2sDreams%20Mall!5e0!3m2!1sen!2sin!4v1575108966839!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0;" 
                allowfullscreen=""></iframe>
            </p>
                                   
                        
                        


            <div class="site-section bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 mb-5"  data-aos="fade">



                            <form action="#" class="p-5 bg-white">


                                <div class="row form-group">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">First Name</label>
                                        <input type="text" id="fname" class="form-control" name="fname" placeholder="Enter First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-black" for="lname">Last Name</label>
                                        <input type="text" id="lname" class="form-control" name="lname" placeholder="Enter Last Name">
                                    </div>
                                </div>

                                <div class="row form-group">

                                    <div class="col-md-12">
                                        <label class="text-black" for="email">Email</label> 
                                        <input type="email" id="email" class="form-control" name="email" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="row form-group">

                                    <div class="col-md-12">
                                        <label class="text-black" for="phone">Phone</label> 
                                        <input type="text" id="phone" class="form-control" name="phone" placeholder="Enter Phone Number">
                                    </div>
                                </div>

                                <div class="row form-group">

                                    <div class="col-md-12">
                                        <label class="text-black" for="subject">Subject</label> 
                                        <input type="subject" id="subject" class="form-control" name="subject" placeholder="Enter Subject">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="message">Message</label> 
                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                                    </div>
                                </div>


                            </form>
                        </div>
                        <div class="col-md-5"  data-aos="fade" data-aos-delay="100">

                            <div class="p-4 mb-3 bg-white">
                                <p class="mb-0 font-weight-bold"><h4>Address</h4></p>
                                <p class="mb-0 font-weight-bold">Head Office</p>
                                <p class="mb-4">L81, Dreams Mall, Nr. Station, Bhandup-(West), Mumbai, India <br>Pincode-400078</p>

                                <p class="mb-0 font-weight-bold">Phone</p>
                                <p class="mb-4"><a href="tel:+91-8048040413">+91-8048040413</a><br>
                                <a href="tel:022-24701865">022-24701865</a></p>

                                <p class="mb-0 font-weight-bold">Email Address</p>
                                <p class="mb-0"><a href="#">rtoseva4u@gmail.com</a></p>

                            </div>

                            <div class="p-4 mb-3 bg-white">
                                <h3 class="h5 text-black mb-3">For More Details</h3>
                                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>-->
                                <p><a href="tel:+91-8048040413" class="btn btn-primary px-4 py-2 text-white">Call Now</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <?php include './footer.php'; ?>
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/rangeslider.min.js"></script>

        <script src="js/main.js"></script>

    </body>
</html>