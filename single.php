<?php get_header(); ?>

<main class="post" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

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

			<section class="article-content">

				<?php the_content(); ?>

			</section>

			<footer class="article-footer">

			</footer>

			<?php
				// If comments are open or we have at least one comment, load up the default comment template provided by Wordpress
				if ( comments_open() || '0' != get_comments_number() )
					comments_template( '', true );
			?>

		</article>

	<?php endwhile; ?>

		<?php bonsai_page_navi(); ?>

	<?php else : ?>

		<?php get_template_part( 'templates/posts-not-found' ); ?>

	<?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
