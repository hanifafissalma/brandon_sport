<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<header class="pageTitle wrapper">
				<div class="flex left">
					<h1><?php wp_title(''); ?>
						<a href="javascript:void(0)" class="toggleBtn"></a>
					</h1>
				</div>
				<div class="flex right">
		    		<a class="poptamvBtn" data-title="<i class='icon ion-logo-rss'></i>Ikuti" data-target="ikuti" href="javascript:void(0);"><i class="icon ion-logo-rss"></i> Ikuti</a>
				</div>
			</header>
			<div class="wrapper archiveWrap">
				<nav>
					<div class="catside">
							<h3>
								<?php if(is_user_logged_in()){ ?>
									<a class="indicator" style="float: right;" href="<?php echo home_url() . '/wp-admin/edit-tags.php?taxonomy=category' ?>"><span class="icon ion-md-create"> Edit</span></a>
								<?php } ?>
								<span class="icon ion-ios-pricetag"></span> Kategori 
							</h3>
							<ul>
							    <?php wp_list_categories( array(
							    	// 'taxonomy' => 'kategori_produk',
							        'orderby'    => 'name',
							        'show_count' => true,
	        						'title_li' => ''
							        // 'feed'       => 'RSS'
							    ) );
							    ?>
							    <li>
							    	<a href="<?php echo get_permalink( get_option( 'page_for_posts', true ) ); ?>">Lihat Semua</a>
							    </li>
							</ul>
					</div>
				</nav>
				<div class="looPag">
					<?php get_template_part('loop'); ?>
					<?php get_template_part('pagination'); ?>
				</div>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
