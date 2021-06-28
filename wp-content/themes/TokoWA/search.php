<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<header class="pageTitle wrapper">
				<div class="flex left">
					<h1><i class="icon ion-ios-search"></i> Hasil untuk "<?php echo get_search_query(); ?>"</h1>
				</div>
				<!-- <div class="flex right">
		    		<button>dropdown_filter</button>
				</div> -->
			</header>
			<div class="wrapper">
				<?php get_template_part('loop'); ?>
			</div>
			<!-- ?php get_template_part('pagination'); ? -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
