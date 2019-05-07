<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Sacred Sensations: Reservations</title>
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
<div class="main-banner2" id="home">
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

    </div>
    <div class="table">
      <?php include 'php/showAppointments.php';?>
    </div>

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
