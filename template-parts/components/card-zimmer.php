<div class="col-12 col-sm-12 col-md-12 col-lg-10 zimmer-card-wrapper">
	<div class="row justify-content-start">
		<div class="col-12 col-md-6 col-lg-6 col-xl-6 zimmer-gallery zimmer-gallery-<?php echo esc_attr( $count ); ?> swiper">
			<div class="swiper-wrapper">
				<?php
				$images = get_sub_field( 'gallery' );
				if ( $images ) :
					foreach ( $images as $image_id ) :
						?>
						<div class="swiper-slide">
							<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
						</div>
						<?php
					endforeach;
				endif;
				?>
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-6 col-xl-5 align-self-start zimmer-content-wrapper ">
			<div class="zimmer-content">
				<h2 class="zimmer-title"><?php the_sub_field( 'title' ); ?></h2>
				<p class="zimmer-description"><?php the_sub_field( 'description' ); ?></p>
				<p class="zimmer-amenities-title"><?php esc_html_e( 'Ausstattung:', 'digid' ); ?></p>
				<?php
				$amenities = get_sub_field( 'amenities' );
				if ( $amenities ) :
					$amenities_icons = array(
						'queensize' => get_template_directory_uri() . '/images/zimmer-icons/queensize-bed.svg',
						'balcony'   => get_template_directory_uri() . '/images/zimmer-icons/balcony.svg',
						'tv'        => get_template_directory_uri() . '/images/zimmer-icons/tv.svg',
						'shower'    => get_template_directory_uri() . '/images/zimmer-icons/shower.svg',
						'bathtube'  => get_template_directory_uri() . '/images/zimmer-icons/bathtube.svg',
						'wifi'      => get_template_directory_uri() . '/images/zimmer-icons/wifi.svg',
						'extrabed'  => get_template_directory_uri() . '/images/zimmer-icons/extrabed.svg',
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
			<div class="zimmmer-gallery-navigation">
				<div class="swiper-button-prev zimmer-gallery-button-prev-<?php echo esc_attr( $count ); ?>"></div>
				<div class="swiper-button-next zimmer-gallery-button-next-<?php echo esc_attr( $count ); ?>"></div>
			</div>
		</div>
	</div>
</div>