<?php

/**
 * Undocumented function
 *
 * @param [type] $output
 * @param [type] $attr
 * @return void
 */
function my_post_gallery( $output, $attr ) {
	global $post, $wp_locale;
	static $instance = 0;
	$instance++;
	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( !$attr['orderby'] ) {
			unset( $attr['orderby'] );
		}
	}
	extract(
		shortcode_atts(
			array(
				'order'      => 'ASC',
				'orderby'    => 'menu_order ID',
				'id'         => $post->ID,
				'itemtag'    => 'div',
				'icontag'    => 'div',
				'captiontag' => 'div',
				'columns'    => 4,
				'size'       => 'gallery',
				'include'    => '',
				'exclude'    => '',
			),
			$attr
		)
	);
	$id = intval( $id );
	if ( 'RAND' == $order ) {
		$orderby = 'none';
	}
	if ( ! empty( $include ) ) {
		$include      = preg_replace( '/[^0-9,]+/', '', $include );
		$_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
		$attachments  = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[ $val->ID ] = $_attachments[ $key ];
		}
	} elseif ( ! empty( $exclude ) ) {
			$exclude     = preg_replace( '/[^0-9,]+/', '', $exclude );
			$attachments = get_children(
				array(
					'post_parent'    => $id,
					'exclude'        => $exclude,
					'post_status'    => 'inherit',
					'post_type'      => 'attachment',
					'post_mime_type' => 'image',
					'order'          => $order,
					'orderby'        => $orderby,
				)
			);
	} else {
		$attachments = get_children(
			array(
				'post_parent'    => $id,
				'post_status'    => 'inherit',
				'post_type'      => 'attachment',
				'post_mime_type' => 'image',
				'order'          => $order,
				'orderby'        => $orderby,
			)
		);
	}
	if ( empty( $attachments ) ) {
		return '';
	}
	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment ) {
			$output .= wp_get_attachment_link( $att_id, $size, true ) . "\n";
		}
		return $output;
	}
	$itemtag    = tag_escape( $itemtag );
	$captiontag = tag_escape( $captiontag );
	$float      = is_rtl() ? 'right' : 'left';
	$selector   = "gallery-{$instance}";
	$output     = "<div id='$selector' class='gallery galleryid-{$id}'>";
	$i          = 0;
	foreach ( $attachments as $id => $attachment ) {
		if ( $i % 4 === 0 ) {
			$output .= '<div class="row">';
		}
		$link    = wp_get_attachment_link( $id, $size, false, false );
		$output .= "<{$itemtag} class='gallery-item col-sm-3'>";
		$output .= $link;
		if ( $captiontag && trim( $attachment->post_excerpt ) ) {
			$output .= "
				<{$captiontag} class='gallery-caption'>
				" . wptexturize( $attachment->post_excerpt ) . "
				</{$captiontag}>";
		}
		$output .= "</{$itemtag}>";
		if ( $i % 4 === 3 ) {
			$output .= "</div>";
		}
		$i++;
	}
	if( $i % 4 !== 0 ) {
		$output .= "</div>";
	}
	$output .= "</div>\n";
	return $output;
}

add_filter( 'post_gallery', 'my_post_gallery', 10, 2 );

/**
 * Undocumented function
 *
 * @param [type] $content
 * @param [type] $id
 * @param [type] $size
 * @param [type] $permalink
 * @param [type] $icon
 * @param [type] $text
 * @return void
 */
function sant_prettyadd( $content, $id, $size, $permalink, $icon, $text ) {
	if ( ! $permalink ) {
		$image       = wp_get_attachment_image_src( $id, 'gallery-full' );
		$image_data  = get_post( $id );
		$new_content = preg_replace( "/<a/", "<a data-fresco-caption=\"" . $image_data->post_excerpt . "\" data-fresco-options=\"thumbnails:false\" class=\"fresco\" data-fresco-group=\"gallery\"", $content, 1 );
		$new_content = preg_replace( '/href=\'(.*?)\'/', 'href=\'' . $image[0] . '\'', $new_content );
		return $new_content;
	} else {
			return $content;
	}
}

add_filter( 'wp_get_attachment_link', 'sant_prettyadd', 10, 6 );