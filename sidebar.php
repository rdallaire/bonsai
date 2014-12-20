<aside class="sidebar-main" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-main' ); ?>

	<?php else : ?>

		<?php // if no sidebar ?>
		<div class="no-widgets">

			<p>
				<?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonsaitheme' );  ?>
			</p>
		</div>

	<?php endif; ?>

</aside>
