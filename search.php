<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all t-2of3 d-5of7 cf" role="main">
			<h1 class="archive-title"><span><?php _e( 'Search Results for:', 'bonsaitheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

					<header class="entry-header article-header">

						<h3 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

      						<p class="byline entry-meta vcard">
        							<?php printf( __( 'Posted %1$s by %2$s', 'bonsaitheme' ),
       							    /* the time the post was published */
       							    '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
          							    /* the author of the post */
           							    '<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
        							); ?>
      						</p>

					</header>

					<section class="entry-content">
							<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonsaitheme' ) . '</span>' ); ?>

					</section>

					<footer class="article-footer">

						<?php if(get_the_category_list(', ') != ''): ?>
      					<?php printf( __( 'Filed under: %1$s', 'bonsaitheme' ), get_the_category_list(', ') ); ?>
      					<?php endif; ?>

     					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonsaitheme' ) . '</span> ', ', ', '</p>' ); ?>

					</footer> <!-- end article footer -->

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
