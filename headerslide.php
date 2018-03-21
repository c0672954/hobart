<?php
error_reporting(0);
session_start();

$id = $_GET['id'];
$user=$_SESSION["user"];
?>

<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest (the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Library</title>

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
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="assets/global/plugins/slider-layer-slider/css/layerslider.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="assets/global/css/components.css" rel="stylesheet">
  <link href="assets/frontend/layout/css/style.css" rel="stylesheet">
  <link href="assets/frontend/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="assets/frontend/pages/css/style-layer-slider.css" rel="stylesheet">
  <link href="assets/frontend/layout/css/style-responsive.css" rel="stylesheet">
  <link href="assets/frontend/layout/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="assets/frontend/layout/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
    

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
        <a class="site-logo" href="home.php"><img src="assets/frontend/layout/img/logos/lambtonkitlogo.png" alt="Hobart Construction"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

    

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            <li class="dropdown">
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
                <li><a href="ratebook.php">Restaurant</a></li>
                <li><a href="ratebook.php">School</a></li>
                <li><a href="ratebook.php">Condo</a></li>
                <!--li><a href="ratebook.php">Photoshop</a></li -->
                
              </ul>
            </li>
            
        <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                SERVICES
                
              </a>
			  <ul class="dropdown-menu">
                <li><a href="ratebook.php">Paint</a></li>
                <li><a href="ratebook.php">Floors</a></li>
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

    <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-35">
      <!-- LayerSlider start -->
      <div id="layerslider" style="width: 100%; height: 494px; margin: 0 auto;">

        <!-- slide one start -->
        <div class="ls-slide ls-slide1" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 24,25,27,28;">

          <img src="assets/frontend/pages/img/layerslider/slide1/1.jpg" class="ls-bg" alt="Slide background">

          <div class="ls-l ls-title" style="top: 96px; left: 35%; white-space: nowrap;" data-ls="
            fade: true; 
            fadeout: true; 
            durationin: 750; 
            durationout: 750; 
            easingin: easeOutQuint; 
            rotatein: 90; 
            rotateout: -90; 
            scalein: .5; 
            scaleout: .5; 
            showuntil: 4000;
          ">No Delievery <strong>Pick Up From </strong> College</div>

          <div class="ls-l ls-mini-text" style="top: 338px; left: 35%; white-space: nowrap;" data-ls="
          fade: true; 
          fadeout: true; 
          durationout: 750; 
          easingin: easeOutQuint; 
          delayin: 300; 
          showuntil: 4000;
          ">When I got my library card<br > that's when my Life began.
          </div>
        </div>
        <!-- slide one end -->

        <!-- slide two start -->
        <div class="ls-slide ls-slide2" data-ls="offsetxin: right; slidedelay: 2000; transition2d: 110,111,112,113;">

          <img src="assets/frontend/pages/img/layerslider/slide2/2.jpg" class="ls-bg" alt="Slide background">
          
          <div class="ls-l ls-title" style="top: 40%; left: 21%; white-space: nowrap;" data-ls="
          fade: true; 
          fadeout: true;  
          durationin: 750; durationout: 109750; 
          easingin: easeOutQuint; 
          easingout: easeInOutQuint; 
          delayin: 0; 
          delayout: 0; 
          rotatein: 90; 
          rotateout: -90; 
          scalein: .5; 
          scaleout: .5; 
          showuntil: 4000;
          "><strong>Book Issue</strong> From Any Where <em>Saving Time</em>
            </div>

          <div class="ls-l ls-price" style="top: 50%; left: 45%; white-space: nowrap;" data-ls="
          fade: true; 
          fadeout: true;  
          durationout: 109750; 
          easingin: easeOutQuint; 
          delayin: 300; 
          scalein: .8; 
          scaleout: .8; 
          showuntil: 4000;"><b>No</b> <b><span>e</span>Book</b>
          </div>

          <a href="javascript:;" class="ls-l ls-more" style="top: 72%; left: 21%; display: inline-block; white-space: nowrap;" data-ls="
          fade: true; 
          fadeout: true; 
          durationin: 750; 
          durationout: 750; 
          easingin: easeOutQuint; 
          easingout: easeInOutQuint; 
          delayin: 0; 
          delayout: 0; 
          rotatein: 90; 
          rotateout: -90; 
          scalein: .5; 
          scaleout: .5; 
          showuntil: 4000;">See More Details
          </a>
        </div>
        <!-- slide two end -->

        <!-- slide three start -->
        <div class="ls-slide ls-slide3" data-ls="offsetxin: right; slidedelay: 2000; transition2d: 92,93,105;">

          <img src="assets/frontend/pages/img/layerslider/slide3/3.jpg" class="ls-bg" alt="Slide background">
          
          <div class="ls-l ls-title" style="top: 83px; left: 33%; white-space: nowrap;" data-ls="
          fade: true; 
          fadeout: true; 
          durationin: 750; 
          durationout: 750; 
          easingin: easeOutQuint; 
          rotatein: 90; 
          rotateout: -90; 
          scalein: .5; 
          scaleout: .5; 
          showuntil: 4000;
          ">Google can give you &amp; 100,000 answers <strong>But</strong> library gives you right one.
          </div>
          <div class="ls-l" style="top: 333px; left: 33%; white-space: nowrap; font-size: 20px; font: 20px 'Open Sans Light', sans-serif;" data-ls="
          fade: true; 
          fadeout: true; 
          durationout: 750; 
          easingin: easeOutQuint; 
          delayin: 300; 
          scalein: .8; 
          scaleout: .8; 
          showuntil: 4000;
          ">
            <a href="javascript:;" class="ls-buy">
              Go Library Now!
            </a>
            <div class="ls-price">
              <span>All these for</span>
              <strong>Free</strong>
            </div>
          </div>
        </div>
        <!-- slide three end -->

        <!-- slide four start 
        <div class="ls-slide ls-slide4" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 110,111,112,113;">

          <img src="assets/frontend/pages/img/layerslider/slide5/5.jpg" class="ls-bg" alt="Slide background">
          
          <div class="ls-l ls-title" style="top: 35%; left: 60%; white-space: nowrap;" data-ls="
          fade: true; 
          fadeout: true; 
          durationin: 750; 
          durationout: 750; 
          easingin: easeOutQuint; 
          rotatein: 90; 
          rotateout: -90; 
          scalein: .5; 
          scaleout: .5; 
          showuntil: 4000;">
          The most<br>
          wanted bijouterie
          </div>

          <div class="ls-l ls-mini-text" style="top: 70%; left: 60%; white-space: nowrap;" data-ls="
          fade: true; 
          fadeout: true;  
          durationout: 750; 
          easingin: easeOutQuint; 
          delayin: 300; 
          scalein: .8; 
          scaleout: .8; 
          showuntil: 4000;">
          <span>Lorem ipsum and</span>
          <a href="javascript:;">Buy It Now!</a>
          </div>

        </div> -->
        <!-- slide four end -->
      </div>
      <!-- LayerSlider end -->
    </div>
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">
