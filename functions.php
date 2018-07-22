<?php
/**
 * Delos functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Delos
 * @since Delos 0.1.0
 * @version 0.3.7
 */

/**
 * Delos only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'delos' ),
		'footer'  => __( 'Footer Menu', 'delos' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'gallery',
	) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	//remove_filter( 'the_content', 'wpautop' );

}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Delos 0.3.5
 */
function twentysixteen_scripts() {
	
	$server = $_SERVER['SERVER_NAME'];
	$template_dir = get_template_directory_uri();
		
	// Add Genericons, used in the main stylesheet.
//	wp_enqueue_style( 'font-awesome', $template_dir . '/css/font-awesome.min.css', array(), '4.6.3' );

	// Theme stylesheets.
	wp_enqueue_style( 'core', $template_dir . '/css/core.css', array(), '0.3.5' );
	wp_enqueue_style( 'animation', $template_dir . '/css/animation.css', array('delos-style'), '0.3.7' );
	wp_enqueue_style( 'delos-style', get_stylesheet_uri(), array('core') );

	// Load the Internet Explorer specific stylesheet.

	//Libraries
	wp_enqueue_script( 'backgrounder', $template_dir . '/js/backgrounder.js', array( 'jquery' ), '0.1' );
	wp_enqueue_script( 'breakpoints', $template_dir . '/js/breakpoints.js', array(), '0.1', true );

	wp_enqueue_script( 'parallax', $template_dir . '/js/parallax.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'animation.gsap', $template_dir . '/js/animation.gsap.js', array( 'jquery', 'scrollmagic', 'tweenmax' ), '2.0.5', true );
	wp_enqueue_script( 'scrollmagic', $template_dir . '/js/ScrollMagic.min.js', array( 'jquery' ), '2.0.5', true );
	wp_enqueue_script( 'scrollmagic-indicators', $template_dir . '/js/debug.addIndicators.min.js', array( 'jquery', 'scrollmagic' ), '2.0.5', true );
	wp_enqueue_script( 'tweenmax', $template_dir . '/js/TweenMax.min.js', array( 'jquery' ), '1.18.0', true );
	wp_enqueue_script( 'scrollto', $template_dir . '/js/ScrollToPlugin.min.js', array( 'jquery' ), '1.8.1', true );
	wp_enqueue_script( 'cssplugin', $template_dir . '/js/CSSPlugin.min.js', array( 'jquery' ), '1.18.0', true );
		
	//Core functions
//	wp_enqueue_script( 'font-awesome', 'https:/use.fontawesome.com/bac5c1e8d6.js', array(),'bac5c1e8d6', true );
	wp_enqueue_script( 'global_functions', $template_dir . '/js/functions.js', array( 'jquery', 'backgrounder', 'breakpoints', 'tweenmax', 'parallax',  'scrollmagic'), '0.3.7', true );

}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );