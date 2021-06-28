
<!-- [ Title ] -->
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' — '; } ?> <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' — '; } ?> <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>" itemprop="name">
<meta content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' — '; } ?> <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>" name="twitter:title">
<meta content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' — '; } ?> <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>" name="twitter:image:alt">
<meta content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' — '; } ?> <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>" property="og:image:alt">
<meta content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' — '; } ?> <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>" property="og:title">
<meta content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' — '; } ?> <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>" property="og:site_name">

<!-- [ Description ] -->
<?php if(is_front_page() || is_home() || is_archive() || is_category() || is_tag() || is_author()) { ?>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="twitter:description" content="<?php bloginfo('description'); ?>">
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<?php } else if ( get_field('seo_description') ) { ?>
<meta name="description" content="<?php echo get_field('seo_description'); ?>">
<meta name="twitter:description" content="<?php echo get_field('seo_description'); ?>">
<meta property="og:description" content="<?php echo get_field('seo_description'); ?>">
<?php } else { ?>
<meta name="description" content="<?php the_excerpt(); ?>">
<meta name="twitter:description" content="<?php the_excerpt(); ?>">
<meta property="og:description" content="<?php the_excerpt(); ?>">
<?php }  ?>

<!-- [ Keywords ] -->
<?php if(is_front_page() || is_home() || is_archive() || is_category() || is_tag() || is_author()) { ?>
<meta name="keywords" content="<?php echo $keywords = (get_theme_mod('TokoWA_id_keywords') ? get_theme_mod('TokoWA_id_keywords') : 'Toko Online, WhatsApp, WordPress'); ?>">
<meta property="article:tag" content="<?php echo $keywords; ?>">
<?php } else if ( get_field('seo_keywords') ) { ?>
<meta name="keywords" content="<?php echo get_field('seo_keywords'); ?>">
<meta property="article:tag" content="<?php echo get_field('seo_keywords'); ?>">
<?php } else { ?>
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta property="article:tag" content="<?php echo $keywords; ?>">
<?php }  ?>
<!-- [ Icon ] -->
<link href="<?php echo (get_site_icon_url() ? get_site_icon_url() : get_template_directory_uri() . '/img/favicon.png'); ?>" rel="icon"/>
<link href="<?php echo (get_site_icon_url() ? get_site_icon_url() : get_template_directory_uri() . '/img/favicon.png'); ?>" rel="apple-touch-icon-precomposed"/>
<meta content="<?php echo (get_site_icon_url() ? get_site_icon_url() : get_template_directory_uri() . '/img/favicon.png'); ?>" name="msapplication-TileImage"/>
<script type="text/javascript">
<?php $TokoWA_alamat_toko_kota = get_theme_mod('TokoWA_alamat_toko_kota'); list($kode_kota, $kota) = explode(":", $TokoWA_alamat_toko_kota); ?>
	var tw_config = {
		'fbPixel_ID' : '<?php echo $fbPixel_ID = (get_theme_mod('TokoWA_fbPixel_ID') ? get_theme_mod('TokoWA_fbPixel_ID') : ''); ?>',
		'cover' : '<?php echo $cover = (get_theme_mod('TokoWA_cover') ? get_theme_mod('TokoWA_cover') : get_template_directory_uri() . '/img/cover.png'); ?>',
		'negara' : '<?php echo $negara = (get_theme_mod('TokoWA_negara') ? get_theme_mod('TokoWA_negara') : '62'); ?>',
		'no_wa' : '<?php echo $no_wa = (get_theme_mod('TokoWA_no_wa') ? get_theme_mod('TokoWA_no_wa') : '089618885066'); ?>',
		'pesan_salam' : '<?php echo $pesan_salam = (get_theme_mod('TokoWA_pesan_salam') ? get_theme_mod('TokoWA_pesan_salam') : 'Assallamu`alaikum'); ?>',
		'panggilan_user' : '<?php echo $panggilan_user = (get_theme_mod('TokoWA_panggilan_user') ? get_theme_mod('TokoWA_panggilan_user') : 'agan'); ?>',
		'panggilan_admin' : '<?php echo $panggilan_admin = (get_theme_mod('TokoWA_panggilan_admin') ? get_theme_mod('TokoWA_panggilan_admin') : 'Admin'); ?>',
		'alamat_toko' : '<?php echo $alamat_toko = (get_theme_mod('TokoWA_alamat_toko') ? get_theme_mod('TokoWA_alamat_toko') : 'Jl. Terusan Pasir Koja No.5B - Bbk. Irigasi - Gg. AMD 9'); ?>',
		'alamat_toko_kota' : '<?php echo $alamat_toko_kota = (get_theme_mod('TokoWA_alamat_toko_kota') ? $kota : 'Bandung (Kota)'); ?>',
		'alamat_toko_kota_kode' : '<?php echo $alamat_toko_kota = (get_theme_mod('TokoWA_alamat_toko_kota') ? $kode_kota : 23); ?>',
		'alamat_toko_kecamatan' : '<?php echo $alamat_toko_kecamatan = (get_theme_mod('TokoWA_alamat_toko_kecamatan') ? get_theme_mod('TokoWA_alamat_toko_kecamatan') : 'Astanaanyar'); ?>',
		'alamat_kodepos' : '<?php echo $alamat_kodepos = (get_theme_mod('TokoWA_alamat_kodepos') ? get_theme_mod('TokoWA_alamat_kodepos') : '40241'); ?>',
		'dominan_color' : '<?php echo $dominan_color = (get_theme_mod('dominan_color') ? get_theme_mod('dominan_color') : '#009688'); ?>',
		'type_product' : '<?php echo $type_product = (get_theme_mod('TokoWA_theme_type_product') ? get_theme_mod('TokoWA_theme_type_product') : 'default'); ?>',
		'link_color' : '<?php echo $link_color = (get_theme_mod('link_color') ? get_theme_mod('link_color') : '#a6a6a6'); ?>',
		'youtube' : '<?php echo $youtube = (get_theme_mod('TokoWA_youtube') ? get_theme_mod('TokoWA_youtube') : 'https://www.youtube.com/kangriaan'); ?>',
		'instagram' : '<?php echo $instagram = (get_theme_mod('TokoWA_instagram') ? get_theme_mod('TokoWA_instagram') : 'https://www.instagram.com/kangriaan'); ?>',
		'facebook' : '<?php echo $facebook = (get_theme_mod('TokoWA_facebook') ? get_theme_mod('TokoWA_facebook') : 'https://www.facebook.com/kangrian.net') ?>',
		'twitter' : '<?php echo $twitter = (get_theme_mod('TokoWA_twitter') ? get_theme_mod('TokoWA_twitter') : 'https://www.twitter.com/kangriaan'); ?>',
	};
</script>

<!-- [ IMG ] -->
<?php if(is_front_page() || is_home() || is_archive() || is_category() || is_tag() || is_author()) { ?>
	<link href="<?php echo $cover; ?>" rel="image_src">
	<meta content="<?php echo $cover; ?>" itemprop="image">
	<meta content="<?php echo $cover; ?>" property="og:image">
	<meta content="<?php echo $cover; ?>" name="twitter:image">
	<meta content="<?php echo $cover; ?>" name="twitter:image:src">
	<meta content="768" property="og:image:width">
	<meta content="384" property="og:image:height">
<?php } elseif (is_singular( 'produk' )) { ?>
	<?php if( get_field('gambar_1',get_the_ID()) ) { ?>
	<link href="<?php echo esc_url(get_field('gambar_1',get_the_ID())['sizes']['large']); ?>" rel="image_src">
	<meta content="<?php echo esc_url(get_field('gambar_1',get_the_ID())['sizes']['large']); ?>" itemprop="image">
	<meta content="<?php echo esc_url(get_field('gambar_1',get_the_ID())['sizes']['large']); ?>" property="og:image">
	<meta content="<?php echo esc_url(get_field('gambar_1',get_the_ID())['sizes']['large']); ?>" name="twitter:image">
	<meta content="<?php echo esc_url(get_field('gambar_1',get_the_ID())['sizes']['large']); ?>" name="twitter:image:src">
	<meta content="768" property="og:image:width">
	<meta content="768" property="og:image:height">
	<?php } ?>
<?php } elseif (is_singular( 'post' )) { ?>
	<?php if( wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()),'socmed',true) ) { ?>
	<link href="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()),'socmed',true); ?>" rel="image_src">
	<meta content="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()),'socmed',true); ?>" itemprop="image">
	<meta content="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()),'socmed',true); ?>" property="og:image">
	<meta content="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()),'socmed',true); ?>" name="twitter:image">
	<meta content="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()),'socmed',true); ?>" name="twitter:image:src">
	<meta content="768" property="og:image:width">
	<meta content="384" property="og:image:height">
	<?php } ?>
<?php } ?>

<!-- [ URL ] -->
<link href="<?php echo $canonicalUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" rel="canonical"/>
<link href="<?php echo $canonicalUrl; ?>" hreflang="x-default" rel="alternate"/>
<meta content='<?php echo $canonicalUrl; ?>' property='og:url'/>

<!-- [ OG & Card Type ] -->
<meta content='summary_large_image' name='twitter:card'/>
<meta content='article' property='og:type'/>


<?php if ( !function_exists( 'get_twitter_id_from_url' ) ){
	function get_twitter_id_from_url($url)
	{	
  	  if (preg_match("/^https?:\/\/(www\.)?twitter\.com\/(#!\/)?(?<name>[^\/]+)(\/\w+)*$/", $url, $regs)) {
  	    return $regs['name'];
  	  }
  	  return false;	  
  }
} ?>

<!-- [ Author ] -->
<meta content='@<?php echo get_twitter_id_from_url($twitter); ?>' name='twitter:site'>
<meta content='@<?php echo get_twitter_id_from_url($twitter); ?>' name='twitter:creator'>
<meta content='<?php echo $facebook; ?>' property='article:author'>
<meta content='<?php echo $facebook; ?>' property='article:publisher'>
<meta content='100000504063337' property='fb:admins'>
<meta content='100000504063337' property='fb:profile_id'>
<meta content='407652199635889' property='fb:app_id'>
<meta content='2348730638683417' property='fb:pages'>

<!-- [ SE Verification ] -->
<meta content='' name='google-site-verification'>
<!-- [ https://www.google.com/webmasters/verification/home ] -->
<meta content='' name='msvalidate.01'>
<!-- [ https://www.bing.com/toolbox/webmaster ] -->
<meta content='' name='yandex-verification'>
<!-- [ https://webmaster.yandex.com/ ] -->
<meta content='' name='alexaVerifyID'>
<!-- [ https://www.alexa.com/siteinfo ] -->

<meta content='website' property='og:type'>

<meta content="toko-wa.com" name="generator">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="Indonesia" name="geo.placename"/>
<meta content='<?php echo (get_theme_mod('TokoWA_panggilan_admin') ? get_theme_mod('TokoWA_panggilan_admin') : 'Admin'); ?>' name="Author"/>
<meta content='general' name="rating"/>
<meta content='id' name="geo.country"/>
<meta content='index, follow' name="robots"/>
<meta content='index, follow' name="googlebot"/>


<link href="//www.google-analytics.com" rel="dns-prefetch">