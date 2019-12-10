<?php
include 'common/session_conn_db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RTO Seva For You</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
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
        <!--    
        <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>
        
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
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
            <div id="google_translate_element"></div>
            <?php include './header.php'; ?>
            <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(img/Government.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">

                        <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                            <div class="row justify-content-center mt-5">
                                <div class="col-md-12 text-center">
                                    <h1>Welcome To RTO Seva For You</h1>
                                    <div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200">
                                        <form method="post">
                                            <div class="row align-items-center">

                                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                                    <div class="wrap-icon">
                                                        <span class="icon icon-room"></span>
                                                        <input type="text" class="form-control rounded" placeholder="Choose City">
                                                    </div>

                                                </div>
                                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                                    <div class="select-wrap">
                                                        <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                                        <select class="form-control rounded" name="" id="">
                                                            <option value="">Choose Services</option>
                                                            <option value="">Real Estate</option>
                                                            <option value="">Books &amp;  Magazines</option>
                                                            <option value="">Furniture</option>
                                                            <option value="">Electronics</option>
                                                            <option value="">Cars &amp; Vehicles</option>
                                                            <option value="">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                                    <div class="select-wrap">
                                                        <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                                        <select class="form-control rounded" name="" id="">
                                                            <option value="">Choose Sub Services</option>
                                                            <option value="">Real Estate</option>
                                                            <option value="">Books &amp;  Magazines</option>
                                                            <option value="">Furniture</option>
                                                            <option value="">Electronics</option>
                                                            <option value="">Cars &amp; Vehicles</option>
                                                            <option value="">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-xl-2 ml-auto text-right">
                                                    <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="site-section" data-aos="fade">
                        <div class="container-fluid">
                            <div class="row justify-content-center mb-5">
                                <div class="col-md-7 text-center border-primary">
                                    <h2 class="font-weight-light text-primary">Choose Location</h2>
                                    <!--<p class="color-black-opacity-5">Lorem Ipsum Dolor Sit Amet</p>-->
                                </div>
                            </div>
                            <div class="overlap-category mb-5">
                                <div class="row align-items-stretch no-gutters">
                                    <div class="col-sm-0 col-md-0 col-lg-1"></div>
                                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                                        <a href="#" class="popular-category h-100">
                                            <span class="icon"><i class="fa fa-map-marker" style="font-size:36px"></i></span>
                                            <span class="caption mb-2 d-block">Bangalore</span>
                                            <!--<span class="number">1,921</span>-->
                                        </a>
                                    </div>

                                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                                        <a href="#" class="popular-category h-100">
                                            <span class="icon"><i class="fa fa-map-marker" style="font-size:36px;"></i></span>
                                            <span class="caption mb-2 d-block">Marriage Registration</span>
                                            <!--<span class="number">2,339</span>-->
                                        </a>
                                    </div>

                                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                                        <a href="#" class="popular-category h-100">

                                            <span class="icon"><i class="fa fa-ticket" style="font-size:36px"></i></span>
                                            <span class="caption mb-2 d-block">Passport</span>
                                            <!--<span class="number">4,398</span>-->
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                                        <a href="#" class="popular-category h-100">
                                            <span class="icon"><i class="fa fa-birthday-cake" style="font-size:36px"></i></span>
                                            <span class="caption mb-2 d-block">Birth Certificate</span>
                                            <!--<span class="number">3,298</span>-->
                                        </a>
                                    </div>

                                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                                        <a href="#" class="popular-category h-100">
                                            <span class="icon"><i class="fa fa-inr" style="font-size:36px"></i></span>
                                            <span class="caption mb-2 d-block">Income Tax Return</span>
                                            <!--<span class="number">`2,932</span>-->
                                        </a>
                                    </div>
                                    <div class="col-sm-0 col-md-0 col-lg-1"></div>
                                </div>
                                <div class="row align-items-stretch no-gutters" style="margin-top: 10px;">
                                    <div class="col-sm-0 col-md-0 col-lg-1"></div>
                                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                                        <a href="#" class="popular-category h-100">
                                            <span class="icon"><i class="fa fa-columns" style="font-size:36px;"></i></span>
                                            <span class="caption mb-2 d-block">Visa</span>
                                            <!--<span class="number">183</span>-->
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">

                                        <a href="#" class="popular-category h-100">
                                            <span class="icon"><i class="fa fa-random" style="font-size:36px"></i></span>
                                            <span class="caption mb-2 d-block">Affidavit & Rent Agreement</span>
                                            <!--<span class="number">183</span>-->
                                        </a>

                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                                        <a href="#" class="popular-category h-100">
                                            <span class="icon"><i class="fa fa-tag" style="font-size:36px;"></i></span>
                                            <span class="caption mb-2 d-block">Document <br/>attestation</span>
                                            <!--<span class="number">183</span>-->
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                                        <a href="#" class="popular-category h-100">
                                            <span class="icon"><i class="fa fa-train" style="font-size:36px;"></i></span>
                                            <span class="caption mb-2 d-block">POI/FRRO</span>
                                            <!--<span class="number">183</span>-->
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                                        <a href="#" class="popular-category h-100">
                                            <span class="icon"><i class="fa fa-paste" style="font-size:36px;"></i></span>
                                            <span class="caption mb-2 d-block">Pan Card</span>
                                            <!--<span class="number">183</span>-->
                                        </a>
                                    </div>
                                    <div class="col-sm-0 col-md-0 col-lg-1"></div>
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