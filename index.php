<?php session_start(); ?>

<!DOCTYPE html>
<html>



<head>
    <title>Sacred Sensations</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
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
                        <h1> <a>Sacred Sensations</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="active"><a href="index.php">Home</a></li>
                        <?php
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                            echo "<li class='active'><a href='userAppointment.php'>View Reservations</a></li>";
                            echo "<li class='active'><a href='logout.php'>Log Out</a></li>";
                        } else{
                            echo "<li class='active'><a href='login.php'>Log In</a></li>";
                        }
                        ?>
                    </ul>
                </nav>
                <br>
                        <h3 > <a>Crystal Healing Day Spa</a></h3>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
        <!--/banner-->
        <!-- <div class="banner-info">
            <p>Trending of the week</p>
            <h3 class="mb-4">Casual Shoes for Men</h3>
            <div class="ban-buttons">
                <a href="shop-single.php" class="btn">Shop Now</a>
                <a href="single.php" class="btn active">Read More</a>
            </div>
        </div> -->
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

    <!-- Workplace -->
    <section class="about py-5">
        <div class="container pb-lg-3">
            <h3 class="tittle text-center">Our Work Place</h3>
            <div class="row">
                <div class="col-md-6 latest-left">
                    <div class="product-shoe-info shoe text-center">
                        <img src="images/workplace/waiting_room.png" class="img-fluid" alt="Waiting room">
                    </div>
                </div>
                <div class="col-md-6 latest-right">
                    <div class="product-shoe-info shoe text-center">
                        <img src="images/workplace/room_2.png" class="img-fluid" alt="couples massage room">
                    </div>
                </div>
           </div>
               <div class="row latest-grids">
                   <div class="latest-grid1 product-men col-4">
                       <div class="product-shoe-info shoe text-center">
                           <div class="men-thumb-item">
                               <img src="images/workplace/room_1.png" class="img-fluid" alt="personal massage room">
                           </div>
                       </div>
                   </div>
                   <div class="latest-grid2 product-men col-4">
                       <div class="product-shoe-info shoe text-center">
                           <div class="men-thumb-item">
                               <img src="images/workplace/reiki_room.png" class="img-fluid" alt="reiki and third eye opening room">
                           </div>
                       </div>
                   </div>
                   <div class="latest-grid3 product-men col-4">
                       <div class="product-shoe-info shoe text-center">
                           <div class="men-thumb-item">
                               <img src="images/workplace/room_3.png" class="img-fluid" alt="personal massage room">
                           </div>
                       </div>
                   </div>
              </div>
        </div>
    </section>
    <!-- Workplace -->

<!-- Footer -->
<footer class="brands py-5" id="brands">

<div class="container py-lg-0">
            <div class="row text-center brand-items">
                <div class="col-sm-2 col-3">
                    <span class="fa fa-connectdevelop" aria-hidden="true"></span>
                </div>
                <div class="col-sm-2 col-3">
                <span class="fa fa-connectdevelop" aria-hidden="true"></span>
                </div>
                <div class="col-sm-2 col-3">
                <span class="fa fa-connectdevelop" aria-hidden="true"></span>
                </div>
                <div class="col-sm-2 col-3">
                <span class="fa fa-connectdevelop" aria-hidden="true"></span>
                </div>
                <div class="col-sm-2 col-3 mt-sm-0 mt-4">
                <span class="fa fa-connectdevelop" aria-hidden="true"></span>
                </div>
                <div class="col-sm-2 col-3 mt-sm-0 mt-4">
                <span class="fa fa-connectdevelop" aria-hidden="true"></span>
                </div>
            </div>
        </div>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Sacred Sensations: A Crystal Healing Day Spa. All rights reserved | Design by:
    <a href="http://w3layouts.com"> W3layouts.</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
