<?php get_header(); ?>

<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

	<?php if (is_category()) { ?>
		<h1 class="archive-title h2">
			<span><?php _e( 'Posts Categorized:', 'themeTextDomain' ); ?></span> <?php single_cat_title(); ?>
		</h1>

	<?php } elseif (is_tag()) { ?>
		<h1 class="archive-title h2">
			<span><?php _e( 'Posts Tagged:', 'themeTextDomain' ); ?></span> <?php single_tag_title(); ?>
		</h1>

	<?php } elseif (is_author()) {
		global $post;
		$author_id = $post->post_author;
	?>
		<h1 class="archive-title h2">

			<span><?php _e( 'Posts By:', 'themeTextDomain' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

		</h1>
	<?php } elseif (is_day()) { ?>
		<h1 class="archive-title h2">
			<span><?php _e( 'Daily Archives:', 'themeTextDomain' ); ?></span> <?php the_time('l, F j, Y'); ?>
		</h1>

	<?php } elseif (is_month()) { ?>
			<h1 class="archive-title h2">
				<span><?php _e( 'Monthly Archives:', 'themeTextDomain' ); ?></span> <?php the_time('F Y'); ?>
			</h1>

	<?php } elseif (is_year()) { ?>
			<h1 class="archive-title h2">
				<span><?php _e( 'Yearly Archives:', 'themeTextDomain' ); ?></span> <?php the_time('Y'); ?>
			</h1>
	<?php } ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

		<header class="entry-header article-header">

			<h3 class="entry-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h3>
			<p>
				<?php printf( __( 'Posted %1$s by %2$s', 'themeTextDomain' ),
						     /* the time the post was published */
						     '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
								/* the author of the post */
								'<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
						); ?>
			</p>

		</header>

		<section class="entry-content">

			<?php the_post_thumbnail(); ?>

			<?php the_excerpt(); ?>

		</section>

		<footer class="article-footer">

		</footer>

	</article>

	<?php endwhile; ?>

		<?php themeFunction_page_navi(); ?>

	<?php else : ?>

		<?php get_template_part( 'templates/posts-not-found' ); ?>

	<?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
