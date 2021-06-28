<?php
// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/plugin/advanced-custom-fields/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/plugin/advanced-custom-fields/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return false;
}
add_filter('acf/settings/show_admin', '__return_false');

// (Optional) Force set ACF High ( After Title )
function prefix_reset_metabox_positions(){
  delete_user_meta( 1, 'meta-box-order_post' );
  delete_user_meta( 1, 'meta-box-order_page' );
  // delete_user_meta( 1, 'meta-box-order_produk' );
}
add_action( 'admin_init', 'prefix_reset_metabox_positions' );

// Export PHP Generate
include 'acfFieldGroup.php';
?>