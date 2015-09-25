<?php

/**
 *
 * @package WordPress
 * @subpackage Ratchetwp
 * @since Ratchetwp 0.1
 *
 * Last Revised: Sep 23, 2015
 */

if ( ! function_exists('ratchetwp_theme_features') ) {

// Register Theme Features
function ratchetwp_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'ffffff',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	//add_theme_support( 'custom-background', $background_args );

	// Add theme support for Custom Header
	$header_args = array(
		'default-image'          => '',
		'width'                  => 0,
		'height'                 => 0,
		'flex-width'             => false,
		'flex-height'            => false,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => false,
		'default-text-color'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	//add_theme_support( 'custom-header', $header_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );
        
        // Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style();
}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'ratchetwp_theme_features' );

}

function custom_Ratchetwp_loader() {
wp_enqueue_style( 'ratchetwp-style', get_template_directory_uri().'/assets/css/ratchet.min.css', false , '3.3.4', 'all' );
wp_enqueue_style( 'font-awesome-style', get_template_directory_uri().'/assets/css/font-awesome.css', false , '4.3.0', 'all' );
wp_enqueue_style( 'ratchetwp-style', get_template_directory_uri().'/assets/css/style.css', false , '1.0', 'all' );
wp_enqueue_script( 'ratchet-script', get_template_directory_uri() .'/assets/js/ratchet.min.js', array( 'jquery' ), '3.3.4', true );
wp_enqueue_script( 'ratchetwp-script', get_template_directory_uri() .'/assets/js/script.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_Ratchetwp_loader' );
