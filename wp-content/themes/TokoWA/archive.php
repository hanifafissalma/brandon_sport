<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<header class="pageTitle wrapper">
				<div class="flex left">
					<h1>
						<?php if(is_tax( 'kategori_produk' ) ) { ?>
							<?php single_cat_title(''); ?>
						<?php } else { ?>
							<?php single_cat_title(''); ?>
							<?php wp_title(''); ?>
						<?php } ?>
						<?php if ( is_tax( 'kategori_produk' ) || is_post_type_archive( 'produk' ) ) { ?>
						<a href="javascript:void(0)" class="toggleBtn"></a>
						<?php } ?>
					</h1>
				</div>

				<?php if ( is_tax( 'kategori_produk' ) || is_post_type_archive( 'produk' ) ) { ?>

					<div class="flex right">
						<div class="sortby select">
				    		<select>
				    			<option value="" hidden>Terbaru</option>
				    			<option value="terbaru" style="font-size: 180%;">&nbsp;Terbaru&nbsp;</option>
				    			<option value="termurah" style="font-size: 140%;">&nbsp;Termurah&nbsp;</option>
				    			<option value="termahal" style="font-size: 120%;">&nbsp;Termahal&nbsp;</option>
				    		</select>
						</div>
					</div>
					<script type="text/javascript">
						(function($){
							var url = location.protocol + '//' + location.host + location.pathname;
						    $(document).on('change','.sortby select', function(){
						        var val = $(this).val();
						            if(val != 'terbaru') {
						                window.location.href = url + '?urutkan=' + val;
						            } else {
						                window.location.href = url;
						            }
						    });
							<?php if( isset($_GET["urutkan"]) ) {
								$urutkan_val = $_GET["urutkan"]; ?>
						        <?php if ( trim($urutkan_val) != 'terbaru' ) { ?>
					        		$('.sortby select').find('option[value=<?php echo $urutkan_val; ?>]').attr('selected','selected');
						        <?php } ?>
							<?php } ?>
						})(jQuery);
					</script>

				<?php } else { ?>
					<div class="flex right">
			    		<a class="poptamvBtn" data-title="<i class='icon ion-logo-rss'></i>Ikuti" data-target="ikuti" href="javascript:void(0);"><i class="icon ion-logo-rss"></i> Ikuti</a>
					</div>
				<?php } ?>

			</header>
			<?php if ( is_tax( 'kategori_produk' ) || is_post_type_archive( 'produk' ) ) { ?>
				<div class="wrapper archiveWrap">
					<nav>
						<div class="catside">
								<h3>
									<?php if(is_user_logged_in()){ ?>
										<a class="indicator" style="float: right;" href="<?php echo home_url() . '/wp-admin/edit-tags.php?taxonomy=kategori_produk&post_type=produk' ?>"><span class="icon ion-md-create"> Edit</span></a>
									<?php } ?>
									<span class="icon ion-ios-pricetag"></span> Kategori 
								</h3>
								<ul>
								    <?php wp_list_categories( array(
								    	'taxonomy' => 'kategori_produk',
								        'orderby'    => 'name',
								        'show_count' => true,
		        						'title_li' => ''
								        // 'feed'       => 'RSS'
								    ) );
								    ?>
								    <li>
								    	<a href="<?php echo home_url() . '/' . 'produk'; ?>">Semua Produk</a>
								    </li>
								</ul>
						</div>
					</nav>
					<div class="looPag">
						<?php get_template_part('loop'); ?>
						<?php get_template_part('pagination'); ?>
					</div>
				</div>
			<?php } else { ?>
				<div class="wrapper">
					<?php get_template_part('loop'); ?>
					<?php get_template_part('pagination'); ?>
				</div>
			<?php } ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
