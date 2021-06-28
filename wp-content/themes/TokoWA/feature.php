<div id="feature">
    <div class="item">
        <div class="flex">
            <div class="flexwrap">
                <i class="icon ion-<?php echo (get_theme_mod('TokoWA_featured_icon1') ? get_theme_mod('TokoWA_featured_icon1') : 'md-thumbs-up'); ?>"></i>
            </div>
        </div>
        <div class="flex">
            <div class="flexwrap">
                <h3><?php echo (get_theme_mod('TokoWA_featured_title1') ? get_theme_mod('TokoWA_featured_title1') : 'Kualitas Terbaik'); ?></h3>

                <?php $TokoWA_alamat_toko_kota = get_theme_mod('TokoWA_alamat_toko_kota'); list($kode_kota, $kota) = explode(":", $TokoWA_alamat_toko_kota); ?>
                <?php $alamat_toko_kota = (get_theme_mod('TokoWA_alamat_toko_kota') ? $kota : 'Bandung (Kota)'); ?>
                <p><?php echo (get_theme_mod('TokoWA_featured_desc1') ? get_theme_mod('TokoWA_featured_desc1') : 'Kualitas Barang Terjamin!'); ?></p>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="flex">
            <div class="flexwrap">
                <i class="icon ion-<?php echo (get_theme_mod('TokoWA_featured_icon2') ? get_theme_mod('TokoWA_featured_icon2') : 'logo-whatsapp'); ?>"></i>
            </div>
        </div>
        <div class="flex">
            <div class="flexwrap">
                <h3><?php echo (get_theme_mod('TokoWA_featured_title2') ? get_theme_mod('TokoWA_featured_title2') : 'Order via WhatsApp.'); ?></h3>
                <p><?php echo (get_theme_mod('TokoWA_featured_desc2') ? get_theme_mod('TokoWA_featured_desc2') : 'Instant Checkout tanpa Ribet!'); ?></p>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="flex">
            <div class="flexwrap">
                <i class="icon ion-<?php echo (get_theme_mod('TokoWA_featured_icon3') ? get_theme_mod('TokoWA_featured_icon3') : 'md-done-all'); ?>"></i>
            </div>
        </div>
        <div class="flex">
            <div class="flexwrap">
                <h3><?php echo (get_theme_mod('TokoWA_featured_title3') ? get_theme_mod('TokoWA_featured_title3') : 'Mudah & Fast Response..'); ?></h3>
                <p><?php echo (get_theme_mod('TokoWA_featured_desc3') ? get_theme_mod('TokoWA_featured_desc3') : '<a href=" ' . home_url() . '/' . 'produk">Pilih Produk</a> &rsaquo; Checkout &rsaquo; Proses!'); ?></p>
            </div>
        </div>
    </div>
</div>