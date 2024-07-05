<?php

/**
 * Home content composer.
 */
function digid_home_content_composer( $entity_fields ) {

	// print_rgopix($entity_fields);

	// Page Composer.
	if ( is_array( $entity_fields ) && array_key_exists( 'page_composer', $entity_fields ) && is_array( $entity_fields['page_composer'] ) && count( $entity_fields['page_composer'] ) > 0 ) :

		$page_composer = $entity_fields['page_composer'];

		if ( array_key_exists( 'pages_presentation', $page_composer ) && is_array( $page_composer['pages_presentation'] ) && count( $page_composer['pages_presentation'] ) > 0 ) :

			$index = 0;

			foreach ( $page_composer['pages_presentation'] as $p => $page_id ) :
				// Left / Right.
				$orientation = 'right-left';
				if ( 0 === $index % 2 ) {
					$orientation = 'left-right';
				}
				$index++;
				// Get Page.
				$page = get_post( $page_id );
				// Title.
				$title = $page->post_title;
				// Featured Image + Caption.
				$image = reset( wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'home-section-img' ) );
				// $caption = wp_get_attachment_caption( get_post_thumbnail_id($page_id) );
				// Link.
				$link_pg = get_permalink( $page_id );
				// Get Page Fields.
				$page_fields = get_fields( $page_id );
				// Presentation.
				$presentation = $page_fields['presentation'];
				$caption      = $page_fields['header_image_description'];
				?>
				<div class="section home-section home-<?php echo esc_attr( $orientation ); ?>">
					<div class="container">
						<div class="row">
							<div class="col-lg-1 hidden-md-down"></div>
							<div class="col-lg-10">
								<h2><?php echo $title; ?></h2>
								<div class="hp-st-image">
									<?php echo '<img src="' . esc_url( $image ) . '" alt="' . esc_html( $title ) . '" /><span class="vertical-caption">' . esc_html( $caption ) . '</span>'; ?>
									<?php
									// Buttons.
									if ( array_key_exists( 'page_content', $page_fields ) && is_array( $page_fields['page_content'] ) ) :
										foreach ( $page_fields['page_content'] as $l => $layout ) :
											// Header Buttons.
											if ( 'header_buttons' === $layout['acf_fc_layout'] ) :
												// Do we have buttons?
												if ( array_key_exists( 'buttons', $layout ) && is_array( $layout['buttons'] ) && count( $layout['buttons'] ) > 0 ) :
													?>
													<div class="home-link-collector link-collector">
														<?php
														foreach ( $layout['buttons'] as $b => $btn ) :
															// Get Link.
															$link   = '#';
															$target = '';
															if ( is_array( $btn['link'] ) ) :
																if ( '' !== $btn['link']['url'] ) {
																	$link = $btn['link']['url'];
																}
																if ( '' !== $btn['link']['target'] ) {
																	$target = ' target="' . $btn['link']['target'] . '"';
																}
																echo '<a href="' . esc_url( $link ) . '"' . esc_html( $target ) . '>' . esc_html( $btn['link']['title'] ) . '</a>';
															endif;
														endforeach;
														?>
													</div>
													<?php
												endif;
											else :
												continue;
											endif;
										endforeach;
									endif;
									?>
								</div>
								<div class="hp-st-text wysiwyg-container">
									<span><?php echo wp_kses_post( wpautop( $presentation ) ); ?></span>
									<span class="hp-st-readmore"><?php echo '<a href="' . esc_url( $link_pg ) . '" class="btn">' . esc_html__( 'Read more', 'ergopix' ) . '</a>'; ?></span>
								</div>
							</div>
							<div class="col-lg-1 hidden-md-down"></div>
						</div>
					</div>
				</div>
				<?php
			endforeach;

		endif;

	endif;

}
