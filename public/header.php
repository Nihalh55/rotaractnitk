<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900|Montserrat|Roboto:500,700" rel="stylesheet">
	
	<?php wp_head(); ?>
	
	
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/base.css" />
 
    <!-- **
	 * ========================================
	 * Main Style
	 * ========================================
	* -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css"/>  <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css"/>  <!-- Custome css -->
	
	 <!-- **
	 * ========================================
	 * Media Query
	 * ========================================
	* -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 992px) and (max-width: 1199px) "
          href="<?php echo get_stylesheet_directory_uri(); ?>/css/media/medium-devices.css"/>
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 768px) and (max-width: 991px)"
          href="<?php echo get_stylesheet_directory_uri(); ?>/css/media/tablet-devices.css"/>
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 640px) and (max-width: 767px)"
          href="<?php echo get_stylesheet_directory_uri(); ?>/css/media/mobile-devices.css"/>
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 440px) and (max-width: 639px)"
          href="<?php echo get_stylesheet_directory_uri(); ?>/css/media/indriodt-devices.css"/>
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 350px) and (max-width: 439px)"
          href="<?php echo get_stylesheet_directory_uri(); ?>/css/media/mini-indriod-devices.css"/>
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1px) and (max-width: 349px)"
          href="<?php echo get_stylesheet_directory_uri(); ?>/css/media/small-mobiles.css"/>
</head>

<body <?php body_class(); ?>>

<div class="top-menu">
<header>
	<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
	

  
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
	

	
  </div>
   <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
		
	
	<div class="search-box pull-right">
	 <?php dynamic_sidebar("  Header Searchbar "); ?>
	</div>
	
  </div>
  </nav>
  </header>
</div>

