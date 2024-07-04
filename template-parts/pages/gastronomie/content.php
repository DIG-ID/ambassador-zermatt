<section class="section-blocks-content">
	<div class="container">
		<div class="row justify-content-center">
		<?php
		if ( have_rows( 'blocks' ) ) :
			$counter = 0;
			while ( have_rows( 'blocks' ) ) :
				the_row();
				$choice_value = get_sub_field( 'gallery_image' );
				if ( $counter % 2 == 0 ) :
					?>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 block-card-wrapper">
						<div class="row justify-content-start">
							<?php
							if ( 'gallery' === $choice_value ) :
								?>
								<div class="col-12 col-md-12 col-lg-6 col-xl-6 block-gallery block-gallery-<?php echo esc_attr( $counter ); ?> swiper">
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
								<?php
							else :
								?>
								<div class="col-12 col-md-12 col-lg-6 col-xl-6 block-image">
									<?php
									$image = get_sub_field( 'image' );
									if ( $image ) :
										echo wp_get_attachment_image( $image, 'block-portrait' );
									endif;
									?>
								</div>
								<?php
							endif;
							?>
							<div class="col-12 col-md-12 col-lg-5 col-xl-5 align-self-start block-content-wrapper">
								<div class="block-content">
									<h2 class="block-title"><?php the_sub_field( 'title' ); ?></h2>
									<p class="block-description"><?php the_sub_field( 'description' ); ?></p>
									<?php
										$notes = get_sub_field( 'notes' );
										if ( $notes ) :
											?>
											<p class="block-notes-title"><?php esc_html_e( 'Öffnungszeiten:', 'digid' ); ?></p>
											<p class="block-description"><?php the_sub_field( 'notes' ); ?></p>
											<?php
										endif;
										$button1 = get_sub_field( 'button_1' );
										$button2 = get_sub_field( 'button_2' );
										if ( $button1 || $button2 ) :
											echo '<span class="block-buttons-wrapper">';
											if ( $button1 ) :
												$link_url    = $button1['url'];
												$link_title  = $button1['title'];
												$link_target = $button1['target'] ? $button1['target'] : '_self';
												?>
												<a class="block-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
												<?php
											endif;
											if ( $button2 ) :
												$link_url    = $button2['url'];
												$link_title  = $button2['title'];
												$link_target = $button2['target'] ? $button2['target'] : '_self';
												?>
												<a class="block-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
												<?php
											endif;
											echo '</span>';
										endif;
									?>
								</div>
								<?php
								if ( 'gallery' === $choice_value ) :
									?>
									<div class="block-gallery-navigation">
										<div class="swiper-button-prev block-gallery-button-prev-<?php echo esc_attr( $counter ); ?>"></div>
										<div class="swiper-button-next block-gallery-button-next-<?php echo esc_attr( $counter ); ?>"></div>
									</div>
									<?php
								endif;
								?>
							</div>
						</div>
					</div>
					<?php
				else :
					?>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 block-card-wrapper block-card-wrapper--rev">
						<div class="row justify-content-end">
							<div class="col-12 col-md-12 col-lg-5 col-xl-5 align-self-start block-content-wrapper order-2 order-lg-1">
								<div class="block-content">
									<h2 class="block-title"><?php the_sub_field( 'title' ); ?></h2>
									<p class="block-description"><?php the_sub_field( 'description' ); ?></p>
									<?php
										$notes = get_sub_field( 'notes' );
										if ( $notes ) :
											?>
											<p class="block-notes-title"><?php esc_html_e( 'Öffnungszeiten:', 'digid' ); ?></p>
											<p class="block-description"><?php the_sub_field( 'notes' ); ?></p>
											<?php
										endif;
										$button1 = get_sub_field( 'button_1' );
										$button2 = get_sub_field( 'button_2' );
										if ( $button1 || $button2 ) :
											echo '<span class="block-buttons-wrapper">';
											if ( $button1 ) :
												$link_url    = $button1['url'];
												$link_title  = $button1['title'];
												$link_target = $button1['target'] ? $button1['target'] : '_self';
												?>
												<a class="block-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
												<?php
											endif;
											if ( $button2 ) :
												$link_url    = $button2['url'];
												$link_title  = $button2['title'];
												$link_target = $button2['target'] ? $button2['target'] : '_self';
												?>
												<a class="block-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
												<?php
											endif;
											echo '</span>';
										endif;
									?>
								</div>
								<?php
								if ( 'gallery' === $choice_value ) :
									?>
									<div class="block-gallery-navigation">
										<div class="swiper-button-prev block-gallery-button-prev-<?php echo esc_attr( $counter ); ?>"></div>
										<div class="swiper-button-next block-gallery-button-next-<?php echo esc_attr( $counter ); ?>"></div>
									</div>
									<?php
								endif;
								?>
							</div>
							<?php
							if ( 'gallery' === $choice_value ) :
								?>
								<div class="col-12 col-md-12 col-lg-6 col-xl-6 block-gallery block-gallery-<?php echo esc_attr( $counter ); ?> swiper order-1 order-lg-2">
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
								<?php
							else :
								?>
								<div class="col-12 col-md-12 col-lg-6 col-xl-6 order-1 order-lg-2 block-image">
									<?php
									$single_image = get_sub_field( 'image' );
									if ( $single_image ) :
										echo wp_get_attachment_image( $single_image, 'block-portrait' );
									endif;
									?>
								</div>
								<?php
							endif;
							?>
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
