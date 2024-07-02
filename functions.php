<?php

/**
 * The theme setup.
 */
function digid_theme_setup() {

	register_nav_menus(
		array(
			'menu-main'   => __( 'Main menu' ),
			'menu-sub'    => __( 'Sub menu' ),
			'menu-images' => __( 'Menu Images' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_image_size( 'block-portrait', 900, 800 );

	add_image_size( 'page-header', 1920, 780 );

}

add_action( 'after_setup_theme', 'digid_theme_setup' );

if ( ! function_exists( 'digid_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions dig_theme_enqueue_styles() and twentytwentytwo_editor_styles() above.
	 */
	function digid_get_font_face_styles() {

		return "
			@import url('https://fonts.googleapis.com/css?family=Playfair+Display:700,700i|Work+Sans');
		";

	}

endif;

if ( ! function_exists( 'digid_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 */
	function digid_preload_webfonts() {
		?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'digid_preload_webfonts' );

/**
 * Enqueue styles and scripts
 */
function digid_theme_enqueue_styles() {

	// Get the theme data.
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	// Theme styles by ergopix.
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), $theme_version );
	wp_enqueue_style( 'fa-styles', get_template_directory_uri() . '/fonts/fontawesome/css/font-awesome.min.css', array(), $theme_version );
	wp_enqueue_style( 'fancybox-styles', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css', array(), $theme_version );
	wp_enqueue_style( 'slick-default', get_template_directory_uri() . '/js/slick/slick.css', array(), $theme_version );
	wp_enqueue_style( 'slick-custom', get_template_directory_uri() . '/js/slick/slick-theme.css', array(), $theme_version );

	// Register Theme main style by dig.
	wp_register_style( 'theme-styles', get_template_directory_uri() . '/dist/css/main.css', array(), $theme_version );

	// Add styles inline.
	wp_add_inline_style( 'theme-styles', digid_get_font_face_styles() );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'theme-styles' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), $theme_version, false );
	wp_enqueue_script( 'digid-scripts', get_stylesheet_directory_uri() . '/dist/js/main.js', array( 'jquery' ), $theme_version, false );
	wp_enqueue_script( 'fancybox-scripts', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array( 'jquery' ), $theme_version, true );
	wp_enqueue_script( 'slick-scripts', get_stylesheet_directory_uri() . '/js/slick/slick.js', array( 'jquery' ), $theme_version, false );

}

add_action( 'wp_enqueue_scripts', 'digid_theme_enqueue_styles' );


/**
 * Scale up image size.
 */
function digid_image_crop_dimensions( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ) {
	if ( ! $crop ) return null; // let the WordPress default function handle this.

	$aspect_ratio = $orig_w / $orig_h;
	$size_ratio   = max( $new_w / $orig_w, $new_h / $orig_h );

	$crop_w = round( $new_w / $size_ratio );
	$crop_h = round( $new_h / $size_ratio );

	$s_x = floor( ( $orig_w - $crop_w ) / 2 );
	$s_y = floor( ( $orig_h - $crop_h ) / 2 );

	return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}

add_filter( 'image_resize_dimensions', 'digid_image_crop_dimensions', 10, 6 );

/**
 * Get XPDF Path.
 */
function digid_search_xpdf_path() {
	$url = get_template_directory() . '/pdftotext';
	return $url;
}

add_filter( 'searchwp_xpdf_path', 'digid_search_xpdf_path' );


/**
 * Attach a class to linked images' parent anchors
 * e.g. a img => a.img img
 * https://wordpress.org/ideas/topic/add-rel-or-class-to-image-links
 */
function digid_give_linked_images_class( $html, $id, $caption, $title, $align, $url, $size, $alt = '' ) {
	$classes = 'fresco'; // separated by spaces, e.g. 'img image-link'.

	// check if there are already classes assigned to the anchor.
	if ( preg_match( '/<a.*? class=".*?">/', $html ) ) {
		$html = preg_replace( '/(<a.*? class=".*?)(".*?>)/', '$1 ' . $classes . '$2', $html );
	} else {
		$html = preg_replace( '/(<a.*?)>/', '$1 class="' . $classes . '" >', $html );
	}
	return $html;
}

add_filter( 'image_send_to_editor', 'digid_give_linked_images_classs', 10, 8 );

/**
 * Lowers the metabox priority to 'core' for Yoast SEO's metabox.
 *
 * @param string $priority The current priority.
 *
 * @return string $priority The potentially altered priority.
 */
function digid_lower_yoast_metabox_priority( $priority ) {
	return 'core';
}

add_filter( 'wpseo_metabox_prio', 'digid_lower_yoast_metabox_priority' );

/**
 * Custom print_r.
 */
function digid_print( $data ) {
	if ( is_array( $data ) || '' !== $data ) {
		echo '<pre>';
		print_r( $data );
		echo '</pre>';
	}
}

// Tinymce.
require get_template_directory() . '/inc/tinymce.php';

// SESSION.
require get_template_directory() . '/inc/session.php';

// The theme page composer.
require get_template_directory() . '/inc/theme-composer/composer-home.php';

// The theme home composer.
require get_template_directory() . '/inc/theme-composer/composer-page.php';
