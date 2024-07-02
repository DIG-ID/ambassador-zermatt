<?php
$entity_fields = $args['entity_fields'];
// Page Header Buttons.
if ( is_array( $entity_fields ) && array_key_exists( 'page_content', $entity_fields ) && is_array( $entity_fields['page_content'] ) && count( $entity_fields['page_content'] ) > 0 ) {

	// Parse Layouts.
	foreach ( $entity_fields['page_content'] as $l => $layout ) {
		// Header Buttons.
		if ( 'header_buttons' === $layout['acf_fc_layout'] ) {
			// Do we have buttons?
			if ( array_key_exists( 'buttons', $layout ) && is_array( $layout['buttons'] ) && count( $layout['buttons'] ) > 0 ) {
				?>
				<div class="header-page-buttons">
					<div class="container">
						<div class="row">
							<div class="col-md-11 offset-md-1">
								<?php
								foreach ( $layout['buttons'] as $b => $btn ) :
									// Get Link.
									$button_link   = '#';
									$button_target = '';
									if ( is_array( $btn['link'] ) ) :
										if ( '' !== $btn['link']['url'] ) {
											$button_link = $btn['link']['url'];
										}
										if ( '' !== $btn['link']['target'] ) {
											$button_target = ' target="' . $btn['link']['target'] . '"';
										}
										echo '<a href="' . $button_link . '"' . $button_target . '>' . $btn['link']['title'] . '</a>';
									endif;
								endforeach;
								?>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
		}
	}
}
