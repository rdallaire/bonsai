<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title(''); ?></title>

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

	<div id="container">

		<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

			<div id="inner-header" class="wrap cf">

				<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
				<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

				<?php // if you'd like to use the site description you can un-comment it below ?>
				<?php // bloginfo('description'); ?>


				<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu(array(
					         'container' => false,                           // remove nav container
					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
					         'theme_location' => 'main-nav',                 // where it's located in the theme
					         'before' => '',                                 // before the menu
    			               'after' => '',                                  // after the menu
    			               'link_before' => '',                            // before each link
    			               'link_after' => '',                             // after each link
    			               'depth' => 0,                                   // limit the depth of the nav
					         'fallback_cb' => ''                             // fallback function (if there is one)
					)); ?>

				</nav>

			</div>

		</header>
