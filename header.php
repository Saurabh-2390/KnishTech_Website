<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/../config.php';

// Check if the function exists
if (!function_exists('base_url')) {
    die("Error: base_url() function is not defined. Check config.php.");
}

// Print base_url for debugging
echo "Base URL: " . base_url();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.knishtech.com/about-us by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2025 11:37:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Fondex – Business &amp; Finance Consulting HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" /> -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Knishtech</title>
<!-- <script src="https://www.knishtech.com/assets/js/vendor/modernizr-2.6.2.min.js"></script> -->
<!-- favicon icon -->
<link rel="shortcut icon" href="assets/images/favicon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/animate1.css"/>
<!-- <link rel="stylesheet" type="text/css" href="https://www.knishtech.com/assets/css/style1.css"/> -->

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="assets/css/flaticon.css"/>


<!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">

    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="assets/css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="assets/css/main.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css"/>

</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
          <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-classic">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="top-contact ttm-highlight-left text-left">
                            <li><i class="fa fa-clock-o"></i><strong>Open Hours:</strong> Mon - Sat 9.00 - 18.00</li>
                        </ul>
                        <div class="topbar-right text-right">
                            <ul class="top-contact">
                                <li><i class="fa fa-envelope-o"></i><a href="mailto:info@knishtech.com">info@knishtech.com</a></li>
                                <li><i class="fa fa-phone"></i><a href="tel:+4746920163">+47 469 20 163</a></li>
                            </ul>
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons">
                                    <li><a href="https://www.facebook.com/knishtech"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="https://www.twitter.com/knishtech"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <!-- <li><a href="#"><i class="fa fa-flickr"></i></a>
                                    </li> -->
                                    <li><a href="https://www.linkedin.com/company/knishtech"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="index.php" title="Fondex" rel="home">
                                        <img id="logo-img" class="img-center" src="assets/images/logo.png" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                    <div class="header-btn">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black" href="contact-us.html">GET START NOW!</a>
                                    </div>
                                    <div class="ttm-rt-contact">
                                        <!-- header-icons -->
                                        <div class="ttm-header-icons">
                                            <!-- <span class="ttm-header-icon ttm-header-cart-link">
                                                <a href="#"><i class="ti ti-shopping-cart"></i>
                                                    <span class="number-cart">0</span>
                                                </a>
                                            </span>
                                            <div class="ttm-header-icon ttm-header-search-link">
                                                 <a href="#"><i class="ti ti-search"></i></a> -->
                                                <!-- <div class="ttm-search-overlay">
                                                    <form method="get" class="ttm-site-searchform" action="#">
                                                        <div class="w-search-form-h">
                                                            <div class="w-search-form-row">
                                                                <div class="w-search-input">
                                                                    <input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
                                                                    <button type="submit">
                                                                        <i class="ti ti-search"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>-->
                                        </div><!-- header-icons end -->
                                    </div>
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                           <li class=""><a href="index.php">Home</a>
                                                <!-- <ul>
                                                    <li class="active"><a href="index.html">Sample Homepage 1</a></li>
                                                    <li><a href="home-2.html">Sample Homepage 2</a></li>
                                                    <li><a href="home-3.html">Sample Homepage 3</a></li>
                                                    <li><a href="#">Header Styles</a>
                                                        <ul>
                                                            <li><a href="index.html">Header Classic</a></li>
                                                            <li><a target="_blank" href="header-infostack.html">Header Infostack</a></li>
                                                            <li><a target="_blank" href="header-elegant.html">Header Elegant</a></li>
                                                            <li><a target="_blank" href="header-overlay.html">Header Overlay</a></li>
                                                            <li><a target="_blank" href="header-stackcenter.html">Header Stack Center</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> -->
                                            </li>
                                            <li class="active"><a href="about-us.html">About</a>
                                                <!-- <ul>
                                                    <li><a href="aboutus-1.html">About Us 1</a></li>
                                                    <li><a href="aboutus-2.html">About Us 2</a></li>
                                                </ul> -->
                                            </li>
                                            <li class=""><a href="#">Services</a>
                                                <ul>
                                                    <li><a href="business-intelligence-solutions-big-data-analytics.html">Business Intelligence Solutions &amp; Big Data Analytics</a></li>
                                                    <li><a href="integration-services-api-services.html">Integration Services &amp; API Services</a></li>
                                                    <li><a href="cloud-computing-iot-edge-services.html">Cloud Computing &amp; IOT EDGE Services</a></li>
                                                    <li><a href="ai-cognitive-services-machine-learning.html">AI &amp; Cognitive Services &amp; Machine Learning</a></li>
                                                    <li><a href="web-mobile-app-development.html">Web &amp; Mobile App Development</a></li>
                                                    <li><a href="operational-it-consulting.html">Operational &amp; IT Consulting Services</a></li>
                                                </ul>
                                            </li>
											
											<!-- Success Stories -->
											<li class=""><a href="achievement.php">Success Stories</a>
											</li>
											
                                            <!-- <li><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="services.html">Services</a></li>
                                                    <li><a href="contact-us.html">Contact Us</a></li>
                                                    <li><a href="our-team.html">Our Team</a></li>
                                                    <li><a href="#">Shop</a>
                                                        <ul>
                                                            <li><a href="shop.html">Default Shop</a></li>
                                                            <li><a href="product-details.html">Single Product Details</a></li>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="faq.html">FAQs</a></li>
                                                    <li><a href="career.html">Carrer</a></li>
                                                    <li><a href="error.html">Error Page</a></li>
                                                    <li><a href="element.html">Elements</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="#">Portfolio</a>
                                                <ul>
                                                    <li><a href="portfolio-style-1.html">Project Style 1</a></li>
                                                    <li><a href="portfolio-style-2.html">Project Style 2</a></li>
                                                    <li><a href="portfolio-single.html">Project Single</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="blog.html">Blog</a>
                                                <!-- <ul>
                                                    <li><a href="blog.html">Blog Classic</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="blog-left-image.html">Blog Left Image</a></li>
                                                    <li><a href="single-blog.html">Single Blog View</a></li>
                                                </ul> -->
                                            </li>
                                            <li class=""><a href="contact-us.html">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->
        </header><!--header end-->
                                            
