<?php
/*
 * Sidebar and widget areas
 * ___
 * sidebars are initalized in /lib/init.php
 * http://codex.wordpress.org/Function_Reference/register_sidebar
 */

// create sidebars and widget areas
function themeFunction_sidebars() {

	register_sidebar( array(

		'id' 			=> 'sidebar-main',
		'name' 			=> __( 'Main Sidebar', 'themeTextDomain' ),
		'description' 	=> __( 'The first (primary) sidebar.', 'themeTextDomain' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="widget title">',
		'after_title' 	=> '</h4>',

	) );

	register_sidebar( array(

		'id' 			=> 'footer',
		'name' 			=> __( 'Footer Area', 'themeTextDomain' ),
		'description' 	=> __( 'The footer of the site.', 'themeTextDomain' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="widget title">',
		'after_title' 	=> '</h4>',

	) );

}

?>
