<!-- sidebar -->

		
<aside class="sidebar" id="sidebar" role="complementary">

	<div class="sidebar-widget">
		<div>
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-widget-area')) ?>
		</div>
	</div>
	<div class="custom-widget">
		<div class="wrap">
	        <h3>Terbaru</h3>
	        <div class="new-post">
			        <?php
			        $postQuery = new WP_Query( array('post_type' => 'post','posts_per_page' => '4', 'order' => 'DESC'));
			        if ($postQuery->have_posts() ) : while ($postQuery->have_posts() ) : $postQuery->the_post();?>
			                <?php get_template_part('loop-post'); ?>
			            <?php endwhile; ?>
			        <?php endif; ?>
	        </div>
    	</div>
	</div>

</aside>
<!-- /sidebar -->
