<?php

require get_template_directory() . '/inc/admin/backend-all.php';
require get_template_directory() . '/inc/admin/frontend.php';
require get_template_directory() . '/inc/admin/gallery.php';

/**
 * Do admin stuff
 */
function digid_do_admin_stuff() {
	if ( is_multisite() ) :
		if ( ! is_super_admin() ) :
			require get_template_directory() . '/inc/admin/backend-editor.php';
		endif;
	else :
		if ( current_user_can( 'editor' ) ) :
			require get_template_directory() . '/inc/admin/backend-editor.php';
		endif;
	endif;
}

add_action( 'init', 'digid_do_admin_stuff' );
