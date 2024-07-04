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
	}
	?>

<div id="footbar" class="fixed_foot">
	<div id="iconsfixed">
		<?php if ( ICL_LANGUAGE_CODE === 'de' ) { ?><a href="https://module.lafourchette.com/de_CH/module/750984-f9eb6" data-fancybox data-type="iframe"
data-preload="false" data-height="574" class="btn">Tisch reservieren</a> <?php } ?>
		<?php if ( ICL_LANGUAGE_CODE === 'en' ) { ?><a href="https://module.lafourchette.com/en_GB/module/750984-f9eb6" data-fancybox data-type="iframe"
data-preload="false" data-height="574" class="btn">Book a table</a><?php } ?>
		<?php if ( ICL_LANGUAGE_CODE === 'fr' ) { ?><a href="https://module.lafourchette.com/fr_CH/module/750984-f9eb6" data-fancybox data-type="iframe"
data-preload="false" data-height="574" class="btn">Réserver une table</a><?php } ?>
			<span class="separator"></span>
		<a href="<?php echo $booking_url_lg; ?>" target="_blank" class="btn">
			<?php if(ICL_LANGUAGE_CODE=='de'): ?>
			<?php _e('Zimmer Buchen'); ?>
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
			<?php _e('Book Now'); ?>
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
			<?php _e('Réservation'); ?>
			<?php endif; ?>
		</a>
	</div>
</div>