<?php

/**
 * Convert kelvin to celsius.
 */
function digid_kelvin_to_celsius( $given_value ) {
	$celsius = $given_value - 273.15;
	return $celsius;
}

/**
 * Get weather.
 */
function digid_get_weather() {

	if ( isset( $_SESSION['WEATHER'] ) && '' !== $_SESSION['WEATHER'] ) {
		return $_SESSION['WEATHER'];
	}
	if ( defined( 'CURRENT_WEATHER' ) && is_array( CURRENT_WEATHER ) && count( CURRENT_WEATHER ) > 0 ) {
		return CURRENT_WEATHER;
	}

	// City Zermatt ID.
	$city_id = '2657928';

	// Weather API Key.
	$w_app_id = 'a4b090f7220b52d63103ca2ac163748e';
	$host     = 'http://api.openweathermap.org/data/2.5/weather?id=' . $city_id . '&appid=' . $w_app_id . '';
	// $response = wp_remote_get($host)

	$curl = curl_init();
	curl_setopt( $curl, CURLOPT_URL, $host );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt( $curl, CURLOPT_HTTPHEADER, array( "Content-type: application/json" ));

	$return = curl_exec( $curl ); // {"affectedTaskIds":"4442305","id":"4442305","STATUS":"OK"}
	curl_close ( $curl );

	$return = json_decode( $return, true );
	$_SESSION['WEATHER'] = $return;
	define( 'CURRENT_WEATHER', $return ); // Array is returned

	return CURRENT_WEATHER;
}

/**
 * Get formatted weather.
 */
function digid_get_formatted_weather() {

	$weather = false;

	$current_data = digid_get_weather();

	if ( is_array( $current_data ) && count( $current_data ) > 0 ) {
		$weather = array(
			'title' => __( $current_data['weather'][0]['main']),
			'text'  => __( $current_data['weather'][0]['description']),
			'icon'  => $current_data['weather'][0]['icon'],
			'temp'  => round( digid_kelvin_to_celsius( $current_data['main']['temp'] ) ),
		);

	}
	return $weather;

}
