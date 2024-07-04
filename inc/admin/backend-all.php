<?php

/**
 * Adding stylesheet in the admin.
 */
function digid_admin_add_css() {
	echo '<link rel="stylesheet" type="text/css" href="' . plugin_dir_url("") . '/ergopix/css/admin.css">';
}

add_action( 'admin_head', 'digid_admin_add_css' );

/**
 * Remove accents when uploading an image
 */
function digid_admin_sanitize_file_name( $filename ) {
	$sanitized_filename = remove_accents( $filename );
	$invalid = array(
		' '   => '-',
		'%20' => '-',
		'_'   => '-',
	);
	$sanitized_filename = str_replace( array_keys( $invalid ), array_values( $invalid ), $sanitized_filename );
	$sanitized_filename = preg_replace( '/[^A-Za-z0-9-\. ]/', '', $sanitized_filename );
	$sanitized_filename = preg_replace( '/\.(?=.*\.)/', '', $sanitized_filename );
	$sanitized_filename = preg_replace( '/-+/', '-', $sanitized_filename );
	$sanitized_filename = str_replace( '-.', '.', $sanitized_filename );
	$sanitized_filename = strtolower( $sanitized_filename );
	return $sanitized_filename;
}

add_filter( 'sanitize_file_name', 'digid_admin_sanitize_file_name', 10, 1 );

/**
 * Removal of the "Help" button
 */
/*function digid_admin_remove_help( $old_help, $screen_id, $screen ) {
	$screen->remove_help_tabs();
	return $old_help;
}

add_filter( 'contextual_help', 'digid_admin_remove_help', 999, 3 );*/

/**
 * Add the custom-editor-style.css stylesheet in the editor
 */
function digid_admin_add_editor_styles() {
	add_editor_style( get_bloginfo( 'template_url' ) . '/css/editor-style.css' );
}

add_action( 'init', 'digid_admin_add_editor_styles' );

/**
 * Default message on the dashboard
 */
function digid_admin_dashboard_widget_content() {
	echo 'Welcome to the platform administration <br/><strong>' . get_bloginfo( 'name' ) . '</strong><br/><br/><img style="float: left;height: 66px;margin-right: 20px;" src="https://www.ergopix.com/wp-content/themes/ergopix/images/logo-min.png" alt=""/>dig.id<br/>Avenue Nestlé 22<br/>1800 Vevey<br/><a href="mailto:support@dig.id">support@dig.id</a><br/>';
}
/**
 * Add the widget to dashboard
 */
function digid_admin_add_dashboard_widgets() {
	wp_add_dashboard_widget( 'digid_dashboard_widget', 'Administration Web', 'digid_admin_dashboard_widget_content' );
}

add_action( 'wp_dashboard_setup', 'digid_admin_add_dashboard_widgets' );

/**
 * Hide update messages for users
 */
function digid_admin_hide_update_notice_to_all_but_admin_users() {
	if ( ! current_user_can( 'update_core' ) ) {
		remove_action( 'admin_notices', 'update_nag', 3 );
	}
}

add_action( 'admin_head', 'digid_admin_hide_update_notice_to_all_but_admin_users', 1 );

/**
 * Removal of unnecessary meta-boxes.
 */
function remove_post_custom_fields() {
	remove_meta_box( 'linkxfndiv', 'link', 'normal' );
	remove_meta_box( 'linkadvanceddiv', 'link', 'normal' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
	remove_meta_box( 'icl_dashboard_widget', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'side' );
	remove_meta_box( 'commentsdiv', 'post', 'side' );
	remove_meta_box( 'revisionsdiv', 'post', 'side' );
	remove_meta_box( 'cryptx', 'post', 'side' );
	remove_meta_box( 'icl_div_config', 'page', 'normal' );
	remove_meta_box( 'icl_div_config', 'post', 'side' );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'side' );
	remove_meta_box( 'tagsdiv-post_tag', 'post' , 'normal' );
	remove_meta_box( 'commentsdiv', 'page', 'normal' );
	//remove_meta_box( 'postexcerpt', 'page', 'normal' );
	remove_meta_box( 'wpgeo_dashboard', 'dashboard', 'normal' );
	remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'normal' );
}

add_action( 'admin_menu', 'remove_post_custom_fields' );

// Enabling White Label WP-Rocket
define( 'WP_RWL', true );

/**
 * Hide menus in the admin
 */
function digid_admin_remove_menu_pages_admin() {
	remove_menu_page( 'link-manager.php' );
	remove_menu_page( 'edit-comments.php' );
}

add_action( 'admin_menu', 'digid_admin_remove_menu_pages_admin' );

/**
 * Hide sub-menus in the admin
 */
function digid_admin_adjust_the_wp_menu_admin() {
	$page = remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' ); // Keywords in Article.
	$page = remove_submenu_page( 'themes.php', 'widgets.php' ); // Widgets of the theme.
	$page = remove_submenu_page( 'themes.php', 'theme-editor.php' ); // Theme file Editor.
	$page = remove_submenu_page( 'plugins.php', 'plugin-editor.php' ); // Plugins file Editor.
}

add_action( 'admin_menu', 'digid_admin_adjust_the_wp_menu_admin', 999 );

/**
 * Remove comments, WP from admin bar
 */
function digid_admin_bar_render() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu( 'comments' );
		$wp_admin_bar->remove_menu( 'wp-logo' );
}

add_action( 'wp_before_admin_bar_render', 'digid_admin_bar_render' );

/**
 * Changing the text in the footer
 */
function digid_admin_remove_footer_admin() {
	echo '<a href="https://dig.id" target="_blank">dig.id | Av. Nestlé 22 | 1800 Vevey</a>';
}

add_filter( 'admin_footer_text', 'digid_admin_remove_footer_admin' );

/**
 * Change the login page logo
 */
function digid_admin_login_logo() {
	?>
	<style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url(<?php echo get_template_directory_uri() . '/assets/images/logo-min.png'; ?>);
			background-size: 320px;
			width: 320px;
			height: 66px;
		}
		#backtoblog{
			display: none;
		}
		#nav{
			text-align: center;
		}
	</style>
	<?php
}

add_action( 'login_enqueue_scripts', 'digid_admin_login_logo' );

/**
 * Custom login logo url.
 */
function digid_admin_custom_login_logo_url( $url ) {
	return 'https://dig.id';
}

add_filter( 'login_headerurl', 'digid_admin_custom_login_logo_url' );

// Removes the Customizer submenu item from the Appearence menu.
add_action(
	'admin_menu',
	function() {
		global $submenu;
		if ( isset( $submenu['themes.php'] ) ) :
			foreach ( $submenu['themes.php'] as $index => $menu_item ) :
				if ( in_array( 'customize', $menu_item, true ) ) :
					unset( $submenu['themes.php'][ $index ] );
				endif;
			endforeach;
		endif;
	}
);
