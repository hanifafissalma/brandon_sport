<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): the_post(); ?>

			<h1><?php _e( 'Author Archives for ', 'TokoWA' ); echo get_the_author(); ?></h1>

		<?php if ( get_the_author_meta('description')) : ?>

		<?php echo get_avatar(get_the_author_meta('user_email')); ?>

			<h2><?php _e( 'About ', 'TokoWA' ); echo get_the_author() ; ?></h2>

			<?php echo wpautop( get_the_author_meta('description') ); ?>

		<?php endif; ?>

		<div class="loop">
			<div class="wrapper loopGrid produk">
				<?php rewind_posts(); while (have_posts()) : the_post(); ?>
					<?php
						if ( 'produk' == get_post_type() ) {
							require 'loop-product.php';
						}
					?>
				<?php endwhile; ?>
		    </div>
			<div class="wrapper loopGrid post">
				<?php rewind_posts(); while (have_posts()) : the_post(); ?>
					<?php
						if ( 'post' == get_post_type() ) {
							require 'loop-post.php';
						}
					?>
				<?php endwhile; ?>
		    </div>
			<div class="wrapper loopGrid ulasan">
				<?php rewind_posts(); while (have_posts()) : the_post(); ?>
					<?php
						if ( 'ulasan' == get_post_type() ) {
							require 'loop-ulasan.php';
						}
					?>
				<?php endwhile; ?>
		    </div>
	    </div>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'TokoWA' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

			<div class="wrapper"><?php get_template_part('pagination'); ?></div>

		</section>
		<!-- /section -->
	</main>
	
<?php get_footer(); ?>
