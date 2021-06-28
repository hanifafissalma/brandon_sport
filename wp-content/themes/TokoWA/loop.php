<div class="loop">
<?php if( isset($_GET["urutkan"]) ) {
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$order = '';
	if ( trim($_GET["urutkan"]) == 'termurah' ) {
		$order = 'ASC';
	} elseif ( trim($_GET["urutkan"]) == 'termahal' ) {
		$order = 'DESC';
	}

	$args = array(
		'post_type' => 'produk',
		'paged' => $paged, 
		'meta_key' => 'harga_normal',
		'orderby'  => 'meta_value_num', 
		'order'	=> $order
	);

	$produkQuery = new WP_Query($args);

	?>

	<div class="loopGrid produk">
    	<?php if ($produkQuery->have_posts()): while ($produkQuery->have_posts()) : $produkQuery->the_post(); ?>
			<?php if ( 'produk' == get_post_type() ) {
				require 'loop-product.php';
			} ?>
		<?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
    
<?php } else { ?>

	<div class="loopGrid produk">
    	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php if ( 'produk' == get_post_type() ) {
				require 'loop-product.php';
			} ?>
		<?php endwhile; wp_reset_postdata(); endif; ?>
    </div>

<?php } ?>

    <div class="loopGrid post">
    	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php if ( 'post' == get_post_type() ) {
				require 'loop-post.php';
			} ?>
		<?php endwhile; wp_reset_postdata(); endif; ?>
    </div>

    <div class="loopGrid ulasan">
    	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php if ( 'ulasan' == get_post_type() ) {
				require 'loop-ulasan.php';
			} ?>
		<?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
    
</div>