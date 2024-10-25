<? php

/*
Plugin Name: WP-GSAP
Description: Add the GSAP library to WordPress.
Version: 1.0
Author: Hanscom Park Studio
*/


// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}


// The proper way to enqueue GSAP script in WordPress

// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script(){
	// The core GSAP library
	wp_enqueue_script( 'wp-gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), false, true );
	// ScrollTrigger - with gsap.js passed as a dependency
	wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
	// Your animation code file - with gsap.js passed as a dependency
	wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . 'js/app.js', array('gsap-js'), false, true );
}

add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );
?>