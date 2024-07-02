<?php
/**
 * Template Name: Zimmer Template
 */

get_header( 'digid' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/pages/page-header' );
		get_template_part( 'template-parts/pages/page-intro' );
		get_template_part( 'template-parts/pages/zimmer/content' );
		get_template_part( 'template-parts/modules/page-links' );
	endwhile;
endif;
get_footer( 'digid' );
