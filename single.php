<?php get_header(); ?>


<main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php
			/*
			 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
			 *
			 * So this function will bring in the needed template file depending on what the post
			 * format is. The different post formats are located in the post-formats folder.
			 *
			 *
			 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
			 * A SPECIFIC POST FORMAT.
			 *
			 * If you want to remove post formats, just delete the post-formats folder and
			 * replace the function below with the contents of the "format.php" file.
			*/
			get_template_part( 'templates/post-formats/format', get_post_format() );
		?>

	<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'templates/posts-not-found' ); ?>

	<?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
