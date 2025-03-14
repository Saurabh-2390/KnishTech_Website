<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once(__DIR__ . '/application/config/config.php');


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
											<li class=""><a href="achievement.html">Success Stories</a>
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
<style>
.bi-red{
  background-image: url('assets/images/business-intelligence1.png'); background-repeat: no-repeat; background-position: center bottom;
  width: 64px;
  height: 64px;
  margin:10px 0 0 -5px;
}
/* Integration services */
.in-red{
  background-image: url('assets/images/api.png'); background-repeat: no-repeat; background-position: center bottom;
  width: 64px;
  height: 64px;
  margin:10px 0 0 -5px;
}
/* Cloud computing */
.cloud-red{
  background-image: url('assets/images/cloud-data.png'); background-repeat: no-repeat; background-position: center bottom;
  width: 64px;
  height: 64px;
  margin:10px 0 0 -5px;
}
/* AI */
.ai-red{
  background-image: url('assets/images/machine-learning.png'); background-repeat: no-repeat; background-position: center bottom;
  width: 64px;
  height: 64px;
  margin:10px 0 0 -5px;
}
/* web application */
.web-red{
  background-image: url('assets/images/web-development.png'); background-repeat: no-repeat; background-position: center bottom;
  width: 64px;
  height: 64px;
  margin:10px 0 0 -5px;
}
/* consulting */
.cons-red{
  background-image: url('assets/images/consulting.png'); background-repeat: no-repeat; background-position: center bottom;
  width: 64px;
  height: 64px;
  margin:10px 0 0 -5px;
}
</style>
<style>
    body { 
            font-family: 'Roboto', sans-serif; /* Updated font family */ 
            margin: 0; 
            padding: 0;
            background-color: #ffffff;
            color: #333;
            text-align: center;
        }
		
		/* Banner Styles */
.success-stories-banner {
    position: relative;
    width: 100%;
    height: 500px;
    overflow: hidden;
}

.banner-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.banner-content {
    position: absolute;
    top: 20%;  /* Adjusted for better placement */
    left: 54%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #FF6347; /* Changed to gold for better contrast */
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6); /* Added shadow for better readability */
    border-radius: 10px;
    max-width: 60%;
}

.banner-content h1 {
    margin: 0;
    font-size: 2.5em; /* Kept size balanced */
    font-weight: bold;
    letter-spacing: 1px;
    color: #D43D3D; /* Ensuring header is gold */
}

.banner-content p {
    margin: 8px 0 0;
    font-size: 1.2em;
    color: #FFFFFF; /* White for better readability */
}


		
        /* Navigation Bar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f9fa;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            margin: 0 15px;
            font-size: 16px;
            font-weight: 500;
        }

        .navbar a:hover {
            color: #d61a3c;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
            color: #d61a3c;
        }

        .container { 
            max-width: 1000px; 
            margin: auto; 
            padding: 20px;
        }
        
       /* Company Icons Wrapper */
.company-icons-wrapper {
    width: 100%;
    margin-top: 10px;
    display: flex; /* Show by default */
    align-items: center;
    justify-content: flex-start; /* Moves icons to the left */
    position: relative;
}

/* Scrollable Carousel */
.carousel-container {
    width: 650px; /* 6 icons x 70px */
    overflow: hidden;
    position: relative;
    display: flex;
    justify-content: flex-start; /* Aligns icons to the left */
    margin-left: 100px;  /* Moves entire carousel slightly right */
    align-items: center;
}

/* Company Icons */
.company-icons {
    display: flex;
    justify-content: flex-start; /* Align icons to the left */
    transition: transform 0.5s ease-in-out;
    margin-left: 100px; /* Moves icons to the right */
}

/* Individual Company Icon */
.company-icon {
    width: 100px;
    height: 70px;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
    margin: 20px;
}

        .company-icon:hover {
            filter: grayscale(0%);
        }

        /* Slider Buttons */
        .slider-btn {
            background: rgba(255, 255, 255, 0.3); /* Semi-transparent glass effect */
            color: #333;
            border: 2px solid rgba(255, 255, 255, 0.5);
            padding: 15px;
            font-size: 22px;
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            border-radius: 50%;
            backdrop-filter: blur(10px); /* Glass effect */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
            width: 55px;
            height: 55px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Hover Effect */
        .slider-btn:hover {
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            color: white;
            border-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 8px 16px rgba(255, 75, 43, 0.5);
            transform: translateY(-50%) scale(1.15) rotate(5deg); /* Slight rotation for a unique touch */
        }

       /* Position Left Button to Far Left */
.left-btn { 
    position: absolute;
    left: 0;
}

/* Position Right Button to Far Right */
.right-btn { 
    position: absolute;
    right: 0;
}

/* Add a subtle pulse animation when hovering */
        @keyframes pulse {
            0% { box-shadow: 0 0 10px rgba(255, 75, 43, 0.4); }
            50% { box-shadow: 0 0 20px rgba(255, 75, 43, 0.6); }
            100% { box-shadow: 0 0 10px rgba(255, 75, 43, 0.4); }
        }

        .slider-btn:hover {
            animation: pulse 1.5s infinite;
        }

/* Show All Button Positioned at Right */
.show-all-container {
    display: flex;
    justify-content: flex-end; /* Aligns button to the right */
    margin-top: 20px;
    width: 100%;
}

#showAllBtn {
    font-size: 16px;
    padding: 12px 24px;
    background: linear-gradient(135deg, #D43D3D, #D32F2F); /* Matching red gradient */
    color: white;
    border-radius: 50px; /* Rounded button */
    border: none;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 0 15px rgba(212, 61, 61, 0.6); /* Subtle glow */
    outline: none;
    display: inline-block;
}

/* Hover Effect */
#showAllBtn:hover {
    background: linear-gradient(135deg, #D32F2F, #D43D3D); /* Reverse gradient for effect */
    box-shadow: 0 0 25px rgba(212, 61, 61, 0.9); /* Slightly stronger glow */
    transform: scale(1.05); /* Slight pop effect */
}





/* Active (click) effect */
#showAllBtn:active {
    transform: scale(0.98); /* Pressed effect */
    box-shadow: 0 0 10px rgba(255, 71, 91, 0.5);
}
	.image-container img {
        border: 2px solid black; /* Black boundary */
        margin-bottom: 20px; /* Space between images */
    }
    .image-container img:not(:last-child) {
        margin-right: 30px; /* Space between side-by-side images */
    }


        .projects { 
            display: block; /* Show by default */
            text-align: left;
            margin-top: 10px;
        }
        .project-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    margin: 10px auto;
    max-width: 1300px;
    position: relative;
    border-bottom: 2px solid #ccc; /* Add a bottom border */
    padding-bottom: 15px; /* Add space before the border */
}
	
    .project-content p {
        font-size: 18px; /* Adjust the size as needed */
        line-height: 1.6; /* Improves readability */
        }
		
	.project-content li {
        font-size: 18px; /* Adjust the size as needed */
        line-height: 1.6; /* Improves readability */
        }
        .project-content {
            flex-grow: 1;
        }
        .project-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }
        .date { 
            font-size: 14px; 
            color: #666;
            margin-top: 5px;
        }

        /* Right-aligned icons in project items */
        .project-icon {
            width: 80px;
            height: 50px;
            margin-left: 15px;
            align-self: flex-start; /* Align flag to the top */
        }
		.project-title b {
    font-size: 28px; /* Adjust the size as needed */
	
}
    </style>
</head>
<body>
     <div class="success-stories-banner">
        <img src="assets/images/slides/sucs.webp" alt="Success Stories" class="banner-image">
        <div class="banner-content">
            <h1>SUCCESS STORIES</h1>
            <p>Discover inspiring stories of how our solutions have transformed businesses.</p>
        </div>
    </div>

    <div class="container">
        <div class="company-icons-wrapper" id="companyIcons">
            <button class="slider-btn left-btn" onclick="scrollIcons(-1)">&#8249;</button>

            <div class="carousel-container">
                <div class="company-icons" id="iconsCarousel">
                    <img src="assets/images/Ecoserv-Logo.webp" class="company-icon" onclick="filterProjects('USA')" alt="USA">
                    <img src="assets/images/Aus.jpg" class="company-icon" onclick="filterProjects('Australia')" alt="Australia">
                    <img src="assets/images/pointon.png" class="company-icon" onclick="filterProjects('Norway')" alt="Norway">
                </div>
            </div>

            <button class="slider-btn right-btn" onclick="scrollIcons(1)">&#8250;</button>
        </div>

        <div class="show-all-container">
            <button class="achievement-btn" id="showAllBtn" onclick="filterProjects('all')" style="display: none;">
                Show All
            </button>
        </div>
    </div>

    <div class="projects" id="projectList">
        <div class="project-item" data-company="USA">
            <div class="project-content">
                <div class="project-title">
                    <b>USA Oil and Gas Integration</b>
                    <img src="assets/images/NationalFlag/USA.jpg" class="project-icon" alt="USA Icon">
                </div>
                <div class="date">Date: May 15, 2023</div>
                <br>
				 <div class="image-container">
                        <img src="<?=base_url()?>assets/images/logic1.png" width="350" height="450" style="margin-right: 30px;">
                        <img src="<?=base_url()?>assets/images/logic.png" width="350" height="450" style="margin-right: 30px;">
                        <img src="<?=base_url()?>assets/images/logic2.png" width="350" height="450">
                    </div>
                    <br>
                <p>We are thrilled to announce the successful completion of the <b>USA Oil & Gas Integration Project</b>, delivering a robust and scalable solution tailored for the oil & gas industry in the USA. Our team leveraged cutting-edge cloud technologies to streamline operations and enhance efficiency.</p>
                <p><b>🔹 Key Technologies That Powered This Project:</b></p>
                <ul>
                    <li>- <b>Azure Logic Apps</b> for seamless workflow automation and integration</li>
                    <li>- <b>Azure Functions</b> for serverless compute operations</li>
                    <li>- <b>Azure SQL Server</b> for robust data storage and management</li>
                    <li>- <b>Azure Key Vault</b> for secure management of secrets and credentials</li>
                    <li>- <b>Azure Storage Account (ADLS)</b> for optimized data storage solutions</li>
                    <li>- <b>RosettaNet</b> for B2B messaging and integration</li>
                    <li>- <b>XML, XSLT, and XSD</b> for transforming, validating, and mapping data</li>
                </ul>
				<br>
                <p>This solution is designed to <b>streamline operations, boost productivity, and provide agility</b> needed for the USA’s oil & gas sector to thrive in today’s fast-paced digital landscape. 🌍💡</p>
                <p>We’re incredibly proud of our <b>team’s innovation-driven approach</b>. Looking forward to more projects that redefine possibilities with Azure! 🔗</p>
            </div>
        </div>
        <div class="project-item" data-company="Australia">
            <div class="project-content">
                <div class="project-title">
                    <b>Migration Project</b>
                    <img src="assets/images/NationalFlag/Aus.jpg" class="project-icon" alt="Australia Icon">
                </div>
                <div class="date">Date: July 10, 2024</div>
                <br>
				<div class="image-container">
					<img src="<?=base_url()?>assets/images/fabric1.png" width="550" height="300">
					<img src="<?=base_url()?>assets/images/fabric2.png" width="550" height="300">
					<img src="<?=base_url()?>assets/images/fabric3.png" width="550" height="300" 
						style="display: block; margin: 0 auto;">
				</div>
                    <br>
                <p>We are excited to announce the successful completion of our <b>Migration Project</b> for an Australian-based company, enabling a seamless transition to a modern cloud-based infrastructure with enhanced scalability, performance, and efficiency. This project harnessed the power of <b>Microsoft Fabric</b> alongside cutting-edge technologies to optimize data migration, integration, and analytics workflows.</p>
                <p><b>🔹 Key Highlights of the Project:</b></p>
                <ul>
                    <li>- <b>Microsoft Fabric</b> for unified data integration, transformation, governance, and security</li>
                    <li>- <b>Lakehouse Architecture</b> to enable scalable and structured data storage</li>
                    <li>- <b>Spark Clusters</b> for high-performance big data processing and analytics</li>
                    <li>- <b>Data Factory in Fabric</b> for orchestrating seamless ETL pipelines</li>
                    <li>- <b>Power BI</b> for real-time data visualization, analytics, and business intelligence</li>
                    <li>- <b>Power Apps</b> for workflow automation and seamless data integration into SSMS</li>
                    <li>- <b>SQL Server Management Studio (SSMS)</b> for efficient data management and querying</li>
                    <li>- <b>End-to-End Data Migration</b> to a modern, future-ready cloud-based infrastructure</li>
                </ul>
				<br>
                <p>This project has significantly enhanced <b>data processing, reporting capabilities, and analytics workflows</b>, empowering the company with deeper insights and agile decision-making. 🎯</p>
                <p>Kudos to our <b>dedicated team</b> for their commitment to innovation! Looking forward to more groundbreaking cloud transformation projects. 🌐💡</p>
            </div>
        </div>

        <div class="project-item" data-company="Norway">
            <div class="project-content">
                <div class="project-title">
                    <b>API Integration</b>
                    <img src="assets/images/NationalFlag/Norway.jpg" class="project-icon" alt="Norway Icon">
                </div>
                <div class="date">Date: Feb 20, 2025</div>
                <p>We are excited to announce the successful completion of our <b>API Integration Project</b> for a leading Norwegian company! This project seamlessly connected two businesses with a robust, scalable .NET-based solution powered by Azure. </p>
                <p><b>Project Highlights:</b></p>
                <ul>
                    <li>- <b>Scalable API Integration</b> built using <b>.NET and C#</b></li>
                    <li>- <b>Azure API Management</b> for secure and efficient API communication</li>
                    <li>- <b>Azure Function Apps</b> for real-time serverless computing</li>
                    <li>- <b>Advanced security measures</b> for authentication and authorization</li>
                </ul>
				<br>
                <p>This integration <b>automates workflows, reduces manual effort, and enhances business efficiency</b>, ensuring seamless and reliable data exchange between both companies. </p>
                <p>A huge shout-out to our <b>incredible team</b> for their expertise and dedication in making this project a success! We look forward to more innovation-driven collaborations in the API integration space. 🌍💡</p>
            </div>
        </div>
<!-- client-section end-->

</div><!--site-main end-->

<script>
    let currentIndex = 0;
    const itemsPerSlide = 6;
    const iconsCarousel = document.getElementById("iconsCarousel");
    const totalItems = iconsCarousel.children.length;

    function scrollIcons(direction) {
        let maxIndex = Math.ceil(totalItems / itemsPerSlide) - 1;
        currentIndex = Math.max(0, Math.min(currentIndex + direction, maxIndex));
        iconsCarousel.style.transform = `translateX(-${currentIndex * 550}px)`;
    }

    function filterProjects(company) {
        let projects = document.querySelectorAll(".project-item");
        let showAllBtn = document.getElementById("showAllBtn");

        if (company === "all") {
            projects.forEach(item => item.style.display = "flex");
            showAllBtn.style.display = "none"; // Hide 'Show All' button
        } else {
            projects.forEach(item => {
                if (item.getAttribute("data-company") === company) {
                    item.style.display = "flex";
                } else {
                    item.style.display = "none";
                }
            });
            showAllBtn.style.display = "inline-block"; // Show 'Show All' button
        }
    }

    function sortProjectsByDate() {
        const projectList = document.getElementById("projectList");
        const projects = Array.from(projectList.querySelectorAll(".project-item"));

        projects.sort((a, b) => {
            const dateA = new Date(a.querySelector(".date").textContent.replace("Date: ", "").trim());
            const dateB = new Date(b.querySelector(".date").textContent.replace("Date: ", "").trim());
            return dateB - dateA; // Sort in descending order
        });

        // Clear and re-append sorted projects
        projectList.innerHTML = "";
        projects.forEach(project => projectList.appendChild(project));
    }

    // Call sorting function when page loads
    document.addEventListener("DOMContentLoaded", sortProjectsByDate);
</script>

<!--footer start-->
<footer class="footer widget-footer clearfix">
<div class="first-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="first-footer-inner">
                    <div class="footer-logo">
                        <img id="footer-logo-img" class="img-center" src="assets/images/logo.png" alt="" >
                    </div>
                    <div class="row no-gutters footer-box">
                        <div class="col-md-4 widget-area">
                            <div class="featured-box text-center">
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Our Address</h5>
                                    </div>
                                    <!-- <div class="featured-title">
                                    </div> -->
                                    <div class="featured-desc">
                                      <h6 style="margin-bottom:0px;">Company Headquarters, Norway</h6>
                                      <a href="https://www.google.com/maps/place/Knish+Technologies+AS/@59.9187025,10.6567552,17z/data=!3m1!4b1!4m5!3m4!1s0x46416d153cb3fc91:0xdf963fad81106732!8m2!3d59.9186982!4d10.6589527" target="_blank">
                                        <p style="margin-bottom:20px;">Vennersborgveien 8 H, 0281 Oslo, Norway</p>
                                      </a>
                                    </div>
                                    <div class="featured-desc">
                                      <h6 style="margin-bottom:0px;">Company Headquarters, India</h6>
                                      <a href="https://www.google.com/maps/place/Das+Bhavan+Housing+Society/@19.1831138,72.8410543,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7b6fb1ad18ead:0x156cf615d7fcd308!8m2!3d19.1831087!4d72.843243" target="_blank">
                                        <p style="margin-bottom:20px;">303, Das Bhavan, Underai Road, Malad (West), Mumbai - 400064, India</p>
                                      </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 widget-area">
                            <div class="featured-box text-center">
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Talk To Expert</h5>
                                    </div>
                                    <div class="featured-desc">
                                      <a href="tel:+4746920163">
                                        <p>+47 469 20 163</p>
                                      </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 widget-area">
                            <div class="featured-box text-center">
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Email Us</h5>
                                    </div>
                                    <div class="featured-desc">
                                      <a href="mailto:info@knishtech.com">
                                        <p>info@knishtech.com</p>
                                      </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row no-gutters">
                        <div class="col-md-3 col-sm-2"></div>
                        <div class="col-md-6 col-sm-8">
                            <div class="">
                                <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                                    <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                        <i class="fa fa-envelope-o"></i>
                                        <input type="email" name="email" placeholder="Your Email Address.." required="">
                                        <input type="submit" value="SUBMIT">
                                    </div>
                                    <div id="subscribe-msg"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-2"></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="second-footer ttm-textcolor-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                <div class="widget widget_text  clearfix">
                    <h3 class="widget-title">About Business</h3>
                    <div class="textwidget widget-text">
                        As a business consultant, we focus on delivering quantifiable results for our customers, based on a well tested methodology and solid experience.
                        <br><br>
                        <div class="social-icons circle social-hover">
                            <ul class="list-inline">
                                <li class="social-facebook"><a class="tooltip-top" target="_blank" href="https://www.facebook.com/knishtech" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social-twitter"><a class="tooltip-top" target="_blank" href="https://www.twitter.com/knishtech" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <!-- <li class="social-flickr"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li> -->
                                <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="https://www.linkedin.com/company/knishtech" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <!-- <br>
                        <div class="mb-20">
                            <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-fill ttm-btn-bgcolor-skincolor ttm-btn-color-white" href="#">READ MORE</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                <div class="widget widget_nav_menu clearfix">
                   <h3 class="widget-title">Quick Links</h3>
                    <ul id="menu-footer-services">
                      <li><a href="business-intelligence-solutions-big-data-analytics.html">Business Intelligence Solutions &amp; Big Data Analytics</a></li>
                      <li><a href="integration-services-api-services.html">Integration Services &amp; API Services</a></li>
                      <li><a href="cloud-computing-iot-edge-services.html">Cloud Computing &amp; IOT EDGE Services</a></li>
                      <li><a href="ai-cognitive-services-machine-learning.html">AI &amp; Cognitive Services &amp; Machine Learning</a></li>
                      <li><a href="web-mobile-app-development.html">Web &amp; Mobile App Development</a></li>
                      <li><a href="operational-it-consulting.html">Operational &amp; IT Consulting Services</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                <div class="widget widget_text clearfix">
                    <h3 class="widget-title">Latest News</h3>
                    <ul class="widget-post ttm-recent-post-list">
                        <li>
                            <a href="single-blog.html"><img src="assets/images/latest-news1.png" alt="post-img"></a>
                            <span class="post-date">May 01, 2019</span>
                            <a href="single-blog.html">Successful Growth In Business 2018</a>
                        </li>
                        <li>
                            <a href="single-blog.html"><img src="assets/images/latest-news2.png" alt="post-img"></a>
                            <span class="post-date">May 03, 2019</span>
                            <a href="single-blog.html">Achieving Best Business Awards</a>
                        </li>
                        <li>
                            <a href="single-blog.html"><img src="assets/images/latest-news3.png" alt="post-img"></a>
                            <span class="post-date">May 05, 2019</span>
                            <a href="single-blog.html">Seminar for Best Marketing Strategy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                <div class="widget flicker_widget clearfix">
                   <h3 class="widget-title">Our Branches</h3>
                   <div class="textwidget widget-text">
                        <img src="assets/images/map-footer-t.png" class="img-fluid" alt="map-footer">
                        <br>
                        <br>
                        <ul class="ttm-our-location-list">
                            <li><i class="fa fa-map-marker"></i><a href="tel:+4746920163"> Norway: +47 469 20 163</a></li>
                            <li><i class="fa fa-map-marker"></i><a href="tel:+4746920163"> India: +47 469 20 163</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bottom-footer-text ttm-textcolor-white">
    <div class="container">
        <div class="row copyright">
            <div class="col-md-12">
                <div class="">
                    <span>Copyright © 2025&nbsp;. Knish Technologies AS. All rights reserved.</span><br>
                    <span>Norway Org No &nbsp; 927 556 073</span>
                </div>
            </div>
            <div class="col-md-12">
                <ul id="menu-footer-menu" class="footer-nav-menu">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</footer>
<!--footer end-->

<!--back-to-top start-->
<a id="totop" href="#top">
<i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end-->

</div><!-- page end -->
<!-- Javascript -->
<style>
.ttm-textcolor-white a:hover{
  color: #fff !important;
}
</style>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/tether.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.js"></script>
<script src="assets/js/jquery-waypoints.js"></script>
<script src="assets/js/jquery-validate.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/numinate.min6959.js?ver=4.9.3"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/chart.js"></script>

<!-- Revolution Slider -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/revolution/js/slider.js"></script>


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script>

    function initialize() {
        var latlng = new google.maps.LatLng(-34.397, 150.644);
        var myOptions = {
            zoom: 8,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
                myOptions);
    }
    google.maps.event.addDomListener(window, "load", initialize);

</script>
<script>
// Business Intelligence
$( ".bi-sol-div" ).mouseover(function()
{
    $("#elm-bi").addClass("bi-white");
    $("#elm-bi").removeClass("bi-red");
});
$( ".bi-sol-div" ).mouseout(function()
{
    $("#elm-bi").addClass("bi-red");
    $("#elm-bi").removeClass("bi-white");
});
// Integration services
$( ".in-ser-div" ).mouseover(function()
{
    $("#elm-in").addClass("in-white");
    $("#elm-in").removeClass("in-red");
});
$( ".in-ser-div" ).mouseout(function()
{
    $("#elm-in").addClass("in-red");
    $("#elm-in").removeClass("in-white");
});
// Cloud computing
$( ".cloud-div" ).mouseover(function()
{
    $("#elm-cloud").addClass("cloud-white");
    $("#elm-cloud").removeClass("cloud-red");
});
$( ".cloud-div" ).mouseout(function()
{
    $("#elm-cloud").addClass("cloud-red");
    $("#elm-cloud").removeClass("cloud-white");
});
// AI & Machine learning
$( ".ai-cog-div" ).mouseover(function()
{
    $("#elm-ai").addClass("ai-white");
    $("#elm-ai").removeClass("ai-red");
});
$( ".ai-cog-div" ).mouseout(function()
{
    $("#elm-ai").addClass("ai-red");
    $("#elm-ai").removeClass("ai-white");
});
// Web applications
$( ".web-app-div" ).mouseover(function()
{
    $("#elm-web").addClass("web-white");
    $("#elm-web").removeClass("web-red");
});
$( ".web-app-div" ).mouseout(function()
{
    $("#elm-web").addClass("web-red");
    $("#elm-web").removeClass("web-white");
});
// IT consulting
$( ".it-cons-div" ).mouseover(function()
{
    $("#elm-cons").addClass("cons-white");
    $("#elm-cons").removeClass("cons-red");
});
$( ".it-cons-div" ).mouseout(function()
{
    $("#elm-cons").addClass("cons-red");
    $("#elm-cons").removeClass("cons-white");
});
</script>
<script src="../www.google.com/recaptcha/api6b7f.js?onload=CaptchaCallback&amp;render=explicit" async defer></script>
<script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript">
  $("#contact").validate({
      ignore: [],
      // rules: {
      //     fp_hiddenRecaptcha: { required: true, }
      // },
  });

    var CaptchaCallback = function() {
      var widgetId1;
      var widgetId2;
      if($("#contact").length){
        widgetId1 = grecaptcha.render('recaptcha', {'sitekey' : '6Lfe6QgdAAAAAKwRVTvMDcD4UH7d3bvSkCuKHFJR', 'callback' : correctCaptcha_form_page});
      }
     /* widgetId2 = grecaptcha.render('recaptcha_footer', {'sitekey' : '6LfJYKUZAAAAAN9wQFV9QjbSTFdW7Gxwsj3gnQq8', 'callback' : correctCaptcha_form_footer});*/
  };
  // var correctCaptcha_form_page = function(response) {
  //     $("#fp_hiddenRecaptcha").val(response);
  // };
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#contact', 'contact_index').validate({
          rules: {
              name: {
                required:true,
              },
              email:{
                  required :true,
                  email:true
              },
              phone: {
                minlength: 10,
                maxlength: 10,
                required: true,
                number: true
              },
              message: {
                required:true,
              }
          },
          messages : {
              name: {
                  required : "Please Enter First Name",
              },
              email: {
                required : "Please Enter Email ID",
                email : "Email Format Is name@domain.com"
              },
              phone: {
                required : "Please Enter Phone Number",
                maxlength : "Please Enter 10 Digit Number",
                minlength : "Please Enter 10 Digit Number",
                number : "Please Enter Only Digit"
              },
              message: {
                required :"Please Fill The Address",
                  maxlength : "Address Must Be 40 Character"
              }
          }

      });

      $("#success-alert").hide();
      $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
          $("#success-alert").slideUp(500);
      });
      var limit = 5;
      var start = 0;
      var action = 'inactive';
      var BASE_URL = "index.php";
      // alert(BASE_URL);
      function load_country_data(limit, start) {
        $.ajax({
          method:"POST",
          url: BASE_URL + 'Home/blog_fetch',
          // url: 'http://knishtech.com/Home/blog_fetch',
          data:{ limit:limit, start:start },
          cache:false,
          success:function(data) {
            $('#load_data').append(data);
            if(data == '') {
              $('#load_data_message').html("<button type='button' class='btn btn-outline-maincolor'>No More Content</button>");
              action = 'active';
            } else {
              $('#load_data_message').html("<button type='button' class='btn btn-info'>Please Wait....</button>");
              action = "inactive";
            }
          }
        });
      }
      if(action == 'inactive') {
				action = 'active';
				load_country_data(limit, start);
			}
		 	$(window).scroll(function(){
		  		if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
			   		action = 'active';
			   		start = start + limit;
			   		setTimeout(function(){
			    		load_country_data(limit, start);
			   		}, 1000);
		  		}
		 	});
    });
    // var path = window.location.pathname;
    // if(path.substr(path.length - 1) == "/"){
    //   path = path.substring(0, path.length - 1);
    // }
    // $("#menu a[href='" + path + "']").addClass("active");
</script>
<!-- Javascript end-->

</body>

<!-- Mirrored from www.knishtech.com/blog by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2025 11:39:11 GMT -->
</html>
