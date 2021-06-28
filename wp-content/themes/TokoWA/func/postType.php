<?php

add_action( 'init', 'kr_post_product' );
 
function kr_post_product() {
 
  $labels = array(
    'name'               => __( 'Produk' ),
    'singular_name'      => __( 'Produk' ),
    'add_new'            => __( '+ Tambah Produk' ),
    'add_new_item'       => __( '+ Tambah Produk' ),
    'edit_item'          => __( 'Edit Produk' ),
    'update_item'         => __( 'Perbarui Produk', 'text_domain' ),
    'new_item'           => __( 'Produk Baru' ),
    'all_items'          => __( 'Semua Produk' ),
    'view_item'          => __( 'Lihat Produk' ),
    'search_items'       => __( 'Cari Produk' ),
    'menu_name'           => __( 'Produk', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Produk:', 'text_domain' ),
    'not_found'           => __( 'Tidak ditemukan', 'text_domain' ),
    'not_found_in_trash'  => __( 'Tidak ditemukan di dalam tong sampah..', 'text_domain' ),
    'featured_image'     => 'Gambar Utama',
    'set_featured_image' => '+ Tambah Gambar'
  );
 
    register_taxonomy(
        'kategori_produk', // slug kategori
        'produk',  // post type
        array(
            'label' => __( 'Kategori Produk' ),
            'rewrite' => array( 'slug' => 'kategori-produk' ),
            'hierarchical' => true,
        )
    );
  $args = array(
    'menu_icon'           => 'dashicons-cart',
    'labels'              => $labels,
    'description'         => 'Holds our Produk and Produk specific data',
    'supports'            => array( 'title', 'editor', 'custom-fields'),
    // 'taxonomies'          => array( 'kategori_produk', 'post_tag' ),
    'hierarchical'        => true,
    'public'              => true,
    'menu_position'       => 4,
    'has_archive'         => true,
    'show_in_admin_bar'   => true,
    'show_in_nav_menus'   => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'can_export'          => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'          => true,
  );
  register_post_type( 'produk', $args);
}

add_action( 'init', 'kr_post_ulasan' );
 
function kr_post_ulasan() {
 
  $labels = array(
    'name'               => __( 'Ulasan Produk' ),
    'singular_name'      => __( 'Ulasan Produk' ),
    'add_new'            => __( '+ Tambah Ulasan' ),
    'add_new_item'       => __( '+ Tambah Ulasan' ),
    'edit_item'          => __( 'Edit Ulasan' ),
    'update_item'         => __( 'Perbarui Ulasan', 'text_domain' ),
    'new_item'           => __( 'ulasan Baru' ),
    'all_items'          => __( 'Semua Ulasan' ),
    'view_item'          => __( 'Lihat Ulasan' ),
    'search_items'       => __( 'Cari Ulasan' ),
    'menu_name'           => __( 'Ulasan Produk', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Ulasan:', 'text_domain' ),
    'not_found'           => __( 'Tidak ditemukan', 'text_domain' ),
    'not_found_in_trash'  => __( 'Tidak ditemukan di dalam tong sampah..', 'text_domain' ),
    'featured_image'     => 'Upload Screenshot',
    'set_featured_image' => '+ Tambah Gambar'
  );
 
  $args = array(
    'menu_icon'           => 'dashicons-testimonial',
    'labels'              => $labels,
    'description'         => 'Holds our Ulasan and Ulasan specific data',
    'supports'            => array( 'title', 'custom-fields' ),
    'hierarchical'        => true,
    'public'              => true,
    'menu_position'       => 5,
    'show_in_admin_bar'   => true,
    'show_in_nav_menus'   => false,
    'has_archive'         => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'can_export'          => true,
    'exclude_from_search' => true,
    'publicly_queryable'  => true,
    'query_var'          => true
  );
 
  register_post_type( 'ulasan', $args);
}

add_action( 'init', 'kr_post_livesales' );
 
function kr_post_livesales() {
 
  $labels = array(
    'name'               => __( 'Live Sales' ),
    'singular_name'      => __( 'Live Sales' ),
    'add_new'            => __( '+ Tambah Sales' ),
    'add_new_item'       => __( '+ Tambah Sales' ),
    'edit_item'          => __( 'Edit Sales' ),
    'update_item'         => __( 'Perbarui Sales', 'text_domain' ),
    'new_item'           => __( 'Sales Baru' ),
    'all_items'          => __( 'Semua Sales' ),
    'view_item'          => __( 'Lihat Sales' ),
    'search_items'       => __( 'Cari Sales' ),
    'menu_name'           => __( 'Live Sales', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Sales:', 'text_domain' ),
    'not_found'           => __( 'Tidak ditemukan', 'text_domain' ),
    'not_found_in_trash'  => __( 'Tidak ditemukan di dalam tong sampah..', 'text_domain' ),
    'featured_image'     => 'Upload Screenshot',
    'set_featured_image' => '+ Tambah Gambar'
  );
 
  $args = array(
    'menu_icon'           => 'dashicons-format-chat',
    'labels'              => $labels,
    'description'         => 'Holds our livesales and livesales specific data',
    'supports'            => array( 'title', 'custom-fields' ),
    'hierarchical'        => true,
    'public'              => false,
    'menu_position'       => 6,
    'show_in_admin_bar'   => true,
    'show_in_nav_menus'   => false,
    'has_archive'         => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'can_export'          => true,
    'exclude_from_search' => true,
    'publicly_queryable'  => true,
    'query_var'          => true
  );
 
  register_post_type( 'livesales', $args);
}

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if ( !is_admin() && $query->is_main_query() && is_category() ) {
        $post_type = get_query_var('post_type');
        if($post_type)
            $post_type = $post_type;
        else
            $post_type = array('nav_menu_item', 'post', 'produk', 'ulasan', 'livesales'); // don't forget nav_menu_item to allow menus to work!
        $query->set('post_type',$post_type);
        return $query;
        }
}
?>