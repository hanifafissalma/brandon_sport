<?php 
acf_form_head();
/* Template Name: Review Produk */ get_header(); ?>
<div class="reviewForm">
	<?php
	acf_form(array(
		'post_id'		=> 'new_post',
		'label_placement' => 'left',
		'uploader' => 'wp',
		'post_title'	=> true,
		'post_content'	=> false,
		'submit_value'	=> 'Update!',
		'new_post'		=> array(
			'post_type'		=> 'review',
			'post_status'	=> 'publish',
		),
	));
	?>
</div>

<?php get_footer(); ?>