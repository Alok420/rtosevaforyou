<?php
include 'common/session_conn_db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RTOSEVA4U</title>
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
            <div class="inner-page-cover overlay" style="background-image: url(img/1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center" style="height: 200px!important;">
                        <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                            <div class="row justify-content-center mt-5">
                                <div class="col-md-12 text-center">
                                    <h1 style="color: white;">Log In</h1>
                                    <?php // include './searchbox.php';?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  


            <div class="site-section bg-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 mb-5"  data-aos="fade" >
                            <?php
                            if (isset($_GET["status_message"])) {
                                if ($_GET["status_message"] != "success") {
                                    echo '<h3 style="color:red;">' . $_GET["status_message"] . '</h3>';
                                }
                            }
                            ?>
                            <form action="controller/loginControll.php" class="p-5 bg-white" method="POST" enctype="multipart/form-data">

                                <div class="row form-group">

                                    <div class="col-md-12">
                                        <label class="text-black" for="contact"> Email /User ID</label> 
                                        <input type="text" id="userid" name="userid" class="form-control" placeholder="Enter Registered Email / User Id">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-black" for="password">Password</label> 
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
                                    </div>
                                </div>
                                <input type="hidden" name="tbname" value="user">
                                <div class="row form-group">
                                    <div class="col-12">
                                        <p>No account yet? <a href="register.php">Register</a></p>
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white">
                                    </div>
                                </div>


                            </form>
                        </div>

                    </div>
                </div>
            </div>



            <?php include './footer.php'; ?>
        </div>

        <!--<script src="js/jquery-3.3.1.min.js"></script>-->
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