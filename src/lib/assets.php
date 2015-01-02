<?php

function bonsai_assets() {

	// styles
	wp_enqueue_style( 'main-css' , get_template_directory_uri() . '/assets/styles/main.css', false, null);

	// scripts
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.1.3.min.js', array(), null, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/scripts/main.min.js', array('jquery'), null, true );

}
add_action('wp_enqueue_scripts', 'bonsai_assets');

?>
