<?php
$zermatt_weather = digid_get_formatted_weather();
if ( is_array( $zermatt_weather ) ) :
	?>
	<span class="weather">
		<?php echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/weather/' . $zermatt_weather['icon'] . '.png" alt="" class="weather-icon" /><span> ' . $zermatt_weather['temp'] . '&deg; ' . date_i18n( 'l d F  H \h i', ( time() + 7200 ) ) . esc_html__( ' UTC +1' ) . '</span>'; ?>
	</span>
	<?php
endif;
?>