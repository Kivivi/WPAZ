<?php
/**
 * Enqueues scripts and styles.
 * 
 * https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 * 
 */
function wedpress_scripts() {
    
    // Theme stylesheet.
	wp_enqueue_style( 'wedpress-style', get_stylesheet_uri() );

	// Add Bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.7' );

    // Add jquery.js + bootstrap.min.js
	wp_enqueue_script( 'wedpress-script', get_template_directory_uri() . '/js/jquery.min.js', array( 'jquery' ), '20160816', true );
	wp_enqueue_script( 'wedpress-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'bootstrap' ), '20160816', true );

}
add_action( 'wp_enqueue_scripts', 'wedpress_scripts' );


?>