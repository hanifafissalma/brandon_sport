<?php $postID = get_the_ID(); ?>

<article class='item_post' id='post_<?php echo $postID; ?>'>
	<div class="imgWrap">
		<a class="thumbPost" href="<?php echo get_the_permalink($postID); ?>" title="<?php echo get_the_title($postID); ?>">
			<?php if ( has_post_thumbnail() ) { ?>
				<img alt="<?php echo get_the_title($postID); ?> - <?php bloginfo('name'); ?>" data-src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($postID),'socmed',true); ?>"/>
			<?php } else { ?>
				<img alt="<?php echo get_the_title($postID); ?> - <?php bloginfo('name'); ?>" data-src="<?php echo (get_theme_mod('TokoWA_cover') ? get_theme_mod('TokoWA_cover') : get_template_directory_uri() . '/img/cover.png'); ?>"/>
			<?php } ?>
		</a>
	    <?php edit_post_link('<i class="icon abs ion-md-create"></i>'); ?>
	</div>

	<div class="postGrid">
		<div class="avaPost">
			<img data-src="<?php echo "https://www.gravatar.com/avatar/" . md5( strtolower( trim( get_the_author_meta('user_email') ) ) ) . "?s=35&d=mp&r=g"; ?>" />
		</div>
		<div class="infoPost">
			<h2>
				<a href="<?php echo get_the_permalink($postID); ?>" title="<?php echo get_the_title($postID); ?>"><?php echo get_the_title($postID); ?></a>
			</h2>
			<?php
            $categories = get_the_category();
            $author_id = get_the_author_meta( 'ID' );
            ?>
	            <small>
	            Oleh. <b><?php echo get_the_author_meta( 'display_name', $author_id ); ?></b>
	            &nbsp;•&nbsp; 
				<?php echo human_time_diff( get_the_time( 'U', $postID ), current_time('timestamp') ) . ' lalu' ?> 
				</small>
	            <small>
	        		<span class="icon ion-ios-pricetag"></span> &nbsp; <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ) ?>"><?php echo get_cat_name( $categories[0]->term_id ); ?></a>
					<?php if (comments_open( $postID ) ) comments_popup_link( __( '', 'wCart' ), __( '( 1 Komentar )', 'wCart' ), __( '( % Komentar )', 'wCart' )); ?>
	        	</small>
        </small>
		</div>
	</div>

</article>