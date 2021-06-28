		<footer id="footer" role="contentinfo">
			<div class="wrapper">
				<?php if ( !is_post_type_archive( 'ulasan' ) ) { ?>
					<?php if(get_theme_mod('TokoWA_home_ulasan') == 0) { ?>
						<section id="ulasan">
							<header class="pageTitle">
								<div class="flex left">
									<h3>Ulasan</h3>
								</div>
								<div class="flex right">
						    		<a href="<?php echo home_url(); ?>/ulasan">Semua Ulasan <i class="icon ion-ios-arrow-forward"></i></a>
								</div>
							</header>
							<div id="slide-ulasan">
						    	<div class="owl-carousel">
						    		<?php $reviewQuery = new WP_Query( array('post_type' => 'ulasan', 'posts_per_page' => 6, 'order' => 'DESC'));
				                    if ($reviewQuery->have_posts() ) : while ($reviewQuery->have_posts() ) : $reviewQuery->the_post(); ?>
				                        <?php get_template_part('loop-ulasan'); ?>
				                    <?php endwhile; wp_reset_postdata(); ?>
				                <?php endif; ?>
								</div>
						    </div>
					    </section>
					<?php } ?>
				<?php } ?>
				<div class="footerGrid">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-area')) ?>
					<div class="item custom">
						<h3>
							Tetap terhubung..
						</h3>
						<div>
							<?php if(get_theme_mod('TokoWA_youtube')) { ?><a class="youtube" target="_blank" href="<?php echo (get_theme_mod('TokoWA_youtube') ? get_theme_mod('TokoWA_youtube') : 'https://www.youtube.com/kangrian'); ?>?sub_confirmation=1"><i class="icon ion-logo-youtube"></i> Subscribe</a><?php } ?>
							&nbsp;
							&nbsp;
							<?php if(get_theme_mod('TokoWA_instagram')) { ?><a class="instagram" target="_blank" href="<?php echo (get_theme_mod('TokoWA_instagram') ? get_theme_mod('TokoWA_instagram') : 'https://www.instagram.com/kangriaan'); ?>"><i class="icon ion-logo-instagram"></i></a><?php } ?>
							<?php if(get_theme_mod('TokoWA_facebook')) { ?><a class="facebook" target="_blank" href="<?php echo (get_theme_mod('TokoWA_facebook') ? get_theme_mod('TokoWA_facebook') : 'https://www.facebook.com/kangrian.net'); ?>"><i class="icon ion-logo-facebook"></i></a><?php } ?>
							<?php if(get_theme_mod('TokoWA_twitter')) { ?><a class="twitter" target="_blank" href="<?php echo (get_theme_mod('TokoWA_twitter') ? get_theme_mod('TokoWA_twitter') : 'https://www.twitter.com/kangriaan'); ?>"><i class="icon ion-logo-twitter"></i></a><?php } ?>
							<br/>
							<br/>
							<a class="poptamvBtn tanyaWA" data-title="<i class='icon ion-logo-whatsapp'></i><b>Kirim</b> WhatsApp" data-target="kirimWhatsApp" href="javascript:void(0);">
								<i class="icon ion-logo-whatsapp"></i> Kirim WhatsApp
							</a>
							<br/>
							<br/>
							<small>&#0169;<?php echo date('Y'); ?> - <?php bloginfo('name'); ?></small>
						</div>
					</div>
				</div>
			</div>
		</footer>

	    <div class="poptamv" id="img-ulasan">
	        <div class="wrap">
	            <h3 class="titletamv">
	                <span class="titletamv-content"></span>
	                <a class="closeTamv" href="javascript:void(0);">&#215;</a>
	            </h3>
	            <div class="content">
	            </div>
	        </div>
	    </div>
	    <div class="poptamv" id="iframe">
	        <div class="wrap">
	            <h3 class="titletamv">
	                <span class="titletamv-content"></span>
	                <a class="closeTamv" href="javascript:void(0);">&#215;</a>
	            </h3>
	            <div class="content"></div>
	        </div>
	    </div>
		<nav class="fixBtn">
			<a href="<?php bloginfo('home_url'); ?>">
				<i class="icon ion-ios-home"></i>
			</a>
			<a class="poptamvBtn" data-title="<i class='icon ion-ios-notifications'></i> Pemberitahuan" data-target="notif" href="javascript:void(0);">
				<i class="icon ion-ios-notifications">
			        <span class="indicator"></span>
			    </i>
			</a>
			<a class="searchBtn" href="#">
				<i class="icon ion-ios-search"></i>
			</a>
			<a class="poptamvBtn" data-title="<i class='icon ion-logo-whatsapp'></i><b>Kirim</b> WhatsApp" data-target="kirimWhatsApp" href="javascript:void(0);">
				<i class="icon ion-logo-whatsapp"></i>
			</a>
		</nav>
		<a class="poptamvBtn waFix kanan" data-title="<i class='icon ion-logo-whatsapp'></i><b>Kirim</b> WhatsApp" data-target="kirimWhatsApp" href="javascript:void(0);">
		    <i class="wa icon ion-logo-whatsapp">
		        <span class="count"></span>
		    </i>
		    <span class="info">
		        <i class="icon ion-md-done-all"></i>
		        <b>Butuh</b> bantuan?
		    </span>
		</a>
	    <div class="poptamv" id="notif">
	        <div class="wrap">
	            <h3 class="titletamv">
	                <span class="titletamv-content"></span>
	                <a class="closeTamv" href="javascript:void(0);">&#215;</a>
	            </h3>
	            <div class="content">
            		<div class="notifComRat" id="notifComRat">
            			<?php $reviewQuery = new WP_Query( array('post_type' => 'ulasan', 'posts_per_page' => '', 'order' => 'DESC'));
		                    if ($reviewQuery->have_posts() ) : while ($reviewQuery->have_posts() ) : $reviewQuery->the_post(); ?>
		                        <?php $ulasanID = get_the_ID(); ?>
		                        <li class="notifComRat_item" data-time="<?php echo get_the_time( 'c', $ulasanID ); ?>">
		                        	<div class="notifComRat_grid">
			                        	<?php if(get_field('website_ulasan',$ulasanID)) { ?>
								            <a href="<?php echo addhttp(get_field('website_ulasan',$ulasanID)); ?>" target="_blank" rel="external nofollow" title="<?php the_field('nama_ulasan',$ulasanID); ?> - <?php the_field('website_ulasan',$ulasanID); ?>">
								                <img class="ava" alt="<?php the_field('nama_ulasan',$ulasanID); ?>" data-src="<?php echo "https://www.gravatar.com/avatar/" . md5( strtolower( trim( get_field('email_ulasan') ) ) ) . "?s=50&d=mp&r=g"; ?>"/>
								            </a>
								        <?php } else { ?>
								            <img class="ava" alt="<?php the_field('nama_ulasan',$ulasanID); ?>" data-src="<?php echo "https://www.gravatar.com/avatar/" . md5( strtolower( trim( get_field('email_ulasan') ) ) ) . "?s=50&d=mp&r=g"; ?>"/>
								        <?php } ?>
									    <div class="notifComRat_wrap">
									        <header>
												<?php if(get_field('website_ulasan',$ulasanID)) { ?>
							                        <a href="<?php echo addhttp(get_field('website_ulasan',$ulasanID)); ?>" target="_blank" rel="external nofollow" title="<?php the_field('nama_ulasan',$ulasanID); ?> - <?php the_field('website_ulasan',$ulasanID); ?>">
							                    	<?php the_field('nama_ulasan'); ?>
							                        </a>
							                    <?php } else { ?>
							                        <?php the_field('nama_ulasan'); ?>
							                    <?php } ?>
									        	mengulas <a href="<?php echo get_the_permalink(get_field('produk_ulasan')); ?>#ulasan_<?php echo $ulasanID; ?>" target="_blank"><?php echo get_the_title(get_field('produk_ulasan')); ?></a></header>
									        	<span class="rating" data-rating="<?php the_field('rating_ulasan'); ?>"></span>
									        <p><?php the_field('teks_ulasan'); ?>
									        <?php if(get_field('foto_ulasan')) { ?>
									            <br/>
									            <br/>
									            <a href="<?php echo get_the_permalink(get_field('produk_ulasan')); ?>#ulasan_<?php echo $ulasanID; ?>" target="_blank">
									                <img alt="<?php the_field('nama_ulasan',$ulasanID); ?> : <?php the_field('teks_ulasan',$ulasanID); ?>" data-src="<?php echo esc_url(get_field('foto_ulasan')['sizes']['mini']); ?>"/>
										            </a>
										        <?php } ?>
									        <br/>
									        <?php edit_post_link(' ( Edit )'); ?></p>
									        <a href="<?php echo get_the_permalink(get_field('produk_ulasan')); ?>#ulasan_<?php echo $ulasanID; ?>" target="_blank"><small><?php echo human_time_diff( get_the_time( 'U', $ulasanID ), current_time('timestamp') ) . ' yang lalu..'; ?></small></a>
									    </div>
								    </div>
								</li>
		                    <?php endwhile; wp_reset_postdata(); ?>
		                <?php endif; ?>
						<?php
							function notifComRat($comm_count = '', $comment_len = 140, $avatar_size = 48) {
							    $comments_query = new WP_Comment_Query();
							    $comments = $comments_query->query( array( 'number' => $comm_count ) );
							    $comm = '';
							    if ( $comments ) : foreach ( $comments as $comment ) :
							        $comm .= '<li class="notifComRat_item" data-time="'. get_comment_date( 'c',$comment->comment_ID ) .'">';
							        $comm .= '<div class="notifComRat_grid">';
							        $comm .= '<a target="_blank" href="' . get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID . '">';
							        $comm .= "<img class='ava' data-src='https://www.gravatar.com/avatar/" . md5( strtolower( trim( $comment->comment_author_email ) ) ) . "?s=" . $avatar_size . "&d=mp&r=g'/>";
							        $comm .= '</a> ';
							        $comm .= '<div class="notifComRat_wrap">';
							        $comm .= '<header><a target="_blank" href="' . get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID. '">' . get_comment_author( $comment->comment_ID ) . '</a>';
							        $comm .= ' mengomentari <a target="_blank" href="'.get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID.'">'. get_the_title($comment->comment_post_ID).'</a></header>';
							        $comm .= '<p>';
							        $comm .=  strip_tags( substr( apply_filters( 'get_comment_text', $comment->comment_content ), 0, $comment_len ) ) . '...';
							        $comm .= '</p>';
							        $comm .= '<a target="_blank" href="' . get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID . '">';
							        $comm .= '<small>' . human_time_diff( get_comment_date( 'U',$comment->comment_ID ), current_time('timestamp') ) . ' yang lalu..</small>';
							        $comm .= '</a> ';
							        $comm .= '</div>';
							        $comm .= '</div>';
							        $comm .= '</li>';
							    endforeach; else :
							        $comm .= '';
							    endif;
							    echo $comm; 
							}
						?>
						<?php notifComRat(); ?>
						<a href="#" class="more"><i class="icon ion-ios-arrow-down"></i> Lainnya</a>
					</div>
		        </div>
		    </div>
		</div>
	    <div class="poptamv" id="ikuti">
	        <div class="wrap">
	            <h3 class="titletamv">
	                <span class="titletamv-content"></span>
	                <a class="closeTamv" href="javascript:void(0);">&#215;</a>
	            </h3>
	            <div class="content">
		            	<img alt="<?php bloginfo('name'); ?>" data-src="<?php echo $cover = (get_theme_mod('TokoWA_cover') ? get_theme_mod('TokoWA_cover') : get_template_directory_uri() . '/img/cover.png'); ?>"/>
		            	<a href="<?php echo home_url(); ?>" class="ava" data-bg="<?php echo (get_site_icon_url( 144 ) ? get_site_icon_url( 32 ) : get_template_directory_uri() . '/img/favicon.png'); ?>"><?php bloginfo('name'); ?></a>
		            <div class="poptamv-wrap">
		            	<center style="max-width: 80%;display: block;margin: auto;">
			            	<h3>Dapatkan! Info & Produk Terbaru</h3>
			            	<small>melalui media sosial <?php bloginfo('name'); ?> :</small>
			            	<hr/>
			            	<?php if(get_theme_mod('TokoWA_youtube')) { ?><a class="youtube" target="_blank" href="<?php echo (get_theme_mod('TokoWA_youtube') ? get_theme_mod('TokoWA_youtube') : 'https://www.youtube.com/kangrian') ?>?sub_confirmation=1"><i class="icon ion-logo-youtube"></i> Subscribe</a><?php } ?>
							&nbsp;
							&nbsp;
							<?php if(get_theme_mod('TokoWA_instagram')) { ?><a class="instagram" target="_blank" href="<?php echo (get_theme_mod('TokoWA_instagram') ? get_theme_mod('TokoWA_instagram') : 'https://www.instagram.com/kangriaan') ?>"><i class="icon ion-logo-instagram"></i></a><?php } ?>
							<?php if(get_theme_mod('TokoWA_facebook')) { ?><a class="facebook" target="_blank" href="<?php echo (get_theme_mod('TokoWA_facebook') ? get_theme_mod('TokoWA_facebook') : 'https://www.facebook.com/kangrian.net') ?>"><i class="icon ion-logo-facebook"></i></a><?php } ?>
							<?php if(get_theme_mod('TokoWA_twitter')) { ?><a class="twitter" target="_blank" href="<?php echo (get_theme_mod('TokoWA_twitter') ? get_theme_mod('TokoWA_twitter') : 'https://www.twitter.com/kangriaan') ?>"><i class="icon ion-logo-twitter"></i></a><?php } ?>
		            	</center>
		            </div>
		        </div>
		    </div>
		</div>
	    <div class="poptamv" id="kirimWhatsApp" data-tujuan="<?php echo (get_theme_mod('TokoWA_no_wa') ? get_theme_mod('TokoWA_no_wa') : '089618885066') ?>" data-negara="<?php echo (get_theme_mod('TokoWA_negara') ? get_theme_mod('TokoWA_negara') : '62') ?>">
	        <div class="wrap">
	            <h3 class="titletamv">
	                <span class="titletamv-content"></span>
	                <a class="closeTamv" href="javascript:void(0);">&#215;</a>
	            </h3>
	            <div class="content">
		            <div class="poptamv-wrap">
		                <div class="formtamv formWA">
		                    <div class="grid-wa col2">
		                        <label class="item">
		                            <i class="icon ion-md-contact"></i>
		                            <input class="nama wajib titleCase" placeholder="Nama Lengkap.." type="text" />
		                        </label>
		                        <label class="item">
		                            <i class="icon ion-md-phone-portrait"></i>
		                            <input class="nohp wajib" placeholder="No. HP Aktif.." type="tel" />
		                        </label>
		                    </div>
		                    <br />
		                    <div class="grid-wa col2-submit">
		                        <label class="item">
		                            <i class="icon ion-md-mail"></i>
		                            <input class="pesan wajib" placeholder="Tulis pesan.." type="text" />
		                        </label>
		                        <a class="item submit s2"><i class="icon ion-md-send"></i></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div id="livesales">
			<?php $querylivesales = new WP_Query( array('post_type' => 'livesales', 'order' => 'DESC'));
			 // 'posts_per_page' => '10',
				if ($querylivesales->have_posts() ) : while ($querylivesales->have_posts() ) : $querylivesales->the_post(); ?>
					<?php get_template_part('loop-livesales-popup'); ?>
				<?php endwhile; wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	    <div class="poptamv" id="viewlivesales">
	        <div class="wrap">
	            <h3 class="titletamv">
	                <span class="titletamv-content"></span>
	                <a class="closeTamv" href="javascript:void(0);">&#215;</a>
	            </h3>
	            <div class="content">
	            </div>
	        </div>
	    </div>
	    <div class="poptamv" id="checkoutWA" data-tujuan="<?php echo (get_theme_mod('TokoWA_no_wa') ? get_theme_mod('TokoWA_no_wa') : '089618885066') ?>" data-negara="<?php echo (get_theme_mod('TokoWA_negara') ? get_theme_mod('TokoWA_negara') : '62') ?>">
	        <div class="wrap">
	            <h3 class="titletamv">
	                <span class="titletamv-content"></span>
	                <a class="closeTamv" href="javascript:void(0);">&#215;</a>
	            </h3>
	            <div class="content">

	                <div id="cartPopup">
	                    <div class="off">
	                        <center>Belum ada produk..</center>
	                    </div>
	                    <div class="on">
	                        <ul id="listCartPopup" class="listCart listProduct"></ul>
	                        <div id="cartTotal">
	                        	<div class="subtotal">
		                        	Subtotal:
		                        	<h2></h2>
		                        	<small class="weight"></small>
		                        	<span class="cek"></span>
		                        	<div class="vHide">
		                        	<small><i>* Belum termasuk ongkir..</i></small>
		                        	</div>
	                        	</div>
	                        	<div class="cartCheckout">
		                        	<a href="javascript:void(0);" class="btnCheckout">
		                        		<span data-text-checkout="Selesai" data-text-viewcart="Rincian"></span> &nbsp; <i class="icon ion-ios-arrow-forward"></i>
		                        	</a>
	                        	</div>
	                        </div>
<span id="textCheckout">
%0A%0A— — — — — — — — — — —%0A%0A
<span class="listCart"></span>
<span class="subtotal">— — — — — — — — — — —%0A%0ASubtotal : *<b></b>*<small></small></span>%0A%0A
— — — — — — — — — — —%0A%0A
</span>
	                        <div class="poptamv-wrap cartForm">
	                            <div class="formtamv formWA">
	                                <div class="grid-wa col2">
	                                    <label class="item">
	                                        <i class="icon ion-md-contact"></i>
	                                        <input class="nama wajib titleCase" placeholder="Nama Lengkap" type="text" />
	                                    </label>
	                                    <label class="item">
	                                        <i class="icon ion-md-mail"></i>
	                                        <input class="email wajib" placeholder="E-mail Aktif" type="email" />
	                                    </label>
	                                </div>
	                                <br />
	                                <label class="item vHide">
	                                    <i class="icon ion-md-home"></i>
	                                    <textarea class="alamat <?php if(get_theme_mod('TokoWA_theme_type_product') != 'virtual') { ?>wajib<?php } ?> titleCase grup-alamat" placeholder="Alamat Lengkap"></textarea>
	                                </label>
	                                <div class="grid-wa col2">
	                                    <label class="item">
	                                        <i class="icon ion-md-business"></i>
	                                        <input class="kota wajib titleCase grup-alamat" placeholder="Kota / Kabupaten" type="text" />
	                                    </label>
	                                    <label class="item vHide">
	                                        <i class="icon ion-md-pin"></i>
	                                        <input class="kecamatan <?php if(get_theme_mod('TokoWA_theme_type_product') != 'virtual') { ?>wajib<?php } ?> titleCase grup-alamat" placeholder="Kecamatan" type="text" />
	                                    </label>
	                                	<label class="item vHide">
											<i class="icon ion-ios-arrow-down"></i>
											<select class="negara_pengirim <?php if(get_theme_mod('TokoWA_theme_type_product') != 'virtual') { ?>wajib<?php } ?> grup-no-wa" placeholder="negara" data-selected="<?php echo (get_theme_mod('TokoWA_negara') ? get_theme_mod('TokoWA_negara') : '62'); ?>">
												<optgroup label="Negara">
													<!-- <option value="93">Afganistan (+93)</option>
													<option value="27">Afrika Selatan (+27)</option>
													<option value="236">Afrika Tengah (+236)</option>
													<option value="355">Albania (+355)</option>
													<option value="213">Algeria (+213)</option>
													<option value="1">Amerika Serikat (+1)</option>
													<option value="376">Andorra (+376)</option>
													<option value="244">Angola (+244)</option>
													<option value="1-268">Antigua & Barbuda (+1-268)</option>
													<option value="966">Arab Saudi (+966)</option>
													<option value="54">Argentina (+54)</option>
													<option value="374">Armenia (+374)</option>
													<option value="61">Australia (+61)</option>
													<option value="43">Austria (+43)</option>
													<option value="994">Azerbaijan (+994)</option>
													<option value="1-242">Bahama (+1-242)</option>
													<option value="973">Bahrain (+973)</option>
													<option value="880">Bangladesh (+880)</option>
													<option value="1-246">Barbados (+1-246)</option>
													<option value="31">Belanda (+31)</option>
													<option value="375">Belarus (+375)</option>
													<option value="32">Belgia (+32)</option>
													<option value="501">Belize (+501)</option>
													<option value="229">Benin (+229)</option>
													<option value="975">Bhutan (+975)</option>
													<option value="591">Bolivia (+591)</option>
													<option value="387">Bosnia & Herzegovina (+387)</option>
													<option value="267">Botswana (+267)</option>
													<option value="55">Brasil (+55)</option>
													<option value="44">Britania Raya (Inggris) (+44)</option>
													<option value="673">Brunei Darussalam (+673)</option>
													<option value="359">Bulgaria (+359)</option>
													<option value="226">Burkina Faso (+226)</option>
													<option value="257">Burundi (+257)</option>
													<option value="420">Ceko (+420)</option>
													<option value="235">Chad (+235)</option>
													<option value="56">Chili (+56)</option>
													<option value="86">China (+86)</option>
													<option value="45">Denmark (+45)</option>
													<option value="253">Djibouti (+253)</option>
													<option value="1-767">Domikia (+1-767)</option>
													<option value="593">Ekuador (+593)</option>
													<option value="503">El Salvador (+503)</option>
													<option value="291">Eritrea (+291)</option>
													<option value="372">Estonia (+372)</option>
													<option value="251">Ethiopia (+251)</option>
													<option value="679">Fiji (+679)</option>
													<option value="63">Filipina (+63)</option>
													<option value="358">Finlandia (+358)</option>
													<option value="241">Gabon (+241)</option>
													<option value="220">Gambia (+220)</option>
													<option value="995">Georgia (+995)</option>
													<option value="233">Ghana (+233)</option>
													<option value="1-473">Grenada (+1-473)</option>
													<option value="502">Guatemala (+502)</option>
													<option value="224">Guinea (+224)</option>
													<option value="245">Guinea Bissau (+245)</option>
													<option value="240">Guinea Khatulistiwa (+240)</option>
													<option value="592">Guyana (+592)</option>
													<option value="509">Haiti (+509)</option>
													<option value="504">Honduras (+504)</option>
													<option value="36">Hongaria (+36)</option>
													<option value="852">Hongkong (+852)</option>
													<option value="91">India (+91)</option> -->
													<option value="62">Indonesia (+62)</option>
													<!-- <option value="964">Irak (+964)</option>
													<option value="98">Iran (+98)</option>
													<option value="353">Irlandia (+353)</option>
													<option value="354">Islandia (+354)</option>
													<option value="972">Israel (+972)</option>
													<option value="39">Italia (+39)</option>
													<option value="1-876">Jamaika (+1-876)</option>
													<option value="81">Jepang (+81)</option>
													<option value="49">Jerman (+49)</option>
													<option value="962">Jordan (+962)</option>
													<option value="855">Kamboja (+855)</option>
													<option value="237">Kamerun (+237)</option>
													<option value="1">Kanada (+1)</option>
													<option value="7">Kazakhstan (+7)</option>
													<option value="254">Kenya (+254)</option>
													<option value="996">Kirgizstan (+996)</option>
													<option value="686">Kiribati (+686)</option>
													<option value="57">Kolombia (+57)</option>
													<option value="269">Komoro (+269)</option>
													<option value="243">Republik Kongo (+243)</option>
													<option value="82">Korea Selatan (+82)</option>
													<option value="850">Korea Utara (+850)</option>
													<option value="506">Kosta Rika (+506)</option>
													<option value="385">Kroasia (+385)</option>
													<option value="53">Kuba (+53)</option>
													<option value="965">Kuwait (+965)</option>
													<option value="856">Laos (+856)</option>
													<option value="371">Latvia (+371)</option>
													<option value="961">Lebanon (+961)</option>
													<option value="266">Lesotho (+266)</option>
													<option value="231">Liberia (+231)</option>
													<option value="218">Libya (+218)</option>
													<option value="423">Liechtenstein (+423)</option>
													<option value="370">Lituania (+370)</option>
													<option value="352">Luksemburg (+352)</option>
													<option value="261">Madagaskar (+261)</option>
													<option value="853">Makao (+853)</option>
													<option value="389">Makedonia (+389)</option>
													<option value="960">Maladewa (+960)</option>
													<option value="265">Malawi (+265)</option>
													<option value="60">Malaysia (+60)</option>
													<option value="223">Mali (+223)</option>
													<option value="356">Malta (+356)</option>
													<option value="212">Maroko (+212)</option>
													<option value="692">Marshall (Kep.) (+692)</option>
													<option value="222">Mauritania (+222)</option>
													<option value="230">Mauritius (+230)</option>
													<option value="52">Meksiko (+52)</option>
													<option value="20">Mesir (+20)</option>
													<option value="691">Mikronesia (Kep.) (+691)</option>
													<option value="373">Moldova (+373)</option>
													<option value="377">Monako (+377)</option>
													<option value="976">Mongolia (+976)</option>
													<option value="382">Montenegro (+382)</option>
													<option value="258">Mozambik (+258)</option>
													<option value="95">Myanmar (+95)</option>
													<option value="264">Namibia (+264)</option>
													<option value="674">Nauru (+674)</option>
													<option value="977">Nepal (+977)</option>
													<option value="227">Niger (+227)</option>
													<option value="234">Nigeria (+234)</option>
													<option value="505">Nikaragua (+505)</option>
													<option value="47">Norwegia (+47)</option>
													<option value="968">Oman (+968)</option>
													<option value="92">Pakistan (+92)</option>
													<option value="680">Palau (+680)</option>
													<option value="507">Panama (+507)</option>
													<option value="225">Pantai Gading (+225)</option>
													<option value="675">Papua Nugini (+675)</option>
													<option value="595">Paraguay (+595)</option>
													<option value="33">Perancis (+33)</option>
													<option value="51">Peru (+51)</option>
													<option value="48">Polandia (+48)</option>
													<option value="351">Portugal (+351)</option>
													<option value="974">Qatar (+974)</option>
													<option value="242">Rep. Dem. Kongo (+242)</option>
													<option value="1-809; 1-829">Republik Dominika (+1-809; 1-829)</option>
													<option value="40">Rumania (+40)</option>
													<option value="7">Rusia (+7)</option>
													<option value="250">Rwanda (+250)</option>
													<option value="1-869">Saint Kitts and Nevis (+1-869)</option>
													<option value="1-758">Saint Lucia (+1-758)</option>
													<option value="1-784">Saint Vincent & the Grenadines (+1-784)</option>
													<option value="685">Samoa (+685)</option>
													<option value="378">San Marino (+378)</option>
													<option value="239">Sao Tome & Principe (+239)</option>
													<option value="64">Selandia Baru (+64)</option>
													<option value="221">Senegal (+221)</option>
													<option value="381">Serbia (+381)</option>
													<option value="248">Seychelles (+248)</option>
													<option value="232">Sierra Leone (+232)</option>
													<option value="65">Singapura (+65)</option>
													<option value="357">Siprus (+357)</option>
													<option value="386">Slovenia (+386)</option>
													<option value="421">Slowakia (+421)</option>
													<option value="677">Solomon (Kep.) (+677)</option>
													<option value="252">Somalia (+252)</option>
													<option value="34">Spanyol (+34)</option>
													<option value="94">Sri Lanka (+94)</option>
													<option value="249">Sudan (+249)</option>
													<option value="211">Sudan Selatan (+211)</option>
													<option value="963">Suriah (+963)</option>
													<option value="597">Suriname (+597)</option>
													<option value="268">Swaziland (+268)</option>
													<option value="46">Swedia (+46)</option>
													<option value="41">Swiss (+41)</option>
													<option value="992">Tajikistan (+992)</option>
													<option value="238">Tanjung Verde (+238)</option>
													<option value="255">Tanzania (+255)</option>
													<option value="886">Taiwan (+886)</option>
													<option value="66">Thailand (+66)</option>
													<option value="670">Timor Leste (+670)</option>
													<option value="228">Togo (+228)</option>
													<option value="676">Tonga (+676)</option>
													<option value="1-868">Trinidad & Tobago (+1-868)</option>
													<option value="216">Tunisia (+216)</option>
													<option value="90">Turki (+90)</option>
													<option value="993">Turkmenistan (+993)</option>
													<option value="688">Tuvalu (+688)</option>
													<option value="256">Uganda (+256)</option>
													<option value="380">Ukraina (+380)</option>
													<option value="971">Uni Emirat Arab (+971)</option>
													<option value="598">Uruguay (+598)</option>
													<option value="998">Uzbekistan (+998)</option>
													<option value="678">Vanuatu (+678)</option>
													<option value="58">Venezuela (+58)</option>
													<option value="84">Vietnam (+84)</option>
													<option value="967">Yaman (+967)</option>
													<option value="30">Yunani (+30)</option>
													<option value="260">Zambia (+260)</option>
													<option value="263">Zimbabwe (+263)</option> -->
												</optgroup>
											</select>
										</label>
	                                	<label class="item vHide">
										<i class="icon ion-ios-arrow-down"></i>
											<select class="pembayaran">
												<optgroup label="Bank">
													<option value="Bank Mandiri ()">Bank Mandiri</option>
													<option value="Bank BCA ()">Bank BCA</option>
													<option value="Bank BNI ()">Bank BNI</option>
													
													
												</optgroup>
											</select>
										</label>
	                                    <label class="item">
	                                        <i class="icon ion-md-phone-portrait"></i>
	                                        <input class="no_wa_pengirim wajib grup-no-wa" placeholder="No. WhatsApp" type="tel" />
	                                    </label>
	                                </div>
	                                <div class="vHide">
	                                <br />
	                                <div class="note">
	                                	<b>Catatan :</b> Total harga + ongkir yang harus dibayar akan diinformasikan oleh admin <b><?php bloginfo('name'); ?></b>, setelah mengirim data pesanan.
	                                </div>
	                            	</div>
	                                <br />
	                                <a class="submit"><i class="icon ion-logo-whatsapp"></i> Kirim Pesanan</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

    	<noscript>Please, activate javascript</noscript>
	    <script defer='defer' src="<?php echo get_template_directory_uri(); ?>/lib/rajaongkir/acom.js"></script>
	    <script defer='defer' src="<?php echo get_template_directory_uri(); ?>/lib/rajaongkir/kota.min.js"></script>
	    <script defer='defer' src="<?php echo get_template_directory_uri(); ?>/lib/mfp/mfp.js"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/lib/owl/owl.carousel.min.js"></script>
	    <script src="https://kangrian.github.io/TokoWhatsApp/wordpress.js"></script>
	    
	    <?php if(get_theme_mod('TokoWA_theme_type_product') == 'virtual') { ?>
	    	<style type="text/css">
	    		.vHide {
	    			display: none!important;
	    		}
	    	</style>
	    <?php } ?>
	    <script type="text/javascript">
			
			    $(document).on('click', '.formWA .submit', function() {
			        kirimWA($(this).parents('.poptamv').attr('id'));
			        return false;
			    });

			    $(document).on('keypress', '.formWA input, .formWA textarea', function() {
			        if (event.keyCode === 13) {
			            $(this).parents(".formWA").find('.submit').trigger('click');
			        }
			    });
			    $('.formWA .wajib').each(function() {
			        title = $(this).attr('placeholder');
			        label = $(this).parents('label');
			        $('<span class="validasi"><b>' + title + '</b> (dibutuhkan)</span>').appendTo(label);
			    });
			    $('.formWA .titleCase').each(function() {
			        $(this).on('keyup', function() {
			            $(this).val(titleCase($(this).val()));
			        });
			    });

			    $(document).on('keyup', '.formWA .wajib', function() {
			        if ($(this).val() != '') {
			            $(this).removeClass('focus');
			            $(this).parents('label').find('.validasi').removeClass('show');
			        }
			    });
			    $('.formWA select').each(function() {
			        var selected = $(this).attr('data-selected');
			        if (selected != null) {
			            $(this).find('option').attr('disabled', 'disabled')
			            $(this).find('option[value=' + selected + ']').removeAttr('disabled').attr('selected', 'selected');
			        }
			    });
			    $(document).on('change', '.formWA select', function() {
			        $(this).removeClass('focus');
			        $(this).parents('label').find('.validasi').removeClass('show');
			    });

			    $(window).bind('load',function(){
			        if (localStorage.getItem('waFix') === null) {
			            setTimeout(function() {
			                $('.waFix').addClass('show');
			            }, 2000);
			        }
			    });

			    $(document).on('click', '.waFix', function() {
			        $(this).removeClass('show');
			        localStorage.setItem('waFix', false)
			    });


			    let viaUrl = window.location.href;
			    function kirimWA(id) {

			        var validasi = true;

			        $('#' + id + ' .wajib').each(function() {
			            if ($.trim($(this).val()) == '' || $.trim($(this).val()) == 'default') {
			                $(this).addClass('focus');
			            }
			        });
			        $('#' + id + ' .wajib').each(function() {

			            if ($.trim($(this).val()) == '') {

			                validasi = false;

			                $(this).parents('label').find('.validasi').addClass('show');
			                $(this).focus();
			                return false;
			            } else if ($.trim($(this).val()) == 'default') {

			                validasi = false;

			                $(this).parents('label').find('.validasi').addClass('show');
			                return false;
			            }
			        });

			        if (validasi === true) {

			            var parameter = '';
			            var url_wa = 'https://web.whatsapp.com/send';
			            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
			                url_wa = 'whatsapp://send';
			            }
			            if (id == 'kirimWhatsApp') {

			                var judul = $('#' + id + ' .title-content').text(),
			                    nama = $('#' + id + ' .nama').val(),
			                    nohp = $('#' + id + ' .nohp').val(),
			                    pesan = $('#' + id + ' .pesan').val();

			                var parameter = url_wa + '?phone=' + tw_config.negara + tw_config.no_wa + '&text=' +
			                    tw_config.pesan_salam + ' ' + tw_config.panggilan_admin + '.. perkenalkan saya *' + nama + '*.%0A%0A' +
			                    pesan + '%0A%0A' +
			                    'No. Telepon : ' + nohp + '%0A' +
			                    'via ' + viaUrl;

			            } else if (id == 'checkoutWA') {

			                var textCheckout = $('#' + id + ' #textCheckout').text(),
			                    nama = $('#' + id + ' .nama').val(),
			                    email = $('#' + id + ' .email').val(),
			                    negara_pengirim = $('#' + id + ' .negara_pengirim').val(),
			                    no_wa_pengirim = $('#' + id + ' .no_wa_pengirim').val(),
			                    pembayaran = $('#'+id+' .pembayaran').val(),
			                    // pengiriman = $('#'+id+' .pengiriman').val(),
			                    alamat = $('#' + id + ' .alamat').val(),
			                    kota = $('#' + id + ' .kota').val(),
			                    kecamatan = $('#' + id + ' .kecamatan').val();

			                <?php if(get_theme_mod('TokoWA_theme_type_product') != 'virtual') { ?>
				                var parameter = url_wa + '?phone=' + tw_config.negara + tw_config.no_wa + '&text=' +
				                    tw_config.pesan_salam + ' ' + tw_config.panggilan_admin + ', saya *' + nama + '* dari *' + kota + '* mau pesan:' +
				                    textCheckout +
				                    '*Metode Pembayaran :*%0A' + pembayaran + '%0A%0A' +
				                    // '*Metode Pengiriman :*%0A' + pengiriman + '%0A%0A' +
				                    '*Atas nama :*%0A' + nama + ' ( %2B' + negara_pengirim + ' / ' + no_wa_pengirim + ' ) %0A%0A' +
				                    '*E-mail :*%0A' + email + '%0A%0A' +
				                    '*Alamat :*%0A' + alamat + '%0A' +
				                    kota + ' - Kec. ' + kecamatan + '%0A%0A' +
				                    'via ' + viaUrl;
			                <?php } else { ?>
				                var parameter = url_wa + '?phone=' + tw_config.negara + tw_config.no_wa + '&text=' +
				                    tw_config.pesan_salam + ' ' + tw_config.panggilan_admin + ', saya *' + nama + '* dari *' + kota + '* mau pesan:' +
				                    textCheckout +
				                    'E-mail : ' + email + '%0A%0A' +
				                    'via ' + viaUrl;
		                    <?php } ?>

			            } else {
			                alert('id tidak ditemukan');
			            }

			            $(this).attr('href', parameter);

			            if (confirm("Terima kasih sudah belanja di brandonsport,Apakah data yang anda isi sudah benar?")) {

			                // alert(parameter);

			                var w = 960,
			                    h = 540,
			                    left = Number((screen.width / 2) - (w / 2)),
			                    tops = Number((screen.height / 2) - (h / 2)),
			                    popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
								window.location.href = 'https://brandonsport.id/';
			                 popupWindow.focus();

			                if (id == 'kirimWhatsApp') {
			                    if (tw_config.fbPixel_ID !== '') {
			                        fbq('track', 'Contact');
			                    }
			                }
			                if (id == 'checkoutWA') {
			                    var subtotal = $('#cartPopup .subtotal h2').attr('data-subtotal');
			                    if (tw_config.fbPixel_ID !== '') {
			                        fbqPurchase(subtotal);
			                    }
			                    $('form#formOrder .acf-form-submit button').trigger('click');
								localStorage.clear();
			                }
			            } else {
			                return false;
			            }

			            return false;
			        }
			    }
	    </script>
		<!-- wp_footer -->
		<?php wp_footer(); ?>
		<!-- / wp_footer -->

		<style type="text/css">
			#formOrder {
				display: none;
			}
			/*#formOrder {
				font-size: 60%;
				position: fixed;
				bottom: 0;
				overflow-y: auto;
				width: 300px;
				background: #fff;
				padding: 20px;
				right: 0;
			}
			#formOrder * {
				max-width: 100%;
			}*/
		</style>
    	<?php
            acf_form(array(
                'id' => 'formOrder',
                'post_id'               => 'new_post',
                'label_placement'       => 'top',
                'uploader'              => 'basic',
                'post_title'            => true,
                'post_content'          => false,
                'html_submit_button'    => '<button type="submit" class="acf-button button button-primary button-large">%s</button>',
                'submit_value'          => 'Kirim',
                'html_submit_spinner'   => false,
                'new_post'              => array(
                    'post_type'         => 'livesales',
                    'post_status'       => (get_theme_mod('TokoWA_produk_livesales') ? get_theme_mod('TokoWA_produk_livesales') : 'publish'),
                ),
                'return' => get_home_url() . '/',
                'kses'  => true
            ));
        ?>
	</body>
</html>
</h3>