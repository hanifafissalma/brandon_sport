<?php $productID = get_the_ID(); ?>

<?php $ulasanQuery = new WP_Query( array('post_type' => 'ulasan', 'order' => 'DESC')); ?>
<script type="application/ld+json">
{
    "@context": "http://schema.org/",
    "@type": "Product",
    "name": "<?php echo get_the_title($productID); ?>",
    "image": [
    <?php if(get_field('gambar_1',$productID)) { ?>"<?php echo esc_url(get_field('gambar_1',$productID)['sizes']['large']); ?>"<?php } ?>
    <?php if(get_field('gambar_2',$productID)) { ?>,"<?php echo esc_url(get_field('gambar_2',$productID)['sizes']['large']); ?>"<?php } ?>
    <?php if(get_field('gambar_3',$productID)) { ?>,"<?php echo esc_url(get_field('gambar_3',$productID)['sizes']['large']); ?>"<?php } ?>
    <?php if(get_field('gambar_4',$productID)) { ?>,"<?php echo esc_url(get_field('gambar_4',$productID)['sizes']['large']); ?>"<?php } ?>
    <?php if(get_field('gambar_5',$productID)) { ?>,"<?php echo esc_url(get_field('gambar_5',$productID)['sizes']['large']); ?>"<?php } ?>
    ],
    "mpn": "mpn-<?php echo basename(get_permalink($productID)) . '-' . $productID; ?>",
    "sku": "sku-<?php echo basename(get_permalink($productID)) . '-' . $productID; ?>",
    "brand": {
    "@type": "Thing",
        "name": "<?php bloginfo('name'); ?>"
    },
    "offers": {
        "@type": "AggregateOffer",
        "url": "<?php echo get_the_permalink($productID); ?>",
        <?php if (get_field('diskon',$productID)) {
        $harga_diskon = get_field('harga_normal',$productID) - (get_field('harga_normal',$productID) * get_field('diskon',$productID) / 100);
        ?>
        "lowPrice": "<?php echo $harga_diskon; ?>",
        "highPrice": "<?php the_field('harga_normal',$productID); ?>",
        <?php } else { ?>
        "lowPrice": "<?php the_field('harga_normal',$productID); ?>",
        "highPrice": "<?php the_field('harga_normal',$productID); ?>",
        <?php } ?>
        "offerCount": "<?php echo $productID; ?>",
        "priceCurrency": "IDR",
        "itemCondition": "http://schema.org/NewCondition",
        <?php
        if( get_field('stok_produk',$productID) == true ) { ?>
        "availability": "http://schema.org/InStock"
        <?php } else { ?>
        "availability": "https://schema.org/OutOfStock"
        <?php }?>
        },
    "review": [

    <?php $ulasan_count = 0; ?>
    <?php $ulasan_average = 0; ?>
    <?php if ($ulasanQuery->have_posts() ) : while ($ulasanQuery->have_posts() ) : $ulasanQuery->the_post(); ?>
        <?php if($productID === get_field('produk_ulasan')) { ?>
            <?php $ulasanID = get_the_ID(); ?>
            <?php $ulasan_count++; ?>
            <?php $ulasan_average+= get_field('rating_ulasan'); ?>
            <?php if ( $ulasan_count >= 2 ) { ?>,<?php } ?>
            {
                "@type": "Review",
                "author": "<?php the_field('nama_ulasan'); ?>",
                "datePublished": "<?php the_time( 'c'); ?>",
                "description": "<?php echo str_replace('"', "”", get_field('teks_ulasan')); ?>",
                "name": "<?php the_field('nama_ulasan'); ?>",
                "url": "<?php echo get_the_permalink($productID) . '#ulasan_' . $ulasanID; ?>",
                "reviewRating": {
                    "@type": "Rating",
                    "bestRating": "5",
                    "ratingValue": "<?php the_field('rating_ulasan'); ?>",
                    "worstRating": "1"
                }
            }
        <?php } ?>
    <?php endwhile; wp_reset_postdata(); ?>
    <?php endif; ?>
    <?php if ( $ulasan_count == 0 ) { ?>
        {
            "@type": "Review",
            "author": "<?php bloginfo('name'); ?>",
            "datePublished": "<?php echo get_the_time( 'c', $productID ) ?>",
            "description": "Belum ada Rating..",
            "name": "<?php bloginfo('name'); ?>",
            "reviewRating": {
                "@type": "Rating",
                "bestRating": "5",
                "ratingValue": "1",
                "worstRating": "1"
                }
        }
    <?php } ?>
    ],
    "aggregateRating": {
        "@type": "AggregateRating",
        <?php if ( $ulasan_count == 0 ) { ?>
        "ratingValue": "5",
        "reviewCount": "1"
        <?php } else { ?>
        "ratingValue": "<?php echo $rating_average_value = floor(($ulasan_average/$ulasan_count) * 2) / 2; ?>",
        "reviewCount": "<?php echo $ulasan_count; ?>"
        <?php } ?>
    },
    "description": "<?php echo get_field('seo_description',$productID); ?>"
}
</script>