<?php 
// ======================================================================= Post
function post_columns( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => 'Judul',
        'featured_image' => 'Gambar Utama',
        'categories' => 'Kategori',
        'tags' => 'Tag',
        'date' => 'Tanggal',
     );
    return $columns;
}
add_filter('manage_posts_columns' , 'post_columns');

function post_columns_data( $column, $post_id ) {
    switch ( $column ) {
        case 'featured_image':
            echo "<style>img { max-width: 100%; }</style>";
            the_post_thumbnail( 'preview' );
        break;
    }
}
add_action( 'manage_posts_custom_column' , 'post_columns_data', 10, 2 ); 

// ======================================================================= Produk

add_filter( 'manage_edit-produk_columns', 'produk_columns' ) ;

function produk_columns( $columns ) {

    $columns = array(
        'cb' => '&lt;input type="checkbox" />',
        'title' => __( 'Judul Produk' ),
        'gambar_1' => 'Gambar',
        'harga_normal' => __( 'Harga' ),
        'berat_produk' => __( 'Berat' ),
        'date' => __( 'Date' ),
    );

    return $columns;
}

add_action( 'manage_produk_posts_custom_column', 'my_manage_produk_columns', 10, 2 );

function angkaToRp($angka) {
        return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3))) . ',-';
}

function my_manage_produk_columns( $column, $post_id ) {
    global $post;

    switch( $column ) {

        case 'gambar_1':
            $image = get_field('gambar_1');
            if( !empty( $image ) ) { ?>
                <a style="display:block;" href="<?php echo get_admin_url(); ?>post.php?post=<?php echo $post_id; ?>&action=edit"><img style="border-radius:4px;" src="<?php echo esc_url($image['sizes']['mini']); ?>" /></a>
            <?php } else { ?>
                —
            <?php }
            break;

        case 'harga_normal' :
            $harga_normal = get_post_meta( $post_id, 'harga_normal', true );
            $diskon = get_post_meta( $post_id, 'diskon', true );
            if ( empty( $harga_normal ) ) {
                echo '—';
            } else {
                if($diskon) {
                    $harga_diskon = $harga_normal - $harga_normal * $diskon / 100;
                    echo '<h2>' . angkaToRp($harga_diskon) . '</h2>';
                    echo '<s style="color:red;">' . angkaToRp($harga_normal) . '</s>';
                    echo ' ( -' . $diskon . '% )' ;
                } else {
                    echo angkaToRp($harga_normal);
                }
            }

            break;

        case 'berat_produk' :

            $berat_produk = get_post_meta( $post_id, 'berat_produk', true );

            if ( empty( $berat_produk ) ) {
                echo '—';
            } else {
                echo $berat_produk/1000 . ' Kg' ;
            }

            break;

        default :
            break;
    }
}

// ======================================================================= Ulasan

add_filter( 'manage_edit-ulasan_columns', 'ulasan_columns' ) ;

function ulasan_columns( $columns ) {

    $columns = array(
        'cb' => '&lt;input type="checkbox" />',
        'title' => __( 'Nama & Produk' ),
        'date' => __( 'Tanggal' ),
        'teks_ulasan' => __( 'Ulasan' ),
        'foto_ulasan' => 'Foto',
    );

    return $columns;
}

add_action( 'manage_ulasan_posts_custom_column', 'my_manage_ulasan_columns', 10, 2 );

function my_manage_ulasan_columns( $column, $post_id ) {
    global $post;

    switch( $column ) {

        case 'teks_ulasan' :

            if( !empty( get_field('teks_ulasan') ) ) { ?>
                <p>"<?php echo get_field('teks_ulasan'); ?>"</p>
            <?php } else  { ?>
                —
            <?php }
            break;

        case 'foto_ulasan':
            $image = get_field('foto_ulasan');
            if( !empty( $image ) ) { ?>
                <a style="display:block;" href="<?php echo get_admin_url(); ?>post.php?post=<?php echo $post_id; ?>&action=edit"><img style="border-radius:4px;" src="<?php echo esc_url($image['sizes']['mini']); ?>" /></a>
            <?php } else { ?>
                —
            <?php }
            break;

        default :
            break;
    }
}
// ======================================================================= livesales

add_filter( 'manage_edit-livesales_columns', 'livesales_columns' ) ;

function livesales_columns( $columns ) {

    $columns = array(
        'cb' => '&lt;input type="checkbox" />',
        'title' => __( 'Nama Lengkap' ),
        'date' => __( '<i class="icon ion-ios-time"></i> Tanggal' ),
        'no_wa' => __( '<i class="icon ion-ios-contact"></i> Informasi Kontak' ),
        'berat_produk_sales' => __( '<i class="icon ion-ios-cube"></i> Berat Pesanan' ),
        'ss_sales' => '<i class="icon ion-ios-camera"></i> Screenshot Pembelian',
        'data_order_sales' => 'Aksi',
    );

    return $columns;
}

add_action( 'manage_livesales_posts_custom_column', 'my_manage_livesales_columns', 10, 2 );

function my_manage_livesales_columns( $column, $post_id ) {
    global $post;

    switch( $column ) {

        case 'no_wa':
            if( !empty( get_the_title() ) ) { ?>
                No. WA : <a  href="https://wa.me/<?php echo get_field('negara_sales') . get_field('no_wa_sales') ?>" class="popWin"><b><?php echo get_field('no_wa_sales'); ?></b></a><br/>
                E-mail : <small> <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=<?php echo get_field('email_sales'); ?>" class="popWin"><?php echo get_field('email_sales'); ?></a></small>
                <br/><br/>
                <small>Alamat :</small><br/>
                <b><?php echo get_field('alamat_sales'); ?></b><br/>
                <?php echo get_field('kota_sales'); ?> - <?php echo get_field('kecamatan_sales'); ?>
            <?php 
            } else  { ?>
                —
            <?php }
            break;
            
        case 'berat_produk_sales':
            if( !empty( get_field('berat_produk_sales') ) ) { ?>
                <style>th.column-berat_produk_sales { text-align: center; }</style>
            <?php if( !empty( get_field('berat_produk_sales'))) {
                    $TokoWA_alamat_toko_kota = get_theme_mod('TokoWA_alamat_toko_kota'); list($kode_kota, $kota) = explode(":", $TokoWA_alamat_toko_kota);
                    $berat = get_field('berat_produk_sales');
                    $dari = (get_theme_mod('TokoWA_alamat_toko_kota') ? $kota : 'Bandung (Kota)');
                    $dari_kode = (get_theme_mod('TokoWA_alamat_toko_kota') ? $kode_kota : 23);
                    $ke = get_field('kota_sales');
                    $ke_kode = get_field('kode_kota_sales');
                    echo '<center>';
                    echo '<h2>' . get_field('berat_produk_sales')/1000 . ' Kg</h2>';
                    echo '<a class="btnCustom cekongkir popWin" rel="nofollow" data-popWidth="1268" href="https://rajaongkir.com/widget/c?o=' . $dari . '&d=' . $ke . '&w=' . $berat . '&vo=' . $dari_kode . '&vd=' . $ke_kode . '"><i class="icon ion-ios-search"></i> <b>Cek</b> Ongkir</a><br/><small>by. <b>RajaOngkir</b> (Beta)</small>';
                    echo '</center>';
                }
            } else  { ?>
                —
            <?php }
            break;
            
        case 'ss_sales':
            $image = get_field('ss_sales');
            if( !empty( $image ) ) { ?>
                <a style="display:block;" href="<?php echo get_admin_url(); ?>post.php?post=<?php echo $post_id; ?>&action=edit"><img style="border-radius:4px;" src="<?php echo esc_url($image['sizes']['mini']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
            <?php } else { ?>
                —
            <?php }
            break;

        case 'data_order_sales':
            
            if( !empty( get_field('ss_sales'))) {
                echo "✔️ Selesai";
            } else if( !empty( get_field('data_order_sales') ) ) {
                $pesan_salam = (get_theme_mod('TokoWA_pesan_salam') ? get_theme_mod('TokoWA_pesan_salam') : 'Halo');
                $nama_toko = get_bloginfo('name');
                $web_toko = parse_url(get_home_url())['host'];
                $nama_user = get_the_title();
                $panggilan_user = (get_theme_mod('TokoWA_panggilan_user') ? get_theme_mod('TokoWA_panggilan_user') : 'agan');
                $nama_admin = esc_html(wp_get_current_user()->display_name );
                $data_order = get_field('data_order_sales');
                $Waktu_order = get_the_time( 'j F Y - g:i A' );
                ?>
                <a class="btnCustom followup popWin" href="https://api.whatsapp.com/send?phone=<?php echo get_field('negara_sales') . get_field('no_wa_sales'); ?>&text=
                <?php echo $pesan_salam; ?> *<?php echo $nama_user; ?>*, perkenalkan saya <?php echo $nama_admin; ?> dari *<?php echo $nama_toko; ?>*.%0A%0ABerikut ini adalah Data Pesanan <?php echo $panggilan_user; ?> di <?php echo $web_toko; ?> :<?php echo $data_order; ?>*Waktu Pemesanan :*%0A<?php echo $Waktu_order; ?>%0A%0ASelanjutnya, Mohon konfirmasi.. apakah pesanan <?php echo $panggilan_user; ?> akan dilanjutkan / tidak, terima kasih.. 🙏🏻"><i class="icon ion-logo-whatsapp"></i> Follow up!</a>
            <?php } else  { ?>
                —
            <?php }
            break;

        default :
            break;
    }
}


function filter_produks_by_taxonomies( $post_type, $which ) {

    // Apply this only on a specific post type
    if ( 'produk' !== $post_type )
        return;

    // A list of taxonomy slugs to filter by
    $taxonomies = array( 'kategori_produk' );

    foreach ( $taxonomies as $taxonomy_slug ) {

        // Retrieve taxonomy data
        $taxonomy_obj = get_taxonomy( $taxonomy_slug );
        $taxonomy_name = $taxonomy_obj->labels->name;

        // Retrieve taxonomy terms
        $terms = get_terms( $taxonomy_slug );

        // Display filter HTML
        echo "<select name='{$taxonomy_slug}' id='{$taxonomy_slug}' class='postform'>";
        echo '<option value="">' . sprintf( esc_html__( 'Semua %s', 'text_domain' ), $taxonomy_name ) . '</option>';
        foreach ( $terms as $term ) {
            printf(
                '<option value="%1$s" %2$s>%3$s (%4$s)</option>',
                $term->slug,
                ( ( isset( $_GET[$taxonomy_slug] ) && ( $_GET[$taxonomy_slug] == $term->slug ) ) ? ' selected="selected"' : '' ),
                $term->name,
                $term->count
            );
        }
        echo '</select>';
    }

}
add_action( 'restrict_manage_posts', 'filter_produks_by_taxonomies' , 10, 2);
?>