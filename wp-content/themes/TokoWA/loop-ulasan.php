<?php
$ulasanID = get_the_ID();
$link_ulasan = get_the_permalink(get_field('produk_ulasan')) . '#ulasan_' . $ulasanID;
?>
<div class="item_ulasan" id="ulasan_<?php echo $ulasanID; ?>">
    <div class="ava_info">
        <?php if(get_field('website_ulasan',$ulasanID)) { ?>
            <a href="<?php echo addhttp(get_field('website_ulasan',$ulasanID)); ?>" target="_blank" rel="external nofollow" title="<?php the_field('nama_ulasan',$ulasanID); ?> - <?php the_field('website_ulasan',$ulasanID); ?>">
                <img class="ava" alt="<?php the_field('nama_ulasan',$ulasanID); ?>" data-src="<?php echo "https://www.gravatar.com/avatar/" . md5( strtolower( trim( get_field('email_ulasan') ) ) ) . "?s=50&d=mp&r=g"; ?>"/>
            </a>
        <?php } else { ?>
            <img class="ava" alt="<?php the_field('nama_ulasan',$ulasanID); ?>" data-src="<?php echo "https://www.gravatar.com/avatar/" . md5( strtolower( trim( get_field('email_ulasan') ) ) ) . "?s=50&d=mp&r=g"; ?>"/>
        <?php } ?>
    	<div class="info">
            <div class="flexwrap">
        		<h4>    
                    <?php if(get_field('website_ulasan',$ulasanID)) { ?>
                        <a href="<?php echo addhttp(get_field('website_ulasan',$ulasanID)); ?>" target="_blank" rel="external nofollow" title="<?php the_field('nama_ulasan',$ulasanID); ?> - <?php the_field('website_ulasan',$ulasanID); ?>">
                    <?php the_field('nama_ulasan'); ?>
                        </a>
                    <?php } else { ?>
                        <?php the_field('nama_ulasan'); ?>
                    <?php } ?>
                    <?php edit_post_link(' ( Edit )'); ?>
                </h4>
                <a class="rating" data-rating="<?php the_field('rating_ulasan'); ?>" href="<?php echo $link_ulasan; ?>" target="_blank"></a>
            </div>
    	</div>
    </div>
    <p>
        <?php $teks_ulasan = get_field('teks_ulasan');
        echo strlen($teks_ulasan) > 140 ? substr($teks_ulasan,0,140)."... <a target='_blank' href='".$link_ulasan."'>lainnya</a>" : $teks_ulasan; ?>
        <?php if(get_field('foto_ulasan')) { ?>
            <br/>
            <br/>
            <a href="<?php echo $link_ulasan; ?>" target="_blank">
                <img alt="<?php the_field('nama_ulasan',$ulasanID); ?> : <?php the_field('teks_ulasan',$ulasanID); ?>" data-src="<?php echo esc_url(get_field('foto_ulasan')['sizes']['mini']); ?>"/>
            </a>
        <?php } ?>
        <br/>
        <small><?php echo human_time_diff( get_the_time( 'U', $ulasanID ), current_time('timestamp') ) . ' lalu'; ?></small>
    </p>
    <small>via <a href="<?php echo $link_ulasan; ?>" target="_blank"><?php echo get_the_title(get_field('produk_ulasan')); ?></a></small>
</div>