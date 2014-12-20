<?php get_header(); ?>

<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" role="article">

		<header class="article-header">

			<h1>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h1>

			<p class="article-meta">

				<span class="author">Posted by <?php the_author_link(); ?></span>
				<time datetime="<?php the_date(); ?>"><?php the_date( 'Y-m-d' ) ?></time>
				<span class="categories">Categories: <?php the_category( ', ' ); ?></span>

			</p>

		</header>

		<section class="entry-content">

			<?php the_content(); ?>

		</section>

		<footer class="article-footer">

			<p class="footer-comment-count">
				<?php comments_number(
					__( '<span>No</span> Comments', 'bonsaitheme' ),
					__( '<span>One</span> Comment', 'bonsaitheme' ),
					__( '<span>%</span> Comments', 'bonsaitheme' ) );
				?>
			</p>


			<?php printf( '<p class="footer-category">' .
							__('filed under', 'bonsaitheme' ) .
							': %1$s</p>' , get_the_category_list(', ') );
			?>

			<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' .
			__( 'Tags:', 'bonsaitheme' ) .
			'</span> ', ', ', '</p>' );
			?>


		</footer>

	</article>

	<?php endwhile; ?>

			<?php //bones_page_navi(); ?>

	<?php else : ?>

		<?php get_template_part( 'templates/posts-not-found' ); ?>

	<?php endif; ?>


</main>

<?php get_sidebar(); ?>


<?php get_footer(); ?>
