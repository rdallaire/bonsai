<?php
// Sidebar and widget areas
// http://codex.wordpress.org/Function_Reference/register_sidebar

// create sidebars and widget areas
function bonsai_sidebars() {

	register_sidebar( array(

		'id' 			=> 'sidebar-main',
		'name' 			=> __( 'Main Sidebar', 'bonsaitheme' ),
		'description' 	=> __( 'The first (primary) sidebar.', 'bonsaitheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="widget title">',
		'after_title' 	=> '</h4>',

	) );

	register_sidebar( array(

		'id' 			=> 'footer',
		'name' 			=> __( 'Footer Area', 'bonsaitheme' ),
		'description' 	=> __( 'The footer of the site.', 'bonsaitheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="widget title">',
		'after_title' 	=> '</h4>',

	) );

}

?>
