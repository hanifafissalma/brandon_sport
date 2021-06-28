<?php get_header(); ?>
	<script type="text/javascript">window.location.href = '<?php echo home_url(); ?>';</script>
	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<?php _e( 'Page not found', 'TokoWA' ); ?>
				<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'TokoWA' ); ?></a>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
