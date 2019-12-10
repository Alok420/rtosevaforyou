<?php include './common/model.php'; ?>
<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
            <a href="home" class="scrollto"><img src="./img/bitsinfotec-horizontal-logo.png" alt="bitsinfotech software development" class="img-fluid"></a>
        </div>
        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="home">Home</a></li>
                <li class="drop-down"><a href="services">Services</a>
                    <ul class="dropdown">
                        <?php
                        $service_cat = $db->select("service_category");
                        while ($service = $service_cat->fetch_assoc()) {
                            ?>
                            <li>
                                <a href="<?php echo $service["title"]; ?>">- <?php echo $service["title"]; ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="drop-down"><a href="products">Products</a>
                    <ul class="dropdown">
                        <?php
                        $product_cat = $db->select("product_category");
                        while ($product = $product_cat->fetch_assoc()) {
                            ?>
                            <li>
                                <a href="products-<?php echo $product["title"]; ?>">- <?php echo $product["title"]; ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="portfolio">Portfolio</a></li>
                <li><a href="team">Team</a></li>
                <!--                <li class="drop-down"><a href="">Drop Down</a>
                                    <ul>
                                        <li><a href="#">Drop Down 1</a></li>
                                        <li class="drop-down"><a href="#">Drop Down 2</a>
                                            <ul>
                                                <li><a href="#">Deep Drop Down 1</a></li>
                                                <li><a href="#">Deep Drop Down 2</a></li>
                                                <li><a href="#">Deep Drop Down 3</a></li>
                                                <li><a href="#">Deep Drop Down 4</a></li>
                                                <li><a href="#">Deep Drop Down 5</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Drop Down 3</a></li>
                                        <li><a href="#">Drop Down 4</a></li>
                                        <li><a href="#">Drop Down 5</a></li>
                                    </ul>
                                </li>-->

                <li><a href="contact">Contact Us</a></li>
                <li id="intro" class="enquire" style=" width: 163px;padding:0px; height: 0px; display: inline-block;">
                    <div class="intro-info">
                        <a href="#" class="btn-get-started show-modal">Get your quote</a>
                    </div>
                </li>
            </ul>
        </nav><!-- .main-nav -->

    </div>
</header>