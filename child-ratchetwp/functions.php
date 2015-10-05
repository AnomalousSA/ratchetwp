<?php
/**
 *
 * @package WordPress
 * @subpackage Ratchetwp
 * @since Ratchetwp 0.1
 *
 * Last Updated: Sep 30, 2015
 */

function remove_scripts()
{
    wp_deregister_script('Ratchetwp-script' );
    wp_deregister_style('Ratchetwp-style' );
}
add_action( 'wp_enqueue_scripts', 'remove_scripts',100 );

function child_Ratchetwp_loader() {
    wp_enqueue_style( 'child-Ratchetwp-style', get_stylesheet_directory_uri().'/assets/css/style.css', false , '1.0', 'all' );
    wp_enqueue_script( 'child-Ratchetwp-script', get_stylesheet_directory_uri() .'/assets/js/script.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'child_Ratchetwp_loader', 200 );


 ?>