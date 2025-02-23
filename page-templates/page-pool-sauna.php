<?php
/**
 * Template Name: Pool & Sauna Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/pages/page-header' );
		get_template_part( 'template-parts/pages/page-intro' );
		get_template_part( 'template-parts/pages/pool-sauna/content' );
		get_template_part( 'template-parts/modules/page-links' );
	endwhile;
endif;
get_footer();
