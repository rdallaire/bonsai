<?php get_template_part( 'templates/head' ); ?>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<!--[if lt IE 8]>
	<div class="alert alert-warning">
		<?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
	</div>
<![endif]-->

<div id="page-container" class="page-container">

	<header class="header site" role="banner" itemscope itemtype="http://schema.org/WPHeader">

		<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">

		<?php

		// grab main menu
		$defaults = array(
			'theme_location'  => '',
			'menu'            => '',
			'container'       => 'div',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
		);

		wp_nav_menu( $defaults );

		?>

		</nav>

	</header>

<?php // #page-container ends in footer.php ?>
