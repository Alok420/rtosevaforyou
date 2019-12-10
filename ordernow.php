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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="select_jquery.js"></script>
        <script>
            var fields = {
                mobileno: false,
                email: false
            };
            function getFieldData(id) {
                var data = $('#' + id).val();
                return data;
            }

            function mobileno(mobileno) {
                var pattern = new RegExp("^[0-9]{10}$");
                return pattern.test(mobileno);
            }
            function validateEmail(email) {
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }
            function validate(fields) {
                var finallyreturn = true;
                mobileno(getFieldData('mobileno'));
                validateEmail(getFieldData('email'));

                for (var key in fields) {
                    if (fields.hasOwnProperty(key)) {
                        console.log(key + "--" + fields[key]);
                        if (fields[key] === false) {
                            finallyreturn = false;
                            $(".errormessage").text(key.toString().toUpperCase() + " is invalid");
                            $(".errormessage").css({
                                "font-size": "20px",
                                "color": "red",
                                "text-align": "center",
                                "margin": "10px",
                                "font-weight": "bold"
                            });
                            $("#" + key.toString()).css("border", "thin solid red");
                            $("#" + key.toString()).css("box-shadow", "1px 1px 10px red");
                            return false;
                        } else {
                            finallyreturn = true;
                            if (key.toString() == "email") {
                                $(".btn1").removeAttr("disabled");
                            }
                            if (key.toString() == "aadharcard") {
                                $(".btn2").removeAttr("disabled");
                            }
                            if (key.toString() == "mothername") {
                                $(".btn3").removeAttr("disabled");
                            }
                            if (key.toString() == "reference2number") {
                                $(".btn4").removeAttr("disabled");
                            }
                            $("#" + key.toString()).css("border", "thin solid green");
                            $("#" + key.toString()).css("box-shadow", "1px 1px 10px green");
                            $('.errormessage').text(key.toString().toUpperCase() + " valid");
                        }
                    }
                }
                return finallyreturn;
            }
        </script>
        <script>
            var type = "";
            var six_digit_random_number;
            $(document).ready(function () {
                $('#mobile-click').click(function () {
                    var email_mobile_box = $("#email_mobile_id").val();
                    if (mobileno(email_mobile_box) === false) {
                        alert("Mobile is not valid!");
                    } else {
                        alert("Mobile otp is not active yet");
                    }
                });
                $('#email-click').click(function () {
                    type = "email";
                    var email = $("#email_mobile_id").val();

                    if (validateEmail(email) === false) {
                        alert("Email is not valid!");
                    } else {
                        if (!email == "") {
                            var subject = "Email verification";
                            var body = "Please verify your email address: OTP IS ";
                            sentOtp(email, subject, body);
                        } else {
                            alert("Please enter email above");
                        }
                    }
                });

                $('#otpcheck').click(function () {
                    var userotp = $("#otptextbox").val();
                    if (userotp == six_digit_random_number) {
                        var email = $("#email_mobile_id").val();
                        $("#otpstatus").text("Email ID verification is done");
                        var service_id = $("#service_id").val();
                        var service_category_id = $("#service_category_id").val();
                        var location_id = $("#location_id").val();
                        window.location.href = "controller/finalstep.php?type=" + type + "&email_mobile=" + email + "&name=" + email + "&location_id=" + location_id + "&service_category_id=" + service_category_id + "&service_id=" + service_id;
                    } else {

                        $("#otpstatus").text("Incorrect OTP");
                    }
                });
            });
            function sentOtp(to, subject, body) {
                $(".waitlayer").show(1000);
                six_digit_random_number = Math.floor(Math.random() * 100000) + 999999;
                $.post("controller/MailSendingController.php",
                        {
                            to: "" + to,
                            subject: "" + subject,
                            body: "" + body + " " + six_digit_random_number
                        },
                        function (data, status) {
                            $(".waitlayer").hide(1000);
                            alert("OTP sent on your mail! Enter otp below.");
                        });
            }
        </script>
        <style>
            .process_title{
                background-color: #002a80;
                color: white;
                padding: 5px;
                text-align: center;
                border-radius: 100px;

            }
            label{
                display: block;
                border: thin solid #007bff;
                padding-left: 20px; 
                margin: 5px;
                font-size: 20px; 
                border-radius: 100px;
            }
            input[type=submit]{
                border-radius: 100px;

            }
        </style>
    </head>
    <body>

        <input type="hidden" id="service_id" value="<?php echo $_REQUEST["service_id"]; ?>">
        <input type="hidden" id="service_category_id" value="<?php echo $_REQUEST["service_category_id"]; ?>">
        <input type="hidden" id="location_id" value="<?php echo $_REQUEST["location_id"]; ?>">

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
                                    <h1 style="color: white;">Order now process</h1>
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
                            <form action="controller/insert_step.php" class="p-5 bg-white">
                                <div class="row form-group">
                                    <div class="col-md-12" style="border: thin solid black;border-radius: 10px; padding: 20px;">
                                        <?php
                                        if (isset($_GET["step_info_count"])) {
                                            if ($_GET["step_info_count"] == 1) {
                                                ?>
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#home">Login</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#menu1">Register</a>
                                                    </li>

                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane container active" id="home">
                                                        <h6>Log in by OTP <span id="otpstatus"></span></h6>
                                                        <div class="row form-group">
                                                            <input class="form-control" type="text" name="email_mobile" placeholder="Enter email or mobile" id="email_mobile_id">
                                                            <div class="m-1">
                                                                <button type="button" class="btn btn-success" id="email-click">OTP on email</button> <button type="button" id="mobile-click" class="btn btn-success">OTP on mobile</button>
                                                            </div>
                                                            <input type="text" class="form-control" style="display: inline-block;width: 70%;margin-right: 10px;" id="otptextbox"placeholder="Enter OTP">
                                                            <button id="otpcheck" type="button" class="btn btn-success">Verify OTP</button>
                                                        </div>
                                                        <div class="m-1" style="text-align: center;">OR</div>
                                                        <h6>Log in by username and password</h6>
                                                    </div>
                                                    <div class="tab-pane container fade" id="menu1"><h4>Register</h4></div>
                                                </div>
                                                <?php
                                            } else {

                                                if (isset($_GET["step_info_id"])) {
                                                    $q = "select * from step_info where services_id='" . $_GET["service_id"] . "' and id >'" . $_GET["step_info_id"] . "'";
                                                } else
                                                    $q = "select * from step_info where services_id='" . $_GET["service_id"] . "'";
                                                $steps = $conn->query($q);
                                                $i = 0;
                                                $stepcount = $steps->num_rows;
                                                $step_info_id = 0;
                                                while ($step = $steps->fetch_assoc()) {
                                                    $i++;
                                                    if ($i == 1) {
                                                        $step_info_id = $step["id"];
                                                        $fields = $db->select("ordernow_process_fields", "*", array("step_info_id" => $step["id"]));
                                                        ?>
                                                        <div class="process_title">
                                                            <strong>  <?php echo $step["title"]; ?></strong>
                                                        </div>
                                                        <?php
                                                        while ($field = $fields->fetch_assoc()) {
                                                            if ($field["field_type"] == "radio") {
                                                                ?>
                                                                <label class="radiolabel">
                                                                    <input name="<?php echo $step["title"]; ?>" type="<?php echo $field["field_type"]; ?>" value="<?php echo $field["id"]; ?>">
                                                                    <?php echo $field["value"]; ?>
                                                                </label>
                                                                <?php
                                                            } else {
                                                                ?>

                                                                <label>
                                                                    <input name="field<?php echo $field["id"]; ?>" type="<?php echo $field["field_type"]; ?>" value="<?php echo $field["id"]; ?>">
                                                                    <?php echo $field["value"]; ?>
                                                                </label>
                                                                <?php
                                                            }
                                                        }
                                                    } else {
                                                        break;
                                                    }
                                                    ?>

                                                    <?php
                                                }
                                                ?>
                                                <input type="hidden" name="step_info_id" value="<?php echo $step_info_id; ?>">
                                                <input type="hidden" name="step_info_count" value="<?php echo $stepcount; ?>">
                                                <input type="hidden" name="service_category_id" value="<?php echo $_GET["service_category_id"] ?>">
                                                <input type="hidden" name="service_id" value="<?php echo $_GET["service_id"]; ?>">
                                                <input type="hidden" name="location_id" value="<?php echo $_GET["location_id"]; ?>">
                                                <input type="submit" value="Next" class="btn btn-primary py-2 px-4 text-white">
                                                <?php
                                            }
                                        } else {
                                            if (isset($_GET["step_info_id"])) {
                                                $q = "select * from step_info where services_id='" . $_GET["service_id"] . "' and id >'" . $_GET["step_info_id"] . "'";
                                            } else
                                                $q = "select * from step_info where services_id='" . $_GET["service_id"] . "'";
                                            $steps = $conn->query($q);
                                            $i = 0;
                                            $stepcount = $steps->num_rows;
                                            $step_info_id = 0;
                                            while ($step = $steps->fetch_assoc()) {
                                                $i++;
                                                if ($i == 1) {
                                                    $step_info_id = $step["id"];
                                                    $fields = $db->select("ordernow_process_fields", "*", array("step_info_id" => $step["id"]));
                                                    ?>
                                                    <div class="process_title">
                                                        <strong>  <?php echo $step["title"]; ?></strong>
                                                    </div>
                                                    <?php
                                                    while ($field = $fields->fetch_assoc()) {
                                                        if ($field["field_type"] == "radio") {
                                                            ?>
                                                            <label style="display: block; border: thin solid #007bff;padding-left: 20px; margin: 5px; font-size: 20px;">
                                                                <input name="<?php echo $step["title"]; ?>" type="<?php echo $field["field_type"]; ?>" value="<?php echo $field["id"]; ?>">
                                                                <?php echo $field["value"]; ?>
                                                            </label>
                                                            <?php
                                                        } else {
                                                            ?>

                                                            <label style="display: block; border: thin solid #007bff;padding-left: 20px; margin: 5px; font-size: 20px;">
                                                                <input name="field<?php echo $field["id"]; ?>" type="<?php echo $field["field_type"]; ?>" value="<?php echo $field["id"]; ?>">
                                                                <?php echo $field["value"]; ?>
                                                            </label>
                                                            <?php
                                                        }
                                                    }
                                                } else {
                                                    break;
                                                }
                                                ?>

                                                <?php
                                            }
                                            ?>
                                            <input type="hidden" name="step_info_id" value="<?php echo $step_info_id; ?>">
                                            <input type="hidden" name="step_info_count" value="<?php echo $stepcount; ?>">
                                            <input type="hidden" name="service_category_id" value="<?php echo $_GET["service_category_id"] ?>">
                                            <input type="hidden" name="service_id" value="<?php echo $_GET["service_id"]; ?>">
                                            <input type="hidden" name="location_id" value="<?php echo $_GET["location_id"]; ?>">
                                            <input type="submit" value="Next" class="btn btn-primary py-2 px-4 text-white">
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <?php include './footer.php'; ?>
        </div>
        <div class="waitlayer" style="z-index: 5000;width: 100%;background-color: rgba(200,200,200,.5);top:0px;display: none;height: 100vh;position: fixed;font-size: 5vw; color: green;text-align: center;padding-top:100px;">
            Sending OTP wait...
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