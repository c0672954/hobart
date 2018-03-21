<?php
error_reporting(0);
session_start();

$id = $_GET['id'];
$user=$_SESSION["user"];

?>

<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Lambton kit</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="assets/global/css/components.css" rel="stylesheet">
  <link href="assets/frontend/layout/css/style.css" rel="stylesheet">
  <link href="assets/frontend/pages/css/style-revolution-slider.css" rel="stylesheet"><!-- metronic revo slider styles -->
  <link href="assets/frontend/layout/css/style-responsive.css" rel="stylesheet">
  <link href="assets/frontend/layout/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="assets/frontend/layout/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+1416-716-4619</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>hobartconstruction@outlook.com</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
               
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="home.php"><img src="assets/frontend/layout/img/logos/lambtonkitlogo.png" alt="Hobart construction"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
            <li class="dropdown active">
              <a href="home.php">
                HOME 
                
              </a>
            </li>
			<li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                WORK
                
              </a>
			  <ul class="dropdown-menu">
                <li><a href="house.php">House</a></li>
                <li><a href="rest.php">Restaurant</a></li>
                <li><a href="school.php">School</a></li>
                <li><a href="condo.php">Condo</a></li>
                <!--li><a href="ratebook.php">Photoshop</a></li -->
                
              </ul>
            </li>
            <!--<li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle"  href="shopIndex.php">
                Work
                
              </a>
			  </li -->
			 
            <!--li class="dropdown">
              <a class="dropdown-toggle"  href="bookIndex.php">
                Services 
                
              </a>
             </li -->
			 <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                SERVICES
                
              </a>
			  <ul class="dropdown-menu">
                <li><a href="paint.php">Paint</a></li>
                <li><a href="floor.php">Floors</a></li>
                <!--li><a href="ratebook.php">Collaboration-Tools</a></li>
                <li><a href="ratebook.php">Web-Technology</a></li>
                <li><a href="ratebook.php">Photoshop</a></li -->
                
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle"  href="aboutus.php">
                ABOUT 
                
              </a>
              
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle"  href="contactus.php">
                CONTACT 
                
              </a>
            </li>
			
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->
	
	



    <div class="main">
      <div class="container">
