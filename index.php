<?php
include 'common/session_conn_db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RTO Seva For You</title>
        <?php include './common/common_link_cdn.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
            
            * a{
                text-decoration: none!important;
            }
            .first-services .listing:hover{
                transition: .5s;
                box-shadow:0 2px 20px -2px rgba(0, 0, 0, 0.1)!important;

            }
            .howitworks{
                background-image: url(img/banner.jpg); 

                padding: 0px; 
                background-size: 100%; 
                background-repeat: no-repeat;
            }
            .howitworks p,.howitworks .font-weight-light{
                color: white!important;
            }
            .first-services .row .col-lg-3>div:hover{
                box-shadow: 0 2px 20px -2px #007bff!important;
                background-color: #0062cc;
                color: white!important;
                transition: .5sec;
            }
            .first-services .row .col-lg-3>div:hover .listing-title{
                color:#1da1f2!important;
            }
            .first-services .row .col-lg-3>div:hover .fa{
                color:#1da1f2!important;

            }
        </style>
    </head>
    <body>
        <div class="site-wrap">
            <!--<a href="controller/api1/common/selectOneByColumn.php"></a>-->
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
            <?php include './serachingcontent.php'; ?>  
            <?php include './services.php'; ?>
            <?php include './whatweoffers.php'; ?>
            <?php include './howitworks.php'; ?>
            <?php include './testimonials.php'; ?>
            <?php include './footer.php'; ?>
        </div>

        <?php include './common/footer_script.php'; ?>
    </body>
</html>