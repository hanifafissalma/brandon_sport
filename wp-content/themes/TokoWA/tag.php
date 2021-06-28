<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>


			<header class="pageTitle wrapper">
				<div class="flex left">
					<h1>
						<?php _e( '', 'TokoWA' ); echo single_tag_title('', false); ?>
					</h1>
				</div>
				<div class="flex right">
		    		<a class="poptamvBtn" data-title="<i class='icon ion-logo-rss'></i>Ikuti" data-target="ikuti" href="javascript:void(0);"><i class="icon ion-logo-rss"></i> Ikuti</a>
				</div>
			</header>
			<div class="wrapper">
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
