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
                            <h1 style="text-align: center;">Orders detail </h1>
                            <div class="p-2 bg-white">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Value</th>
                                    </tr>

                                    <?php
                                    $orders = $db->select("user_order", "*", array("id" => $_REQUEST["id"]));
                                    $order = $orders->fetch_assoc();
                                    
                                    $services = $db->select("services", "*", array("id" => $order["services_id"]));
                                    $service = $services->fetch_assoc();
                                    
                                    $users=$db->select("user","name",array("id"=>$order["user_id"]));
                                    $user=$users->fetch_assoc();
                                    
                                    echo "<h3>Selected values for " . $service["title"] . " by ".$user["name"]."</h3>";
                                    $sql = "select * from user_select_fields where user_id=" . $order["user_id"];
                                    $fields = $conn->query($sql);
                                    while ($field = $fields->fetch_assoc()) {

                                        $ordernow_process_fields = $db->select("ordernow_process_fields", "*", array("id" => $field["ordernow_process_fields_id"]));
                                        $ordernow_process_field = $ordernow_process_fields->fetch_assoc();
                                        $ordernow_process_field_value = $ordernow_process_field["value"];

                                        $step_infos = $db->select("step_info", "*", array("id" => $ordernow_process_field["step_info_id"]));
                                        $step_info = $step_infos->fetch_assoc();
                                        $step_info_title = $step_info["title"];
                                        ?>
                                        <tr>
                                            <td><?php echo $field["id"]; ?></td>
                                            <td><?php echo $step_info_title; ?></td>
                                            <td><?php echo $ordernow_process_field_value; ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
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
