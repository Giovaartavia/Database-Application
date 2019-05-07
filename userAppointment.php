<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Crystal Healing Day Spa</title>
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
                        <h1> <a>Crystal Healing</a></h1>
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
    <div class="table">
      <?php include 'php/showAppointments.php';?>
    </div>

  
</body>
</html>
