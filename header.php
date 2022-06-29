<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 * 
 * @version 5.2.0.0-beta1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <div id="page" class="site">

    <header id="masthead" class="site-header">

   

        <div class="top-header" id="navbar_top">
       <div class="container-fluid">
           <div class="row align-items-center">
               <div class="col-md-12 d-flex justify-content-between align-items-center"> 
                   <div class="left-head d-flex justify-content-start align-items-center">
                       <a class="navbrnd" href="index.php"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png"></a>
                      
                       
                   </div>                   
                   <div class="right-head d-flex justify-content-end align-items-center">
                   <div class="dropdown subjt">
                          <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Subject
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                       </div>
                       <div class="nav-mnsec">
                           <a href="">FIND TUTORING JOBS</a>
                           <a href="">
FIND A TUTOR</a>
                           
                       </div>
                       <div class="notif-sec">
                           <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bell.png"><span>02</span></a>
                       </div>
                       <div class="logreg-btns">
                           <a href="#">Sign in</a>
                           <a href="#">Register</a>
                       </div> 
                      
                   </div>
               </div>              
           </div>
       </div> 
 

        <!-- Top Nav Search Mobile Collapse -->
        <div class="collapse container d-lg-none" id="collapse-search">
          <?php if (is_active_sidebar('top-nav-search')) : ?>
            <div class="mb-2">
              <?php dynamic_sidebar('top-nav-search'); ?>
            </div>
          <?php endif; ?>
        </div>

      </div><!-- .fixed-top .bg-light -->

    </header><!-- #masthead -->