<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: TokoWA.com | @TokoWA
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/
require 'theme-updates/theme-update-checker.php';
$example_update_checker = new ThemeUpdateChecker(
	'TokoWA', //Theme folder
	'https://m.kangrian.net/download/tokowa-wordpress/update.json' //URL of the metadata file.
);
require_once 'func/dashboard.php';
require_once 'func/theme-customizer.php';
require_once 'func/acfImport.php';
require_once 'func/acfSearch.php';
require_once 'func/postType.php';
require_once 'func/custom.php';
require_once 'func/breadcrumbs.php';
require_once 'func/adminColumns.php';
require_once 'func/searchAjax.php';
require_once 'func/nyoba2.php';


function addhttp($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width)) {
    $content_width = 900;
}

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('mini', 168, 168, true); // the_post_thumbnail('custom-size');
    add_image_size('large', 768, 768, true); // the_post_thumbnail('large');
    add_image_size('socmed', 768, 384, true); // the_post_thumbnail('large');
    add_image_size('preview', 768, '', true); // the_post_thumbnail('preview');
    add_image_size('full', '', '', true); // the_post_thumbnail('preview');
    // the_post_thumbnail('mini');

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/
 
add_action( 'admin_enqueue_scripts', 'add_script_to_menu_page' );

add_action('admin_head', 'wp_admin_head');
function wp_admin_head() {
    echo '<link href="' . get_template_directory_uri() . '/lib/ionicons/css/ionicons.min.css" rel="stylesheet" />';
    echo "<style>";
        get_template_part('lib/wp-admin-css');
    echo "</style>";


}
add_action('admin_footer', 'wp_admin_footer');
function wp_admin_footer() {
    wp_enqueue_script( 'myscript', get_bloginfo('template_directory') . '/lib/wp-admin.js', array( 'jquery' ), '', true );
}
function add_menu_atts( $atts, $item, $args ) {
  $atts['itemprop'] = 'url';
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_atts', 10, 3 );
// Toko-WA.com navigation
function TokoWA_navInfo() {
    wp_nav_menu(
    array(
        'theme_location'  => 'info-menu',
        'menu'            => '',
        'container'       => 'nav',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '<span itemprop="name">',
        'link_after'      => '</span>',
        'items_wrap'      => '<ul>%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}

// Load Toko-WA.com styles
function TokoWA_styles() {
    wp_register_style('TokoWA', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('TokoWA'); // Enqueue it!
}

// Register Toko-WA.com Navigation
function register_TokoWA_menu() {
    register_nav_menus(array( // Using array to specify more menus if needed
        'info-menu' => __('Menu Informasi', 'TokoWA'), // Main Navigation
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '') {
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var) {
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist) {
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes) {
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}
// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Sidebar Widget', 'TokoWA'),
        'description' => __('Description for this widget-area...', 'TokoWA'),
        'id' => 'sidebar-widget-area',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Footer Widget', 'TokoWA'),
        'description' => __('Description for this widget-area...', 'TokoWA'),
        'id' => 'footer-widget-area',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function TokoWAwp_pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'prev_next'          => true,
        'prev_text'          => __('<i class="icon ion-ios-arrow-back"></i>'),
        'next_text'          => __('<i class="icon ion-ios-arrow-forward"></i>'),
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function TokoWAwp_index($length) // Create 20 Word Callback for Index page Excerpts, call using TokoWAwp_excerpt('TokoWAwp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using TokoWAwp_excerpt('TokoWAwp_custom_post');
function TokoWAwp_custom_post($length) {
    return 40;
}

// Create the Custom Excerpts callback
function TokoWAwp_excerpt($length_callback = '', $more_callback = '') {
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        // add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}
// Remove Admin bar
function remove_admin_bar() {
    return false;
}
function remove_the_excerpt() {
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function TokoWA_style_remove($tag) {
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function TokoWAgravatar ($avatar_defaults) {
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments() {
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function tokoWAcomments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-author vcard">
    <?php if ($args['avatar_size'] != 0) { ?>
        <img data-src="<?php echo get_avatar_url( $comment, $args['180'] ); ?>"/>
    <?php } ?>
    <div class="comment-author-wrap">
        <div class="flexWrap">
            <?php printf(__('<b class="fn">%s</b>'), get_comment_author_link()); ?>
            <div class="comment-meta commentmetadata">
                <a title="<?php printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()); ?>" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php echo human_time_diff( get_comment_time( 'U' ), current_time('timestamp') ) . ' yang lalu..' ?></a>
                &nbsp;
                <?php edit_comment_link(__('(Edit)'),'  ','' ); ?>
            </div>
        </div>
    </div>
    </div>
<?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
    <br />
<?php endif; ?>

    <?php comment_text() ?>

    <div class="reply">
    <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
<?php }


/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'TokoWA_styles'); // Add Theme Stylesheet
add_action('init', 'register_TokoWA_menu'); // Add Toko-WA.com Menu
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'TokoWAwp_pagination'); // Add our TokoWA Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'TokoWAgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'TokoWA_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('TokoWA_shortcode_demo', 'TokoWA_shortcode_demo'); // You can place [TokoWA_shortcode_demo] in Pages, Posts now.
add_shortcode('TokoWA_shortcode_demo_2', 'TokoWA_shortcode_demo_2'); // Place [TokoWA_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [TokoWA_shortcode_demo] [TokoWA_shortcode_demo_2] Here's the page title! [/TokoWA_shortcode_demo_2] [/TokoWA_shortcode_demo]

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function TokoWA_shortcode_demo($atts, $content = null) {
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function TokoWA_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}
?>
