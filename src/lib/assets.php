<?php

function bonsai_assets() {

	wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/styles/main.css', false, null);

}

add_action('wp_enqueue_scripts', 'bonsai_assets');

 ?>
