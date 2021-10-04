<?php
require('app/connection.inc.php');
session_start();
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ico Fonts CSS -->
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <!-- Slider -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Modal Video CSS -->
    <link rel="stylesheet" href="assets/css/modal-video.min.css">
    <!-- Flat Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Popup Image CSS -->
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <title>M3GC Weekenders Go Green Go Cyclings</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>
    <!-- Preloader -->
    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="pre-box-one">
                    <div class="pre-box-two"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header -->
    <div class="header-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="left">
                        <marquee><span class="text-white text-small  text-lowercase ">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor!</span></marquee>
                    </div>
                </div>

                <div class="col-lg-8 d-flex justify-content-end">

                    <h6 class="mb-0 me-3 row align-self-center">
                        <span class="text-white text-medium">Total Distance</span>
                    </h6>
                    <h6 class="mb-0 row  align-self-center">
                        <span class="text-white">35000 kms</span>
                    </h6>


                </div>

            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Navbar -->
    <div class="navbar-area sticky-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.php" class="logo">
                <img src="assets/img/logo-two.png" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" width="167px" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="advocacy.php" class="nav-link">Advocacy</a>
                            </li>
                            <li class="nav-item">
                                <a href="Merchandise.php" class="nav-link">Merchandise</a>
                            </li>
                            <li class="nav-item">
                                <a href="leaderboard.php" class="nav-link">Leaderboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Others <i class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="faq.php" class="nav-link">FAQ's</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="entry_rules.php" class="nav-link">Entry Rules and Guidelines</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy_policy.php" class="nav-link">Privacy policy </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="gallery.php" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="sponsors.php" class="nav-link">Sponsors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.php" class="nav-link">Contact us</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="side-nav nav">
                            <?php

                            if (isset($_SESSION["full_name"])) {
                                echo '<a href="profile.php" class="donate-btn nav-link dropdown-toggle">' . $_SESSION["full_name"] . ' <i class="icofont-ui-user"></i></a>';
                            } else {
                                echo '<a href="auth.php" class="donate-btn nav-link dropdown-toggle">Login/Register <i class="icofont-ui-user"></i></a>';
                            }

                            ?>


                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar -->