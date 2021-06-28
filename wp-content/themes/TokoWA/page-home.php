<?php /* Template Name: Home */ get_header(); ?>
	<main role="main">
		<?php if(get_theme_mod('TokoWA_home_slide_banner') == 0) { ?>
		<section id="slide" class="wrapper">
			<div class="grid">
				<div class="owl-carousel owl-theme">
						<div class="item">
							<a href="<?php echo $home_slide_1_url = (get_theme_mod('TokoWA_home_slide_1_url') ? get_theme_mod('TokoWA_home_slide_1_url') : ''); ?>">
								<img alt="Promo <?php bloginfo('name'); ?>" data-src="<?php echo (get_theme_mod('TokoWA_home_slide_1') ? get_theme_mod('TokoWA_home_slide_1') : get_template_directory_uri() . '/img/1000x500.png'); ?>"/>
							</a>
						</div>
						<div class="item">
							<a href="<?php echo $home_slide_2_url = (get_theme_mod('TokoWA_home_slide_2_url') ? get_theme_mod('TokoWA_home_slide_2_url') : ''); ?>">
								<img alt="Promo <?php bloginfo('name'); ?>" data-src="<?php echo (get_theme_mod('TokoWA_home_slide_2') ? get_theme_mod('TokoWA_home_slide_2') : get_template_directory_uri() . '/img/1000x500.png'); ?>"/>
							</a>
						</div>
						<div class="item">
							<a href="<?php echo $home_slide_3_url = (get_theme_mod('TokoWA_home_slide_3_url') ? get_theme_mod('TokoWA_home_slide_3_url') : ''); ?>">
								<img alt="Promo <?php bloginfo('name'); ?>" data-src="<?php echo (get_theme_mod('TokoWA_home_slide_3') ? get_theme_mod('TokoWA_home_slide_3') : get_template_directory_uri() . '/img/1000x500.png'); ?>"/>
							</a>
						</div>
						<div class="item">
							<a href="<?php echo $home_slide_4_url = (get_theme_mod('TokoWA_home_slide_4_url') ? get_theme_mod('TokoWA_home_slide_4_url') : ''); ?>">
								<img alt="Promo <?php bloginfo('name'); ?>" data-src="<?php echo (get_theme_mod('TokoWA_home_slide_4') ? get_theme_mod('TokoWA_home_slide_4') : get_template_directory_uri() . '/img/1000x500.png'); ?>"/>
							</a>
						</div>
				</div>
				<div class="banner">
					<a href="<?php echo $home_banner_1_url = (get_theme_mod('TokoWA_home_banner_1_url') ? get_theme_mod('TokoWA_home_banner_1_url') : ''); ?>">
						<img alt="Promo <?php bloginfo('name'); ?>" data-src="<?php echo (get_theme_mod('TokoWA_home_banner_1') ? get_theme_mod('TokoWA_home_banner_1') : get_template_directory_uri() . '/img/500x500.png'); ?>"/>
					</a>
				</div>
			</div>
	
			
			<div class="wrapper">
				<div class="kategorifeatures">
				    <div class="item">
				        <div class="flex">
				            <div class="flexwrap">
				              
								<a href="<?php echo home_url() . '/' . 'kategori-produk/aksesoris'; ?>">
								<img src="https://brandonsport.id/wp-content/uploads/2020/12/perlengkapan-dan-aksesoris.png">
								</a>
								 
				            </div>
				        </div>
				      </div>
				      <div class="item">
				        <div class="flex">
				            <div class="flexwrap">
				             
								<a href="<?php echo home_url() . '/' . 'kategori-produk/sepakbola'; ?>">
								 <img src="https://brandonsport.id/wp-content/uploads/2020/12/koleksi-sepatu-sepak-bola.png">
								</a>
								 
				            </div>
				        </div>
				      </div>
				
				    <div class="item">
				        <div class="flex">
				            <div class="flexwrap">
				              
								<a href="<?php echo home_url() . '/' . 'kategori-produk/sneaker'; ?>">
									<img src="https://brandonsport.id/wp-content/uploads/2020/12/koleksi-sepatu-sneaker.png">
								</a>
								 
				            </div>
				        </div>
				      </div>
				      <div class="item">
				        <div class="flex">
				            <div class="flexwrap">
				             
								<a href="<?php echo home_url() . '/' . 'kategori-produk/futsal'; ?>">
									 <img src="https://brandonsport.id/wp-content/uploads/2020/12/koleksi-sepatu-futsal.png">
								</a>
								 
				            </div>
				        </div>
				      </div>
				</div>
					<div class="looPag">
						<?php get_template_part('loop'); ?>
						<?php get_template_part('pagination'); ?>
					</div>
				</div>
		</section>
		<?php } ?>
		<div class="wrapper">
			<?php require_once 'feature.php'; ?>
			<br/>
		</div>
		<?php if(get_theme_mod('TokoWA_home_produk') == 0) { ?>
		<section class="loop">
			<header class="pageTitle wrapper">
				<div class="flex left">
					<h3><b>Produk</b> Terbaru</h3>
				</div>
				<div class="flex right">
		    		<a class="poptamvBtn" data-title="<i class='icon ion-logo-rss'></i>Ikuti" data-target="ikuti" href="javascript:void(0);"><i class="icon ion-logo-rss"></i> Ikuti</a>
				</div>
			</header>
		    <div class="wrapper loopGrid produk">
	        	<?php
				$queryProduct = new WP_Query( array('post_type' => 'produk', 'posts_per_page' => '10', 'order' => 'DESC'));

				if ($queryProduct->have_posts() ) : while ($queryProduct->have_posts() ) : $queryProduct->the_post();?>
						<?php get_template_part('loop-product'); ?>
					<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
		    </div>
		    <div class="wrapper">
		    <center class="moreProduct"><a href="<?php echo home_url() . '/' . 'produk'; ?>"><i class="icon ion-ios-arrow-down"></i> Lainnya </a></center>
		    </div>
		</section>
		<?php } ?>
	</main>
<?php get_footer(); ?>