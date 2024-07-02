<?php
/**
 * Template Name: News Page
 */

get_header();

while ( have_posts() ) :
	the_post();

	// Fields.
	$entity_fields = get_fields();

	// Collect Articles.
	$posts_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args        = array(
		'posts_per_page'   => get_option( 'posts_per_page' ),
		'category'         => 0,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'include'          => array(),
		'exclude'          => array(),
		'post_type'        => 'post',
		'suppress_filters' => false,
		'paged'            => $posts_paged,
	);

	$articles_query = new Wp_Query( $args );
	$articles_items = false;

	if ( $articles_query->posts && is_array( $articles_query->posts ) && count( $articles_query->posts ) > 0 ) :
		$articles_items = $articles_query->posts;
	endif;
	?>
	<div class="container articles">
		<div class="row">
			<div class="col-md-12 page-content">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
		<?php
		$items_size = count( $articles_items );

		// No articles.
		if ( 0 === $items_size ) :
			?>
			<div class="row">
				<div class="col-xs-12"><?php esc_html_e( 'Aucun article trouv&eacute;', 'az' ); ?></div>
			</div>
			<?php
		else :
			// Articles.
			$index = 0;

			$grid_display = array(
				0 => array( 3, 5 ),
				1 => array( 4, 4 ),
				2 => array( 5, 3 ),
				3 => array( 6, 2 ),
				4 => array( 5, 3 ),
				5 => array( 4, 4 ),
			);
			$grid_size    = count( $grid_display );

			echo '<div class="row news">';
			foreach ( $articles_items as $i => $item ) :
				if ( $index === $grid_size ) {
					$index = 0;
				}
				$offset_class    = 'col-md-4 offset-md-' . esc_attr( $grid_display[ $index ][0] );
				$permalink       = esc_url( get_the_permalink( $item->ID ) );
				$date            = esc_html( get_the_date( 'd F Y', $item->ID ) );
				$title           = esc_html( get_the_title( $item->ID ) );
				$excerpt         = wp_kses_post( wpautop( wp_trim_words( $item->post_content, 25, '[&hellip;]' ) ) );
				$empty_col_class = 'col-md-' . esc_attr( $grid_display[ $index ][1] );
				?>
				<div class="<?php echo $offset_class; ?>">
					<a href="<?php echo $permalink; ?>" class="news-text">
						<span class="news-date"><?php echo $date; ?></span>
						<h3><?php echo $title; ?></h3>
						<p><?php echo $excerpt; ?></p>
					</a>
				</div>
				<div class="<?php echo $empty_col_class; ?>"></div>
				<?php
				$index++;
			endforeach;
			echo '</div>';

			?>
			<div class="row justify-content-md-center">
				<div class="col-md-10">
					<nav class="pagination">
						<?php
						// Pagination.
						$total_pages = $articles_query->max_num_pages;
						$format      = 'page/%#%/';
						if ( $total_pages > 1 ) :
							$base_replace  = get_pagenum_link( 1 );
							$current_page = max( 1, get_query_var( 'paged' ) );
							echo paginate_links(
								array(
									'base'    => preg_replace( '/\?.*/', '', $base_replace ) . '%_%',
									'format'  => $format,
									'current' => $current_page,
									'total'   => $total_pages,
								)
							);
						endif;
						?>
					</nav>
				</div>
			</div>
			<?php
		endif;
		?>
	</div><!-- .container .articles -->
	<?php
	// Content Composer.
	ergopix_home_content_composer( $entity_fields );

	// Page Bottom.
	if ( array_key_exists( 'page_bottom', $entity_fields ) && is_array( $entity_fields['page_bottom'] ) && count( $entity_fields['page_bottom'] ) > 0 ) :

		$page_bottom = $entity_fields['page_bottom'];

		$bg_img = '';
		if ( '' !== $page_bottom['background_image'] ) :
			$bg_img = wp_get_attachment_image_src( $entity_fields['page_bottom']['background_image'], 'large' );
			$bg_img = 'style="background-image:url(' . reset( $bg_img ) . ');"';
		endif;
		?>
		<div class="section home-section-bottom" <?php echo $bg_img; ?>>
			<div class="row no-gutters">
				<div class="col-12">
					<div class="text-block">
						<?php if ( '' !== $page_bottom['title'] ) { ?>
							<span class="hp-bt-title"><?php echo esc_html( $page_bottom['title'] ); ?></span>
						<?php } ?>
						<?php if ( '' !== $page_bottom['text'] ) { ?>
							<span class="hp-bt-text"><?php echo wp_kses_post( wpautop( $page_bottom['text'] ) ); ?></span>
						<?php } ?>
						<?php if ( is_array( $page_bottom['link'] ) && count( $page_bottom['link'] ) > 0 ) { ?>
							<span class="hp-bt-link">
								<a href="<?php echo esc_url( $page_bottom['link']['url'] ); ?>" target="<?php echo esc_attr( $page_bottom['link']['target'] ); ?>" class="btn"><?php echo esc_html( $page_bottom['link']['title'] ); ?></a>
							</span>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php
	endif;

endwhile;
get_footer();
