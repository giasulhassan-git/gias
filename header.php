<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="Gias ul Hassan">

  <title> <?php echo bloginfo('name'); echo " | "; bloginfo('description'); ?></title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assets/css/bootstrap.css">
  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/maicons.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">

  <?php wp_head() ?>

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="d-inline-block">
              <span class="mai-mail fg-primary"></span> <a href="mailto:giasulhassan2977@gmail.com">giasulhassan2977@gmail.com</a>
            </div>
            <div class="d-inline-block ml-2">
              <span class="mai-call fg-primary"></span> <a href="tel:+923234704342">+92-323-4704342</a>
            </div>
          </div>
          <div class="col-md-4 text-right d-none d-md-block">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-youtube"></span></a>
              <a href="#"><span class="mai-logo-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .top-bar -->

    <?php $logoimage=get_header_image() ; ?>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="<?php echo site_url(); ?>"><img src="<?php echo $logoimage ?> "> </a>

          <?php 
          wp_nav_menu(array('theme_location' => 'primary-menu' , 'menu_class' => 'nav'))
          ?>
        
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    <!-- <div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="<?php echo get_template_directory_URI() ?>/assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
              <div class="subhead">We're design studio believe in ideas</div>
              <h1 class="mb-4">Creative Design</h1>
              <a href="#services" class="btn btn-outline-light">Get Started</a>
            </div>
          </div>
          <div class="hero-carousel-item">
            <img src="<?php echo get_template_directory_URI() ?>/assets/img/bg_image_2.jpg" alt="">
            <div class="img-caption">
              <h1 class="mb-4">We combine Design, Thinking, and Technical</h1>
              <a href="#services" class="btn btn-outline-light">Get Started</a>
              <a href="#services" class="btn btn-primary">See Pricing</a>
            </div>
          </div>
          <div class="hero-carousel-item">
            <img src="<?php echo get_template_directory_URI() ?>/assets/img/bg_image_3.jpg" alt="">
            <div class="img-caption">
              <div class="subhead">Easy way to build perfect website</div>
              <h1 class="mb-4">Beautify handcrafted templates for your website</h1>
              <a href="#services" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->