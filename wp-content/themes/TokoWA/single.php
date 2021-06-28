<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<?php if ( 'produk' == get_post_type() ) { ?>
   		<?php require 'single-product.php'; ?>
	<?php } elseif ( 'ulasan' == get_post_type() ) { ?>
   		<?php require 'single-ulasan.php'; ?>
	<?php } elseif ( 'livesales' == get_post_type() ) { ?>
   		<?php require 'single-livesales.php'; ?>
	<?php } else { ?>
   		<?php require 'single-post.php'; ?>
	<?php } ?>
<?php endwhile; endif; ?>