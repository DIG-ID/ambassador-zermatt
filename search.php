<?php
get_header();

if ( have_posts() ) :
	?>
	<h1 class="page-title"><?php /* translators: %s: search query */ printf( esc_html__( 'Résultats de la recherche pour: %s', 'az' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
	<?php
	while ( have_posts() ) :
		the_post();
	endwhile;
else :
	?>
	<p><?php esc_html_e( 'Désolé, mais rien ne correspond à vos critères de recherche. S\'il vous plaît essayez de nouveau avec des mots clés différents.', 'az' ); ?></p>
	<?php
endif;

get_sidebar();
get_footer();
