<section class="section-zimmer-content">
	<div class="container">
		<div class="row justify-content-center">
		<?php
		if ( have_rows( 'zimmer' ) ) :
			$counter = 0;
			while ( have_rows( 'zimmer' ) ) :
				the_row();
				if ( $counter % 2 == 0 ) :
					?>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 zimmer-card-wrapper">
						<div class="row justify-content-start">
							<div class="col-12 col-md-12 col-lg-6 col-xl-6 zimmer-gallery zimmer-gallery-<?php echo esc_attr( $counter ); ?> swiper">
								<div class="swiper-wrapper">
									<?php
									$images = get_sub_field( 'gallery' );
									if ( $images ) :
										foreach ( $images as $image_id ) :
											?>
											<div class="swiper-slide">
												<?php echo wp_get_attachment_image( $image_id, 'block-portrait' ); ?>
											</div>
											<?php
										endforeach;
									endif;
									?>
								</div>
							</div>
							<div class="col-12 col-md-12 col-lg-6 col-xl-5 align-self-start zimmer-content-wrapper">
								<div class="zimmer-content">
									<h2 class="zimmer-title"><?php the_sub_field( 'title' ); ?></h2>
									<p class="zimmer-description"><?php the_sub_field( 'description' ); ?></p>
									<p class="zimmer-amenities-title"><?php esc_html_e( 'Ausstattung:', 'digid' ); ?></p>
									<?php
									$amenities = get_sub_field( 'amenities' );
									if ( $amenities ) :
										$amenities_icons = array(
											'queensize' => get_template_directory_uri() . '/assets/images/zimmer-icons/queensize-bed.svg',
											'balcony'   => get_template_directory_uri() . '/assets/images/zimmer-icons/balcony.svg',
											'tv'        => get_template_directory_uri() . '/assets/images/zimmer-icons/tv.svg',
											'shower'    => get_template_directory_uri() . '/assets/images/zimmer-icons/shower.svg',
											'bathtube'  => get_template_directory_uri() . '/assets/images/zimmer-icons/bathtube.svg',
											'wifi'      => get_template_directory_uri() . '/assets/images/zimmer-icons/wifi.svg',
											'extrabed'  => get_template_directory_uri() . '/assets/images/zimmer-icons/extrabed.svg',
										);
										?>
										<ul class="zimmer-amenities">
											<?php
											foreach ( $amenities as $amenity ) :
												?>
												<li>
													<?php
													// Check if the color exists in the icon array.
													if ( array_key_exists( $amenity['value'], $amenities_icons ) ) {
														$icon_path = $amenities_icons[ $amenity['value'] ];
														echo '<figure><span><img src="' . esc_url( $icon_path ) . '" alt="' . esc_attr( $amenity['value'] ) . '"></span><figcaption>' . esc_html( $amenity['label'] ) . '</figcaption></figure>';
													} else {
														// If no icon is found, just display the color text.
														echo esc_html( $amenity );
													}
													?>
												</li>
												<?php
											endforeach;
											?>
										</ul>
										<?php
									endif;
									?>
								</div>
								<div class="zimmer-gallery-navigation">
									<div class="swiper-button-prev zimmer-gallery-button-prev-<?php echo esc_attr( $counter ); ?>"></div>
									<div class="swiper-button-next zimmer-gallery-button-next-<?php echo esc_attr( $counter ); ?>"></div>
								</div>
							</div>
						</div>
					</div>
					<?php
				else :
					?>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 zimmer-card-wrapper zimmer-card-wrapper--rev">
						<div class="row justify-content-end">
							<div class="col-12 col-md-12 col-lg-5 col-xl-5 align-self-start zimmer-content-wrapper order-2 order-lg-1">
								<div class="zimmer-content">
									<h2 class="zimmer-title"><?php the_sub_field( 'title' ); ?></h2>
									<p class="zimmer-description"><?php the_sub_field( 'description' ); ?></p>
									<p class="zimmer-amenities-title"><?php esc_html_e( 'Ausstattung:', 'digid' ); ?></p>
									<?php
									$amenities = get_sub_field( 'amenities' );
									if ( $amenities ) :
										$amenities_icons = array(
											'queensize' => get_template_directory_uri() . '/assets/images/zimmer-icons/queensize-bed.svg',
											'balcony'   => get_template_directory_uri() . '/assets/images/zimmer-icons/balcony.svg',
											'tv'        => get_template_directory_uri() . '/assets/images/zimmer-icons/tv.svg',
											'shower'    => get_template_directory_uri() . '/assets/images/zimmer-icons/shower.svg',
											'bathtube'  => get_template_directory_uri() . '/assets/images/zimmer-icons/bathtube.svg',
											'wifi'      => get_template_directory_uri() . '/assets/images/zimmer-icons/wifi.svg',
											'extrabed'  => get_template_directory_uri() . '/assets/images/zimmer-icons/extrabed.svg',
										);
										?>
										<ul class="zimmer-amenities">
											<?php
											foreach ( $amenities as $amenity ) :
												?>
												<li>
													<?php
													// Check if the color exists in the icon array.
													if ( array_key_exists( $amenity['value'], $amenities_icons ) ) {
														$icon_path = $amenities_icons[ $amenity['value'] ];
														echo '<figure><span><img src="' . esc_url( $icon_path ) . '" alt="' . esc_attr( $amenity['value'] ) . '"></span><figcaption>' . esc_html( $amenity['label'] ) . '</figcaption></figure>';
													} else {
														// If no icon is found, just display the color text.
														echo esc_html( $amenity );
													}
													?>
												</li>
												<?php
											endforeach;
											?>
										</ul>
										<?php
									endif;
									?>
								</div>
								<div class="zimmer-gallery-navigation">
									<div class="swiper-button-prev zimmer-gallery-button-prev-<?php echo esc_attr( $counter ); ?>"></div>
									<div class="swiper-button-next zimmer-gallery-button-next-<?php echo esc_attr( $counter ); ?>"></div>
								</div>
							</div>
							<div class="col-12 col-md-12 col-lg-6 col-xl-6 zimmer-gallery zimmer-gallery-<?php echo esc_attr( $counter ); ?> swiper order-1 order-lg-2">
								<div class="swiper-wrapper">
									<?php
									$images = get_sub_field( 'gallery' );
									if ( $images ) :
										foreach ( $images as $image_id ) :
											?>
											<div class="swiper-slide">
												<?php echo wp_get_attachment_image( $image_id, 'block-portrait' ); ?>
											</div>
											<?php
										endforeach;
									endif;
									?>
								</div>
							</div>
						</div>
					</div>
					<?php
				endif;
				$counter++;
			endwhile;
		endif;
		?>
		</div>
	</div>
</section>
