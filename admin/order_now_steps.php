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
                            <h3 class="service_title" style="text-align: center;">Order now process settings</h3>
                            <div style="background-color: white;">
                                <form action="../controller/insert2.php" class="p-5 bg-white" method="POST" enctype="multipart/form-data">
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="text-black" for="service_category">Select Service</label> 
                                            <select name="services_id" id="service_category_id" class="form-control">
                                                <?php $db->select_option("services", "title") ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-black" for="title"> Order now step title</label> 
                                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title">
                                        </div>
                                        <input type="hidden" name="api_key" value="<?php echo $user["api_key"]; ?>">
                                        <input type="hidden" name="tbname" value="step_info">
                                        <div class="col-md-12">
                                            <input type="submit" value="Add Service Category" style="float:right; margin-top: 10px;" class="btn btn-primary py-2 px-4 text-white">
                                        </div>
                                    </div>
                                </form>
                                <div id="accordion">
                                    <?php
                                    $data = $db->select("services", "*");
                                    $floop = 0;
                                    while ($onedata = $data->fetch_assoc()) {
                                        $floop++;
                                        $title = $onedata["title"];
                                        ?>
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="card-link" data-toggle="collapse" href="#collapse<?php echo $onedata["id"]; ?>">
                                                    <?php echo $title; ?>
                                                </a>
                                            </div>
                                            <div id="collapse<?php echo $onedata["id"]; ?>" class="collapse show" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div id="accordion2">

                                                        <?php
                                                        $steps_info = $db->select("step_info", "*", array("services_id" => $onedata["id"]));
                                                        while ($step_info = $steps_info->fetch_assoc()) {

                                                            $ordernow_process_fields = $db->select("ordernow_process_fields", "*", array("step_info_id" => $step_info["id"]));
                                                            ?>
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <a class="card-link" data-toggle="collapse" href="#collapse2<?php echo $step_info["id"]; ?>">
                                                                        <?php echo $step_info["title"]; ?>
                                                                    </a>
                                                                    <a style="position: absolute;right: 10px;" href="../controller/DeleteController.php?id=<?php echo $step_info["id"]; ?>&table_name=<?php echo "step_info";?>">Delete</a>
                                                                </div>
                                                                <div id="collapse2<?php echo $step_info["id"]; ?>" class="collapse show" data-parent="#accordion2">
                                                                    <div class="card-body">
                                                                        <?php
                                                                        while ($ordernow_process_field = $ordernow_process_fields->fetch_assoc()) {
                                                                            ?>
                                                                            <label>
                                                                                <input type="<?php echo $ordernow_process_field["field_type"]; ?>" value="<?php echo $ordernow_process_field["value"]; ?>">
                                                                                <?php echo $ordernow_process_field["value"]; ?>      
                                                                            </label>
                                                                        <a style="position: absolute;right: 10px;" href="../controller/DeleteController.php?id=<?php echo $ordernow_process_field["id"]; ?>&table_name=<?php echo "ordernow_process_fields";?>">Delete</a>
                                                                            <br>

                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        <br>
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#step<?php echo $step_info["id"]; ?>">
                                                                            Add fields
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- The Modal -->
                                                            <div class="modal" id="step<?php echo $step_info["id"]; ?>">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">

                                                                        <!-- Modal Header -->
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Modal Heading</h4>
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        </div>

                                                                        <!-- Modal body -->
                                                                        <div class="modal-body">
                                                                            <div class="container">
                                                                                <form method="POST" action="../controller/insert2.php">
                                                                                    <div class="form-group">
                                                                                        <label>Select type of field</label>
                                                                                        <select name="field_type" class="input_type form-control">
                                                                                            <option value="checkbox">Check box</option>
                                                                                            <option value="radio">Radio box</option>
                                                                                            <option value="text">Text box</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Field Value</label>
                                                                                        <input type="text" name="value" class="form-control">
                                                                                    </div>
                                                                                    <input type="hidden" name="step_info_id" value="<?php echo $step_info["id"]; ?>">
                                                                                    <input type="hidden" name="tbname" value="ordernow_process_fields">
                                                                                    <input type="hidden" name="api_key" value="<?php echo $user["api_key"]; ?>">

                                                                                    <input type="submit" class="btn btn-success" value="Save">
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        </div>
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
