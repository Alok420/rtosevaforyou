<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <style type="text/css">
        .header-mobile{
            background-color: #F0FFFF;
        }
    </style>
    <body>

        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container">
                    <div class="header-mobile-inner">
                        <a class="logo" href="../index.php">
                            <!--<img src="images/icon/logo.jpg"  alt="RTO Seva for you" height="100" width="76" class="img-responsive img-circle" />-->
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <!-----------------------------------------sidebar for mobile---------------->
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="orders.php">
                                <i class="fas fa-chart-bar"></i>Orders
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--------------------------------------------------end of sidebar in mobile----------------------->
        </header>
    </body>
</html>
