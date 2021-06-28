<?php
/*------------------------------------*\

    Custom Wordpress BACK-END!

\*------------------------------------*/
function my_login_logo() { ?>
    <style type="text/css">
    body {
        background: <?php echo (get_theme_mod('dominan_color') ? get_theme_mod('dominan_color') : '#009688'); ?>!important;
    }
        #login h1 a, .login h1 a {
        background-image: url(
            <?php echo (get_theme_mod('TokoWA_logo') ? get_theme_mod('TokoWA_logo') : get_template_directory_uri() . '/img/logo.png'); ?>
            );
        height:65px;
        width:80%;
        padding: 20px 0;
        margin:auto;
        background-size: contain;
        background-repeat: no-repeat;
        padding-bottom: 0;
        }
        #loginform {
            border:none;
            border-radius: 3px;
            box-shadow: inset 0 -4px 0 rgba(0,0,0,.1),0 1px 4px rgba(0,0,0,.04);
        }
        body a {
            color: #fff!important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
function my_login_logo_url_title() {
    return '©2019 by. <b>Toko-WA.com</b> - Developed by. KangRian.net';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );
function remove_wp_logo( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'wp-logo' );
}

// Remove : Credit
function remove_footer_admin () 
{
    echo '<span id="footer-thankyou" style="font-style:normal;font-size:90%;letter-spacing:1px;">©2019 by. <b>Toko-WA.com</b> - Developed by <a href="http://kangrian.net" title="kangrian リアンさん - Creator Digital" target="_blank">KangRian.net</a></span>';
}

add_filter('admin_footer_text', 'remove_footer_admin');

// Remove : tag <p> @ content
// remove_filter('the_content', 'wpautop');

// Remove : wp-block-library-css / style.min.css @ header
add_action( 'wp_enqueue_scripts', function() {
  wp_dequeue_style( 'wp-block-library' );
} );

// Remove : Emoji @ header
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove : block-library @ header
add_action( 'wp_enqueue_scripts', function() {
  wp_dequeue_style( 'wp-block-library' );
} );



// LazyLoad THE_CONTENT
function add_lazyload($content) {
     $dom = new DOMDocument();
     @$dom->loadHTML($content);


     foreach ($dom->getElementsByTagName('img') as $node) {  
         $oldsrc = $node->getAttribute('src');
         $node->setAttribute("data-src", $oldsrc );
         $newsrc = ''.get_template_directory_uri().'/library/images/nothing.gif';
         // $node->setAttribute("src", $newsrc);
         $node->removeAttribute("src");
     }
     $newHtml = $dom->saveHtml();
     return $newHtml;
}
add_filter('the_content', 'add_lazyload');

// LazyLoad & SEO : WP Gallery
add_filter('post_gallery', 'my_post_gallery', 10, 2);
function my_post_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 4,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

    $output .= "<div class=\"gallery\" itemscope=\"\" itemtype=\"http://schema.org/ImageGallery\">\n";

    foreach ($attachments as $id => $attachment) {
        $imgFull = wp_get_attachment_image_src($id, 'full');
        $img = wp_get_attachment_image_src($id, 'large');

        $output .= "<figure itemprop=\"associatedMedia\" itemscope itemtype=\"http://schema.org/ImageObject\">\n";
        $output .= "<a class=\"lightbox\" itemprop=\"url\" href=\"{$imgFull[0]}\">\n";
        $output .= "<img data-src=\"{$img[0]}\" alt=\"\" />\n";
        $output .= "</a>\n";
        $output .= "<meta itemprop=\"width\" content=\"{$img[1]}\"/>\n";
        $output .= "<meta itemprop=\"height\" content=\"{$img[2]}\"/>\n";
        $output .= "</figure>\n";
    }

    $output .= "</div>\n";

    return $output;
}
?>