<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "WebSite",
	"name": "<?php bloginfo('name'); ?>",
	"url": "<?php echo home_url(); ?>",
	"sameAs": [
		"<?php echo $youtube; ?>",
		"<?php echo $instagram; ?>",
		"<?php echo $facebook; ?>",
		"<?php echo $twitter; ?>"
	],
	"potentialAction": {
	"@type": "SearchAction",
	"target": "<?php echo home_url(); ?>/?s={s}",
	"query-input": "required name=s"
	}
}
</script>

<?php if (is_singular( 'produk' )) { ?>
	<?php require_once 'schema-product.php'; ?>
<?php } elseif (is_singular( 'post' )) { ?>
	<?php require_once 'schema-post.php'; ?>
<?php } elseif ( is_front_page()){ ?>
	<?php $queryProduct = new WP_Query( array('post_type' => 'produk', 'posts_per_page' => '15', 'order' => 'DESC'));
	if ($queryProduct->have_posts() ) :
		while ($queryProduct->have_posts() ) : $queryProduct->the_post();?>
			<?php require 'schema-product.php'; ?>
		<?php endwhile; wp_reset_postdata(); ?>
	<?php endif; ?>
	<?php $queryPost = new WP_Query( array('post_type' => 'post', 'posts_per_page' => '3', 'order' => 'DESC'));
	if ($queryPost->have_posts() ) :
		while ($queryPost->have_posts() ) : $queryPost->the_post();?>
			<?php require 'schema-post.php'; ?>
		<?php endwhile; wp_reset_postdata(); ?>
	<?php endif; ?>
<?php } else { ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php if ( 'produk' == get_post_type() ) {?>
			<?php require 'schema-product.php'; ?>
		<?php } ?>
		<?php if ( 'post' == get_post_type() ) {?>
			<?php require 'schema-post.php'; ?>
		<?php } ?>
	<?php endwhile; wp_reset_postdata(); endif; ?>
<?php } ?>