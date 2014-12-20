<?php get_header(); ?>

<main class="post" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" class="page-single" role="article">

			<header class="article-header">

				<h1 class="article-title"><?php the_title(); ?></h1>

			</header>

			<section class="article-content">

				<?php the_content(); ?>

			</section>

			<?php
				// If comments are open or we have at least one comment, load up the default comment template provided by Wordpress
				// if ( comments_open() || '0' != get_comments_number() )
					// comments_template( '', true );
			?>

		</article>

	<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'templates/posts-not-found' ); ?>

	<?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
