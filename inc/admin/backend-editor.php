<?php

/**
 * Hide menus in the admin
 */
function digid_admin_remove_menu_pages_editor() {
	remove_menu_page( 'mainwp_child_tab' );
	remove_menu_page( 'tools.php' );
	remove_menu_page( 'options-general.php' );
	remove_menu_page( 'sitepress-multilingual-cms/menu/languages.php' );
	$page = remove_submenu_page( 'tools.php', 'import.php' );
	$page = remove_submenu_page( 'tools.php', 'export.php' );
	$page = remove_submenu_page( 'tools.php', 'tools.php' );
	$page = remove_submenu_page( 'gf_edit_forms', 'gf_settings' );
	$page = remove_submenu_page( 'gf_edit_forms', 'gf_export' );
	$page = remove_submenu_page( 'gf_edit_forms', 'gf_help' );
	$page = remove_submenu_page( 'upload.php', 'wp-smush-bulk' );
	remove_meta_box( 'rocket_post_exclude', 'page', 'normal' );
	remove_meta_box( 'rocket_post_exclude', 'post', 'normal' );
}

add_action( 'admin_menu', 'digid_admin_remove_menu_pages_editor' );

/**
 * Giving Editors Access to Gravity Forms
 */
function digid_admin_add_grav_forms() {
	$role = get_role( 'editor' );
	$role->add_cap( 'gform_full_access' );
	$role->add_cap( 'wpml_manage_translation_management' );
}

add_action( 'admin_init', 'digid_admin_add_grav_forms' );

/**
 * WP Rocket for editors
 */
function digid_admin_rocket_for_editor( $capability ) {
	if ( current_user_can( 'editor' ) ) {
		return 'editor';
	}
	return $capability;
}
add_filter( 'option_page_capability_wp_rocket', 'digid_admin_rocket_for_editor' );
add_filter( 'rocket_capacity', 'digid_admin_rocket_for_editor' );

/**
 * Removal of the footer
 */
function digid_admin_footer_remove() {
	remove_filter( 'update_footer', 'core_update_footer' );
}
add_action( 'admin_menu', 'digid_admin_footer_remove' );
