<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php bloginfo('name'); ?></title>

   <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&family=Raleway&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class('index-page'); ?>>

<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl d-flex align-items-center">

    <a href="<?php echo home_url(); ?>" class="logo d-flex align-items-center me-auto">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo"
   class="img-fluid"
    >
</a>

   <nav id="navmenu" class="navmenu navbar navbar-expand-lg">
    <?php
      wp_nav_menu(array(


        'theme_location'    => 'primary-menu',
        'container'         => false,
        'menu_class'        => 'navbar-nav me-auto mb-2 mb-lg-0',
        'fallback_cb'       => '__return_false',
        'depth'             => 2, 
        'walker'            => new WP_Bootstrap_Navwalker(),
      ));
    ?>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
<a class="btn-getstarted" href="courses.html">Get Started</a>

  </div>
</header>