<div class="header-languages">
	<ul>
		<?php
		$booking_url_lg = 'https://www.simplebooking.it/ibe/hotelbooking/search?hid=5288&lang=fr';
		$booking_url    = array(
			'fr' => 'https://www.simplebooking.it/ibe/hotelbooking/search?hid=5288&lang=fr',
			'en' => 'https://www.simplebooking.it/ibe/hotelbooking/search?hid=5288&lang=en',
			'de' => 'https://www.simplebooking.it/ibe/hotelbooking/search?hid=5288&lang=de',
		);

		// Languages.
		$languages = icl_get_languages( 'skip_missing=0&orderby=custom&link_empty_to=str' );
		foreach ( $languages as $abrv => $language ) {
			// Active?
			$selected = '';
			if ( 1 === $language['active'] ) {
				$selected       = ' selected';
				$booking_url_lg = $booking_url[ $abrv ];
			}
			// No translation available.
			$no_translation = '';
			if ( 'str' === $language['url'] ) {
				$no_translation = ' disabled';
			}
			echo '<li class="menu-lang"' . $selected . $no_translation . '><a href="' . esc_url( $language['url'] ) . '">' . esc_html( $abrv ) . '</a></li>';
		}
		?>
	</ul>
</div>
