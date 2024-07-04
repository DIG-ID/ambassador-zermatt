<?php

// Places the Gravity Forms script in the footer.
add_filter( 'gform_init_scripts_footer', '__return_true' );

// Removal of metadata.
remove_action( 'wp_head', 'rel_canonical' ); // remove canonical.
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); // remove shortlink.
remove_action( 'wp_head', 'wp_generator' ); // remove Generator.
remove_action( 'wp_head', 'rsd_link' ); // remove RSD.
remove_action( 'wp_head', 'wlwmanifest_link' ); // remove wlwmanifest.

/**
 * No idea?!
 */
function digid_admin_div_content( $content ) {
	global $post;
	$original = $content;
	$content  = '<div class="the-content">';
	$content .= $original;
	$content .= '</div>';
	return $content;
}

add_filter( 'the_content', 'digid_admin_div_content' );

/**
 * Adds the light box? Where?
 */
function digid_admin_add_lightbox_rel( $content ) {
	global $post;
	$pattern     = "/<a(.*?)href=('|\")(.*?).(gif|jpeg|jpg|png)('|\")(.*?)>/i";
	$replacement = '<a$1href=$2$3.$4$5 class="fresco" data-fresco-caption="" data-fresco-options="thumbnails:false" $6>';
	$content     = preg_replace( $pattern, $replacement, $content );
	return $content;
}

add_filter( 'the_content', 'digid_admin_add_lightbox_rel' );

// Frontend cleaning.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds.
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed.
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link.
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link.
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link.
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link.
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version.
