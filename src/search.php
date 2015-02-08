<?php get_header(); ?>

<main id="main" role="main">

	<h1 class="archive-title"><span><?php _e( 'Search Results for:', 'themeTextDomain' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

			<header class="article-header">

				<h1 class="article-title"><?php the_title(); ?></h1>

				<p class="article-meta">

					<span class="author">Posted by <?php the_author_link(); ?></span>
					<time datetime="<?php the_date(); ?>"><?php the_date( 'Y-m-d' ) ?></time>
					<span class="categories">Categories: <?php the_category( ', ' ); ?></span>

				</p>

			</header>

			<section class="entry-content">

				<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'themeTextDomain' ) . '</span>' ); ?>

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
