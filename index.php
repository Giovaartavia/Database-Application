<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">



<head>
    <title>Crystal Healing Day Spa</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Bootie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <!-- //Fonts -->

    <?php $db = mysqli_connect('mysql.eecs.ku.edu','agiovanni','zai7kaiP','agiovanni'); ?>
</head>

<body>

    <!-- header with nav -->
    <div class="main-banner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1> <a href="index.php">Crystal Healing</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="shop.php">Shop Now</a></li>
                                <li><a href="shop-single.php">Single Page</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
        <!--/banner-->
        <div class="banner-info">
            <p>Trending of the week</p>
            <h3 class="mb-4">Casual Shoes for Men</h3>
            <div class="ban-buttons">
                <a href="shop-single.php" class="btn">Shop Now</a>
                <a href="single.php" class="btn active">Read More</a>
            </div>
        </div>
        <!--// banner-inner -->

    </div>
   
    <!-- Services -->
    <section class="about py-5">
        <div class="container pb-lg-3">
            <h3 class="tittle text-center">Services</h3>
            <div class="row">

                <?php include 'php/index_post.php';?>


            </div>

        </div>
    </section>
    <!-- Services -->

    <section class="about py-5">
        <div class="container pb-lg-3">
            <h3 class="tittle text-center">Our Work Place</h3>
            <div class="row">
                <div class="col-md-6 latest-left">
                    <div class="product-shoe-info shoe text-center">
                        <img src="images/waiting_room.png" class="img-fluid" alt="Waiting room">
                    </div>
                </div>
                <div class="col-md-6 latest-right">
                    <div class="product-shoe-info shoe text-center">
                        <img src="images/room_2.png" class="img-fluid" alt="couples massage room">
                    </div>
                </div>
           </div>
               <div class="row latest-grids">
                   <div class="latest-grid1 product-men col-4">
                       <div class="product-shoe-info shoe text-center">
                           <div class="men-thumb-item">
                               <img src="images/room_1.png" class="img-fluid" alt="personal massage room">
                           </div>
                       </div>
                   </div>
                   <div class="latest-grid2 product-men col-4">
                       <div class="product-shoe-info shoe text-center">
                           <div class="men-thumb-item">
                               <img src="images/reiki_room.png" class="img-fluid" alt="reiki and third eye opening room">
                           </div>
                       </div>
                   </div>
                   <div class="latest-grid3 product-men col-4">
                       <div class="product-shoe-info shoe text-center">
                           <div class="men-thumb-item">
                               <img src="images/room_3.png" class="img-fluid" alt="personal massage room">
                           </div>
                       </div>
                   </div>
              </div>
        </div>
    </section>

    <!-- brands -->
    <section class="brands py-5" id="brands">
        <div class="container py-lg-0">
            <div class="row text-center brand-items">
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-connectdevelop" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-empire" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-ioxhost" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-first-order" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3 mt-sm-0 mt-4">
                    <a href="#"><span class="fa fa-joomla" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3 mt-sm-0 mt-4">
                    <a href="#"><span class="fa fa-dropbox" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- brands -->


    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row footer-top">
                <div class="col-lg-4 footer-grid_section_w3layouts">
                    <h2 class="logo-2 mb-lg-4 mb-3">
                        <a href="index.php"><span class="fa fa-bold" aria-hidden="true"></span>ootie</a>
                    </h2>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <h4 class="sub-con-fo ad-info my-4">Catch on Social</h4>
                    <ul class="w3layouts_social_list list-unstyled">
                        <li>
                            <a href="#" class="w3pvt_facebook">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#" class="w3pvt_twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w3pvt_dribble">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                        <li class="ml-2">
                            <a href="#" class="w3pvt_google">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 footer-right">
                    <div class="w3layouts-news-letter">
                        <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Newsletter</h3>

                        <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                        <form action="#" method="post" class="w3layouts-newsletter">
                            <input type="email" name="Email" placeholder="Enter your email..." required="">
                            <button class="btn1"><span class="fa fa-paper-plane-o" aria-hidden="true"></span></button>

                        </form>
                    </div>
                    <div class="row mt-lg-4 bottom-w3layouts-sec-nav mx-0">
                        <div class="col-md-4 footer-grid_section_w3layouts">
                            <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Information</h3>
                            <ul class="list-unstyled w3layouts-icons">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="mt-3">
                                    <a href="about.php">About Us</a>
                                </li>
                                <li class="mt-3">
                                    <a href="#">Gallery</a>
                                </li>
                                <li class="mt-3">
                                    <a href="#">Services</a>
                                </li>
                                <li class="mt-3">
                                    <a href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 footer-grid_section_w3layouts">
                            <!-- social icons -->
                            <div class="agileinfo_social_icons">
                                <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Customer Service</h3>
                                <ul class="list-unstyled w3layouts-icons">

                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#">Delivery & Returns</a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#">Waranty</a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#">Terms & Condition</a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#">Privacy Plolicy</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- social icons -->
                        </div>
                        <div class="col-md-4 footer-grid_section_w3layouts my-md-0 my-5">
                            <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Contact Info</h3>
                            <div class="contact-info">
                                <div class="footer-address-inf">
                                    <h4 class="ad-info mb-2">Phone</h4>
                                    <p>DO NOT CALL</p>
                                </div>
                                <div class="footer-address-inf my-4">
                                    <h4 class="ad-info mb-2">Email </h4>
                                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                                </div>
                                <div class="footer-address-inf">
                                    <h4 class="ad-info mb-2">Location</h4>
                                    <p>Honey Avenue, New York City</p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--delete for possible lawsuit-->
                    <div class="cpy-right text-left row">
                        <p class="col-md-10">© 2019 Crystal Healing Day Spa. All rights reserved | Design by
                            <a href="http://w3layouts.com"> W3layouts.</a>
                        </p>
                        <!-- move top icon -->
                        <a href="#home" class="move-top text-right col-md-2"><span class="fa fa-long-arrow-up" aria-hidden="true"></span></a>
                        <!-- //move top icon -->
                    </div>
                    <!--end of potential lawsuit-->
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

</body>

</html>
