<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                    <h3 title="bitsinfotech">BITS INFOTEC</h3>
                    <p>
                        <strong>Bits Infotec</strong> is a leading provider of customized website design, website development, personalized softwares and digital marketing solutions. We have been recommended by top business organization and lots of clients. We're recommended because we deliver quality products and services in given time line. 
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="index.php">Blog</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li>
                            <?php
                            if (isset($_SESSION["loginid"])) {
                                if ($_SESSION["role"] == "user") {
                                    echo '<a href="user/index.php">Dashboard</a>';
                                }
                                if ($_SESSION["role"] == "employee") {
                                    echo '<a href="employee/index.php">Dashboard</a>';
                                }
                                if ($_SESSION["role"] == "admin") {
                                    echo '<a href="admin/index.php">Dashboard</a>';
                                }
                                if ($_SESSION["role"] == "client") {
                                    echo '<a href="client/index.php">Dashboard</a>';
                                }
                            } else {
                                echo '<a href="login.php">Login</a>';
                            }
                            ?>
                            <a href="user/index.php"></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        Office no. 14, JK Villha, <br>
                        ope bhanu sagar talkies, Bhanu Nagar,<br> 
                        Kalyan(w), Maharashtra india 421301 <br>
                        <strong>Phone:</strong> +918976110254<br>
                        <strong>Email:</strong> info@bitsinfotec.com<br>
                    </p>

                    <div class="social-links">
                        <a href="https://twitter.com/pandayg786" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/bitsinfotec" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/java_treepoint/" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="http://bitsinfotec.blogspot.com/" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="https://in.linkedin.com/in/alok-panday-40186092" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Bitsinfotec's Newsletter</h4>
                    <p>Newsletters help to build relationships with our customers through regular communication and high-value information. Articles that provide helpful technical or business tips demonstrate how our company can help customers improve their own performance.</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit"  value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>BITS-BITSINFOTEC</strong>. All Rights Reserved
        </div>
        <div class="credits">

            Designed by <a href="index.php">Bitsinfotec</a>
        </div>
    </div>
</footer>