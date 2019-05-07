<?php session_start(); ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sacred Sensations</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />

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

</head>

<body>

    <!-- Banner -->
    <div class="main-banner inner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1> <a></span>Sacred Sensations</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class='active'><a href="index.php">Home</a></li>
                        <li class="active"><a href="about.php">About</a></li>
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
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->

    </div>

    <!-- Load Healers -->
    <section class="hand-crafted py-5">
        <div class="container">
            <div class="inner-sec py-md-5 px-lg-5">
                <h3 class="tittle text-center"><span class="sub-tittle">Healers: We Use the Term Loosely</span> View Our Healers</h3>
                <p class="mb-4 text-center px-lg-4"> Our healers have come from all walks of life. Let them use their honed energy and crystal expertise to align and strengthen your inner light. </p>
            </div>
        </div>

        <!-- Healers -->
    </section>
    
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

</html>
