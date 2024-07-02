<?php

/**
 * Page Content Composer.
 */
function digid_content_composer( $entity_fields ) {

	// Do we have Page Content?
	if ( is_array( $entity_fields ) && array_key_exists( 'page_content', $entity_fields ) && is_array( $entity_fields['page_content'] ) && count( $entity_fields['page_content'] ) > 0 ) :

		// Parse Layouts.
		foreach ( $entity_fields['page_content'] as $l => $layout ) :

			// Header Buttons.
			if ( 'header_buttons' === $layout['acf_fc_layout'] ) {
				continue;
					/*
					// Do we have buttons?
					if(array_key_exists('buttons', $layout) && is_array($layout['buttons']) && count($layout['buttons']) > 0){
						foreach($layout['buttons'] as $b => $btn){
							# Get Link
							$link = '#';
							$target = '';
							if(is_array($btn['link'])){
								if($btn['link']['url'] != '') $link = $btn['link']['url'];
								if($btn['link']['target'] != '') $target = ' target="'.$btn['link']['target'].'"';
								// echo '<a href="'.$link.'"'.$target.'>'.$btn['link']['title'].'</a>';
							}
						}
					}
					*/
			} elseif ( 'img_text_block' === $layout['acf_fc_layout'] ) {
				// Content.
				?>
				<div class="wrapper">
					<div class="section img_text_block">
						<div class="row no-gutters">
							<div class="col-md-12">
								<h2><?php echo $layout['title']; ?></h2>
							</div>
							<div class="col-md-5 image-collector-container">
								<?php
								// Single Image or Carousel?
								if ( is_array( $layout['images'] ) ) {
									?>
									<div class="image-collector">
										<?php
										// Single.
										if ( count( $layout['images'] ) == 1 ) {
											$img = reset( $layout['images'] );
											echo '<a href="' . $img['sizes']['large'] . '" class="fresco single-image-collected">
													<img src="' . $img['sizes']['gallery'] . '" alt="' . $img['alt'] . '" class="single-img" />
													<span class="vertical-caption vertical-caption-one-image">' . $layout['single_image_description'] . '</span>
												</a>';
										} elseif ( count( $layout['images'] ) > 1 ) {
											// Carousel.
											$randID = 'id' . rand( 0, 1000 );
											?>
											<div class="section slider-section slider-small">
												<section class="variable slider" id="<?php echo $randID; ?>">
												<?php
												foreach ( $layout['images'] as $i => $img ) {
													echo '<div><img src="' . $img['sizes']['page-slider-small'] . '" alt="" /></div>';
												}
												?>
												</section>
											</div>
											<script>
												$(document).ready(function(){
													$("#<?php echo $randID; ?>").slick({
														dots: false,
														infinite: true,
														speed: 700,
														slidesToShow: 1, 
														autoplay: true,
														variableWidth: true,
														prevArrow: '<img class="slick-prev slick-arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow-button-prev-small.svg" height="20" width="20" />',
														nextArrow: '<img class="slick-next slick-arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow-button-next-small.svg" height="20" width="20" />'
													});
												});
											</script>
											<?php 
										}
										?>
									</div>
									<?php 
								}
								?>
								<?php 
								# Do we have buttons?
								if(array_key_exists('buttons', $layout) && is_array($layout['buttons']) && count($layout['buttons']) > 0){
									?>
									<div class="link-collector">
									<?php 
									foreach($layout['buttons'] as $b => $btn){
										# Get Link
										$link = '#';
										$target = '';
										if(is_array($btn['link'])){
											if($btn['link']['url'] != '') $link = $btn['link']['url'];
											if($btn['link']['target'] != '') $target = ' target="'.$btn['link']['target'].'"';
											
											echo '<a href="'.$link.'"'.$target.'>'.$btn['link']['title'].'</a>';
										}
										
									}
									?>
									</div>
									<?php 
								}
								?>
							</div>
							<div class="col-md-6 offset-md-1">
								<div class="text-container wysiwyg-container"><?php echo wpautop($layout['text']); ?></div>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ( 'img_text_block2' === $layout['acf_fc_layout'] ) {
				// Content Inverted.
				?>
				<div class="wrapper">
					<div class="section img_text_block_2">
						<div class="row no-gutters">
							<div class="col-md-12">
								<h2><?php echo $layout['title']; ?></h2>
							</div>
															<div class="col-md-6 offset-md-1">
								<div class="text-container wysiwyg-container"><?php echo wpautop($layout['text']); ?></div>
							</div>
							<div class="col-md-5 image-collector-container">
								<?php 
								# Single Image or Carousel?
								if(is_array($layout['images'])){
									?>
									<div class="image-collector">
										<?php 
										# Single
										if(count($layout['images']) == 1){
											$img = reset($layout['images']);
											echo '<a href="'.$img['sizes']['large'].'" class="fresco single-image-collected">
													<img src="'.$img['sizes']['gallery'].'" alt="'.$img['alt'].'" class="single-img" />
													<span class="vertical-caption vertical-caption-one-image">'.$layout['single_image_description'].'</span>
												</a>';
										}
										# Carousel
										else if(count($layout['images']) > 1){
											
											$randID = 'id'.rand(0, 1000);
											?>
											<div class="section slider-section slider-small">
												<section class="variable slider" id="<?php echo $randID; ?>">
												<?php 
												foreach($layout['images'] as $i => $img){
													echo '<div><img src="'.$img['sizes']['page-slider-small'].'" alt="" /></div>';
												}
												?>
												</section>
											</div>
											<script>											
												$(document).ready(function(){
													$("#<?php echo $randID; ?>").slick({
														dots: false,
														infinite: true,
														speed: 700,
														slidesToShow: 1, 
														autoplay: true,
														variableWidth: true,
														prevArrow: '<img class="slick-prev slick-arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow-button-prev-small.svg" height="20" width="20" />',
														nextArrow: '<img class="slick-next slick-arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow-button-next-small.svg" height="20" width="20" />'
													});
												});
											</script>
											<?php 
										}
										?>
									</div>
									<?php 
								}
								?>
								<?php 
								# Do we have buttons?
								if(array_key_exists('buttons', $layout) && is_array($layout['buttons']) && count($layout['buttons']) > 0){
									?>
									<div class="link-collector">
									<?php 
									foreach($layout['buttons'] as $b => $btn){
										# Get Link
										$link = '#';
										$target = '';
										if(is_array($btn['link'])){
											if($btn['link']['url'] != '') $link = $btn['link']['url'];
											if($btn['link']['target'] != '') $target = ' target="'.$btn['link']['target'].'"';
											
											echo '<a href="'.$link.'"'.$target.'>'.$btn['link']['title'].'</a>';
										}
										
									}
									?>
									</div>
									<?php 
								}
								?>
							</div>
						</div>
					</div>
				</div>
				<?php
			} elseif ( 'carousel' === $layout['acf_fc_layout'] ) {
				// Carousel.
				if ( is_array( $layout['images'] ) && count( $layout['images'] ) > 0 ) {
					?>
					<div class="wrapper">
						<div class="image-collector">
							<?php 
							# Single
							if(count($layout['images']) == 1){
								
							}
							# Carousel
							else if(count($layout['images']) > 1){
								
								$randID = 'id'.rand(0, 1000);
								
								?>
								<div class="section slider-section slider-full">
									<section class="variable slider" id="<?php echo $randID; ?>">
									<?php 
									foreach($layout['images'] as $i => $img){
										echo '<div><a href="'.$img['sizes']['large'].'" class="fresco"><img src="'.$img['sizes']['page-slider-full'].'" alt="" /></a></div>';
									}
									?>
									</section>
								</div>
								<script>											
									$(document).ready(function(){
										$("#<?php echo $randID; ?>").slick({
											dots: false,
											infinite: true,
											speed: 700,
											centerMode: true,
											centerPadding: '5px',
											slidesToShow: 3, 
											autoplay: true,
											variableWidth: true,
											prevArrow: '<img class="slick-prev slick-arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow-button-prev-small.svg" height="20" width="20" />',
											nextArrow: '<img class="slick-next slick-arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow-button-next-small.svg" height="20" width="20" />',
											responsive: [
													{
														breakpoint: 1172,
														settings: {
															slidesToShow: 1,
														}
													}
												]
										});
									});
								</script>
								<?php 
							}
							?>
						</div>
					</div>
					<?php
				}
			}

		endforeach;

	endif;

}
