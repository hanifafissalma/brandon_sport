<?php $postID = get_the_ID();
global $post;
$author_id = $post->post_author;
?>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "<?php echo get_the_title($postID); ?>",
    "image": "<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($postID),'socmed',true); ?>",
    "author": {
        "@type": "Person",
        "name": "<?php echo get_the_author_meta( 'display_name', $author_id ); ?>",
        "image": "<?php echo "https://www.gravatar.com/avatar/" . md5( strtolower( trim( get_the_author_meta('user_email') ) ) ) . "?s=300&d=mp&r=g"; ?>"
    },
    "publisher":
    {
        "@type": "Organization",
        "name": "Google",
        "logo":
        {
            "@type": "ImageObject",
            "url": "<?php echo (get_theme_mod('TokoWA_logo') ? get_theme_mod('TokoWA_logo') : get_template_directory_uri() . '/img/logo.png'); ?>"
        }
    },
    "url": "<?php echo get_the_permalink($postID ); ?>",
    "mainEntityOfPage":
    {
        "@type": "WebPage",
        "@id": "https://google.com/article"
    },
    "datePublished": "<?php echo get_the_time( 'c', $postID ); ?>",
    "dateCreated": "<?php echo get_the_time( 'c', $postID ); ?>",
    "dateModified": "<?php echo get_the_modified_date( 'c', $postID ); ?>",
    "keywords": "<?php echo get_field('seo_keywords',$postID); ?>",
    "description": "<?php echo get_field('seo_description',$postID); ?>",
    <?php 
    $content = '';
        $content_post = get_post($postID);
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
    ?>
    "wordcount": "<?php echo str_word_count(htmlentities(strip_shortcodes(wp_strip_all_tags( $content )), ENT_QUOTES)); ?>",
    "articleBody": "<?php echo htmlentities(strip_shortcodes(wp_strip_all_tags( $content )), ENT_QUOTES); ?>"
}
</script>