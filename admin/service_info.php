<?php include './common/session_db.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">
        <!-- Title Page-->
        <title>Dashboard</title>
        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="css/theme.css" rel="stylesheet" media="all">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <?php include '../Config/common_script.php'; ?>


    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!--HEADER MOBILE-->
            <?php include './common/header_mobile.php'; ?>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <?php include './common/sidebar.php'; ?>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <?php include './common/header_desktop.php'; ?>

                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <DIV class="container-fluid">
                            <h3 class="service_title" style="text-align: center;">Overview</h3>
                            <div style="">
                                <form action="../controller/insert2.php" class="p-5 bg-white" method="POST" enctype="multipart/form-data">
                                    <div class="row form-group">

                                        <div class="col-md-12">
                                            <label class="text-black" for="services_id">Select Service</label> 
                                            <select name="services_id" id="service_category_id" class="form-control">
                                                <?php $db->select_option("services", "title") ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-black" for="title"> Title</label> 
                                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title">
                                        </div>


                                        <div class="col-md-12">
                                            <label class="text-black" for="image">Description</label> 
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>

                                        <input type="hidden" name="api_key" value="<?php echo $user["api_key"]; ?>">
                                        <input type="hidden" name="tbname" value="overview">
                                        <div class="col-md-12">
                                            <input type="submit" value="Add Service Category" style="float:right; margin-top: 10px;" class="btn btn-primary py-2 px-4 text-white">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                $db->showInTable("overview", "*", array(), "all", $externallinks = "", array(), $sort);
                                ?>

                                <h3 class="service_title" style="text-align: center;">Process</h3>

                                <form action="../controller/insert2.php" class="p-5 bg-white" method="POST" enctype="multipart/form-data">
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="text-black" for="services_id">Select Service</label> 
                                            <select name="services_id" id="service_category_id" class="form-control">
                                                <?php $db->select_option("services", "title") ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-black" for="title"> Title</label> 
                                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title">
                                        </div>


                                        <div class="col-md-12">
                                            <label class="text-black" for="image">Description</label> 
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>
                                        <input type="hidden" name="api_key" value="<?php echo $user["api_key"]; ?>">
                                        <input type="hidden" name="tbname" value="process">
                                        <div class="col-md-12">
                                            <input type="submit" value="Add Service Category" style="float:right; margin-top: 10px;" class="btn btn-primary py-2 px-4 text-white">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                $db->showInTable("process", "*", array(), "all", $externallinks = "", array(), $sort);
                                ?>

                                <h3 class="service_title" style="text-align: center;">Documents Required</h3>

                                <form action="../controller/insert2.php" class="p-5 bg-white" method="POST" enctype="multipart/form-data">
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="text-black" for="services_id">Select Service</label> 
                                            <select name="services_id" id="service_category_id" class="form-control">
                                                <?php $db->select_option("services", "title") ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-black" for="title"> Title</label> 
                                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title">
                                        </div>


                                        <div class="col-md-12">
                                            <label class="text-black" for="image">Description</label> 
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>
                                        <input type="hidden" name="api_key" value="<?php echo $user["api_key"]; ?>">
                                        <input type="hidden" name="tbname" value="documentsrequired">
                                        <div class="col-md-12">
                                            <input type="submit" value="Add Service Category" style="float:right; margin-top: 10px;" class="btn btn-primary py-2 px-4 text-white">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                $db->showInTable("documentsrequired", "*", array(), "all", $externallinks = "", array(), $sort);
                                ?>

                                <h3 class="service_title" style="text-align: center;">Forms</h3>

                                <form action="../controller/insert2.php" class="p-5 bg-white" method="POST" enctype="multipart/form-data">
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="text-black" for="services_id">Select Service</label> 
                                            <select name="services_id" id="service_category_id" class="form-control">
                                                <?php $db->select_option("services", "title") ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-black" for="title"> Title</label> 
                                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title">
                                        </div>


                                        <div class="col-md-12">
                                            <label class="text-black" for="image">Description</label> 
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>
                                        <input type="hidden" name="api_key" value="<?php echo $user["api_key"]; ?>">
                                        <input type="hidden" name="tbname" value="forms">
                                        <div class="col-md-12">
                                            <input type="submit" value="Add Service Category" style="float:right; margin-top: 10px;" class="btn btn-primary py-2 px-4 text-white">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                $db->showInTable("forms", "*", array(), "all", $externallinks = "", array(), $sort);
                                ?>
                                <h3 class="service_title" style="text-align: center;">FAQ'S</h3>
                                <form action="../controller/insert2.php" class="p-5 bg-white" method="POST" enctype="multipart/form-data">
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="text-black" for="services_id">Select Service</label> 
                                            <select name="services_id" id="service_category_id" class="form-control">
                                                <?php $db->select_option("services", "title") ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-black" for="title"> Title</label> 
                                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-black" for="image">Description</label> 
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>
                                        <input type="hidden" name="api_key" value="<?php echo $user["api_key"]; ?>">
                                        <input type="hidden" name="tbname" value="faq">
                                        <div class="col-md-12">
                                            <input type="submit" value="Add Service Category" style="float:right; margin-top: 10px;" class="btn btn-primary py-2 px-4 text-white">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                $db->showInTable("faq", "*", array(), "all", $externallinks = "", array(), $sort);
                                ?>
                            </div>
                        </DIV>
                    </div>
                </div>
                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
            </div>

        </div>
        <script>
            $(document).ready(function () {
                $("#myInput").on("keyup", function () {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tbody tr").filter(function () {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="js/main.js"></script>

    </body>

</html>
<!-- end document-->
