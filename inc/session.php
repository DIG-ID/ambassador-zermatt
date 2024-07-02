
<?php

/**
 * Register Session.
 */
function digid_register_my_session() {
	if ( ! session_id() ) {
		session_start();
	}

	if ( ! isset( $_SESSION['CREATED'] ) ) {
		$_SESSION['CREATED'] = time();
		$_SESSION['WEATHER'] = '';
	} elseif ( time() - $_SESSION['CREATED'] > 600 ) {
		// session started more than 10 minutes ago.
		session_regenerate_id( true );  // change session ID for the current session and invalidate old session ID.
		$_SESSION['CREATED'] = time();  // update creation time.
		$_SESSION['WEATHER'] = '';
	}

}

add_action( 'init', 'digid_register_my_session' );

digid_register_my_session();
