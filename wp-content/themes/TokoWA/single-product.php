<?php
get_header();
?>
<?php $productID = get_the_ID(); ?>

<?php require_once 'query-ulasan.php'; ?>

    <main role="main">
        <section>
            <div class="wrapper">
                
                <div id="product" class="listProduct" data-product-id="<?php echo $productID; ?>" data-product-title="<?php echo get_the_title($productID); ?>">
		

                    <div <?php post_class('item_product'); ?> id="product_<?php echo $productID; ?>" data-id="product_<?php echo $productID; ?>">
                        <div class="imgArea" itemscope itemtype="http://schema.org/ImageGallery">
                            <div class="imgWrap">
                                <?php edit_post_link('<i class="icon abs ion-md-create"></i>'); ?>
                                <?php if(!get_field('stok_produk')) {?>
                                    <div class="ribbon habis"><small class="text">HABIS</small></div>
                                <?php } ?>

                                <img class="img hide" alt="<?php echo get_the_title($productID); ?> - <?php bloginfo('name'); ?>" data-src="<?php echo esc_url(get_field('gambar_1',$productID)['sizes']['mini']); ?>"/>
                                <div class="imgProducts owl-carousel">
                                    <?php if( get_field('gambar_1',$productID) ) { ?>
                                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <?php if( get_field('youtube_url',$productID) ) {
                                                $youtube_id = str_replace("https://youtu.be/", "", get_field('youtube_url',$productID));
                                                ?>
                                                <a class="poptamvBtn youtube" data-width="720" data-title="<i class='icon ion-md-videocam'></i> <?php echo get_the_title($productID);?>" data-target="iframe" data-iframe="https://www.youtube.com/embed/<?php echo $youtube_id; ?>?version=3&enablejsapi=1&playerapiid=ytplayer" href="javascript:void(0);"><i class="icon ion-logo-youtube"></i></a>
                                            <?php } ?>
                                            
                                            <a class="lightbox" data-title="<?php echo get_the_title($productId); ?>" itemprop="contentUrl" href="<?php echo esc_url(get_field('gambar_1',$productID)['sizes']['full']); ?>" data-bg="<?php echo esc_url(get_field('gambar_1',$productID)['sizes']['large']); ?>">
                                                <img alt="<?php echo get_the_title($productID); ?> - <?php bloginfo('name'); ?>" itemprop="thumbnail" class="zoomImg" data-magnify-src="<?php echo esc_url(get_field('gambar_1',$productID)['sizes']['large']); ?>" data-src="<?php echo esc_url(get_field('gambar_1',$productID)['sizes']['large']); ?>"/>
                                            </a>
                                            <figcaption class="hide" itemprop="name">
                                                <?php echo get_the_title($productID); ?>
                                                <meta itemprop="width" content="768"/><meta itemprop="height" content="768"/>
                                            </figcaption>
                                        </figure>
                                    <?php } ?>
                                    <?php if( get_field('gambar_2',$productID) ) { ?>
                                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a class="lightbox" data-title="<?php echo get_the_title($productId); ?>" itemprop="contentUrl" href="<?php echo esc_url(get_field('gambar_2',$productID)['sizes']['full']); ?>" data-bg="<?php echo esc_url(get_field('gambar_2',$productID)['sizes']['large']); ?>">
                                                <img alt="<?php echo get_the_title($productID); ?> - <?php bloginfo('name'); ?>" itemprop="thumbnail" class="zoomImg" data-magnify-src="<?php echo esc_url(get_field('gambar_2',$productID)['sizes']['large']); ?>" data-src="<?php echo esc_url(get_field('gambar_2',$productID)['sizes']['large']); ?>"/>
                                            </a>
                                            <figcaption class="hide" itemprop="name">
                                                <?php echo get_the_title($productID); ?>
                                                <meta itemprop="width" content="768"/><meta itemprop="height" content="768"/>
                                            </figcaption>
                                        </figure>
                                    <?php } ?>
                                    <?php if( get_field('gambar_3',$productID) ) { ?>
                                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a class="lightbox" data-title="<?php echo get_the_title($productId); ?>" itemprop="contentUrl" href="<?php echo esc_url(get_field('gambar_3',$productID)['sizes']['full']); ?>" data-bg="<?php echo esc_url(get_field('gambar_3',$productID)['sizes']['large']); ?>">
                                                <img alt="<?php echo get_the_title($productID); ?> - <?php bloginfo('name'); ?>" itemprop="thumbnail" class="zoomImg" data-magnify-src="<?php echo esc_url(get_field('gambar_3',$productID)['sizes']['large']); ?>" data-src="<?php echo esc_url(get_field('gambar_3',$productID)['sizes']['large']); ?>"/>
                                            </a>
                                            <figcaption class="hide" itemprop="name">
                                                <?php echo get_the_title($productID); ?>
                                                <meta itemprop="width" content="768"/><meta itemprop="height" content="768"/>
                                            </figcaption>
                                        </figure>
                                    <?php } ?>
                                    <?php if( get_field('gambar_4',$productID) ) { ?>
                                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a class="lightbox" data-title="<?php echo get_the_title($productId); ?>" itemprop="contentUrl" href="<?php echo esc_url(get_field('gambar_4',$productID)['sizes']['full']); ?>" data-bg="<?php echo esc_url(get_field('gambar_4',$productID)['sizes']['large']); ?>">
                                                <img alt="<?php echo get_the_title($productID); ?> - <?php bloginfo('name'); ?>" itemprop="thumbnail" class="zoomImg" data-magnify-src="<?php echo esc_url(get_field('gambar_4',$productID)['sizes']['large']); ?>" data-src="<?php echo esc_url(get_field('gambar_4',$productID)['sizes']['large']); ?>"/>
                                            </a>
                                            <figcaption class="hide" itemprop="name">
                                                <?php echo get_the_title($productID); ?>
                                                <meta itemprop="width" content="768"/><meta itemprop="height" content="768"/>
                                            </figcaption>
                                        </figure>
                                    <?php } ?>
                                    <?php if( get_field('gambar_5',$productID) ) { ?>
                                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a class="lightbox" data-title="<?php echo get_the_title($productId); ?>" itemprop="contentUrl" href="<?php echo esc_url(get_field('gambar_5',$productID)['sizes']['full']); ?>" data-bg="<?php echo esc_url(get_field('gambar_5',$productID)['sizes']['large']); ?>">
                                                <img alt="<?php echo get_the_title($productID); ?> - <?php bloginfo('name'); ?>" itemprop="thumbnail" class="zoomImg" data-magnify-src="<?php echo esc_url(get_field('gambar_5',$productID)['sizes']['large']); ?>" data-src="<?php echo esc_url(get_field('gambar_5',$productID)['sizes']['large']); ?>"/>
                                            </a>
                                            <figcaption class="hide" itemprop="name">
                                                <?php echo get_the_title($productID); ?>
                                                <meta itemprop="width" content="768"/><meta itemprop="height" content="768"/>
                                            </figcaption>
                                        </figure>
                                    <?php } ?>
                                </div>
                                <div class="shareThis">
                                    <span>Bagikan :</span>
                                    <a title="Whatsapp" class="whatsapp popWin" href="https://api.whatsapp.com/send?text=<?php echo get_the_title($productID) . ' @ ' . get_bloginfo('name') . ' - ' . wp_get_shortlink($productID); ?>"><i class="icon ion-logo-whatsapp"></i></a>
                                    <a title="Facebook" class="facebook popWin" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo wp_get_shortlink($productID); ?>"><i class="icon ion-logo-facebook"></i></a>
                                    <a title="Twitter" class="twitter popWin" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($productID) . ' @ ' . get_bloginfo('name') . ' - ' . wp_get_shortlink($productID); ?>"><i class="icon ion-logo-twitter"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="productInfo">
                            <h1 class="title" data-title="<?php echo get_the_title($productID); ?>"><a class="link" href="<?php echo get_the_permalink($productID); ?>"><?php echo get_the_title($productID); ?></a></h1>

                            <?php if ( $ulasan_count != 0 ) { ?>
                                <div class="productRating">
                                    <a href="<?php the_permalink() ?>/#ulasan" data-scroll="true">
                                    <span class="avg_rating_count"><?php echo $rating_average_value; ?></span>
                                    <span class="avg_rating_wrap">
                                        <span class="avg_rating" data-rating="<?php echo $rating_average_value; ?>">
                                            <span class="avg_rating__item"></span>
                                            <span class="avg_rating__item"></span>
                                            <span class="avg_rating__item"></span>
                                            <span class="avg_rating__item"></span>
                                            <span class="avg_rating__item"></span>
                                        </span>
                                    </span>
                                    <small><?php echo $ulasan_count; ?> Ulasan</small>
                                    </a>
                                </div>
                            <?php } ?>
                            <div class="priceArea"><b class="price" data-normal-price="<?php the_field('harga_normal',$productID) ?>" data-price="<?php the_field('harga_normal',$productID) ?>" data-discount="<?php the_field('diskon',$productID) ?>"><?php the_field('harga_normal',$productID) ?></b></div>

                            <br />
                            
                            <?php if( get_field('tampilkan_varian',$productID) ) { ?>
                            <div class="productOption">
                                <h4 class="optionTitle"><?php the_field('judul_varian',$productID); ?></h4>
                                    <div class="optionBtn">
                                        <?php
                                            $varian = get_field('daftar_varian',$productID);

                                            if( $varian ): ?>
                                            <?php if( $varian['nama_varian_1'] ) { ?>
                                                <button data-price="<?php echo $varian['harga_varian_1']; ?>"><?php echo $varian['nama_varian_1']; ?></button>
                                            <?php } ?>

                                            <?php if( $varian['nama_varian_2'] ) { ?>
                                                <button data-price="<?php echo $varian['harga_varian_2']; ?>"><?php echo $varian['nama_varian_2']; ?></button>
                                            <?php } ?>

                                            <?php if( $varian['nama_varian_3'] ) { ?>
                                                <button data-price="<?php echo $varian['harga_varian_3']; ?>"><?php echo $varian['nama_varian_3']; ?></button>
                                            <?php } ?>

                                            <?php if( $varian['nama_varian_4'] ) { ?>
                                                <button data-price="<?php echo $varian['harga_varian_4']; ?>"><?php echo $varian['nama_varian_4']; ?></button>
                                            <?php } ?>

                                            <?php if( $varian['nama_varian_5'] ) { ?>
                                                <button data-price="<?php echo $varian['harga_varian_5']; ?>"><?php echo $varian['nama_varian_5']; ?></button>
                                            <?php } ?>

                                        <?php endif; ?>

                                    </div>
                            </div>
                            <?php } ?>
                            <?php if( get_field('tampilkan_varian2',$productID) ) { ?>
                            <div class="productOption2">
                                <?php
                                $nilai_varian2 = get_field('nilai_varian2',$productID);
                                    if( $nilai_varian2 ): ?>
                                        <h4 class="optionTitle"><?php the_field('judul_varian2',$productID); ?></h4>
                                        <div class="optionBtn">
                                            <?php foreach( $nilai_varian2 as $varian ): ?>
                                                <button><?php echo $varian['value']; ?></button>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                            </div>
                            <?php } ?>
                            <div class="productAction">

                                <?php if(!get_field('stok_produk')) {?>
                                    <div style="display:inline-block;background: #FFF7E2;border: 1px solid rgba(0,0,0,.1);padding: 20px;border-radius: 2px;">
                                    Mohon maaf, stok produk ini habis / sedang kosong..
                                    <br/>
                                    <br/>
                                    <small><i>* Silahkan <a class="poptamvBtn" data-title="<i class='icon ion-logo-whatsapp'></i><b>Kirim</b> WhatsApp" data-target="kirimWhatsApp" href="javascript:void(0);"><u style="text-decoration: underline;">Hubungi kami</u></a> untuk info selengkapnya..</i></small>
                                    </div>
                                <?php } else { ?>
                                    <div class="weightArea hide"><b class="weight" data-weight="<?php echo get_field('berat_produk',$productID); ?>"><?php echo get_field('berat_produk',$productID); ?></b></div>
                                    <textarea class="note hide" placeholder="Tambahkan catatan.."></textarea>
                                    <div class="productQty">
                                        <h4 class="qtyTitle"><span>Kuantitas</span></h4>
                                        <div class="qtyBtn">
                                            <button class="qtyMin">-</button><input type="number" name="qty" class="qty" placeholder="Qty" value="1" min="1"><button class="qtyPlus">+</button>
                                        </div>
                                    </div>

                                    <div class="orderBtn">
                                            <a class="poptamvBtn orderCart" data-title="<i class='icon ion-ios-basket'></i><b>Keranjang</b> Pesanan" data-target="checkoutWA" href="javascript:void(0);"><i class="icon ion-ios-basket"></i> + Tambahkan</a>
                                        <a class="poptamvBtn orderCheckout" data-title="<i class='icon ion-ios-basket'></i><b>Keranjang</b> Pesanan" data-target="checkoutWA" href="javascript:void(0);"><i class="icon ion-logo-whatsapp"></i> Beli Sekarang</a>
                                    </div>
                                    <?php if (get_field('mp_tokopedia',$productID) || get_field('mp_bukalapak',$productID) || get_field('mp_shopee',$productID) || get_field('mp_lazada',$productID)) { ?>
                                        <div class="orderMp">
                                            <small>
                                                atau, belanja melalui :<br/>
                                                <?php if(get_field('mp_tokopedia',$productID)){ ?>
                                                    <a rel="external nofollow" href="<?php $mp_tokopedia = get_field_object('mp_tokopedia'); echo $mp_tokopedia['value']; ?>" target="_blank"><img alt="<?php echo $mp_tokopedia['label']; ?> - <?php bloginfo('name'); ?>" data-src="<?php echo get_template_directory_uri(); ?>/img/tokopedia.png"/><small><?php echo $mp_tokopedia['label']; ?></small></a>
                                                <?php } ?>
                                                <?php if(get_field('mp_bukalapak',$productID)){ ?>
                                                    <a rel="external nofollow" href="<?php $mp_bukalapak = get_field_object('mp_bukalapak'); echo $mp_bukalapak['value']; ?>" target="_blank"><img alt="<?php echo $mp_bukalapak['label']; ?> - <?php bloginfo('name'); ?>" data-src="<?php echo get_template_directory_uri(); ?>/img/bukalapak.png"/><small><?php echo $mp_bukalapak['label']; ?></small></a>
                                                <?php } ?>
                                                <?php if(get_field('mp_shopee',$productID)){ ?>
                                                    <a rel="external nofollow" href="<?php $mp_shopee = get_field_object('mp_shopee'); echo $mp_shopee['value']; ?>" target="_blank"><img alt="<?php echo $mp_shopee['label']; ?> - <?php bloginfo('name'); ?>" data-src="<?php echo get_template_directory_uri(); ?>/img/shopee.png"/><small><?php echo $mp_shopee['label']; ?></small></a>
                                                <?php } ?>
                                                <?php if(get_field('mp_lazada',$productID)){ ?>
                                                    <a rel="external nofollow" href="<?php $mp_lazada = get_field_object('mp_lazada'); echo $mp_lazada['value']; ?>" target="_blank"><img alt="<?php echo $mp_lazada['label']; ?> - <?php bloginfo('name'); ?>" data-src="<?php echo get_template_directory_uri(); ?>/img/lazada.png"/><small><?php echo $mp_lazada['label']; ?></small></a>
                                                <?php } ?>
                                            </small>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
                <br/>
            <?php require_once 'feature.php'; ?>

                <div class="detailRecommend">
                    <div class="productDetail">
                        <div class="wrap">

                            <h3>Informasi Produk</h3>
                                <table>
                                    <tr>
                                        <td>
                                            Kategori
                                        </td>
                                        <td>
                                            <?php get_template_part('single-product-breadcrumb'); ?>
                                        </td>
                                    </tr>
                                    <?php if( get_field('berat_produk',$productID) ) { ?>
                                        <tr>
                                            <td>
                                                Berat
                                            </td>
                                            <td>
                                                <?php echo get_field('berat_produk',$productID)/1000; ?> Kg
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <?php if( get_field('nama_spesifikasi_1',$productID) ) { ?>
                                        <tr>
                                            <td>
                                                <?php the_field('nama_spesifikasi_1',$productID); ?>
                                            </td>
                                            <td>
                                                <?php the_field('nilai_spesifikasi_1',$productID); ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <?php if( get_field('nama_spesifikasi_2',$productID) ) { ?>
                                        <tr>
                                            <td>
                                                <?php the_field('nama_spesifikasi_2',$productID); ?>
                                            </td>
                                            <td>
                                                <?php the_field('nilai_spesifikasi_2',$productID); ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <?php if( get_field('nama_spesifikasi_3',$productID) ) { ?>
                                        <tr>
                                            <td>
                                                <?php the_field('nama_spesifikasi_3',$productID); ?>
                                            </td>
                                            <td>
                                                <?php the_field('nilai_spesifikasi_3',$productID); ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <?php if( get_field('nama_spesifikasi_4',$productID) ) { ?>
                                        <tr>
                                            <td>
                                                <?php the_field('nama_spesifikasi_4',$productID); ?>
                                            </td>
                                            <td>
                                                <?php the_field('nilai_spesifikasi_4',$productID); ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td>
                                            Dikirim dari
                                        </td>
                                        <td>
                                            <script type="text/javascript">document.write(tw_config.alamat_toko_kota + ', ' + tw_config.alamat_toko_kecamatan + ' (' + tw_config.alamat_kodepos + ')');</script>
                                        </td>
                                    </tr>
                                </table>
                            <br/>
                            <br/>
                            <?php if ( !empty( get_the_content() ) ){  ?>
                                <h3>Deskripsi Produk</h3>
                                <div class="postContent">
                                    <?php the_content(); // Dynamic Content ?>
                                </div>
                            <?php } ?>
                            <?php if(has_tag()) { ?>
                                <br/>
                                <br/>
                                <small><span>#<?php the_tags( __( '', 'TokoWA' ), '</span> &nbsp; <span>#', '');?></span></small>
                            <?php } ?>
                        </div>
                        <?php  wp_reset_postdata(); ?>
                        <div class="productUlasan" id="ulasan">
                            <div class="wrap">
                                <h3>
                                    <a class="poptamvBtn" data-target="tambah-ulasan" data-title="<i class='icon ion-ios-chatboxes'></i> <b>Ulas Produk</b> : <?php echo get_the_title($productID); ?>" href="javascript:void(0)"> <small>+ Tambahkan</small></a>
                                    <?php if ( $ulasan_count != 0 ) { ?>
                                        <small style="font-size: 70%;display: inline-block;vertical-align: middle;">
                                            <span class="avg_rating_wrap">
                                                <span class="avg_rating" data-rating="<?php echo $rating_average_value; ?>">
                                                    <span class="avg_rating__item"></span>
                                                </span>
                                            </span>
                                        </small>
                                            <?php echo $rating_average_value; ?> / 5
                                        <small style="font-size: 70%;display: inline-block;vertical-align: middle;">
                                            ( <?php echo $ulasan_count; ?> Ulasan )
                                        </small>
                                    <?php } else { ?>
                                        Ulasan
                                    <?php }?>
                                </h3>
                                <div class="ulasanList">
                                        <?php $ulasan_count = 0; ?>
                                        <?php if ($ulasanQuery->have_posts() ) : while ($ulasanQuery->have_posts() ) : $ulasanQuery->the_post(); ?>
                                            <?php if($productID === get_field('produk_ulasan')) { ?>
                                                <?php $ulasanID = get_the_ID(); ?>
                                                <?php $ulasan_count++; ?>
                                                <div class="item ulasan_<?php the_field('produk_ulasan',$ulasanID); ?>" id="ulasan_<?php echo $ulasanID; ?>">
                                                    <div class="img_ulasan">
                                                        <?php if(get_field('website_ulasan',$ulasanID)) { ?>
                                                            <a href="<?php echo addhttp(get_field('website_ulasan',$ulasanID)); ?>" target="_blank" rel="external nofollow" title="<?php the_field('nama_ulasan',$ulasanID); ?> - <?php the_field('website_ulasan',$ulasanID); ?>">
                                                                <img alt="<?php the_field('nama_ulasan',$ulasanID); ?>" data-src="<?php echo "https://www.gravatar.com/avatar/" . md5( strtolower( trim( get_field('email_ulasan') ) ) ) . "?s=50&d=mp&r=g"; ?>"/>
                                                            </a>
                                                        <?php } else { ?>
                                                            <img alt="<?php the_field('nama_ulasan',$ulasanID); ?>" data-src="<?php echo "https://www.gravatar.com/avatar/" . md5( strtolower( trim( get_field('email_ulasan') ) ) ) . "?s=50&d=mp&r=g"; ?>"/>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="info_ulasan">
                                                        <h4>
                                                            <b>
                                                            <?php if(get_field('website_ulasan',$ulasanID)) { ?>
                                                                <a href="<?php echo addhttp(get_field('website_ulasan',$ulasanID)); ?>" target="_blank" rel="external nofollow" title="<?php the_field('nama_ulasan',$ulasanID); ?> - <?php the_field('website_ulasan',$ulasanID); ?>"><?php the_field('nama_ulasan',$ulasanID); ?></a>
                                                            <?php } else { ?>
                                                                <?php the_field('nama_ulasan',$ulasanID); ?>
                                                            <?php } ?>
                                                            </b>
                                                            <?php edit_post_link(' ( Edit )'); ?>
                                                        </h4>
                                                        <div class="rating_view" data-rating="<?php the_field('rating_ulasan',$ulasanID); ?>"></div>
                                                        <p><?php the_field('teks_ulasan',$ulasanID); ?></p>
                                                        <?php if(get_field('foto_ulasan')) { ?>
                                                            <a class="img poptamvBtn" data-width="568" data-title="<i class='icon ion-ios-chatboxes'></i><b><?php the_field('nama_ulasan',$ulasanID); ?></b>" data-img="<?php echo esc_url(get_field('foto_ulasan')['sizes']['preview']); ?>" data-target="img-ulasan" data-caption="<?php echo str_replace('"', "”", get_field('teks_ulasan',$ulasanID)); ?><br/><small style='opacity:.6;'><?php echo human_time_diff( get_the_time( 'U', $ulasanID ), current_time('timestamp') ) . ' lalu..'; ?></small>" href="javascript:void(0);">
                                                                <img alt="<?php the_field('nama_ulasan',$ulasanID); ?> : <?php the_field('teks_ulasan',$ulasanID); ?>" data-src="<?php echo esc_url(get_field('foto_ulasan')['sizes']['mini']); ?>"/>
                                                            </a>
                                                        <?php } ?>
                                                        <br/>

                                                        <small><a href="<?php echo get_the_permalink(get_field('produk_ulasan')); ?>#ulasan_<?php echo $ulasanID; ?>" data-scroll="true"><?php echo get_the_time( 'd-m-Y H:i', $ulasanID ); ?></a></small>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                    <?php endwhile; wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                    <?php if ( $ulasan_count == 0 ) { ?>
                                        Belum ada ulasan...
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php //Get array of terms
                            $terms = get_the_terms( $post->ID , 'kategori_produk', 'string');
                            if($terms) {
                                $catt_LINK = esc_url( get_term_link( $terms[0]->term_id ) );
                                //Pluck out the IDs to get an array of IDS
                                $term_ids = wp_list_pluck($terms,'term_id');

                                //Query posts with tax_query. Choose in 'IN' if want to query posts with any of the terms
                                //Chose 'AND' if you want to query for posts with all terms
                                $related_query = new WP_Query( array(
                                  'post_type' => 'produk',
                                  'tax_query' => array(
                                    array(
                                        'taxonomy' => 'kategori_produk',
                                        'field' => 'id',
                                        'terms' => $term_ids,
                                     )),
                                  'posts_per_page' => 4,
                                  'ignore_sticky_posts' => 1,
                                  'orderby' => 'rand',
                                  'post__not_in'=>array($post->ID)
                                ) );

                                if($related_query->have_posts()) { ?>
                                    <div class="productRelated loop">
                                        <header class="pageTitle">
                                            <div class="flex left">
                                                <h3>
                                                    Terkait
                                                </h3>
                                            </div>
                                            <div class="flex right">
                                                <a href="<?php echo $catt_LINK; ?>">Lihat Semua <i class="icon ion-ios-arrow-forward"></i></a>
                                            </div>
                                        </header>
                                        <div class="loopGrid related">
                                        <?php while ($related_query->have_posts() ) : $related_query->the_post(); ?>
                                            <?php get_template_part('loop-product'); ?>
                                        <?php endwhile; ?>
                                        </div>
                                    </div>
                               <?php wp_reset_query();
                           } ?>
                           <?php } ?>
                    </div>
                    <div class="productRecommend loop">
                        <div class="wrap">
                            <h3>Terbaru</h3>
                            <div class="gridMobile">
                                <?php
                                $my_query2 = new WP_Query( array('post_type' => 'produk','posts_per_page' => '2', 'order' => 'DESC'));

                                if ($my_query2->have_posts() ) : while ($my_query2->have_posts() ) : $my_query2->the_post();?>
                                        <?php get_template_part('loop-product'); ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="poptamv" id="tambah-ulasan">
        <div class="wrap">
            <h3 class="titletamv">
                <span class="titletamv-content"></span>
                <a class="closeTamv" href="javascript:void(0);">&#215;</a>
            </h3>
            <div class="content">
                <div class="reviewForm">
                    <?php
                        acf_form(array(
                            'id' => 'ulasanProduk',
                            'post_id'               => 'new_post',
                            'label_placement'       => 'top',
                            'uploader'              => 'basic',
                            'post_title'            => true,
                            'post_content'          => false,
                            'html_submit_button'    => '<button type="submit" class="acf-button button button-primary button-large">%s</button>',
                            'submit_value'          => 'Kirim Ulasan!',
                            'html_submit_spinner'   => false,
                            'new_post'              => array(
                                'post_type'         => 'ulasan',
                                'post_status'       => (get_theme_mod('TokoWA_produk_ulasan') ? get_theme_mod('TokoWA_produk_ulasan') : 'publish'),
                            ),
                            'return' => '#ulasan_%post_id%',
                            'kses'  => true
                        ));
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>