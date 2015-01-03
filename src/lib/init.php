<?php

function themeFunction_init() {

	// for language translation
	load_theme_textdomain( 'themeTextDomain' );

	// maximum allowed width of content
	if ( ! isset( $content_width ) ) {
		$content_width = 1000;
	}

	// create sidebars from sidebars.php
	add_action( 'widgets_init', 'themeFunction_sidebars' );

	// Register wp_nav_menu() menus
	// http://codex.wordpress.org/Function_Reference/register_nav_menus
	register_nav_menus( array(
		'primary_navigation' => __('Primary Navigation', 'themeTextDomain' )
	));

	// add post thumbnails
	// http://codex.wordpress.org/Post_Thumbnails
	// http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
	// http://codex.wordpress.org/Function_Reference/add_image_size
	add_theme_support( 'post-thumbnails' );

	// set_post_thumbnail_size( 150, 150 );
	// set_post_thumbnail_size( 50, 50 ); // 50 pixels wide by 50 pixels tall, resize mode
	// set_post_thumbnail_size( 50, 50, true ); // 50 pixels wide by 50 pixels tall, crop mode
	// add_image_size( 'category-thumb', 300 ); // 300 pixels wide (and unlimited height)
	// add_image_size( 'homepage-thumb', 220, 180, true ); // (cropped)
	// add_image_size( 'custom-size', 220, 220, array( 'left', 'top' ) ); // Hard crop left top


	// add post formats
	// http://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ));

	// add HTML5 markup for captions
	// http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
	add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list' ));

	// woocommerce support
	add_theme_support( 'woocommerce' );

}
add_action( 'after_setup_theme', 'themeFunction_init' );

 ?>
