<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Delos
 * @since Delos 0.3.0
 * @version 0.3.7
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
		<figure id="logo" class="cell small-2 medium-3 large-6">
			<a href="#top" data-anchor="top">
				<svg version="1.1" id="logo_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 221.1 403.4" style="enable-background:new 0 0 221.1 403.4;" xml:space="preserve">
					<g>
						<path id="logoBlueCircle" fill="#003399" d="M110.6,401.4c60,0,108.6-48.6,108.6-108.6c0-60-48.6-108.6-108.6-108.6S2,232.8,2,292.8
							C2,352.8,50.6,401.4,110.6,401.4"></path>
						<path id="logoGreyCircle" fill="#ffffff" style="fill:rgba(255, 255, 255, 0.9);" d="M110.6,219.1c60,0,108.6-48.6,108.6-108.6C219.1,50.6,170.5,2,110.6,2S2,50.6,2,110.6
								C2,170.5,50.6,219.1,110.6,219.1"></path>
						<g id="delosTxt" fill="#003399">
							<polygon points="57.6,119.9 59.9,125.6 62.2,119.4 64.4,125.6 66.8,119.9 68.2,119.9 64.4,129 62.2,122.9 59.9,129 
								56.2,119.9"></polygon>
							<g>
								<path d="M73.7,125c-0.2-0.7-0.6-1-1.3-1c-0.2,0-0.3,0-0.4,0.1c-0.1,0-0.3,0.1-0.4,0.2c-0.1,0.1-0.2,0.2-0.3,0.3
									c-0.1,0.1-0.1,0.3-0.2,0.4H73.7z M75,126.1h-3.9c0,0.4,0.2,0.8,0.4,1.1c0.3,0.3,0.6,0.4,1,0.4c0.3,0,0.6-0.1,0.8-0.2
									c0.2-0.1,0.4-0.4,0.7-0.8l1.1,0.6c-0.2,0.3-0.3,0.5-0.5,0.7c-0.2,0.2-0.4,0.4-0.6,0.5c-0.2,0.1-0.4,0.2-0.7,0.3
									c-0.2,0.1-0.5,0.1-0.8,0.1c-0.8,0-1.5-0.3-2-0.8c-0.5-0.5-0.7-1.2-0.7-2.1c0-0.9,0.2-1.6,0.7-2.1c0.5-0.5,1.1-0.8,1.9-0.8
									c0.8,0,1.4,0.3,1.9,0.8c0.5,0.5,0.7,1.2,0.7,2.1L75,126.1z"></path>
							</g>
							<rect x="78" y="119.1" width="1.3" height="9.4"></rect>
							<rect x="82.4" y="119.1" width="1.3" height="9.4"></rect>
							<g>
								<path d="M86.9,123h1.3v0.5c0.4-0.4,0.9-0.7,1.5-0.7c0.6,0,1.1,0.2,1.5,0.6c0.3,0.3,0.5,0.9,0.5,1.7v3.3h-1.3v-3
									c0-0.5-0.1-0.9-0.2-1.1c-0.1-0.2-0.4-0.3-0.8-0.3c-0.4,0-0.7,0.1-0.9,0.4c-0.2,0.3-0.3,0.7-0.3,1.4v2.6h-1.3V123z"></path>
								<path d="M98.4,125c-0.2-0.7-0.6-1-1.3-1c-0.2,0-0.3,0-0.4,0.1c-0.1,0-0.3,0.1-0.4,0.2c-0.1,0.1-0.2,0.2-0.3,0.3
									c-0.1,0.1-0.1,0.3-0.2,0.4H98.4z M99.7,126.1h-3.9c0,0.4,0.2,0.8,0.4,1.1c0.3,0.3,0.6,0.4,1,0.4c0.3,0,0.6-0.1,0.8-0.2
									c0.2-0.1,0.4-0.4,0.7-0.8l1.1,0.6c-0.2,0.3-0.3,0.5-0.5,0.7c-0.2,0.2-0.4,0.4-0.6,0.5c-0.2,0.1-0.4,0.2-0.7,0.3
									c-0.2,0.1-0.5,0.1-0.8,0.1c-0.8,0-1.5-0.3-2-0.8c-0.5-0.5-0.7-1.2-0.7-2.1c0-0.9,0.2-1.6,0.7-2.1c0.5-0.5,1.1-0.8,1.9-0.8
									c0.8,0,1.4,0.3,1.9,0.8c0.5,0.5,0.7,1.2,0.7,2.1L99.7,126.1z"></path>
								<path d="M105.8,124l-1,0.6c-0.2-0.3-0.4-0.5-0.6-0.5c-0.1,0-0.2,0-0.3,0.1c-0.1,0.1-0.1,0.2-0.1,0.3
									c0,0.2,0.2,0.4,0.7,0.6c0.7,0.3,1.1,0.6,1.3,0.8c0.2,0.2,0.3,0.6,0.3,1c0,0.5-0.2,1-0.6,1.3c-0.4,0.3-0.8,0.5-1.4,0.5
									c-0.9,0-1.6-0.4-1.9-1.3l1.1-0.5c0.1,0.3,0.3,0.4,0.3,0.5c0.2,0.1,0.3,0.2,0.5,0.2c0.4,0,0.6-0.2,0.6-0.6c0-0.2-0.2-0.4-0.5-0.6
									c-0.1-0.1-0.3-0.1-0.4-0.2c-0.1-0.1-0.3-0.1-0.4-0.2c-0.4-0.2-0.6-0.4-0.8-0.5c-0.2-0.2-0.3-0.5-0.3-0.9c0-0.5,0.2-0.9,0.5-1.2
									c0.3-0.3,0.7-0.5,1.2-0.5C105,122.9,105.5,123.3,105.8,124"></path>
								<path d="M112.1,124l-1,0.6c-0.2-0.3-0.4-0.5-0.6-0.5c-0.1,0-0.2,0-0.3,0.1c-0.1,0.1-0.1,0.2-0.1,0.3
									c0,0.2,0.2,0.4,0.7,0.6c0.7,0.3,1.1,0.6,1.3,0.8c0.2,0.2,0.3,0.6,0.3,1c0,0.5-0.2,1-0.6,1.3c-0.4,0.3-0.8,0.5-1.4,0.5
									c-0.9,0-1.6-0.4-1.9-1.3l1.1-0.5c0.1,0.3,0.3,0.4,0.3,0.5c0.2,0.1,0.3,0.2,0.5,0.2c0.4,0,0.6-0.2,0.6-0.6c0-0.2-0.2-0.4-0.5-0.6
									c-0.1-0.1-0.3-0.1-0.4-0.2c-0.1-0.1-0.3-0.1-0.4-0.2c-0.4-0.2-0.6-0.4-0.8-0.5c-0.2-0.2-0.3-0.5-0.3-0.9c0-0.5,0.2-0.9,0.5-1.2
									c0.3-0.3,0.7-0.5,1.2-0.5C111.2,122.9,111.8,123.3,112.1,124"></path>
								<path d="M121.9,123.8h0.5c1.2,0,1.8-0.5,1.8-1.4c0-0.9-0.6-1.3-1.9-1.3h-0.4V123.8z M121.9,125v3.5h-1.3v-8.6h1.5
									c0.7,0,1.3,0,1.6,0.2c0.4,0.1,0.7,0.3,1,0.6c0.5,0.5,0.7,1.1,0.7,1.8c0,0.8-0.3,1.4-0.8,1.9c-0.5,0.5-1.2,0.7-2.1,0.7H121.9z"></path>
								<path d="M128.1,123h1.3v0.5c0.2-0.2,0.4-0.4,0.6-0.5c0.2-0.1,0.4-0.1,0.6-0.1c0.3,0,0.7,0.1,1,0.3l-0.6,1.2
									c-0.2-0.2-0.5-0.3-0.7-0.3c-0.7,0-1,0.5-1,1.6v2.8h-1.3V123z"></path>
								<path d="M137.6,125c-0.2-0.7-0.6-1-1.3-1c-0.2,0-0.3,0-0.4,0.1c-0.1,0-0.3,0.1-0.4,0.2c-0.1,0.1-0.2,0.2-0.3,0.3
									c-0.1,0.1-0.1,0.3-0.2,0.4H137.6z M138.9,126.1H135c0,0.4,0.2,0.8,0.4,1.1c0.3,0.3,0.6,0.4,1,0.4c0.3,0,0.6-0.1,0.8-0.2
									c0.2-0.1,0.4-0.4,0.7-0.8l1.1,0.6c-0.2,0.3-0.3,0.5-0.5,0.7c-0.2,0.2-0.4,0.4-0.6,0.5c-0.2,0.1-0.4,0.2-0.7,0.3
									c-0.2,0.1-0.5,0.1-0.8,0.1c-0.8,0-1.5-0.3-2-0.8c-0.5-0.5-0.7-1.2-0.7-2.1c0-0.9,0.2-1.6,0.7-2.1c0.5-0.5,1.1-0.8,1.9-0.8
									c0.8,0,1.4,0.3,1.9,0.8c0.5,0.5,0.7,1.2,0.7,2.1L138.9,126.1z"></path>
								<path d="M141.8,123h1.3v0.5c0.2-0.3,0.4-0.4,0.6-0.5c0.2-0.1,0.4-0.1,0.7-0.1c0.6,0,1.1,0.3,1.5,0.8
									c0.4-0.5,0.9-0.8,1.6-0.8c1.2,0,1.8,0.7,1.8,2.2v3.4H148v-3c0-0.5-0.1-0.9-0.2-1.1c-0.1-0.2-0.3-0.3-0.6-0.3
									c-0.3,0-0.6,0.1-0.8,0.4c-0.2,0.3-0.2,0.7-0.2,1.3v2.8H145v-3c0-1-0.3-1.5-0.8-1.5c-0.4,0-0.6,0.1-0.8,0.4
									c-0.2,0.3-0.2,0.7-0.2,1.3v2.8h-1.3V123z"></path>
								<path d="M153.8,128.5h-1.3V123h1.3V128.5z M152.3,120.8c0-0.2,0.1-0.4,0.2-0.6c0.2-0.2,0.4-0.2,0.6-0.2
									c0.2,0,0.4,0.1,0.6,0.2c0.2,0.2,0.2,0.4,0.2,0.6c0,0.2-0.1,0.4-0.2,0.6c-0.2,0.2-0.3,0.2-0.6,0.2s-0.4-0.1-0.6-0.2
									C152.4,121.2,152.3,121,152.3,120.8"></path>
								<path d="M160.6,125c-0.2-0.7-0.6-1-1.3-1c-0.2,0-0.3,0-0.4,0.1c-0.1,0-0.3,0.1-0.4,0.2c-0.1,0.1-0.2,0.2-0.3,0.3
									c-0.1,0.1-0.1,0.3-0.2,0.4H160.6z M161.9,126.1H158c0,0.4,0.2,0.8,0.4,1.1c0.3,0.3,0.6,0.4,1,0.4c0.3,0,0.6-0.1,0.8-0.2
									c0.2-0.1,0.4-0.4,0.7-0.8l1.1,0.6c-0.2,0.3-0.3,0.5-0.5,0.7s-0.4,0.4-0.6,0.5c-0.2,0.1-0.4,0.2-0.7,0.3
									c-0.2,0.1-0.5,0.1-0.8,0.1c-0.8,0-1.5-0.3-2-0.8c-0.5-0.5-0.7-1.2-0.7-2.1c0-0.9,0.2-1.6,0.7-2.1c0.5-0.5,1.1-0.8,1.9-0.8
									c0.8,0,1.4,0.3,1.9,0.8c0.5,0.5,0.7,1.2,0.7,2.1L161.9,126.1z"></path>
								<path d="M164.9,123h1.3v0.5c0.2-0.2,0.4-0.4,0.6-0.5c0.2-0.1,0.4-0.1,0.6-0.1c0.3,0,0.7,0.1,1,0.3l-0.6,1.2
									c-0.2-0.2-0.5-0.3-0.7-0.3c-0.7,0-1,0.5-1,1.6v2.8h-1.3V123z"></path>
								<path d="M148.1,108.4c1.4-1.6,2.7-3.1,4-4.6c0.6,0.5,1.2,1.1,1.9,1.5c1.7,1.2,3.5,2,5.6,1.9c0.5,0,1.1-0.2,1.6-0.4
									c1.3-0.6,1.5-2.3,0.4-3.1c-0.6-0.5-1.4-0.8-2.2-1.2c-1.5-0.6-3-1.2-4.5-1.9c-1.1-0.5-2-1.1-2.8-2c-2.3-2.6-2.1-6.8,0.4-9.5
									c1.6-1.6,3.5-2.5,5.7-2.7c2.5-0.3,4.9,0,7.2,1c1.6,0.7,3,1.8,4.1,3c-1.4,1.5-2.7,2.9-4.1,4.3c-0.5-0.5-0.9-0.9-1.4-1.3
									c-1.2-1-2.5-1.8-4.1-1.8c-0.6,0-1.3,0.1-1.9,0.4c-1.1,0.6-1.3,2-0.4,2.9c0.5,0.5,1.1,0.8,1.8,1.1c1.5,0.6,3,1.2,4.5,1.8
									c0.6,0.2,1.2,0.6,1.7,0.9c4.1,2.5,4.1,7.5,1.6,10.4c-1.4,1.7-3.2,2.6-5.3,3c-4.5,0.8-8.7,0-12.5-2.8
									C148.9,109.2,148.5,108.8,148.1,108.4"></path>
								<path d="M117.8,112.5c-2.9,0.1-5.5-1.3-6.2-4.5c-0.1-0.6-0.2-1.3-0.2-1.9c0-9,0-17.9,0-26.9v-0.5h6.4V112.5z"></path>
								<path d="M90.5,99.8c-0.1-0.9,0-1.7,0.2-2.5c0.6-2.7,2.6-4.3,5.3-4.2c1.4,0,2.8,1.1,3.2,2.4
									C96.3,97,93.5,98.4,90.5,99.8 M98.3,107.3c-2.4,0.2-4.4-0.6-6.1-2.4c0.3-0.1,0.4-0.2,0.6-0.3c1.9-0.9,3.9-1.8,5.9-2.7
									c2.6-1.3,5.3-2.5,7.9-3.8c0.3-0.1,0.5-0.3,0.4-0.7c-0.3-1.3-0.5-2.7-1-4c-1.1-2.9-2.9-5.1-5.9-6.1c-2.1-0.8-4.3-0.8-6.5-0.4
									c-4.3,0.7-7.3,3.1-9,7.1c-1,2.4-1.2,4.9-1,7.5c0.1,1.8,0.5,3.5,1.3,5.2c1.3,2.8,3.7,4.4,6.4,5.6c3,1.3,6.2,1.6,9.5,1.1
									c2.8-0.4,5.3-1.6,7.3-3.6c0.1-0.1,0.2-0.3,0.4-0.4c-1.4-1.5-2.7-3-4-4.6C102.5,106.1,100.6,107.1,98.3,107.3"></path>
								<path d="M138.7,104.4c-2.4,2.9-6.5,2.8-8.8-0.2c-1.8-2.3-1.9-5.8-0.2-8.2c2.6-3.7,7.8-3.2,9.8,0.9
									c0.5,1,0.7,2,0.7,3.3C140.3,101.7,139.8,103.2,138.7,104.4 M146.3,95.1c-1-3.5-3.1-6.1-6.4-7.5c-2.1-0.9-4.4-1.2-6.7-1
									c-3.8,0.3-6.8,2-9,5.1c-2.5,3.7-2.9,7.7-1.9,11.9c0.8,3.2,2.4,5.8,5.3,7.4c2,1.2,4.2,1.6,6.5,1.6c0.7-0.1,1.5-0.1,2.2-0.2
									c3.5-0.5,6.3-2,8.2-5C147.2,103.7,147.6,99.5,146.3,95.1"></path>
								<path d="M72.7,100.6c-0.8,3-2.8,4.6-5.8,5c-1.5,0.2-2.9,0.1-4.5,0.2v-0.7c0-5.6,0-11.1,0-16.7
									c0-0.5,0.1-0.7,0.6-0.6c1.6,0.1,3.3,0.1,4.9,0.3c2.7,0.4,4.3,2.1,4.9,4.7C73.4,95.4,73.4,98,72.7,100.6 M79.2,89
									c-1-3.4-3.2-5.7-6.5-7c-1.8-0.7-3.7-1.1-5.6-1.1c-3.6-0.1-7.3,0-10.9,0c-0.1,0-0.3,0-0.4,0v31.3h0.6c2.8,0,5.7,0,8.5,0
									c1.4,0,2.7-0.1,4.1-0.3c4.6-0.7,8-3.2,9.7-7.5C80.6,99.3,80.7,94.1,79.2,89"></path>
							</g>
							<text transform="matrix(1 0 0 1 167.9654 86.3622)" style="font-size:30%">TM</text>
						</g>
						<g id="logoTagline" fill="#ffffff">
							<path class="st6" d="M24.6,283.5h-3.5v-1.8h9v1.8h-3.5v9.3h-2V283.5z"></path>
							<path class="st6" d="M32.1,281.7h1.9v4.6h5.3v-4.6h1.9v11.1h-1.9v-4.7h-5.3v4.7h-1.9V281.7z"></path>
							<path class="st6" d="M44.1,281.7h8.2v1.7h-6.3v2.9h5.5v1.7h-5.5v3h6.3v1.7h-8.3V281.7z"></path>
							<path class="st6" d="M59.5,281.7h1.8l5.9,7.6v-7.6h1.9v11.1h-1.6l-6.1-7.9v7.9h-1.9V281.7z"></path>
							<path class="st6" d="M71.9,281.7h8.2v1.7h-6.3v2.9h5.5v1.7h-5.5v3h6.3v1.7h-8.3V281.7z"></path>
							<path class="st6" d="M81.7,281.7h2.1l2.6,8.2l2.7-8.2h1.6l2.7,8.2l2.6-8.2h2l-3.9,11.1h-1.7l-2.7-7.9l-2.7,7.9h-1.7L81.7,281.7z"
								></path>
							<path class="st6" d="M104.9,281.7h4.1c3.5,0,5.9,2.4,5.9,5.5v0c0,3.1-2.4,5.5-5.9,5.5h-4.1V281.7z M109,291
								c2.3,0,3.8-1.6,3.8-3.7v0c0-2.2-1.5-3.8-3.8-3.8h-2.2v7.5H109z"></path>
							<path class="st6" d="M117.3,281.7h8.2v1.7h-6.3v2.9h5.5v1.7h-5.5v3h6.3v1.7h-8.3V281.7z"></path>
							<path class="st6" d="M127.8,281.7h8.2v1.8h-6.3v3h5.6v1.8h-5.6v4.5h-1.9V281.7z"></path>
							<path class="st6" d="M138.3,281.7h1.9v11.1h-1.9V281.7z"></path>
							<path class="st6" d="M143.2,281.7h1.8l5.9,7.6v-7.6h1.9v11.1h-1.6l-6.1-7.9v7.9h-1.9V281.7z"></path>
							<path class="st6" d="M155.8,281.7h1.9v11.1h-1.9V281.7z"></path>
							<path class="st6" d="M163.4,283.5h-3.5v-1.8h9v1.8h-3.5v9.3h-2V283.5z"></path>
							<path class="st6" d="M171.1,281.7h1.9v11.1h-1.9V281.7z"></path>
							<path class="st6" d="M175.5,287.2L175.5,287.2c0-3.1,2.4-5.7,5.8-5.7s5.8,2.6,5.8,5.7v0c0,3.1-2.4,5.7-5.8,5.7
								S175.5,290.3,175.5,287.2z M185,287.2L185,287.2c0-2.2-1.6-4-3.8-4s-3.7,1.8-3.7,3.9v0c0,2.1,1.6,3.9,3.8,3.9
								S185,289.4,185,287.2z"></path>
							<path class="st6" d="M189.4,281.7h1.8l5.9,7.6v-7.6h1.9v11.1h-1.6l-6.1-7.9v7.9h-1.9V281.7z"></path>
							<path class="st6" d="M21,310.9L21,310.9c0-3.1,2.4-5.7,5.8-5.7c3.4,0,5.8,2.6,5.8,5.7v0c0,3.1-2.4,5.7-5.8,5.7S21,314,21,310.9z
								 M30.6,310.9L30.6,310.9c0-2.2-1.6-4-3.8-4s-3.7,1.8-3.7,3.9v0c0,2.1,1.6,3.9,3.8,3.9C29,314.8,30.6,313.1,30.6,310.9z"></path>
							<path class="st6" d="M35,305.4h8.2v1.8h-6.3v3h5.6v1.8h-5.6v4.5H35V305.4z"></path>
							<path class="st6" d="M49.2,305.4h2.1l2.6,8.2l2.7-8.2h1.6l2.7,8.2l2.6-8.2h2l-3.9,11.1h-1.7l-2.7-7.9l-2.7,7.9h-1.7L49.2,305.4z"
								></path>
							<path class="st6" d="M67.7,305.4h8.2v1.7h-6.3v2.9h5.5v1.7h-5.5v3H76v1.7h-8.3V305.4z"></path>
							<path class="st6" d="M78.3,305.4h1.9v9.3H86v1.8h-7.8V305.4z"></path>
							<path class="st6" d="M88.1,305.4H90v9.3h5.8v1.8h-7.8V305.4z"></path>
							<path class="st6" d="M97.8,305.4h1.8l5.9,7.6v-7.6h1.9v11.1h-1.6l-6.1-7.9v7.9h-1.9V305.4z"></path>
							<path class="st6" d="M110.3,305.4h8.2v1.7h-6.3v2.9h5.5v1.7h-5.5v3h6.3v1.7h-8.3V305.4z"></path>
							<path class="st6" d="M120.2,314.8l1.2-1.4c1.1,0.9,2.1,1.4,3.5,1.4c1.2,0,2-0.6,2-1.4v0c0-0.8-0.4-1.2-2.5-1.7
								c-2.4-0.6-3.7-1.3-3.7-3.3v0c0-1.9,1.6-3.2,3.8-3.2c1.6,0,2.9,0.5,4,1.4l-1,1.5c-1-0.7-2-1.1-3-1.1c-1.1,0-1.8,0.6-1.8,1.3v0
								c0,0.9,0.5,1.2,2.6,1.7c2.3,0.6,3.6,1.4,3.6,3.2v0c0,2.1-1.6,3.3-3.9,3.3C123.1,316.6,121.5,316,120.2,314.8z"></path>
							<path class="st6" d="M130.1,314.8l1.2-1.4c1.1,0.9,2.1,1.4,3.5,1.4c1.2,0,2-0.6,2-1.4v0c0-0.8-0.4-1.2-2.5-1.7
								c-2.4-0.6-3.7-1.3-3.7-3.3v0c0-1.9,1.6-3.2,3.8-3.2c1.6,0,2.9,0.5,4,1.4l-1,1.5c-1-0.7-2-1.1-3-1.1c-1.1,0-1.8,0.6-1.8,1.3v0
								c0,0.9,0.5,1.2,2.6,1.7c2.3,0.6,3.6,1.4,3.6,3.2v0c0,2.1-1.6,3.3-3.9,3.3C133.1,316.6,131.5,316,130.1,314.8z"></path>
							<path class="st6" d="M145.7,305.4h1.9v9.3h5.8v1.8h-7.8V305.4z"></path>
							<path class="st6" d="M155.6,305.4h1.9v11.1h-1.9V305.4z"></path>
							<path class="st6" d="M159.6,305.4h2.1l3.3,8.5l3.3-8.5h2.1l-4.6,11.1h-1.7L159.6,305.4z"></path>
							<path class="st6" d="M172.5,305.4h1.9v11.1h-1.9V305.4z"></path>
							<path class="st6" d="M177.4,305.4h1.8l5.9,7.6v-7.6h1.9v11.1h-1.6l-6.1-7.9v7.9h-1.9V305.4z"></path>
							<path class="st6" d="M189.4,310.9L189.4,310.9c0-3.1,2.4-5.7,5.7-5.7c1.9,0,3.1,0.5,4.2,1.5l-1.2,1.5c-0.9-0.7-1.7-1.2-3.1-1.2
								c-2,0-3.6,1.8-3.6,3.9v0c0,2.3,1.5,3.9,3.8,3.9c1,0,2-0.3,2.7-0.8v-2.1H195v-1.7h4.7v4.6c-1.1,0.9-2.7,1.7-4.6,1.7
								C191.6,316.6,189.4,314.1,189.4,310.9z"></path>
						</g>
					</g>
				</svg>
			</a>
		</figure>
		<nav class="cell small-10 medium-9 large-6">
			<a id="anchor-innovation" href="#innovation" data-anchor="innovation" class="uppercase">Innovation</a>
			<a id="anchor-circadian_day" href="#circadian_day" data-anchor="circadian_day" class="uppercase">Circadian Day</a>
			<a id="anchor-home_wellness" href="#home_wellness" data-anchor="home_wellness" class="uppercase">Home Wellness</a>
		</nav>
	</header>