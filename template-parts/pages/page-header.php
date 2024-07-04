<?php
$image = get_field( 'background_image' );
if ( $image ) :
	$bg_img = wp_get_attachment_image_url( $image, 'page-header' );
endif;
?>
<div class="section-page-header" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.45) 0%, rgba(0, 0, 0, 0.30) 20.83%, rgba(0, 0, 0, 0.30) 78.65%, rgba(0, 0, 0, 0.45) 100%), url(<?php echo esc_url( $bg_img ); ?>); background-size: cover; background-position: center center; background-repeat: no-repeat;">
	<h1 class=""><?php the_field( 'title' ); ?></h1>
</div>
