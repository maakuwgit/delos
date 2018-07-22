<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Delos
 * @since Delos 0.2.2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="content-language" content="en-us">
  <meta name="author" content="Sagon Phior">
  <meta name="description" content="<?php echo bloginfo('description');?>">
  <title><?php echo bloginfo('title');?></title>
  <!--Facebook Meta-->
  <meta property="og:description" content="<?php echo bloginfo('description');?>">
  <meta property="og:title" content="<?php echo bloginfo('title');?>">
	<meta property="og:url" content="<?php echo bloginfo('url');?>">
  <!--Twitter Meta-->
  <meta name="twitter:description" content="<?php echo bloginfo('description');?>">
  <meta name="twitter:title" content="<?php echo bloginfo('title');?>">
  <link rel="canonical" href="http://">
  <link rel="shortcut icon" href="https://">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class('relative'); ?>>
	<header id="masthead" class="table fixed fullwidth">
		<figure id="logo" class="cell small-12 medium-3 large-6">
			<a href="<?php echo bloginfo('url');?>">
				<img alt="Delos™" src="<?php echo get_template_directory_uri(); ?>/images/logo-delos_w_circles.png" width="88">
			</a>
		</figure>
		<nav class="cell small-12 medium-9 large-6">
		</nav>
	</header>