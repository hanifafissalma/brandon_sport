<?php
// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function toRp($angka)
{
    return 'Rp.'.strrev(implode('.',str_split(strrev(strval($angka)),3)));
}
function data_fetch(){


    $productQuery = new WP_Query( array( 'posts_per_page' => -1, 's' => esc_attr( $_POST['s'] ), 'post_type' => 'produk' ) );
    if( $productQuery->have_posts() ) :
        while( $productQuery->have_posts() ): $productQuery->the_post(); ?>
            <?php if (get_field('diskon')) {
                    $harga_diskon = get_field('harga_normal') - (get_field('harga_normal') * get_field('diskon') / 100);
                    ?>
                <li class="cat-item"><small><?php echo toRp($harga_diskon); ?></small><a href="<?php echo esc_url( post_permalink() ); ?>"><b><?php the_title();?></b><br/>
                <small><s style="text-decoration: line-through;color: #a6a6a6;"><?php echo toRp(get_field('harga_normal')); ?></s> ( <?php echo get_field('diskon'); ?>% OFF )</small></a></li>
            <?php } else { ?>
                <li class="cat-item"><small><?php echo toRp(get_field('harga_normal')); ?></small><a href="<?php echo esc_url( post_permalink() ); ?>"><b><?php the_title();?></b></a></li>
            <?php } ?>

        <?php endwhile;
        wp_reset_postdata();  
    endif;

    $postQuery = new WP_Query( array( 'posts_per_page' => -1, 's' => esc_attr( $_POST['s'] ), 'post_type' => 'post' ) );
    if( $postQuery->have_posts() ) :
        while( $postQuery->have_posts() ): $postQuery->the_post(); ?>
            <li class="cat-item"><small><?php echo get_cat_name( get_the_category()[0]->term_id ); ?></small><a href="<?php echo esc_url( post_permalink() ); ?>"><?php the_title();?></a></li>

        <?php endwhile;
        wp_reset_postdata();  
    endif;

    die();
}
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetch(){

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch', s: jQuery('#keyword').val() },
        success: function(data) {
            jQuery('#itemSearch').html( '<ul>' + data + '</ul>' );
            jQuery('a[data-target=itemSearch]').trigger('click');
        }
    });

}
</script>

<?php
}
?>