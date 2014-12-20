<?php
/*
 * CUSTOM POST TYPE ARCHIVE TEMPLATE
 *
 * This is the custom post type archive template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is called "register_post_type( 'bookmarks')",
 * then your template name should be archive-bookmarks.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<h1 class="archive-title h2"><?php post_type_archive_title(); ?></h1>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

					<header class="article-header">

						<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<p class="byline vcard"><?php
							printf( __( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', 'bonsaitheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonsaitheme' ) ), get_author_posts_url( get_the_author_meta( 'ID' ) ));
						?></p>

					</header>

					<section class="entry-content cf">

						<?php the_excerpt(); ?>

					</section>

					<footer class="article-footer">

					</footer>

				</article>

				<?php endwhile; ?>

						<?php bones_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'templates/posts-not-found' ); ?>

				<?php endif; ?>

			</main>

		<?php get_sidebar(); ?>

	</div>

</div>

<?php get_footer(); ?>
