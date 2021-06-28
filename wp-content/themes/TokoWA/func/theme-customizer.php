<?php
/**
 * Contains methods for customizing the theme customization screen.
 *
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @since TokoWA 1.0
 */
class TokoWA_customizer
{
    /**
     * This hooks into 'customize_register' (available as of WP 3.4) and allows
     * you to add new sections and controls to the Theme Customize screen.
     *
     * Note: To enable instant preview, we have to actually write a bit of custom
     * javascript. See live_preview() for more.
     *
     * @see add_action('customize_register',$func)
     * @param \WP_Customize_Manager $wp_customize
     * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
     * @since TokoWA 1.0
     */

    public static function register($wp_customize)
    {
        /* =================== / SECTION ========================================================= */

        $wp_customize->add_section('TokoWA_section_wa', array(
            'title' => __('TokoWA - Pengaturan WhatsApp', 'TokoWA'),
            'priority' => 21,
            'capability' => 'edit_theme_options',
            'description' => __('Konfigurasi WhatsApp seperti : <b>No. WhatsApp</b> Admin / Tujuan, <b>Nama Panggilan</b> Admin, <b>Lokasi Toko</b> / Dikirim Dari, dsb..' . dataList_kota(), 'TokoWA'),
        ));
        $wp_customize->add_section('TokoWA_section_theme', array(
            'title' => __('TokoWA - Pengaturan Tema', 'TokoWA'),
            'priority' => 22,
            'capability' => 'edit_theme_options',
            'description' => __('Konfigurasi Template', 'TokoWA'),
            
        ));
        $wp_customize->add_section('TokoWA_section_feed', array(
            'title' => __('TokoWA - Pengaturan Beranda', 'TokoWA'),
            'priority' => 23,
            'capability' => 'edit_theme_options',
            'description' => __('Konfigurasi Toko WhatsApp ( Beranda )', 'TokoWA'),
        ));
        $wp_customize->add_section('TokoWA_section_featured', array(
            'title' => __('TokoWA - Pengaturan Unggulan', 'TokoWA'),
            'priority' => 23,
            'capability' => 'edit_theme_options',
            'description' => __('Konfigurasi Toko WhatsApp ( Unggulan )' . dataList_icon(), 'TokoWA'),
        ));

        $wp_customize->add_section('TokoWA_section_socmed', array(
            'title' => __('TokoWA - Pengaturan Media Sosial', 'TokoWA'),
            'priority' => 24,
            'capability' => 'edit_theme_options',
            'description' => __('Konfigurasi Toko WhatsApp ( Media Sosial )', 'TokoWA'),
        ));

        $wp_customize->add_section('TokoWA_section_more', array(
            'title' => __('TokoWA - Pengaturan Lain-lain', 'TokoWA'),
            'priority' => 24,
            'capability' => 'edit_theme_options',
            'description' => __('Konfigurasi Toko WhatsApp ( Lain-lain )', 'TokoWA'),
        ));

        /* =================== IMAGE ========================================================= */

        $wp_customize->add_setting('TokoWA_logo', array(
            'default' => get_template_directory_uri() . '/img/logo.png',
            'transport' => 'refresh',
            'height' => 50,
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize, 'TokoWA_logo', array(
                'label' => __('Logo Situs', 'name-theme'),
                'description' => __('Logo situs setidaknya berukuran 300 × 50 piksel.<br/><br/>', 'TokoWA'),
                'settings' => 'TokoWA_logo',
                'section' => 'title_tagline',
                'priority' => 100
            )
        ));
        $wp_customize->add_setting('TokoWA_cover', array(
            'default' => get_template_directory_uri() . '/img/cover.png',
            'transport' => 'refresh',
            'height' => 50,
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize, 'TokoWA_cover', array(
                'label' => __('Cover Situs', 'name-theme'),
                'description' => __('Cover situs setidaknya berukuran 768 × 384 piksel ( 4:2 ).<br/><br/>', 'TokoWA'),
                'settings' => 'TokoWA_cover',
                'section' => 'title_tagline',
                'priority' => 100
            )
        ));
        $wp_customize->add_setting('TokoWA_home_slide_1', array(
            'default' => get_template_directory_uri() . '/img/1000x500.png',
            'transport' => 'refresh',
            'width' => 1000,
            'height' => 500,
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
        	$wp_customize, 'TokoWA_home_slide_1', array(
	            'label' => __('Gambar Slide #1', 'name-theme'),
	            'section' => 'TokoWA_section_feed',
            	'description' => __('1000 x 500 piksel.<br/><br/>', 'TokoWA'),
	            'settings' => 'TokoWA_home_slide_1',
	            'priority' => 1
	        )
        ));
        $wp_customize->add_setting('TokoWA_home_slide_2', array(
            'default' => get_template_directory_uri() . '/img/1000x500.png',
            'transport' => 'refresh',
            'width' => 1000,
            'height' => 500,
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
        	$wp_customize, 'TokoWA_home_slide_2', array(
	            'label' => __('Gambar Slide #2', 'name-theme'),
	            'section' => 'TokoWA_section_feed',
            	'description' => __('1000 x 500 piksel.<br/><br/>', 'TokoWA'),
	            'settings' => 'TokoWA_home_slide_2',
	            'priority' => 2
	        )
        ));
        $wp_customize->add_setting('TokoWA_home_slide_3', array(
            'default' => get_template_directory_uri() . '/img/1000x500.png',
            'transport' => 'refresh',
            'width' => 1000,
            'height' => 500,
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
        	$wp_customize, 'TokoWA_home_slide_3', array(
	            'label' => __('Gambar Slide #3', 'name-theme'),
	            'section' => 'TokoWA_section_feed',
            	'description' => __('1000 x 500 piksel.<br/><br/>', 'TokoWA'),
	            'settings' => 'TokoWA_home_slide_3',
	            'priority' => 3
	        )
        ));
        $wp_customize->add_setting('TokoWA_home_slide_4', array(
            'default' => get_template_directory_uri() . '/img/1000x500.png',
            'transport' => 'refresh',
            'width' => 1000,
            'height' => 500,
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
        	$wp_customize, 'TokoWA_home_slide_4', array(
	            'label' => __('Gambar Slide #4', 'name-theme'),
	            'section' => 'TokoWA_section_feed',
            	'description' => __('1000 x 500 piksel.<br/><br/>', 'TokoWA'),
	            'settings' => 'TokoWA_home_slide_4',
	            'priority' => 4
	        )
        ));
        $wp_customize->add_setting('TokoWA_home_banner_1', array(
            'default' => get_template_directory_uri() . '/img/500x500.png',
            'transport' => 'refresh',
            'width' => 500,
            'height' => 500,
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
        	$wp_customize, 'TokoWA_home_banner_1', array(
	            'label' => __('Gambar Banner', 'name-theme'),
            	'description' => __('500 x 500 piksel.<br/><br/>', 'TokoWA'),
	            'section' => 'TokoWA_section_feed',
	            'settings' => 'TokoWA_home_banner_1',
	            'priority' => 5
	        )
        ));
        /* =================== COLOR ========================================================= */

        $wp_customize->add_setting('dominan_color', array(
            'default' => '#009688',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control(
	        $wp_customize, 'dominan_color', array(
	            'label' => __('Warna Dominan', 'TokoWA'),
	            'settings' => 'dominan_color',
	            'section' => 'TokoWA_section_theme',
	            'priority' => 4
	        )
		));
  //       $wp_customize->add_setting('link_color', array(
  //           'default' => '#a6a6a6',
  //           'type' => 'theme_mod',
  //           'capability' => 'edit_theme_options',
  //           'transport' => 'postMessage'
  //       ));
  //       $wp_customize->add_control(new WP_Customize_Color_Control(
	 //        $wp_customize, 'link_color', array(
	 //            'label' => __('Link Color', 'TokoWA'),
	 //            'settings' => 'link_color',
	 //            'section' => 'TokoWA_section_theme',
	 //            'priority' => 6
	 //        )
		// ));

        /* =================== OTHER ========================================================= */

        $wp_customize->get_setting('blogname')->transport = 'postMessage';
        $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
        $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
        $wp_customize->get_setting('background_color')->transport = 'postMessage';

        /* =================== INPUT ========================================================= */

        function our_sanitize_function($input)
        {
            return wp_kses_post(force_balance_tags($input));
        }

        $wp_customize->add_setting('TokoWA_featured_icon1', array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_featured_icon1', array(
            'type' => 'text',
            'label' => __('Icon 1', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_featured_icon1',
            'section' => 'TokoWA_section_featured',
            'input_attrs' => array(
                'placeholder' => __( 'Cari & Pilih Icon..', 'directorist' ),
                'list' => __( 'ionicons', 'directorist' ),
            ),
            'description' => __('Cek! <a href="https://ionicons.com/v4/" target="_blank" rel="nofollow external">Ionicons.com/v4/</a> untuk melihat preview icon selengkapnya..', 'TokoWA'),
            'priority' => 1
        ));

        $wp_customize->add_setting('TokoWA_featured_title1', array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_featured_title1', array(
            'type' => 'text',
            'label' => __('Title 1', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_featured_title1',
            'section' => 'TokoWA_section_featured',
            'input_attrs' => array(
                'placeholder' => __( 'Judul Unggulan..', 'directorist' ),
            ),
            'priority' => 1
        ));
        $wp_customize->add_setting('TokoWA_featured_desc1', array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_featured_desc1', array(
            'type' => 'textarea',
            'label' => __('Deskripsi Unggulan 1', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_featured_desc1',
            'section' => 'TokoWA_section_featured',
            'input_attrs' => array(
                'placeholder' => __( 'Deskripsi Unggulan..', 'directorist' ),
            ),
            'priority' => 1
        ));
        $wp_customize->add_setting('TokoWA_featured_icon2', array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_featured_icon2', array(
            'type' => 'text',
            'label' => __('Icon 2', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_featured_icon2',
            'section' => 'TokoWA_section_featured',
            'input_attrs' => array(
                'placeholder' => __( 'Cari & Pilih Icon..', 'directorist' ),
                'list' => __( 'ionicons', 'directorist' ),
            ),
            'description' => __('Cek! <a href="https://ionicons.com/v4/" target="_blank" rel="nofollow external">Ionicons.com/v4/</a> untuk melihat preview icon selengkapnya..', 'TokoWA'),
            'priority' => 2
        ));

        $wp_customize->add_setting('TokoWA_featured_title2', array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_featured_title2', array(
            'type' => 'text',
            'label' => __('Title 2', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_featured_title2',
            'section' => 'TokoWA_section_featured',
            'input_attrs' => array(
                'placeholder' => __( 'Judul Unggulan..', 'directorist' ),
            ),
            'priority' => 2
        ));
        $wp_customize->add_setting('TokoWA_featured_desc2', array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_featured_desc2', array(
            'type' => 'textarea',
            'label' => __('Deskripsi Unggulan 2', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_featured_desc2',
            'section' => 'TokoWA_section_featured',
            'input_attrs' => array(
                'placeholder' => __( 'Deskripsi Unggulan..', 'directorist' ),
            ),
            'priority' => 2
        ));
        $wp_customize->add_setting('TokoWA_featured_icon3', array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_featured_icon3', array(
            'type' => 'text',
            'label' => __('Icon 3', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_featured_icon3',
            'section' => 'TokoWA_section_featured',
            'input_attrs' => array(
                'placeholder' => __( 'Cari & Pilih Icon..', 'directorist' ),
                'list' => __( 'ionicons', 'directorist' ),
            ),
            'description' => __('Cek! <a href="https://ionicons.com/v4/" target="_blank" rel="nofollow external">Ionicons.com/v4/</a> untuk melihat preview icon selengkapnya..', 'TokoWA'),
            'priority' => 3
        ));

        $wp_customize->add_setting('TokoWA_featured_title3', array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_featured_title3', array(
            'type' => 'text',
            'label' => __('Title 3', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_featured_title3',
            'section' => 'TokoWA_section_featured',
            'input_attrs' => array(
                'placeholder' => __( 'Judul Unggulan..', 'directorist' ),
            ),
            'priority' => 3
        ));
        $wp_customize->add_setting('TokoWA_featured_desc3', array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_featured_desc3', array(
            'type' => 'textarea',
            'label' => __('Deskripsi Unggulan 3', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_featured_desc3',
            'section' => 'TokoWA_section_featured',
            'input_attrs' => array(
                'placeholder' => __( 'Deskripsi Unggulan..', 'directorist' ),
            ),
            'priority' => 3
        ));
        $wp_customize->add_setting('TokoWA_fbPixel_ID', array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_fbPixel_ID', array(
            'type' => 'text',
            'label' => __('FB Pixel (ID)', 'placeholderfortextdomain'),
            'input_attrs' => array(
                'placeholder' => __( 'ID FB Piksel..', 'directorist' ),
            ),
            'settings' => 'TokoWA_fbPixel_ID',
            'section' => 'TokoWA_section_more',
            'priority' => 2
        ));
        $wp_customize->add_setting('TokoWA_home_slide_1_url', array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_home_slide_1_url', array(
            'type' => 'text',
            'label' => __('Link / Tautan Slide #1', 'placeholderfortextdomain'),
            'input_attrs' => array(
                'placeholder' => __( 'https://..', 'directorist' ),
            ),
            'settings' => 'TokoWA_home_slide_1_url',
            'section' => 'TokoWA_section_feed',
            'priority' => 1.1
        ));
        $wp_customize->add_setting('TokoWA_home_slide_2_url', array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_home_slide_2_url', array(
            'type' => 'text',
            'label' => __('Link / Tautan Slide #2', 'placeholderfortextdomain'),
            'input_attrs' => array(
                'placeholder' => __( 'https://..', 'directorist' ),
            ),
            'settings' => 'TokoWA_home_slide_2_url',
            'section' => 'TokoWA_section_feed',
            'priority' => 2.2
        ));
        $wp_customize->add_setting('TokoWA_home_slide_3_url', array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_home_slide_3_url', array(
            'type' => 'text',
            'label' => __('Link / Tautan Slide #3', 'placeholderfortextdomain'),
            'input_attrs' => array(
                'placeholder' => __( 'https://..', 'directorist' ),
            ),
            'settings' => 'TokoWA_home_slide_3_url',
            'section' => 'TokoWA_section_feed',
            'priority' => 3.3
        ));
        $wp_customize->add_setting('TokoWA_home_slide_4_url', array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_home_slide_4_url', array(
            'type' => 'text',
            'label' => __('Link / Tautan Slide #4', 'placeholderfortextdomain'),
            'input_attrs' => array(
                'placeholder' => __( 'https://..', 'directorist' ),
            ),
            'settings' => 'TokoWA_home_slide_4_url',
            'section' => 'TokoWA_section_feed',
            'priority' => 4.4
        ));
        $wp_customize->add_setting('TokoWA_home_banner_1_url', array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_home_banner_1_url', array(
            'type' => 'text',
            'label' => __('Link / Tautan Banner', 'placeholderfortextdomain'),
            'input_attrs' => array(
                'placeholder' => __( 'https://..', 'directorist' ),
            ),
            'settings' => 'TokoWA_home_banner_1_url',
            'section' => 'TokoWA_section_feed',
            'priority' => 5.5
        ));
        $wp_customize->add_setting('TokoWA_id_keywords', array(
            'default' => 'Toko Online, WhatsApp, WordPress',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_id_keywords', array(
            'type' => 'text',
            'label' => __('Kata Kunci ( Pencarian )', 'placeholderfortextdomain'),
            'input_attrs' => array(
                'placeholder' => __( 'cth. Toko Online, WhatsApp, WordPress, dst..', 'directorist' ),
            ),
            'settings' => 'TokoWA_id_keywords',
            'section' => 'title_tagline',
            'priority' => 30
        ));
        $wp_customize->add_setting('TokoWA_no_wa', array(
            'default' => '089618885066',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_no_wa', array(
            'type' => 'tel',
            'label' => __('No. WhatsApp ( Admin )', 'placeholderfortextdomain'),
            'input_attrs' => array(
                'placeholder' => __( 'cth. 089618885xxx', 'directorist' ),
            ),
            'settings' => 'TokoWA_no_wa',
            'section' => 'TokoWA_section_wa',
            'priority' => 2
        ));
        $wp_customize->add_setting('TokoWA_pesan_salam', array(
            'default' => 'Assallamualaikum',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_pesan_salam', array(
            'type' => 'text',
            'label' => __('Pesan Salam ( Admin / User )', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_pesan_salam',
            'section' => 'TokoWA_section_wa',
            'input_attrs' => array(
	            'placeholder' => __( 'cth. Hi, Halo, Assallamualaikum, dsb..', 'directorist' ),
	        ),
            'priority' => 3
        ));
        $wp_customize->add_setting('TokoWA_panggilan_user', array(
            'default' => 'agan',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_panggilan_user', array(
            'type' => 'text',
            'label' => __('Nama Panggilan ( User )', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_panggilan_user',
            'section' => 'TokoWA_section_wa',
            'input_attrs' => array(
	            'placeholder' => __( 'cth. agan / Juaragan, kak / Kakak, bund / Bunda..', 'directorist' ),
	        ),
            'priority' => 3
        ));
        $wp_customize->add_setting('TokoWA_panggilan_admin', array(
            'default' => 'Admin',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_panggilan_admin', array(
            'type' => 'text',
            'label' => __('Nama Panggilan ( Admin )', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_panggilan_admin',
            'section' => 'TokoWA_section_wa',
            'input_attrs' => array(
	            'placeholder' => __( 'cth. mimin / Admin, kak / Kakak, bund / Bunda..', 'directorist' ),
	        ),
            'priority' => 3
        ));
        $wp_customize->add_setting('TokoWA_alamat_toko', array(
            'default' => 'Jl. Terusan Pasir Koja No.5B - Bbk. Irigasi - Gg. AMD 9',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_alamat_toko', array(
            'type' => 'text',
            'label' => __('Alamat Lengkap ( Toko )', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_alamat_toko',
            'section' => 'TokoWA_section_wa',
            'input_attrs' => array(
	            'placeholder' => __( 'cth. Jl. Terusan Pasir Koja No.5B - Bbk. Irigasi - Gg. AMD 9..', 'directorist' ),
	        ),
            'priority' => 4
        ));
        $wp_customize->add_setting('TokoWA_alamat_toko_kota', array(
            'default' => '23:Bandung (Kota)',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_alamat_toko_kota', array(
            'type' => 'text',
            'label' => __('Kota', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_alamat_toko_kota',
            'section' => 'TokoWA_section_wa',
            'input_attrs' => array(
	            'placeholder' => __( 'Nama Kota..', 'directorist' ),
                'list' => __( 'kota_asal', 'directorist' ),
	        ),
            'priority' => 5
        ));
        $wp_customize->add_setting('TokoWA_alamat_toko_kecamatan', array(
            'default' => 'Astanaanyar',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_alamat_toko_kecamatan', array(
            'type' => 'text',
            'label' => __('Kecamatan', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_alamat_toko_kecamatan',
            'section' => 'TokoWA_section_wa',
            'input_attrs' => array(
                'placeholder' => __( 'Nama Kecamatan..', 'directorist' ),
            ),
            'priority' => 6
        ));
        $wp_customize->add_setting('TokoWA_alamat_kodepos', array(
            'default' => '40241',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_alamat_kodepos', array(
            'type' => 'number',
            'label' => __('Kode Pos', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_alamat_kodepos',
            'section' => 'TokoWA_section_wa',
            'input_attrs' => array(
	            'placeholder' => __( 'Kode POS..', 'directorist' ),
	        ),
            'priority' => 6
        ));
        $wp_customize->add_setting('TokoWA_youtube', array(
            'default' => 'https://www.youtube.com/kangrian',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_youtube', array(
            'type' => 'url',
            'label' => __('YouTube Channel', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_youtube',
            'section' => 'TokoWA_section_socmed',
            'input_attrs' => array(
                'placeholder' => __( 'cth. https://www.youtube.com/_USERNAME..', 'directorist' ),
            ),
            'priority' => 1
        ));
        $wp_customize->add_setting('TokoWA_facebook', array(
            'default' => 'https://www.facebook.com/kangrian.net',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_facebook', array(
            'type' => 'url',
            'label' => __('Facebook', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_facebook',
            'section' => 'TokoWA_section_socmed',
            'input_attrs' => array(
                'placeholder' => __( 'cth. https://www.facebook.com/_USERNAME..', 'directorist' ),
            ),
            'priority' => 1
        ));
        $wp_customize->add_setting('TokoWA_instagram', array(
            'default' => 'https://www.instagram.com/kangriaan',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_instagram', array(
            'type' => 'url',
            'label' => __('Instagram', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_instagram',
            'section' => 'TokoWA_section_socmed',
            'input_attrs' => array(
                'placeholder' => __( 'cth. https://www.instagram.com/_USERNAME..', 'directorist' ),
            ),
            'priority' => 1
        ));
        $wp_customize->add_setting('TokoWA_twitter', array(
            'default' => 'https://twitter.com/kangriaan',
            'type' => 'theme_mod',
            'sanitize_callback' => 'our_sanitize_function',
        ));
        $wp_customize->add_control('TokoWA_twitter', array(
            'type' => 'url',
            'label' => __('Twitter', 'placeholderfortextdomain'),
            'settings' => 'TokoWA_twitter',
            'section' => 'TokoWA_section_socmed',
            'input_attrs' => array(
                'placeholder' => __( 'cth. https://twitter.com/_USERNAME..', 'directorist' ),
            ),
            'priority' => 1
        ));

        /* =================== DROPDOWN ========================================================= */
        $wp_customize->add_setting( 'TokoWA_theme_type_product', array(
            'default'    => 'default',
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
         ) 
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'TokoWA_theme_type_product', array(
            'label'      => __( 'Jenis Produk?', 'TokoWA' ),
            'settings'   => 'TokoWA_theme_type_product',
            'section' => 'TokoWA_section_theme',
            'priority' => 5,
            'type'    => 'select',
                'choices' => array(
                    'default' => 'Default ( Produk Fisik )',
                    'virtual' => 'Virtual ( Produk Digital / Jasa )',
                )
            )
        ));
        $wp_customize->add_setting( 'TokoWA_produk_livesales', array(
            'default'    => 'publish',
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
         ) 
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'TokoWA_produk_livesales', array(
            'label'      => __( 'Status Livesales Baru?', 'TokoWA' ),
            'settings'   => 'TokoWA_produk_livesales',
            'priority'   => 0,
            'section'    => 'TokoWA_section_more',
            'type'    => 'select',
                'choices' => array(
                    'publish' => 'Publikasikan',
                    'pending' => 'Pending',
                )
            )
        ));
        $wp_customize->add_setting( 'TokoWA_produk_ulasan', array(
            'default'    => 'publish',
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
         ) 
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'TokoWA_produk_ulasan', array(
            'label'      => __( 'Status Ulasan Produk Baru?', 'TokoWA' ),
            'settings'   => 'TokoWA_produk_ulasan',
            'priority'   => 1,
            'section'    => 'TokoWA_section_more',
            'type'    => 'select',
                'choices' => array(
                    'publish' => 'Publikasikan',
                    'pending' => 'Pending',
                )
            )
        ));
        $wp_customize->add_setting( 'TokoWA_home_slide_banner', array(
            'default'    => 0,
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
         ) 
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'TokoWA_home_slide_banner', array(
            'label'      => __( 'Tampilkan Slideshow & Banner ?', 'TokoWA' ),
            'settings'   => 'TokoWA_home_slide_banner',
            'priority'   => 0,
            'section'    => 'TokoWA_section_feed',
            'type'    => 'select',
                'choices' => array(
                    0 => 'Ya',
                    1 => 'Tidak',
                )
            )
        ));
        $wp_customize->add_setting( 'TokoWA_home_produk', array(
            'default'    => 0,
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
         ) 
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'TokoWA_home_produk', array(
            'label'      => __( 'Tampilkan Produk (Terbaru) ?', 'TokoWA' ),
            'settings'   => 'TokoWA_home_produk',
            'priority'   => 0,
            'section'    => 'TokoWA_section_feed',
            'type'    => 'select',
                'choices' => array(
                    0 => 'Ya',
                    1 => 'Tidak',
                )
            )
        ));
        $wp_customize->add_setting( 'TokoWA_home_blog', array(
            'default'    => 0,
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
         ) 
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'TokoWA_home_blog', array(
            'label'      => __( 'Tampilkan Posting Blog (Terbaru) ?', 'TokoWA' ),
            'settings'   => 'TokoWA_home_blog',
            'priority'   => 0,
            'section'    => 'TokoWA_section_feed',
            'type'    => 'select',
                'choices' => array(
                    0 => 'Ya',
                    1 => 'Tidak',
                )
            )
        ));
        $wp_customize->add_setting( 'TokoWA_home_ulasan', array(
            'default'    => 0,
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
         ) 
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'TokoWA_home_ulasan', array(
            'label'      => __( 'Tampilkan Ulasan Produk (Terbaru) ?', 'TokoWA' ),
            'settings'   => 'TokoWA_home_ulasan',
            'priority'   => 0,
            'section'    => 'TokoWA_section_feed',
            'type'    => 'select',
                'choices' => array(
                    0 => 'Ya',
                    1 => 'Tidak',
                )
            )
        ));
  //       $wp_customize->add_setting( 'TokoWA_theme_version', array(
		//     'default'    => 'default',
		//     'type'       => 'theme_mod',
		//     'capability' => 'edit_theme_options',
		//     'transport'  => 'refresh',
		//  ) 
		// );
		// $wp_customize->add_control( new WP_Customize_Control(
		// 	$wp_customize, 'TokoWA_theme_version', array(
		// 	'label'      => __( 'Versi Tema', 'TokoWA' ),
		// 	'description'      => __( 'Default, Gelap / Terang.' ),
		// 	'settings'   => 'TokoWA_theme_version',
		// 	'priority'   => 3,
		// 	'section'    => 'TokoWA_section_theme',
		// 	'type'    => 'select',
		// 		'choices' => array(
		// 			'default' => 'Default',
		// 			'dark' => 'Gelap',
		// 			'light' => 'Terang',
		// 		)
		// 	)
		// ));
        $wp_customize->add_setting( 'TokoWA_negara', array(
		    'default'    => '62',
		    'type'       => 'theme_mod',
		    'capability' => 'edit_theme_options',
		    'transport'  => 'refresh',
		 ) 
		);
		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize, 'TokoWA_negara', array(
			'label'      => __( 'Negara', 'TokoWA' ),
			'settings'   => 'TokoWA_negara',
			'priority'   => 1,
			'section'    => 'TokoWA_section_wa',
			'type'    => 'select',
				'choices' => array(
					// '93' => 'Afganistan (+93)',
					// '27' => 'Afrika Selatan (+27)',
					// '236' => 'Afrika Tengah (+236)',
					// '355' => 'Albania (+355)',
					// '213' => 'Algeria (+213)',
					// '1' => 'Amerika Serikat (+1)',
					// '376' => 'Andorra (+376)',
					// '244' => 'Angola (+244)',
					// '1-268' => 'Antigua & Barbuda (+1-268)',
					// '966' => 'Arab Saudi (+966)',
					// '54' => 'Argentina (+54)',
					// '374' => 'Armenia (+374)',
					// '61' => 'Australia (+61)',
					// '43' => 'Austria (+43)',
					// '994' => 'Azerbaijan (+994)',
					// '1-242' => 'Bahama (+1-242)',
					// '973' => 'Bahrain (+973)',
					// '880' => 'Bangladesh (+880)',
					// '1-246' => 'Barbados (+1-246)',
					// '31' => 'Belanda (+31)',
					// '375' => 'Belarus (+375)',
					// '32' => 'Belgia (+32)',
					// '501' => 'Belize (+501)',
					// '229' => 'Benin (+229)',
					// '975' => 'Bhutan (+975)',
					// '591' => 'Bolivia (+591)',
					// '387' => 'Bosnia & Herzegovina (+387)',
					// '267' => 'Botswana (+267)',
					// '55' => 'Brasil (+55)',
					// '44' => 'Britania Raya (Inggris) (+44)',
					// '673' => 'Brunei Darussalam (+673)',
					// '359' => 'Bulgaria (+359)',
					// '226' => 'Burkina Faso (+226)',
					// '257' => 'Burundi (+257)',
					// '420' => 'Ceko (+420)',
					// '235' => 'Chad (+235)',
					// '56' => 'Chili (+56)',
					// '86' => 'China (+86)',
					// '45' => 'Denmark (+45)',
					// '253' => 'Djibouti (+253)',
					// '1-767' => 'Domikia (+1-767)',
					// '593' => 'Ekuador (+593)',
					// '503' => 'El Salvador (+503)',
					// '291' => 'Eritrea (+291)',
					// '372' => 'Estonia (+372)',
					// '251' => 'Ethiopia (+251)',
					// '679' => 'Fiji (+679)',
					// '63' => 'Filipina (+63)',
					// '358' => 'Finlandia (+358)',
					// '241' => 'Gabon (+241)',
					// '220' => 'Gambia (+220)',
					// '995' => 'Georgia (+995)',
					// '233' => 'Ghana (+233)',
					// '1-473' => 'Grenada (+1-473)',
					// '502' => 'Guatemala (+502)',
					// '224' => 'Guinea (+224)',
					// '245' => 'Guinea Bissau (+245)',
					// '240' => 'Guinea Khatulistiwa (+240)',
					// '592' => 'Guyana (+592)',
					// '509' => 'Haiti (+509)',
					// '504' => 'Honduras (+504)',
					// '36' => 'Hongaria (+36)',
					// '852' => 'Hongkong (+852)',
					// '91' => 'India (+91)',
					'62' => 'Indonesia (+62)',
					// '964' => 'Irak (+964)',
					// '98' => 'Iran (+98)',
					// '353' => 'Irlandia (+353)',
					// '354' => 'Islandia (+354)',
					// '972' => 'Israel (+972)',
					// '39' => 'Italia (+39)',
					// '1-876' => 'Jamaika (+1-876)',
					// '81' => 'Jepang (+81)',
					// '49' => 'Jerman (+49)',
					// '962' => 'Jordan (+962)',
					// '855' => 'Kamboja (+855)',
					// '237' => 'Kamerun (+237)',
					// '1' => 'Kanada (+1)',
					// '7' => 'Kazakhstan (+7)',
					// '254' => 'Kenya (+254)',
					// '996' => 'Kirgizstan (+996)',
					// '686' => 'Kiribati (+686)',
					// '57' => 'Kolombia (+57)',
					// '269' => 'Komoro (+269)',
					// '243' => 'Republik Kongo (+243)',
					// '82' => 'Korea Selatan (+82)',
					// '850' => 'Korea Utara (+850)',
					// '506' => 'Kosta Rika (+506)',
					// '385' => 'Kroasia (+385)',
					// '53' => 'Kuba (+53)',
					// '965' => 'Kuwait (+965)',
					// '856' => 'Laos (+856)',
					// '371' => 'Latvia (+371)',
					// '961' => 'Lebanon (+961)',
					// '266' => 'Lesotho (+266)',
					// '231' => 'Liberia (+231)',
					// '218' => 'Libya (+218)',
					// '423' => 'Liechtenstein (+423)',
					// '370' => 'Lituania (+370)',
					// '352' => 'Luksemburg (+352)',
					// '261' => 'Madagaskar (+261)',
					// '853' => 'Makao (+853)',
					// '389' => 'Makedonia (+389)',
					// '960' => 'Maladewa (+960)',
					// '265' => 'Malawi (+265)',
					// '60' => 'Malaysia (+60)',
					// '223' => 'Mali (+223)',
					// '356' => 'Malta (+356)',
					// '212' => 'Maroko (+212)',
					// '692' => 'Marshall (Kep.) (+692)',
					// '222' => 'Mauritania (+222)',
					// '230' => 'Mauritius (+230)',
					// '52' => 'Meksiko (+52)',
					// '20' => 'Mesir (+20)',
					// '691' => 'Mikronesia (Kep.) (+691)',
					// '373' => 'Moldova (+373)',
					// '377' => 'Monako (+377)',
					// '976' => 'Mongolia (+976)',
					// '382' => 'Montenegro (+382)',
					// '258' => 'Mozambik (+258)',
					// '95' => 'Myanmar (+95)',
					// '264' => 'Namibia (+264)',
					// '674' => 'Nauru (+674)',
					// '977' => 'Nepal (+977)',
					// '227' => 'Niger (+227)',
					// '234' => 'Nigeria (+234)',
					// '505' => 'Nikaragua (+505)',
					// '47' => 'Norwegia (+47)',
					// '968' => 'Oman (+968)',
					// '92' => 'Pakistan (+92)',
					// '680' => 'Palau (+680)',
					// '507' => 'Panama (+507)',
					// '225' => 'Pantai Gading (+225)',
					// '675' => 'Papua Nugini (+675)',
					// '595' => 'Paraguay (+595)',
					// '33' => 'Perancis (+33)',
					// '51' => 'Peru (+51)',
					// '48' => 'Polandia (+48)',
					// '351' => 'Portugal (+351)',
					// '974' => 'Qatar (+974)',
					// '242' => 'Rep. Dem. Kongo (+242)',
					// '1-809; 1-829' => 'Republik Dominika (+1-809; 1-829)',
					// '40' => 'Rumania (+40)',
					// '7' => 'Rusia (+7)',
					// '250' => 'Rwanda (+250)',
					// '1-869' => 'Saint Kitts and Nevis (+1-869)',
					// '1-758' => 'Saint Lucia (+1-758)',
					// '1-784' => 'Saint Vincent & the Grenadines (+1-784)',
					// '685' => 'Samoa (+685)',
					// '378' => 'San Marino (+378)',
					// '239' => 'Sao Tome & Principe (+239)',
					// '64' => 'Selandia Baru (+64)',
					// '221' => 'Senegal (+221)',
					// '381' => 'Serbia (+381)',
					// '248' => 'Seychelles (+248)',
					// '232' => 'Sierra Leone (+232)',
					// '65' => 'Singapura (+65)',
					// '357' => 'Siprus (+357)',
					// '386' => 'Slovenia (+386)',
					// '421' => 'Slowakia (+421)',
					// '677' => 'Solomon (Kep.) (+677)',
					// '252' => 'Somalia (+252)',
					// '34' => 'Spanyol (+34)',
					// '94' => 'Sri Lanka (+94)',
					// '249' => 'Sudan (+249)',
					// '211' => 'Sudan Selatan (+211)',
					// '963' => 'Suriah (+963)',
					// '597' => 'Suriname (+597)',
					// '268' => 'Swaziland (+268)',
					// '46' => 'Swedia (+46)',
					// '41' => 'Swiss (+41)',
					// '992' => 'Tajikistan (+992)',
					// '238' => 'Tanjung Verde (+238)',
					// '255' => 'Tanzania (+255)',
					// '886' => 'Taiwan (+886)',
					// '66' => 'Thailand (+66)',
					// '670' => 'Timor Leste (+670)',
					// '228' => 'Togo (+228)',
					// '676' => 'Tonga (+676)',
					// '1-868' => 'Trinidad & Tobago (+1-868)',
					// '216' => 'Tunisia (+216)',
					// '90' => 'Turki (+90)',
					// '993' => 'Turkmenistan (+993)',
					// '688' => 'Tuvalu (+688)',
					// '256' => 'Uganda (+256)',
					// '380' => 'Ukraina (+380)',
					// '971' => 'Uni Emirat Arab (+971)',
					// '598' => 'Uruguay (+598)',
					// '998' => 'Uzbekistan (+998)',
					// '678' => 'Vanuatu (+678)',
					// '58' => 'Venezuela (+58)',
					// '84' => 'Vietnam (+84)',
					// '967' => 'Yaman (+967)',
					// '30' => 'Yunani (+30)',
					// '260' => 'Zambia (+260)',
					// '263' => 'Zimbabwe (+263)',
				)
			)
		));
    }

    /**
     * This outputs the javascript needed to automate the live settings preview.
     * Also keep in mind that this function isn't necessary unless your settings
     * are using 'transport'=>'postMessage' instead of the default 'transport'
     * => 'refresh'
     *
     * Used by hook: 'customize_preview_init'
     *
     * @see add_action('customize_preview_init',$func)
     * @since TokoWA 1.0
     */
    public static function live_preview()
    {
        wp_enqueue_script('TokoWA-themecustomizer', // Give the script a unique ID
        get_template_directory_uri() . '/lib/theme-customizer.js', // Define the path to the JS file
        array(
            'jquery',
            'customize-preview'
        ), // Define dependencies
        '', // Define a version (optional)
        true
        // Specify whether to put in footer (leave this true)
        );
        // wp_enqueue_script('TokoWA-acom', // Give the script a unique ID
        // get_template_directory_uri() . '/lib/rajaongkir/acom.js', // Define the path to the JS file
        // array(
        //     'jquery',
        //     'acom-js'
        // ), // Define dependencies
        // '', // Define a version (optional)
        // true
        // // Specify whether to put in footer (leave this true)
        // );
    }

    /**
     * This will generate a line of CSS for use in header output. If the setting
     * ($mod_name) has no defined value, the CSS will not be output.
     *
     * @uses get_theme_mod()
     * @param string $selector CSS selector
     * @param string $style The name of the CSS *property* to modify
     * @param string $mod_name The name of the 'theme_mod' option to fetch
     * @param string $prefix Optional. Anything that needs to be output before the CSS property
     * @param string $postfix Optional. Anything that needs to be output after the CSS property
     * @param bool $echo Optional. Whether to print directly to the page (default: true).
     * @return string Returns a single line of CSS with selectors and a property.
     * @since TokoWA 1.0
     */
    public static function generate_css($selector, $style, $mod_name, $prefix = '', $postfix = '', $echo = true)
    {
        $return = '';
        $mod = get_theme_mod($mod_name);
        if (!empty($mod))
        {
            $return = sprintf('%s { %s:%s; }', $selector, $style, $prefix . $mod . $postfix);
            if ($echo)
            {
                echo $return;
            }
        }
        return $return;
    }
}
function dataList_kota() {

        $dataList = '<datalist id="kota_asal">
        <option value="1:Aceh Barat"></option>
        <option value="2:Aceh Barat Daya"></option>
        <option value="3:Aceh Besar"></option>
        <option value="4:Aceh Jaya"></option>
        <option value="5:Aceh Selatan"></option>
        <option value="6:Aceh Singkil"></option>
        <option value="7:Aceh Tamiang"></option>
        <option value="8:Aceh Tengah"></option>
        <option value="9:Aceh Tenggara"></option>
        <option value="10:Aceh Timur"></option>
        <option value="11:Aceh Utara"></option>
        <option value="12:Agam"></option>
        <option value="13:Alor"></option>
        <option value="14:Ambon"></option>
        <option value="15:Asahan"></option>
        <option value="16:Asmat"></option>
        <option value="17:Badung"></option>
        <option value="18:Balangan"></option>
        <option value="19:Balikpapan"></option>
        <option value="20:Banda Aceh"></option>
        <option value="21:Bandar Lampung"></option>
        <option value="22:Bandung"></option>
        <option value="23:Bandung (Kota)"></option>
        <option value="24:Bandung Barat"></option>
        <option value="25:Banggai"></option>
        <option value="26:Banggai Kepulauan"></option>
        <option value="27:Bangka"></option>
        <option value="28:Bangka Barat"></option>
        <option value="29:Bangka Selatan"></option>
        <option value="30:Bangka Tengah"></option>
        <option value="31:Bangkalan"></option>
        <option value="32:Bangli"></option>
        <option value="33:Banjar (Kalimantan Selatan)"></option>
        <option value="34:Banjar (Jawa Barat)"></option>
        <option value="35:Banjarbaru"></option>
        <option value="36:Banjarmasin"></option>
        <option value="37:Banjarnegara"></option>
        <option value="38:Bantaeng"></option>
        <option value="39:Bantul"></option>
        <option value="40:Banyuasin"></option>
        <option value="41:Banyumas"></option>
        <option value="42:Banyuwangi"></option>
        <option value="43:Barito Kuala"></option>
        <option value="44:Barito Selatan"></option>
        <option value="45:Barito Timur"></option>
        <option value="46:Barito Utara"></option>
        <option value="47:Barru"></option>
        <option value="48:Batam"></option>
        <option value="49:Batang"></option>
        <option value="50:Batang Hari"></option>
        <option value="51:Batu"></option>
        <option value="52:Batu Bara"></option>
        <option value="53:Bau-Bau"></option>
        <option value="54:Bekasi"></option>
        <option value="55:Bekasi (Kota)"></option>
        <option value="56:Belitung"></option>
        <option value="57:Belitung Timur"></option>
        <option value="58:Belu"></option>
        <option value="59:Bener Meriah"></option>
        <option value="60:Bengkalis"></option>
        <option value="61:Bengkayang"></option>
        <option value="62:Bengkulu"></option>
        <option value="63:Bengkulu Selatan"></option>
        <option value="64:Bengkulu Tengah"></option>
        <option value="65:Bengkulu Utara"></option>
        <option value="66:Berau"></option>
        <option value="67:Biak Numfor"></option>
        <option value="68:Bima"></option>
        <option value="69:Bima (Kota)"></option>
        <option value="70:Binjai"></option>
        <option value="71:Bintan"></option>
        <option value="72:Bireuen"></option>
        <option value="73:Bitung"></option>
        <option value="74:Blitar"></option>
        <option value="75:Blitar (Kota)"></option>
        <option value="76:Blora"></option>
        <option value="77:Boalemo"></option>
        <option value="78:Bogor"></option>
        <option value="79:Bogor (Kota)"></option>
        <option value="80:Bojonegoro"></option>
        <option value="81:Bolaang Mongondow (Bolmong)"></option>
        <option value="82:Bolaang Mongondow Selatan"></option>
        <option value="83:Bolaang Mongondow Timur"></option>
        <option value="84:Bolaang Mongondow Utara"></option>
        <option value="85:Bombana"></option>
        <option value="86:Bondowoso"></option>
        <option value="87:Bone"></option>
        <option value="88:Bone Bolango"></option>
        <option value="89:Bontang"></option>
        <option value="90:Boven Digoel"></option>
        <option value="91:Boyolali"></option>
        <option value="92:Brebes"></option>
        <option value="93:Bukittinggi"></option>
        <option value="94:Buleleng"></option>
        <option value="95:Bulukumba"></option>
        <option value="96:Bulungan (Bulongan)"></option>
        <option value="97:Bungo"></option>
        <option value="98:Buol"></option>
        <option value="99:Buru"></option>
        <option value="100:Buru Selatan"></option>
        <option value="101:Buton"></option>
        <option value="102:Buton Utara"></option>
        <option value="103:Ciamis"></option>
        <option value="104:Cianjur"></option>
        <option value="105:Cilacap"></option>
        <option value="106:Cilegon"></option>
        <option value="107:Cimahi"></option>
        <option value="108:Cirebon"></option>
        <option value="109:Cirebon (Kota)"></option>
        <option value="110:Dairi"></option>
        <option value="111:Deiyai (Deliyai)"></option>
        <option value="112:Deli Serdang"></option>
        <option value="113:Demak"></option>
        <option value="114:Denpasar"></option>
        <option value="115:Depok"></option>
        <option value="116:Dharmasraya"></option>
        <option value="117:Dogiyai"></option>
        <option value="118:Dompu"></option>
        <option value="119:Donggala"></option>
        <option value="120:Dumai"></option>
        <option value="121:Empat Lawang"></option>
        <option value="122:Ende"></option>
        <option value="123:Enrekang"></option>
        <option value="124:Fakfak"></option>
        <option value="125:Flores Timur"></option>
        <option value="126:Garut"></option>
        <option value="127:Gayo Lues"></option>
        <option value="128:Gianyar"></option>
        <option value="129:Gorontalo"></option>
        <option value="130:Gorontalo (Kota)"></option>
        <option value="131:Gorontalo Utara"></option>
        <option value="132:Gowa"></option>
        <option value="133:Gresik"></option>
        <option value="134:Grobogan"></option>
        <option value="135:Gunung Kidul"></option>
        <option value="136:Gunung Mas"></option>
        <option value="137:Gunungsitoli"></option>
        <option value="138:Halmahera Barat"></option>
        <option value="139:Halmahera Selatan"></option>
        <option value="140:Halmahera Tengah"></option>
        <option value="141:Halmahera Timur"></option>
        <option value="142:Halmahera Utara"></option>
        <option value="143:Hulu Sungai Selatan"></option>
        <option value="144:Hulu Sungai Tengah"></option>
        <option value="145:Hulu Sungai Utara"></option>
        <option value="146:Humbang Hasundutan"></option>
        <option value="147:Indragiri Hilir"></option>
        <option value="148:Indragiri Hulu"></option>
        <option value="149:Indramayu"></option>
        <option value="150:Intan Jaya"></option>
        <option value="151:Jakarta Barat"></option>
        <option value="152:Jakarta Pusat"></option>
        <option value="153:Jakarta Selatan"></option>
        <option value="154:Jakarta Timur"></option>
        <option value="155:Jakarta Utara"></option>
        <option value="156:Jambi"></option>
        <option value="157:Jayapura"></option>
        <option value="158:Jayapura (Kota)"></option>
        <option value="159:Jayawijaya"></option>
        <option value="160:Jember"></option>
        <option value="161:Jembrana"></option>
        <option value="162:Jeneponto"></option>
        <option value="163:Jepara"></option>
        <option value="164:Jombang"></option>
        <option value="165:Kaimana"></option>
        <option value="166:Kampar"></option>
        <option value="167:Kapuas"></option>
        <option value="168:Kapuas Hulu"></option>
        <option value="169:Karanganyar"></option>
        <option value="170:Karangasem"></option>
        <option value="171:Karawang"></option>
        <option value="172:Karimun"></option>
        <option value="173:Karo"></option>
        <option value="174:Katingan"></option>
        <option value="175:Kaur"></option>
        <option value="176:Kayong Utara"></option>
        <option value="177:Kebumen"></option>
        <option value="178:Kediri"></option>
        <option value="179:Kediri (Kota)"></option>
        <option value="180:Keerom"></option>
        <option value="181:Kendal"></option>
        <option value="182:Kendari"></option>
        <option value="183:Kepahiang"></option>
        <option value="184:Kepulauan Anambas"></option>
        <option value="185:Kepulauan Aru"></option>
        <option value="186:Kepulauan Mentawai"></option>
        <option value="187:Kepulauan Meranti"></option>
        <option value="188:Kepulauan Sangihe"></option>
        <option value="189:Kepulauan Seribu"></option>
        <option value="190:Kepulauan Siau Tagulandang Biaro (Sitaro)"></option>
        <option value="191:Kepulauan Sula"></option>
        <option value="192:Kepulauan Talaud"></option>
        <option value="193:Kepulauan Yapen (Yapen Waropen)"></option>
        <option value="194:Kerinci"></option>
        <option value="195:Ketapang"></option>
        <option value="196:Klaten"></option>
        <option value="197:Klungkung"></option>
        <option value="198:Kolaka"></option>
        <option value="199:Kolaka Utara"></option>
        <option value="200:Konawe"></option>
        <option value="201:Konawe Selatan"></option>
        <option value="202:Konawe Utara"></option>
        <option value="203:Kotabaru"></option>
        <option value="204:Kotamobagu"></option>
        <option value="205:Kotawaringin Barat"></option>
        <option value="206:Kotawaringin Timur"></option>
        <option value="207:Kuantan Singingi"></option>
        <option value="208:Kubu Raya"></option>
        <option value="209:Kudus"></option>
        <option value="210:Kulon Progo"></option>
        <option value="211:Kuningan"></option>
        <option value="212:Kupang"></option>
        <option value="213:Kupang (Kota)"></option>
        <option value="214:Kutai Barat"></option>
        <option value="215:Kutai Kartanegara"></option>
        <option value="216:Kutai Timur"></option>
        <option value="217:Labuhan Batu"></option>
        <option value="218:Labuhan Batu Selatan"></option>
        <option value="219:Labuhan Batu Utara"></option>
        <option value="220:Lahat"></option>
        <option value="221:Lamandau"></option>
        <option value="222:Lamongan"></option>
        <option value="223:Lampung Barat"></option>
        <option value="224:Lampung Selatan"></option>
        <option value="225:Lampung Tengah"></option>
        <option value="226:Lampung Timur"></option>
        <option value="227:Lampung Utara"></option>
        <option value="228:Landak"></option>
        <option value="229:Langkat"></option>
        <option value="230:Langsa"></option>
        <option value="231:Lanny Jaya"></option>
        <option value="232:Lebak"></option>
        <option value="233:Lebong"></option>
        <option value="234:Lembata"></option>
        <option value="235:Lhokseumawe"></option>
        <option value="236:Lima Puluh Koto\/Kota"></option>
        <option value="237:Lingga"></option>
        <option value="238:Lombok Barat"></option>
        <option value="239:Lombok Tengah"></option>
        <option value="240:Lombok Timur"></option>
        <option value="241:Lombok Utara"></option>
        <option value="242:Lubuk Linggau"></option>
        <option value="243:Lumajang"></option>
        <option value="244:Luwu"></option>
        <option value="245:Luwu Timur"></option>
        <option value="246:Luwu Utara"></option>
        <option value="247:Madiun"></option>
        <option value="248:Madiun (Kota)"></option>
        <option value="249:Magelang"></option>
        <option value="250:Magelang (Kota)"></option>
        <option value="251:Magetan"></option>
        <option value="252:Majalengka"></option>
        <option value="253:Majene"></option>
        <option value="254:Makassar"></option>
        <option value="255:Malang"></option>
        <option value="256:Malang (Kota)"></option>
        <option value="257:Malinau"></option>
        <option value="258:Maluku Barat Daya"></option>
        <option value="259:Maluku Tengah"></option>
        <option value="260:Maluku Tenggara"></option>
        <option value="261:Maluku Tenggara Barat"></option>
        <option value="262:Mamasa"></option>
        <option value="263:Mamberamo Raya"></option>
        <option value="264:Mamberamo Tengah"></option>
        <option value="265:Mamuju"></option>
        <option value="266:Mamuju Utara"></option>
        <option value="267:Manado"></option>
        <option value="268:Mandailing Natal"></option>
        <option value="269:Manggarai"></option>
        <option value="270:Manggarai Barat"></option>
        <option value="271:Manggarai Timur"></option>
        <option value="272:Manokwari"></option>
        <option value="273:Manokwari Selatan"></option>
        <option value="274:Mappi"></option>
        <option value="275:Maros"></option>
        <option value="276:Mataram"></option>
        <option value="277:Maybrat"></option>
        <option value="278:Medan"></option>
        <option value="279:Melawi"></option>
        <option value="280:Merangin"></option>
        <option value="281:Merauke"></option>
        <option value="282:Mesuji"></option>
        <option value="283:Metro"></option>
        <option value="284:Mimika"></option>
        <option value="285:Minahasa"></option>
        <option value="286:Minahasa Selatan"></option>
        <option value="287:Minahasa Tenggara"></option>
        <option value="288:Minahasa Utara"></option>
        <option value="289:Mojokerto"></option>
        <option value="290:Mojokerto (Kota)"></option>
        <option value="291:Morowali"></option>
        <option value="292:Muara Enim"></option>
        <option value="293:Muaro Jambi"></option>
        <option value="294:Muko Muko"></option>
        <option value="295:Muna"></option>
        <option value="296:Murung Raya"></option>
        <option value="297:Musi Banyuasin"></option>
        <option value="298:Musi Rawas"></option>
        <option value="299:Nabire"></option>
        <option value="300:Nagan Raya"></option>
        <option value="301:Nagekeo"></option>
        <option value="302:Natuna"></option>
        <option value="303:Nduga"></option>
        <option value="304:Ngada"></option>
        <option value="305:Nganjuk"></option>
        <option value="306:Ngawi"></option>
        <option value="307:Nias"></option>
        <option value="308:Nias Barat"></option>
        <option value="309:Nias Selatan"></option>
        <option value="310:Nias Utara"></option>
        <option value="311:Nunukan"></option>
        <option value="312:Ogan Ilir"></option>
        <option value="313:Ogan Komering Ilir"></option>
        <option value="314:Ogan Komering Ulu"></option>
        <option value="315:Ogan Komering Ulu Selatan"></option>
        <option value="316:Ogan Komering Ulu Timur"></option>
        <option value="317:Pacitan"></option>
        <option value="318:Padang"></option>
        <option value="319:Padang Lawas"></option>
        <option value="320:Padang Lawas Utara"></option>
        <option value="321:Padang Panjang"></option>
        <option value="322:Padang Pariaman"></option>
        <option value="323:Padang Sidempuan"></option>
        <option value="324:Pagar Alam"></option>
        <option value="325:Pakpak Bharat"></option>
        <option value="326:Palangka Raya"></option>
        <option value="327:Palembang"></option>
        <option value="328:Palopo"></option>
        <option value="329:Palu"></option>
        <option value="330:Pamekasan"></option>
        <option value="331:Pandeglang"></option>
        <option value="332:Pangandaran"></option>
        <option value="333:Pangkajene Kepulauan"></option>
        <option value="334:Pangkal Pinang"></option>
        <option value="335:Paniai"></option>
        <option value="336:Parepare"></option>
        <option value="337:Pariaman"></option>
        <option value="338:Parigi Moutong"></option>
        <option value="339:Pasaman"></option>
        <option value="340:Pasaman Barat"></option>
        <option value="341:Paser"></option>
        <option value="342:Pasuruan"></option>
        <option value="343:Pasuruan (Kota)"></option>
        <option value="344:Pati"></option>
        <option value="345:Payakumbuh"></option>
        <option value="346:Pegunungan Arfak"></option>
        <option value="347:Pegunungan Bintang"></option>
        <option value="348:Pekalongan"></option>
        <option value="349:Pekalongan (Kota)"></option>
        <option value="350:Pekanbaru"></option>
        <option value="351:Pelalawan"></option>
        <option value="352:Pemalang"></option>
        <option value="353:Pematang Siantar"></option>
        <option value="354:Penajam Paser Utara"></option>
        <option value="355:Pesawaran"></option>
        <option value="356:Pesisir Barat"></option>
        <option value="357:Pesisir Selatan"></option>
        <option value="358:Pidie"></option>
        <option value="359:Pidie Jaya"></option>
        <option value="360:Pinrang"></option>
        <option value="361:Pohuwato"></option>
        <option value="362:Polewali Mandar"></option>
        <option value="363:Ponorogo"></option>
        <option value="364:Pontianak"></option>
        <option value="365:Pontianak (Kota)"></option>
        <option value="366:Poso"></option>
        <option value="367:Prabumulih"></option>
        <option value="368:Pringsewu"></option>
        <option value="369:Probolinggo"></option>
        <option value="370:Probolinggo (Kota)"></option>
        <option value="371:Pulang Pisau"></option>
        <option value="372:Pulau Morotai"></option>
        <option value="373:Puncak"></option>
        <option value="374:Puncak Jaya"></option>
        <option value="375:Purbalingga"></option>
        <option value="376:Purwakarta"></option>
        <option value="377:Purworejo"></option>
        <option value="378:Raja Ampat"></option>
        <option value="379:Rejang Lebong"></option>
        <option value="380:Rembang"></option>
        <option value="381:Rokan Hilir"></option>
        <option value="382:Rokan Hulu"></option>
        <option value="383:Rote Ndao"></option>
        <option value="384:Sabang"></option>
        <option value="385:Sabu Raijua"></option>
        <option value="386:Salatiga"></option>
        <option value="387:Samarinda"></option>
        <option value="388:Sambas"></option>
        <option value="389:Samosir"></option>
        <option value="390:Sampang"></option>
        <option value="391:Sanggau"></option>
        <option value="392:Sarmi"></option>
        <option value="393:Sarolangun"></option>
        <option value="394:Sawah Lunto"></option>
        <option value="395:Sekadau"></option>
        <option value="396:Selayar (Kepulauan Selayar)"></option>
        <option value="397:Seluma"></option>
        <option value="398:Semarang"></option>
        <option value="399:Semarang (Kota)"></option>
        <option value="400:Seram Bagian Barat"></option>
        <option value="401:Seram Bagian Timur"></option>
        <option value="402:Serang"></option>
        <option value="403:Serang (Kota)"></option>
        <option value="404:Serdang Bedagai"></option>
        <option value="405:Seruyan"></option>
        <option value="406:Siak"></option>
        <option value="407:Sibolga"></option>
        <option value="408:Sidenreng Rappang\/Rapang"></option>
        <option value="409:Sidoarjo"></option>
        <option value="410:Sigi"></option>
        <option value="411:Sijunjung (Sawah Lunto Sijunjung)"></option>
        <option value="412:Sikka"></option>
        <option value="413:Simalungun"></option>
        <option value="414:Simeulue"></option>
        <option value="415:Singkawang"></option>
        <option value="416:Sinjai"></option>
        <option value="417:Sintang"></option>
        <option value="418:Situbondo"></option>
        <option value="419:Sleman"></option>
        <option value="420:Solok"></option>
        <option value="421:Solok (Kota)"></option>
        <option value="422:Solok Selatan"></option>
        <option value="423:Soppeng"></option>
        <option value="424:Sorong"></option>
        <option value="425:Sorong (Kota)"></option>
        <option value="426:Sorong Selatan"></option>
        <option value="427:Sragen"></option>
        <option value="428:Subang"></option>
        <option value="429:Subulussalam"></option>
        <option value="430:Sukabumi"></option>
        <option value="431:Sukabumi (Kota)"></option>
        <option value="432:Sukamara"></option>
        <option value="433:Sukoharjo"></option>
        <option value="434:Sumba Barat"></option>
        <option value="435:Sumba Barat Daya"></option>
        <option value="436:Sumba Tengah"></option>
        <option value="437:Sumba Timur"></option>
        <option value="438:Sumbawa"></option>
        <option value="439:Sumbawa Barat"></option>
        <option value="440:Sumedang"></option>
        <option value="441:Sumenep"></option>
        <option value="442:Sungaipenuh"></option>
        <option value="443:Supiori"></option>
        <option value="444:Surabaya"></option>
        <option value="445:Surakarta (Solo)"></option>
        <option value="446:Tabalong"></option>
        <option value="447:Tabanan"></option>
        <option value="448:Takalar"></option>
        <option value="449:Tambrauw"></option>
        <option value="450:Tana Tidung"></option>
        <option value="451:Tana Toraja"></option>
        <option value="452:Tanah Bumbu"></option>
        <option value="453:Tanah Datar"></option>
        <option value="454:Tanah Laut"></option>
        <option value="455:Tangerang"></option>
        <option value="456:Tangerang (Kota)"></option>
        <option value="457:Tangerang Selatan"></option>
        <option value="458:Tanggamus"></option>
        <option value="459:Tanjung Balai"></option>
        <option value="460:Tanjung Jabung Barat"></option>
        <option value="461:Tanjung Jabung Timur"></option>
        <option value="462:Tanjung Pinang"></option>
        <option value="463:Tapanuli Selatan"></option>
        <option value="464:Tapanuli Tengah"></option>
        <option value="465:Tapanuli Utara"></option>
        <option value="466:Tapin"></option>
        <option value="467:Tarakan"></option>
        <option value="468:Tasikmalaya"></option>
        <option value="469:Tasikmalaya (Kota)"></option>
        <option value="470:Tebing Tinggi"></option>
        <option value="471:Tebo"></option>
        <option value="472:Tegal"></option>
        <option value="473:Tegal (Kota)"></option>
        <option value="474:Teluk Bintuni"></option>
        <option value="475:Teluk Wondama"></option>
        <option value="476:Temanggung"></option>
        <option value="477:Ternate"></option>
        <option value="478:Tidore Kepulauan"></option>
        <option value="479:Timor Tengah Selatan"></option>
        <option value="480:Timor Tengah Utara"></option>
        <option value="481:Toba Samosir"></option>
        <option value="482:Tojo Una-Una"></option>
        <option value="483:Toli-Toli"></option>
        <option value="484:Tolikara"></option>
        <option value="485:Tomohon"></option>
        <option value="486:Toraja Utara"></option>
        <option value="487:Trenggalek"></option>
        <option value="488:Tual"></option>
        <option value="489:Tuban"></option>
        <option value="490:Tulang Bawang"></option>
        <option value="491:Tulang Bawang Barat"></option>
        <option value="492:Tulungagung"></option>
        <option value="493:Wajo"></option>
        <option value="494:Wakatobi"></option>
        <option value="495:Waropen"></option>
        <option value="496:Way Kanan"></option>
        <option value="497:Wonogiri"></option>
        <option value="498:Wonosobo"></option>
        <option value="499:Yahukimo"></option>
        <option value="500:Yalimo"></option>
        <option value="501:Yogyakarta"></option>
    </datalist>' ;
    return $dataList;
}
function dataList_icon() {

        $dataList = '<datalist id="ionicons">
        <option value="md-add-circle-outline"></option>
        <option value="md-add-circle"></option>
        <option value="md-add"></option>
        <option value="md-airplane"></option>
        <option value="md-alarm"></option>
        <option value="md-albums"></option>
        <option value="md-alert"></option>
        <option value="md-american-football"></option>
        <option value="md-analytics"></option>
        <option value="md-aperture"></option>
        <option value="md-apps"></option>
        <option value="md-appstore"></option>
        <option value="md-archive"></option>
        <option value="md-arrow-back"></option>
        <option value="md-arrow-down"></option>
        <option value="md-arrow-dropdown-circle"></option>
        <option value="md-arrow-dropdown"></option>
        <option value="md-arrow-dropleft-circle"></option>
        <option value="md-arrow-dropleft"></option>
        <option value="md-arrow-dropright-circle"></option>
        <option value="md-arrow-dropright"></option>
        <option value="md-arrow-dropup-circle"></option>
        <option value="md-arrow-dropup"></option>
        <option value="md-arrow-forward"></option>
        <option value="md-arrow-round-back"></option>
        <option value="md-arrow-round-down"></option>
        <option value="md-arrow-round-forward"></option>
        <option value="md-arrow-round-up"></option>
        <option value="md-arrow-up"></option>
        <option value="md-at"></option>
        <option value="md-attach"></option>
        <option value="md-backspace"></option>
        <option value="md-barcode"></option>
        <option value="md-baseball"></option>
        <option value="md-basket"></option>
        <option value="md-basketball"></option>
        <option value="md-battery-charging"></option>
        <option value="md-battery-dead"></option>
        <option value="md-battery-full"></option>
        <option value="md-beaker"></option>
        <option value="md-bed"></option>
        <option value="md-beer"></option>
        <option value="md-bicycle"></option>
        <option value="md-bluetooth"></option>
        <option value="md-boat"></option>
        <option value="md-body"></option>
        <option value="md-bonfire"></option>
        <option value="md-book"></option>
        <option value="md-bookmark"></option>
        <option value="md-bookmarks"></option>
        <option value="md-bowtie"></option>
        <option value="md-briefcase"></option>
        <option value="md-browsers"></option>
        <option value="md-brush"></option>
        <option value="md-bug"></option>
        <option value="md-build"></option>
        <option value="md-bulb"></option>
        <option value="md-bus"></option>
        <option value="md-business"></option>
        <option value="md-cafe"></option>
        <option value="md-calculator"></option>
        <option value="md-calendar"></option>
        <option value="md-call"></option>
        <option value="md-camera"></option>
        <option value="md-car"></option>
        <option value="md-card"></option>
        <option value="md-cart"></option>
        <option value="md-cash"></option>
        <option value="md-cellular"></option>
        <option value="md-chatboxes"></option>
        <option value="md-chatbubbles"></option>
        <option value="md-checkbox-outline"></option>
        <option value="md-checkbox"></option>
        <option value="md-checkmark-circle-outline"></option>
        <option value="md-checkmark-circle"></option>
        <option value="md-checkmark"></option>
        <option value="md-clipboard"></option>
        <option value="md-clock"></option>
        <option value="md-close-circle-outline"></option>
        <option value="md-close-circle"></option>
        <option value="md-close"></option>
        <option value="md-cloud-circle"></option>
        <option value="md-cloud-done"></option>
        <option value="md-cloud-download"></option>
        <option value="md-cloud-outline"></option>
        <option value="md-cloud-upload"></option>
        <option value="md-cloud"></option>
        <option value="md-cloudy-night"></option>
        <option value="md-cloudy"></option>
        <option value="md-code-download"></option>
        <option value="md-code-working"></option>
        <option value="md-code"></option>
        <option value="md-cog"></option>
        <option value="md-color-fill"></option>
        <option value="md-color-filter"></option>
        <option value="md-color-palette"></option>
        <option value="md-color-wand"></option>
        <option value="md-compass"></option>
        <option value="md-construct"></option>
        <option value="md-contact"></option>
        <option value="md-contacts"></option>
        <option value="md-contract"></option>
        <option value="md-contrast"></option>
        <option value="md-copy"></option>
        <option value="md-create"></option>
        <option value="md-crop"></option>
        <option value="md-cube"></option>
        <option value="md-cut"></option>
        <option value="md-desktop"></option>
        <option value="md-disc"></option>
        <option value="md-document"></option>
        <option value="md-done-all"></option>
        <option value="md-download"></option>
        <option value="md-easel"></option>
        <option value="md-egg"></option>
        <option value="md-exit"></option>
        <option value="md-expand"></option>
        <option value="md-eye-off"></option>
        <option value="md-eye"></option>
        <option value="md-fastforward"></option>
        <option value="md-female"></option>
        <option value="md-filing"></option>
        <option value="md-film"></option>
        <option value="md-finger-print"></option>
        <option value="md-fitness"></option>
        <option value="md-flag"></option>
        <option value="md-flame"></option>
        <option value="md-flash-off"></option>
        <option value="md-flash"></option>
        <option value="md-flashlight"></option>
        <option value="md-flask"></option>
        <option value="md-flower"></option>
        <option value="md-folder-open"></option>
        <option value="md-folder"></option>
        <option value="md-football"></option>
        <option value="md-funnel"></option>
        <option value="md-gift"></option>
        <option value="md-git-branch"></option>
        <option value="md-git-commit"></option>
        <option value="md-git-compare"></option>
        <option value="md-git-merge"></option>
        <option value="md-git-network"></option>
        <option value="md-git-pull-request"></option>
        <option value="md-glasses"></option>
        <option value="md-globe"></option>
        <option value="md-grid"></option>
        <option value="md-hammer"></option>
        <option value="md-hand"></option>
        <option value="md-happy"></option>
        <option value="md-headset"></option>
        <option value="md-heart-dislike"></option>
        <option value="md-heart-empty"></option>
        <option value="md-heart-half"></option>
        <option value="md-heart"></option>
        <option value="md-help-buoy"></option>
        <option value="md-help-circle-outline"></option>
        <option value="md-help-circle"></option>
        <option value="md-help"></option>
        <option value="md-home"></option>
        <option value="md-hourglass"></option>
        <option value="md-ice-cream"></option>
        <option value="md-image"></option>
        <option value="md-images"></option>
        <option value="md-infinite"></option>
        <option value="md-information-circle-outline"></option>
        <option value="md-information-circle"></option>
        <option value="md-information"></option>
        <option value="md-jet"></option>
        <option value="md-journal"></option>
        <option value="md-key"></option>
        <option value="md-keypad"></option>
        <option value="md-laptop"></option>
        <option value="md-leaf"></option>
        <option value="md-link"></option>
        <option value="md-list-box"></option>
        <option value="md-list"></option>
        <option value="md-locate"></option>
        <option value="md-lock"></option>
        <option value="md-log-in"></option>
        <option value="md-log-out"></option>
        <option value="md-magnet"></option>
        <option value="md-mail-open"></option>
        <option value="md-mail-unread"></option>
        <option value="md-mail"></option>
        <option value="md-male"></option>
        <option value="md-man"></option>
        <option value="md-map"></option>
        <option value="md-medal"></option>
        <option value="md-medical"></option>
        <option value="md-medkit"></option>
        <option value="md-megaphone"></option>
        <option value="md-menu"></option>
        <option value="md-mic-off"></option>
        <option value="md-mic"></option>
        <option value="md-microphone"></option>
        <option value="md-moon"></option>
        <option value="md-more"></option>
        <option value="md-move"></option>
        <option value="md-musical-note"></option>
        <option value="md-musical-notes"></option>
        <option value="md-navigate"></option>
        <option value="md-notifications-off"></option>
        <option value="md-notifications-outline"></option>
        <option value="md-notifications"></option>
        <option value="md-nuclear"></option>
        <option value="md-nutrition"></option>
        <option value="md-open"></option>
        <option value="md-options"></option>
        <option value="md-outlet"></option>
        <option value="md-paper-plane"></option>
        <option value="md-paper"></option>
        <option value="md-partly-sunny"></option>
        <option value="md-pause"></option>
        <option value="md-paw"></option>
        <option value="md-people"></option>
        <option value="md-person-add"></option>
        <option value="md-person"></option>
        <option value="md-phone-landscape"></option>
        <option value="md-phone-portrait"></option>
        <option value="md-photos"></option>
        <option value="md-pie"></option>
        <option value="md-pin"></option>
        <option value="md-pint"></option>
        <option value="md-pizza"></option>
        <option value="md-planet"></option>
        <option value="md-play-circle"></option>
        <option value="md-play"></option>
        <option value="md-podium"></option>
        <option value="md-power"></option>
        <option value="md-pricetag"></option>
        <option value="md-pricetags"></option>
        <option value="md-print"></option>
        <option value="md-pulse"></option>
        <option value="md-qr-scanner"></option>
        <option value="md-quote"></option>
        <option value="md-radio-button-off"></option>
        <option value="md-radio-button-on"></option>
        <option value="md-radio"></option>
        <option value="md-rainy"></option>
        <option value="md-recording"></option>
        <option value="md-redo"></option>
        <option value="md-refresh-circle"></option>
        <option value="md-refresh"></option>
        <option value="md-remove-circle-outline"></option>
        <option value="md-remove-circle"></option>
        <option value="md-remove"></option>
        <option value="md-reorder"></option>
        <option value="md-repeat"></option>
        <option value="md-resize"></option>
        <option value="md-restaurant"></option>
        <option value="md-return-left"></option>
        <option value="md-return-right"></option>
        <option value="md-reverse-camera"></option>
        <option value="md-rewind"></option>
        <option value="md-ribbon"></option>
        <option value="md-rocket"></option>
        <option value="md-rose"></option>
        <option value="md-sad"></option>
        <option value="md-save"></option>
        <option value="md-school"></option>
        <option value="md-search"></option>
        <option value="md-send"></option>
        <option value="md-settings"></option>
        <option value="md-share-alt"></option>
        <option value="md-share"></option>
        <option value="md-shirt"></option>
        <option value="md-shuffle"></option>
        <option value="md-skip-backward"></option>
        <option value="md-skip-forward"></option>
        <option value="md-snow"></option>
        <option value="md-speedometer"></option>
        <option value="md-square-outline"></option>
        <option value="md-square"></option>
        <option value="md-star-half"></option>
        <option value="md-star-outline"></option>
        <option value="md-star"></option>
        <option value="md-stats"></option>
        <option value="md-stopwatch"></option>
        <option value="md-subway"></option>
        <option value="md-sunny"></option>
        <option value="md-swap"></option>
        <option value="md-switch"></option>
        <option value="md-sync"></option>
        <option value="md-tablet-landscape"></option>
        <option value="md-tablet-portrait"></option>
        <option value="md-tennisball"></option>
        <option value="md-text"></option>
        <option value="md-thermometer"></option>
        <option value="md-thumbs-down"></option>
        <option value="md-thumbs-up"></option>
        <option value="md-thunderstorm"></option>
        <option value="md-time"></option>
        <option value="md-timer"></option>
        <option value="md-today"></option>
        <option value="md-train"></option>
        <option value="md-transgender"></option>
        <option value="md-trash"></option>
        <option value="md-trending-down"></option>
        <option value="md-trending-up"></option>
        <option value="md-trophy"></option>
        <option value="md-tv"></option>
        <option value="md-umbrella"></option>
        <option value="md-undo"></option>
        <option value="md-unlock"></option>
        <option value="md-videocam"></option>
        <option value="md-volume-high"></option>
        <option value="md-volume-low"></option>
        <option value="md-volume-mute"></option>
        <option value="md-volume-off"></option>
        <option value="md-walk"></option>
        <option value="md-wallet"></option>
        <option value="md-warning"></option>
        <option value="md-watch"></option>
        <option value="md-water"></option>
        <option value="md-wifi"></option>
        <option value="md-wine"></option>
        <option value="md-woman"></option>
        <option value="logo-android"></option>
        <option value="logo-angular"></option>
        <option value="logo-apple"></option>
        <option value="logo-bitbucket"></option>
        <option value="logo-bitcoin"></option>
        <option value="logo-buffer"></option>
        <option value="logo-chrome"></option>
        <option value="logo-closed-captioning"></option>
        <option value="logo-codepen"></option>
        <option value="logo-css3"></option>
        <option value="logo-designernews"></option>
        <option value="logo-dribbble"></option>
        <option value="logo-dropbox"></option>
        <option value="logo-euro"></option>
        <option value="logo-facebook"></option>
        <option value="logo-flickr"></option>
        <option value="logo-foursquare"></option>
        <option value="logo-freebsd-devil"></option>
        <option value="logo-game-controller-a"></option>
        <option value="logo-game-controller-b"></option>
        <option value="logo-github"></option>
        <option value="logo-google"></option>
        <option value="logo-googleplus"></option>
        <option value="logo-hackernews"></option>
        <option value="logo-html5"></option>
        <option value="logo-instagram"></option>
        <option value="logo-ionic"></option>
        <option value="logo-ionitron"></option>
        <option value="logo-javascript"></option>
        <option value="logo-linkedin"></option>
        <option value="logo-markdown"></option>
        <option value="logo-model-s"></option>
        <option value="logo-no-smoking"></option>
        <option value="logo-nodejs"></option>
        <option value="logo-npm"></option>
        <option value="logo-octocat"></option>
        <option value="logo-pinterest"></option>
        <option value="logo-playstation"></option>
        <option value="logo-polymer"></option>
        <option value="logo-python"></option>
        <option value="logo-reddit"></option>
        <option value="logo-rss"></option>
        <option value="logo-sass"></option>
        <option value="logo-skype"></option>
        <option value="logo-slack"></option>
        <option value="logo-snapchat"></option>
        <option value="logo-steam"></option>
        <option value="logo-tumblr"></option>
        <option value="logo-tux"></option>
        <option value="logo-twitch"></option>
        <option value="logo-twitter"></option>
        <option value="logo-usd"></option>
        <option value="logo-vimeo"></option>
        <option value="logo-vk"></option>
        <option value="logo-whatsapp"></option>
        <option value="logo-windows"></option>
        <option value="logo-wordpress"></option>
        <option value="logo-xbox"></option>
        <option value="logo-xing"></option>
        <option value="logo-yahoo"></option>
        <option value="logo-yen"></option>
        <option value="logo-youtube"></option>
    </datalist>' ;
    return $dataList;
}
function add_script_to_menu_page()
{
    // $pagenow, is a global variable referring to the filename of the current page, 
    // such as ‘admin.php’, ‘post-new.php’
    global $pagenow;
    if ($pagenow != 'customize.php') {
        return;
    }

    // loading css
    // wp_register_style( 'TokoWA-customize-css', get_template_directory_uri() . '/css/TokoWA-customize.css', false, '1.0.0' );
    // wp_enqueue_style( 'TokoWA-customize-css' );

    // loading js
    // wp_register_script( 'TokoWA-customize-js', get_template_directory_uri().'/js/TokoWA-customize.js', array('jquery-core'), false, true );
    // wp_enqueue_script( 'TokoWA-customize-js' );
}

add_action('customize_register', array(
    'TokoWA_customizer',
    'register'
));

// Enqueue live preview javascript in Theme Customizer admin screen
add_action('customize_preview_init', array(
    'TokoWA_customizer',
    'live_preview'
));
?>