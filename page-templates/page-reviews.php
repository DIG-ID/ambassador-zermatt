<?php
/**
 * Template Name: Reviews
 */

get_header();

while ( have_posts() ) :
	the_post();

	// Content Composer.
	global $entity_fields;
	ergopix_content_composer( $entity_fields );

	?>
	<div class="wrapper">
		<div class="section">
			<div class="row no-gutters">
				<div class="col-8" style="margin-left: auto;margin-right: auto;margin-bottom: 70px;"><p><?php the_field( 'intro_text_reviews' ); ?></p></div>
			</div>
		</div>
		<div class="section">
			<div class="row no-gutters">
				<div class="col-12 reviews-container">
					<!-- TrustYou Widget -->
					<script type="text/javascript" src="https://api.trustyou.com/static/3rdparty/iframe-resizer/js/iframeResizer.min.js"></script>
					<iframe src="https://api.trustyou.com/hotels/37cbf743-49b8-46e9-b1a6-ea26577395f0/tops_flops.html?key=63fc125c-2c8e-4473-a176-3ea27c63be70&iframe_resizer=true" allowtransparency="true" frameborder="0"width="100%"></iframe>
					<script type="text/javascript">iFrameResize({});</script>
					<!-- /TrustYou Widget -->
				</div>
			</div>
		</div>
	</div>
	<?php
endwhile;

get_footer();
