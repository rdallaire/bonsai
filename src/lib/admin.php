<?php

// disable default dashboard widgets
function bonsai_disable_default_dashboard_widgets() {

	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);       // Right Now Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);        // Activity Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // Comments Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);  // Incoming Links Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);         // Plugins Widget
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);       // Quick Press Widget
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);     // Recent Drafts Widget
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);           //
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);         //

	// remove plugin dashboard boxes
	unset($wp_meta_boxes['dashboard']['normal']['core']['yoast_db_widget']);           // Yoast's SEO Plugin Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['rg_forms_dashboard']);        // Gravity Forms Plugin Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['bbp-dashboard-right-now']);   // bbPress Plugin Widget

}

// add custom CSS to login page
function bonsai_login_css() {
	// wp_enqueue_style( 'bonsai_login_css', get_template_directory_uri() . '/library/css/login.css', false );
}

// custom admin footer
function bonsai_custom_admin_footer() {
	_e( '<span id="footer-thankyou">Theme developed by <a href="http://rdallaire.com" target="_blank">Ross Dallaire</a></span>.', 'bonsaitheme' );
}

add_action( 'wp_dashboard_setup', 'bonsai_disable_default_dashboard_widgets' );
add_action( 'login_enqueue_scripts', 'bonsai_login_css', 10 );
add_filter( 'admin_footer_text', 'bonsai_custom_admin_footer' );

 ?>
