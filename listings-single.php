<?php
include 'common/session_conn_db.php';

if (isset($_GET["service_id"])) {
    $location_id = validateReData($_GET["location_id"]);
    $service_cat_id = validateReData($_GET["service_category_id"]);
    $service_id = validateReData($_GET["service_id"]);

    $service_cats = $db->select("service_category", "*", array("id" => $service_cat_id));
    $service_cat = $service_cats->fetch_assoc();
    $allservices = $db->select("services", "*", array("service_category_id" => $service_cat_id));


    $services = $db->select("services", "*", array("id" => $service_id));
    $service = $services->fetch_assoc();

    $locations = $db->select("location", "*", array("id" => $location_id));
    $location = $locations->fetch_assoc();
} else {
    $db->sendTo("index.php");
}
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>RTOSEVA4U</title>
        <?php include './common/common_link_cdn.php'; ?>

        <style>
            *{
                padding: 0;
                margin: 0;
            }
            body{
                width: 100%;
            }
            .list-group-item{
                padding-top: 3px;
                padding-bottom: 3px;
                margin-bottom: 5px!important;
                color: white;
                background: #2f89fc;
            }
            .nav-tabs{
                padding-top: 3px;
                border-radius: 100px; padding-left: 50px;
                padding-bottom: 3px;
                margin-bottom: 5px!important;
                color: white;
                background: #2f89fc;
            }
            .nav-tabs .nav-item .nav-link{
                color: black!important;

            }
            .tab-pane strong{
                display: block;
                width: 20%;
                color: black;

            }
            .tab-pane strong::after {
                content: "";
                display: block;
                width: 100%;
                height: 3px;
                position: relative;
                color:white;
                border-radius: 100px;
                background-image: linear-gradient(to left,transparent, transparent,rgba(0,123,255,.9));
            }
            @media only screen and (max-width: 600px) {
                .nav-tabs .nav-item{
                    display: block!important;
                    width: 100%;
                }
                .nav-tabs{
                    border-radius: 2px; padding: 0px!important;
                    background: linear-gradient(45deg,rgba(0,123,255,.9),rgba(25,25,55,.3) 100%) !important;   
                }
                .nav-tabs .nav-item .nav-link{
                    padding: 0px;
                    padding-left: 5px;
                }
                .nav-tabs .nav-item {
                    border:thin solid white;
                }

            }

        </style>
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


            <!--<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(img/secondimage.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">-->
            <!--    <div class="container">-->
            <!--        <div class="row align-items-center justify-content-center text-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom">-->

            <!--            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">-->


            <!--                <div class="row justify-content-center mt-5">-->
            <!--                    <div class="col-md-12 text-center">-->
            <!--                        <h1>RTO Seva For You</h1>-->
            <!--                        <?php include './searchbox.php'; ?>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>  -->
<br><br><br><br><br>
            <div class="site-section">
                <div class="container">
                    <div class="row" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="col-lg-8">

                            <div class="mb-4" style="margin-top: -60px;" >

                                <div><img src="img/services/<?php echo $service["image"] != "" ? $service["image"] : "img_3.jpg"; ?>" width="600" height="300" alt="Image" class="img-fluid rounded"></div>

                            </div>

                            <h2 class="h5 mb-4 text-black"><?php echo $service["title"] != "" ? $service["title"] : ""; ?> <?php echo $location["title"]; ?></h2>
                            <p><?php echo $service["content"] != "" ? $service["content"] : ""; ?></p>

                            <!--<p class="mt-3"><a href="#" class="btn btn-primary">Get In Touch</a></p>-->

                        </div>
                        <div class="col-lg-3 ml-auto" data-aos="fade-up" data-aos-anchor-placement="top">

                            <div class="mb-5">
                               <a href="ordernow.php?location_id=<?php echo $location_id; ?>&service_category_id=<?php echo $service_cat_id; ?>&service_id=<?php echo $service_id;?>"><button type="submit" style="width: 100%;" class="btn btn-success btn-lg mb-5">Order now</button></a>
                                <h3 class="h5 text-black mb-3">All services of <?php echo $service_cat["title"]; ?></h3>
                                <ul class="list-group">
                                    <?php
                                    while ($servicecone = $allservices->fetch_assoc()) {
                                        ?>
                                        <a href="listings-single.php?location_id=<?php echo $location_id; ?>&service_category_id=<?php echo $service_cat_id; ?>&service_id=<?php echo $servicecone["id"]; ?>">
                                            <li class="list-group-item"><?php echo $servicecone["title"]; ?></li>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container">

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#overview">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#process">Process</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#document">Documentation required</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#forms">Forms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#faq">FAQ'S</a>
                    </li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="overview" class="container tab-pane active"><br>
                        <?php
                        $overviews = $db->select("overview", "*", array("services_id" => $_GET["service_id"]));
                        while ($overview = $overviews->fetch_assoc()) {
                            echo "<strong>" . $overview["title"] . "</strong>";
                            echo $overview["description"];
                        }
                        ?>       
                    </div>
                    <div id="process" class="container tab-pane fade"><br>
                        <?php
                        $overviews = $db->select("process", "*", array("services_id" => $_GET["service_id"]));
                        while ($overview = $overviews->fetch_assoc()) {
                            echo "<strong>" . $overview["title"] . "</strong>";
                            echo $overview["description"];
                        }
                        ?>     
                    </div>
                    <div id="document" class="container tab-pane fade"><br>
                        <?php
                        $overviews = $db->select("documentsrequired", "*", array("services_id" => $_GET["service_id"]));
                        while ($overview = $overviews->fetch_assoc()) {
                            echo "<strong>" . $overview["title"] . "</strong>";
                            echo $overview["description"];
                        }
                        ?>  
                    </div>
                    <div id="forms" class="container tab-pane fade"><br>
                        <?php
                        $overviews = $db->select("forms", "*", array("services_id" => $_GET["service_id"]));
                        while ($overview = $overviews->fetch_assoc()) {
                            echo "<strong>" . $overview["title"] . "</strong>";
                            echo $overview["description"];
                        }
                        ?>  
                    </div>
                    <div id="faq" class="container tab-pane fade"><br>
                        <?php
                        $overviews = $db->select("faq", "*", array("services_id" => $_GET["service_id"]));
                        while ($overview = $overviews->fetch_assoc()) {
                            echo "<strong>" . $overview["title"] . "</strong>";
                            echo $overview["description"];
                        }
                        ?>  

                    </div>
                </div>
            </div>
            <?php include './footer.php'; ?>
        </div>

        <?php include './common/footer_script.php'; ?>


    </body>
</html>