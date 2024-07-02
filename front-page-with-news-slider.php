<?php
get_header();
while ( have_posts() ) :
	the_post();

	// Fields.
	$entity_fields = get_fields();

	// Get Latest News.
	$args = array(
		'posts_per_page'   => 5,
		'category'         => 0,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'post_type'        => 'post',
		'suppress_filters' => false,
	);
	$news = get_posts( $args );
	?>
	<div class="section home-section-news">
		<div class="row no-gutters">
			<div class="col-11 offset-1">
				<div id="home-news-slider">
					<?php
					foreach ( $news as $a => $article ) :
						echo '<div class="col-md-4">';
						echo '<a href="' . esc_url( get_the_permalink( $article->ID ) ) . '">
								<span class="article-info">
									<span class="date">' . get_the_date( 'l d F Y', $article->ID ) . '</span>
									<span class="excerpt">' . esc_html( $article->post_title ) . '</span>
								</span>
								</a>';
						echo '</div>';
					endforeach;
					?>
				</div>
				<script>
					$(document).ready(function(){
						$("#home-news-slider").slick({
							dots: false,
							infinite: true,
							speed: 300,
							centerMode: true,
							centerPadding: '15px',
							slidesToShow: 3, 
							autoplay: true,
							prevArrow: '<img class="slick-prev slick-arrow arrow-news" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow-button-prev-shadow.svg" height="40" width="40" />',
							nextArrow: '<img class="slick-next slick-arrow arrow-news" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow-button-next-shadow.svg" height="40" width="40" />',
							responsive: [
								{
									breakpoint: 981,
									settings: {
										slidesToShow: 2,
									}
								},
								{
									breakpoint: 767,
									settings: {
										slidesToShow: 1,
									}
								}
							]
						});
					});
				</script>
			</div>
		</div>
	</div>
	<?php
	// Content Composer.
	digid_home_content_composer( $entity_fields );

	// Page Bottom.
	if ( array_key_exists( 'page_bottom', $entity_fields ) && is_array( $entity_fields['page_bottom'] ) && count( $entity_fields['page_bottom'] ) > 0 ) {

		$page_bottom = $entity_fields['page_bottom'];
		$bg_image    = '';

		if ( '' !== $page_bottom['background_image'] ) {
			$bg_image = wp_get_attachment_image_src( $entity_fields['page_bottom']['background_image'], 'gallery-full' );
			$bg_image = 'style="background-image:url(' . reset( $bg_image ) . ');"';
		}
		?>
		<div class="section home-section-bottom" <?php echo esc_attr( $bg_image ); ?>>
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
	}
endwhile;
get_footer();
