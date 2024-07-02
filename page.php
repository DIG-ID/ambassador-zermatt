<?php
get_header();
while ( have_posts() ) :
	the_post();
	// Content Composer.
	global $entity_fields;
	ergopix_content_composer( $entity_fields );
	get_template_part( 'template-parts/modules/page-links' );
endwhile;
get_footer();
