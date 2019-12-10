<?php
include 'common/session_conn_db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RTO SEVA 4u</title>
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

        <script>
            $(document).ready(function () {
                alert(lkm);
            });
            var fields = {
                name: false,
                email: false,
                contact: false,
                password: false

            };
            function getFieldData(id) {
                var data = $('#' + id).val();
                return data;
            }
            function name(name) {
                var re = /^[a-zA-Z ]+$/;
                fields["name"] = re.test(name);
            }

            function validateEmail(email) {
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                fields["email"] = re.test(email);
            }
            function contact(contact) {
                var pattern = new RegExp("^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$");
                fields["contact"] = pattern.test(contact);
            }
            function ValidatePassword(password) {
                var re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{4,})");
                fields["password"] = re.test(password);
            }

            function validate(fields) {
                var finallyreturn = true;
                name(getFieldData("name"));
                validateEmail(getFieldData('email'));
                contact(getFieldData('contact'));


//                ValidateUsername(getFieldData('username'));
                ValidatePassword(getFieldData('password'));
                for (var key in fields) {
                    if (fields.hasOwnProperty(key)) {
                        console.log(key + "--" + fields[key]);
                        if (fields[key] === false) {
                            finallyreturn = false;
                            $('.errormessage').text(key.toString().toUpperCase() + " is invalid");
                            $(".errormessage").css({
                                "font-size": "18px",
                                "color": "red",
                                "text-align": "center",
                                "margin": "10px",
                                "font-weight": "bold",
                                "transition": "0.5s ease-in"
                            });
                            $("#" + key.toString()).css("border", "thin solid red");
                            $("#" + key.toString()).css("box-shadow", "1px 1px 10px red");
                            return false;
                        } else {
                            finallyreturn = true;
                            $("#" + key.toString()).css("border", "thin solid green");
                            $("#" + key.toString()).css("box-shadow", "1px 1px 10px green");
                            $('.errormessage').text(key.toString().toUpperCase() + " valid");
                        }
                    }
                }
                return finallyreturn;

                }
            }
            );
        </script>
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


            <div class=" inner-page-cover overlay" style="background-image: url(img/1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center" style="height: 200px!important;">

                        <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">

                            <div class="row justify-content-center mt-5">
                                <div class="col-md-12 text-center">
                                    <h1 style="color: white;">Sign Up</h1>
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
                        <div class="col-md-7 mb-5"  data-aos="fade">
                            <?php
                            if (isset($_GET["message"])) {
                                if ($_GET["status"] == "success") {
                                    $db->sendTo("login.php");
                                } else {
                                    echo '<h5 style="color:red;">' . $_GET["message"] . '</h5>';
                                    echo '<div style="color:red;">' . isset($_GET["1"]) ? $_GET["1"] : "" . '</div>';
                                }
                            }
                            ?>
                            <form class="p-5 bg-white" onsubmit="validate(fields)"  enctype="multipart/form-data" method="POST" action="controller/insert.php">
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="name">Name</label> 
                                        <input type="text" id="name" class="form-control" onblur="validate(fields)" name="name" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="row form-group">

                                    <div class="col-md-12">
                                        <label class="text-black" for="email">Email</label> 
                                        <input type="email" id="email" class="form-control" onblur="validate(fields)" name="email" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="row form-group">

                                    <div class="col-md-12">
                                        <label class="text-black" for="contact">Contact</label> 
                                        <input type="text" id="contact" class="form-control" onblur="validate(fields)" name="contact" placeholder="Enter Contact Number">
                                    </div>

                                </div>



                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="password">Password</label> 
                                        <input type="password" id="password" class="form-control" onblur="validate(fields)" name="password" placeholder="Enter Password">
                                    </div>
                                </div>
                                <input type="hidden" name="tbname" value="user">
                                <div class="row form-group">
                                    <div class="col-12">
                                        <p>Have an account? <a href="login.php">Log In</a></p>
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