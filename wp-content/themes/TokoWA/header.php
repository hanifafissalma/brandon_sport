<?php acf_form_head(); ?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
	    
		<?php require_once 'header-meta.php'; ?>
		<?php require_once 'schema-head.php'; ?>

		<meta content="<?php echo $dominan_color; ?>" name="theme-color">
		<meta content="<?php echo $dominan_color; ?>" name="msapplication-navbutton-color">
		<meta content="yes" name="apple-mobile-web-app-capable">
		<meta content="<?php echo $dominan_color; ?>" name="apple-mobile-web-app-status-bar-style">

		
	    <!-- <link rel="stylesheet" href="https://cdn.statically.io/gh/ionic-team/ionicons/5f31f277/docs/css/ionicons.min.css"> -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,500&display=swap">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/owl/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/mfp/mfp.css">
	    <style type="text/css">
			<?php require_once 'lib/custom-css.php'; ?>
	    </style>

	    <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery.min.js"></script>
	    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	    
		<!-- wp_head -->
		<?php wp_head(); ?>
		<!-- / wp_head -->

	</head>
	<body <?php body_class(); ?>>
		<div id="JSON_Cart" class="hide"></div>
		<?php if ( is_user_logged_in() && !isset($_GET["customize_theme"]) ) { ?>
	    <a class="indicator" style="box-shadow: 0 5px 15px rgba(0, 0, 0, .08);position: fixed;z-index: 999; left: 30px;bottom: 30px;display: inline-block;background: #fff;color:<?php echo $dominan_color; ?>;padding: 5px 20px;border-radius: 100px;" href="<?php echo get_home_url() . '/wp-admin/customize.php'; ?>"><i class="icon ion-md-brush"></i> Sesuaikan</a>
		<?php } ?>
		    <header id="header" role="banner">
		    	
		        <div class="wrapper grid">
		            <div class="item btnSearch">
		                <a class="openSearch" href="javascript:void(0);">
		                    <span><i class="icon ion-md-menu"></i></span>
		                </a>
		            </div>
		            <div class="item logo">
	                    <a href="<?php echo home_url(); ?>">
					    	<img alt="Logo <?php bloginfo('name'); ?>" src="<?php echo (get_theme_mod('TokoWA_logo') ? get_theme_mod('TokoWA_logo') : get_template_directory_uri() . '/img/logo.png'); ?>">
	                    </a>
		            </div>
		      
	            	<div class="item search">
	            		<div class="searchForm">
							<form action="<?php echo home_url(); ?>" method="get" role="search">
								<span class="close"><i class="icon ion-ios-arrow-back"></i></span>
								<input autocomplete="off" class="text" name="s" placeholder="Cari di <?php bloginfo('name'); ?>.." required="" type="text" value="" name="s" id="keyword" onkeyup="fetch()">
								<button><i class="icon ion-ios-search"></i></button>
							</form>
						</div>
						<div class="inSearch">
							<div class="tabSearch">
								<h4 class="titleSearch"><a data-target="itemSearch" href="javascript:void(0);" class="active"><i class="icon ion-ios-search"></i> Saran Pencarian</a><a data-target="itemCat" href="javascript:void(0);"><i class="icon ion-ios-menu"></i> Kategori</a></h4>
								<div class="itemTab" id="itemSearch" itemscope itemtype="http://schema.org/SiteNavigationElement" role="navigation">
									<?php TokoWA_navInfo(); ?>
								</div>
								<div class="itemTab" id="itemCat" itemscope itemtype="http://schema.org/SiteNavigationElement" role="navigation">
									<ul>
										<small><a href="<?php echo home_url() . '/' . 'produk'; ?>">Lihat Semua <i class="icon ion-ios-arrow-forward"></i></a>Produk</small>
									    <?php wp_list_categories( array(
									    	'taxonomy' => 'kategori_produk',
									        'orderby'    => 'name',
									        'show_count' => true,
			        						'title_li' => ''
									        // 'feed'       => 'RSS'
									    ) );
									    ?>
										<small><a href="<?php echo get_permalink( get_option( 'page_for_posts', true ) ); ?>">Lihat Semua <i class="icon ion-ios-arrow-forward"></i></a><?php echo get_the_title( get_option('page_for_posts', true) ); ?></small>
									    <?php wp_list_categories( array(
									        'orderby'    => 'name',
									        'show_count' => true,
			        						'title_li' => ''
									        // 'feed'       => 'RSS'
									    ) );
									    ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="item nav-header">
						<a href="https://brandonsport.id/produk/">Katalog</a>
						 <a href="https://brandonsport.id/category/info/promo/">Promo</a>
						 <a href="https://brandonsport.id/blog/">Blog</a>
					</div>
				      <div class="item btnNotif">
		                <a class="poptamvBtn" data-title="<i class='icon ion-ios-notifications'></i> Pemberitahuan" data-target="notif" href="javascript:void(0);">
		                    <i class="icon ion-ios-notifications"></i><span class="count indicator"></span>
		                </a>
		            </div>
		            <div class="item btnCart">
		                <a class="openCart poptamvBtn" data-title="<i class='icon ion-ios-basket'></i><b>Keranjang</b> Pesanan" data-target="checkoutWA" href="javascript:void(0);">
		                    <i class="icon ion-ios-basket"></i><span class="count"></span>
		                </a>
		                <div id="cartHeader">
		                    <div class="off">
		                        <center>Belum ada produk..</center>
		                    </div>
		                    <div class="on">
		                        <h4>Baru ditambahkan ..</h4>
		                        <ul id="listCartHeader" class="listCart"></ul>
		                        <div class="action">
		                            <a class="vieTokoWA poptamvBtn" data-title="<i class='icon ion-ios-basket'></i><b>Keranjang</b> Pesanan" data-target="checkoutWA" href="javascript:void(0);"><i class="icon ion-ios-basket"></i> Lihat Pesanan</a>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </header>