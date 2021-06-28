<?php get_header(); ?>
<?php
$postID = get_the_ID();
global $post;
$author_id = $post->post_author;
?>
<div class="wrapper mainAside">
    <main role="main">
        <section>
            <!-- article -->
			<article id="post" <?php post_class('post-' . $postID); ?>>

				<!-- post thumbnail -->
				<div class="imgWrap expand">

	    			<?php edit_post_link('<i class="icon abs ion-md-create"></i>'); ?>
					<figure class="thumbPost">
						<picture>
							<?php if ( has_post_thumbnail() ) { ?>
								<img alt="<?php echo get_the_title($postID); ?> - <?php bloginfo('name'); ?>" data-src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($postID),'socmed',true); ?>"/>
							<?php } else { ?>
								<img alt="<?php echo get_the_title($postID); ?> - <?php bloginfo('name'); ?>" data-src="<?php echo (get_theme_mod('TokoWA_cover') ? get_theme_mod('TokoWA_cover') : get_template_directory_uri() . '/img/cover.png'); ?>"/>
							<?php } ?>
						</picture>
					</figure>
				</div>
				<!-- /post thumbnail -->

				<h1 class="postTitle">
					<?php the_title(); ?>
				</h1>
				<?php if(has_category()) { ?>
					<div class="postTag">
						<?php the_category( ' ', ' '); // Separated by commas ?>
					</div>
				<?php } ?>
				<div class="postGrid">
					<div class="avaPost">
						<img data-src="<?php echo "https://www.gravatar.com/avatar/" . md5( strtolower( trim( get_the_author_meta('user_email', $author_id ) ) ) ) . "?s=35&d=mp&r=g"; ?>" />
					</div>
					<div class="infoPost">
						<div class="flexwrap">
				            Oleh. <b><?php echo get_the_author_meta( 'display_name', $author_id ); ?></b>
				        	<br/>
				            <small>
					            <?php the_time('j F Y'); ?> (<?php the_time('g:i A'); ?>)
					        	<?php if (comments_open( get_the_ID() ) ) echo '<br/>', comments_popup_link( __( '', 'wCart' ), __( '1 Komentar', 'wCart' ), __( '% Komentar', 'wCart' )); ?>
				            </small>
						</div>
					</div>
                    <div class="shareThis">
                        <span>Bagikan</span>
                        <a title="Whatsapp" class="whatsapp popWin" href="https://api.whatsapp.com/send?text=<?php echo get_the_title($postID) . ' - ' . get_bloginfo('name') . ' ( ' . wp_get_shortlink($postID) . ' )'; ?>"><i class="icon ion-logo-whatsapp"></i></a>
                        <a title="Facebook" class="facebook popWin" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo wp_get_shortlink($postID); ?>"><i class="icon ion-logo-facebook"></i></a>
                        <a title="Twitter" class="twitter popWin" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($postID) . ' - ' . get_bloginfo('name') . ' ( ' . wp_get_shortlink($postID) . ' )'; ?>"><i class="icon ion-logo-twitter"></i></a>
                    </div>
				</div>

				<div class="postContent_wrap">
					<div class="postContent">
						<?php 
						$content_post = get_post($postID);
						$content = $content_post->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]&gt;', $content);
						echo $content; ?>
						<?php if(get_the_modified_date()) { ?><small style="opacity: .6;display: block;margin-top: 20px;"><i><i class="icon ion-ios-time"></i> Terakhir disunting : <?php echo human_time_diff( get_the_modified_date( 'U', $postID ), current_time('timestamp') ) . ' yang lalu' ?>..</i></small><?php } ?>
					</div>
				</div>
				<?php if(has_tag()) { ?>
					<div class="postTag">
						<?php the_tags( ' ', ' '); // Separated by commas with a line break at the end ?>
					</div>
				<?php } ?>


                <?php $categories = get_the_category();
                $cat_LINK = esc_url( get_category_link( $categories[0]->term_id ) );
                $cat_SLUG = esc_html( $categories[0]->name );
                $getcat_SLUG = get_category_by_slug($cat_SLUG);
                $cat_ID = $getcat_SLUG->term_id; 
                $my_query = new WP_Query( array('cat' => $cat_ID, 'post_type' => 'post','posts_per_page' => '2', 'post__not_in'=>array($post->ID), 'order' => 'DESC'));
                if($my_query->found_posts > 1) { ?>
                    <div class="postRelated loop">
                        <header class="pageTitle">
                            <div class="flex left">
                                <h3>
                                    Terkait
                                </h3>
                            </div>
                            <div class="flex right">
                                <a href="<?php echo $cat_LINK; ?>">Lihat Semua <i class="icon ion-ios-arrow-forward"></i></a>
                            </div>
                        </header>
                        <div class="loopGrid related">
                            <?php if ($my_query->have_posts() ) : while ($my_query->have_posts() ) : $my_query->the_post(); ?>
                                <?php if($postID != get_the_ID() ) { ?>
                                    <?php get_template_part('loop-post'); ?>
                                <?php } ?>
                            <?php endwhile; else: endif; ?>
                        </div>
                    </div>
                <?php } ?>
                <?php 
			    wp_reset_postdata();
			    ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

    			<?php wp_breadcrumbs(); ?>
			</article>
			<!-- /article -->
        </section>
    </main>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>