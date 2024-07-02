<?php
/**
 * Template Name: Data-template
 */

get_header();

while ( have_posts() ) :
	the_post();

	// Content Composer.
	global $entity_fields;
	ergopix_content_composer( $entity_fields );

endwhile;

get_footer();
