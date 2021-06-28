<?php $productID = get_the_ID(); ?>
<?php $ulasanQuery = new WP_Query( array('post_type' => 'ulasan', 'order' => 'DESC', 'posts_per_page' => 1000)); ?>
<?php $ulasan_count = 0; ?>
<?php $ulasan_average = 0; ?>
<?php if ($ulasanQuery->have_posts() ) : while ($ulasanQuery->have_posts() ) : $ulasanQuery->the_post(); ?>
    <?php if($productID === get_field('produk_ulasan')) { ?>
        <?php $ulasanID = get_the_ID(); ?>
        <?php $ulasan_count++; ?>
        <?php $ulasan_average+= get_field('rating_ulasan'); ?>
    <?php } ?>
<?php endwhile; wp_reset_postdata(); ?>
<?php endif; ?>
<?php if ( $ulasan_count == 0 ) { ?>
<?php } else { ?>
<?php $rating_average_value = floor(($ulasan_average/$ulasan_count) * 2) / 2; ?>
<?php } ?>