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
						<div class="col-lg-12 col-xl-10 block-card-wrapperr">
							<?php
							if ( 'gallery' === $choice_value ) :
								?>
								<div class="block-gallery block-gallery-<?php echo esc_attr( $counter ); ?> swiper">
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
								</div><!-- .block-gallery -->
								<?php
							else :
								?>
								<div class="block-image">
									<?php
									$image = get_sub_field( 'image' );
									if ( $image ) :
										echo wp_get_attachment_image( $image, 'block-portrait' );
									endif;
									?>
								</div><!-- .block-gallery -->
								<?php
							endif;
							?>
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
							</div><!-- .block-content -->
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
						</div><!-- .block-card-wrapper -->
						<?php
					else :
						?>
						<div class="col-lg-12 col-xl-10 block-card-wrapperr block-card-wrapperr--rev">
							<?php
							if ( 'gallery' === $choice_value ) :
								?>
								<div class="block-gallery block-gallery-<?php echo esc_attr( $counter ); ?> swiper">
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
								</div><!-- .block-gallery -->
								<?php
							else :
								?>
								<div class="block-image">
									<?php
									$image = get_sub_field( 'image' );
									if ( $image ) :
										echo wp_get_attachment_image( $image, 'block-portrait' );
									endif;
									?>
								</div><!-- .block-gallery -->
								<?php
							endif;
							?>
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
							</div><!-- .block-content -->
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
						</div><!-- .block-card-wrapper -->
						<?php
					endif;
					$counter++;
				endwhile;
			endif;
			?>
		</div> <!-- .row -->
	</div>
</section>
