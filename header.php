<?php
$maincolor = '#2ca4ac';
$secondary = '#ec4c34';
?>
<!DOCTYPE html>
<html lang="en" style="scroll-behavior:smooth">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Samidoh Foundation</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/logo/fav.png" type="image/png">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #heroImg {
            transition: opacity 1s ease-in-out;
        }
    </style>
</head>

<body>
    <!--====== Start Preloader ======-->
    <div class="preloader">
        <div class="loader">
            <div class="pre-shadow"></div>
            <div class="pre-box"></div>
        </div>
    </div>
    <!--====== End Preloader ======-->
    <!--====== offcanvas-panel ======-->
    <div class="offcanvas-panel">
        <div class="panel-overlay"></div>
        <div class="offcanvas-panel-inner">
            <div class="panel-logo">
                <a href="index"><img src="assets/images/logo/logo.png" alt="Samidoh"></a>
            </div>
            <div class="about-us">
                <p>
                    The Samidoh Foundation aims to improve the lives of women, youth, and children through the transformative power of music and mentorship.
                </p>
            </div>
            <div class="contact-us">
                <h5 class="panel-widget-title" style="color:#2ca4ac;">Follow Us On Our Socials:</h5>
                <ul style="display: flex;justify-content: flex-start;padding-top: 10px;align-items: baseline;">
                    <li>
                        <a href="https://www.facebook.com/samidohofficial/">
                            <i style="background-color: #ec4c34;" class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/samidoh_muchoki/">
                            <i style="background-color: #ec4c34;" class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/SamSamido">
                            <i style="background-color: #ec4c34;" class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/@samidoh_muchoki?lang=en">
                            <i style="background-color: #ec4c34;" class="fa-brands fa-tiktok"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <a href="#" class="panel-close"><i class="fal fa-times"></i></a>
        </div>
    </div><!--====== offcanvas-panel ======-->
    <!--====== Start Header Section ======-->
    <header class="theme-header transparent-header">
        <!-- header Navigation -->
        <div class="header-navigation navigation-style-v1">
            <div class="nav-overlay"></div>
            <div class="container-fluid">
                <div class="primary-menu">
                    <div class="site-branding">
                        <a href="index" class="brand-logo"><img src="assets/images/logo/logo.png" alt="Site Logo"></a>
                    </div>
                    <div class="nav-menu">
                        <!-- Navbar Close -->
                        <div class="navbar-close"><i class="fal fa-times"></i></div>
                        <!-- Nav Search -->

                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item"><a href="index" class="nav-link">Home</a></li>
                                <li class="menu-item"><a href="<?= $page == 'home' ? '' : 'index' ?>#about" class="nav-link">About</a></li>
                                <li class="menu-item"><a href="<?= $page == 'home' ? '' : 'index' ?>#objectives" class="nav-link">Objectives</a></li>

                                <li class="menu-item"><a href="<?= $page == 'home' ? '' : 'index' ?>#contact" class="nav-link">Contact Us</a></li>
                                <li class="menu-item"><a href="https://samidoh.org/shop/shop/" class="nav-link">Store</a></li>
                                <li class="menu-item"><a href="https://samidoh.org/shop/gallery" class="nav-link">Gallery</a></li>
                                <li class="menu-item"><a href="<?= $page == 'home' ? '' : 'index' ?>#donate" class="nav-link">Donate</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right-nav">
                        <ul>
                            <li class="bar-item"><a href="#"><img src="assets/images/dot.png" alt="dot"></a></li>
                            <li class="navbar-toggle-btn">
                                <div class="navbar-toggler">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header><!--====== End Header Section ======-->