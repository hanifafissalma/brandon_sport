<?php $productID = get_the_ID(); ?>

<div class='item_product' id='product_<?php the_ID(); ?>'>
    <div class="imgWrap">
        <?php if(!get_field('stok_produk',$productID)) {?><div class='ribbon habis'><small class='text'>HABIS</small></div><?php } ?>
        <a class="thumbProduct" data-bg="<?php echo esc_url(get_field('gambar_1',$productID)['sizes']['large']); ?>" href='<?php echo get_the_permalink($productID); ?>'>
            <img alt="<?php echo get_the_title($productID); ?> - <?php bloginfo('name'); ?>" class='hide img' data-src='
        		<?php echo esc_url(get_field('gambar_1',$productID)['sizes']['large']); ?>
        	' />
        </a>
        <?php edit_post_link('<i class="icon abs ion-md-create"></i>'); ?>
    </div>
    <div class='productInfo'>
        <h2 class='title' data-title='<?php echo get_the_title($productID); ?>' ><a class='link' href='<?php echo get_the_permalink($productID); ?>'><?php echo get_the_title($productID); ?></a></h2>

        <!-- Ulasan Produk -->
        <?php require 'query-ulasan.php'; ?>
        <?php if ( $ulasan_count != 0 ) { ?>
            <div class='productRating' style='font-size:65%;margin-top:4px;'>
                <a href='<?php echo get_the_permalink($productID); ?>#ulasan'>
                <span class='avg_rating_wrap'>
                    <span class='avg_rating' data-rating='<?php echo $rating_average_value; ?>'>
                        <span class='avg_rating__item'></span>
                        <span class='avg_rating__item'></span>
                        <span class='avg_rating__item'></span>
                        <span class='avg_rating__item'></span>
                        <span class='avg_rating__item'></span>
                    </span>
                </span>
                <span style="font-size: 110%;display: inline-block;vertical-align: middle;">( <?php echo $ulasan_count; ?> )</span>
                </a>
            </div>
        <?php } ?>
        <!-- / Ulasan Produk -->

        <div class='priceArea'><b class='price' data-price='<?php the_field('harga_normal',$productID) ?>' data-discount='<?php the_field('diskon',$productID) ?>'><?php the_field('harga_normal',$productID) ?></b></div>

    </div>
</div>