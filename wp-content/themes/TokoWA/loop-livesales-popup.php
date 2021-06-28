<?php $livesalesID = get_the_ID(); ?>
<div class="item_livesales" id="livesales_<?php echo $livesalesID; ?>">
	<span class="closelivesales">&#215;</span>
	<img alt="<?php echo get_the_title($livesalesID); ?>" class="img" data-src="
		<?php if(get_field('ss_sales',$livesalesID)) { ?>
    		<?php echo esc_url(get_field('ss_sales',$livesalesID)['sizes']['mini']); ?>
		<?php } else { ?>
    		<?php echo "https://www.gravatar.com/avatar/" . md5( strtolower( trim( get_field('email_sales',$livesalesID) ) ) ) . "?s=168&d=mp&r=g"; ?>
    	<?php } ?>
		"/>
    <div class="wrap">
    	<div class="detail">
		    <b><?php echo get_the_title($livesalesID); ?></b> <?php edit_post_link('( Edit )'); ?>
		    <?php if(get_field('kota_sales',$livesalesID)) { ?>dari <b><?php echo get_field('kota_sales',$livesalesID); ?></b><?php } ?>
		    telah <?php if(get_field('ss_sales', $livesalesID)) { ?>membeli<?php } else { ?>memesan<?php } ?>
				<?php $posts = array_unique(get_field('produk_sales',$livesalesID));
				if( $posts ): ?>
				    <?php
				    	$i = 1;
				    	foreach( $posts as $post): // variable must be called $post (IMPORTANT)
			    	?>
			        <?php setup_postdata($post); 
				    	$count = count($posts);
				        if ($count == 1) {
				        	$symbol = '';
				        } elseif ($count > 1){
				        	if ($i == 2 && $count > 2 ) {
					        	$symbol = ' ...';
					        } elseif ($i == $count - 1) {
					        	$symbol = ' & ';
					        } elseif ($i == $count) {
					        	$symbol = '';
					        } else {
					        	$symbol = ' , ';
					        }
				        }
			        ?>
			        	<a class="product" href="<?php the_permalink(); ?>?from=livesales" target="_blank"><?php the_title() ?></a><?php echo $symbol; ?>
				    <?php
				    	$i++;
				    	if($i > 2) {
				    		break;
				    	}
						endforeach;
					?>
				<?php endif; ?>
			    <?php wp_reset_postdata(); ?>
				<br/>

			<small>
				<i class="icon ion-ios-pricetag"></i> <?php echo human_time_diff( get_the_time( 'U', $livesalesID ), current_time('timestamp') ) . ' lalu..' ?>

				<a class="poptamvBtn cekSales" data-width="480" data-title="<i class='icon ion-ios-<?php if(get_field('ss_sales',$livesalesID)) { ?>camera<?php } else { ?>notifications<?php } ?>'></i>
					<b><?php echo get_the_title($livesalesID); ?></b>
					<?php if(get_field('kota_sales',$livesalesID) || get_field('kecamatan_sales',$livesalesID)) { ?> dari
						<?php if(get_field('kota_sales',$livesalesID)) { ?>
							<?php echo get_field('kota_sales',$livesalesID); ?>
						<?php } ?>
						<?php if(get_field('kecamatan_sales',$livesalesID)) { ?>,
							<?php echo get_field('kecamatan_sales',$livesalesID); ?>
						<?php } ?>
					<?php } ?>
					" data-time="Telah <?php if(get_field('ss_sales', $livesalesID)) { ?>membeli<?php } else { ?>memesan<?php } ?>
<?php $posts = array_unique(get_field('produk_sales',$livesalesID));
if( $posts ): ?>
    <?php
    	$i = 1;
    	foreach( $posts as $post): // variable must be called $post (IMPORTANT)
	?>
    <?php setup_postdata($post); 
    	$count = count($posts);
        if ($count == 1) {
        	$symbol = '';
        } elseif ($count > 1){
        	if ($i == $count - 1) {
	        	$symbol = ' & ';
	        } elseif ($i == $count) {
	        	$symbol = '';
	        } else {
	        	$symbol = ' , ';
	        }
        }
    ?>
    	<a class='product' href='<?php the_permalink(); ?>?from=livesales_popup' target='_blank'><?php the_title() ?></a><?php echo $symbol; ?>
    <?php
    	$i++;
		endforeach;
	?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
<small style='opacity:.8;display: block;border-top: 1px solid rgba(0,0,0,.06);margin-top:10px;padding-top:15px;'><i class='icon ion-ios-pricetag'></i> <?php echo human_time_diff( get_the_time( 'U', $livesalesID ), current_time('timestamp') ) . ' yang lalu..' ?></small>

" <?php if(get_field('ss_sales',$livesalesID)) { ?>data-img="<?php echo esc_url(get_field('ss_sales', $livesalesID)['sizes']['preview']); ?>"<?php } ?> data-target="viewlivesales" href="javascript:void(0);">
					<i class="icon ion-ios-search"></i> Lihat
				</a>
			</small>
		</div>
	</div>
</div>