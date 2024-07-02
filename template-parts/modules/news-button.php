<?php
if ( is_front_page() ) :
	if ( ICL_LANGUAGE_CODE === 'de' ) {
		?>
		<a href="/luftreinigungsgeraete/" style="display: none;border:2px solid #9e0e0e;background:#9e0e0e;font-family: 'Work Sans';height: 150px;width: 45px;position:fixed;left:0px;top:400px;z-index: 99;font-size:18px;text-align: center;padding:14px 0;color:#ffffff;text-transform:uppercase;"><span style="transform: rotate(270deg);display: inline-block;white-space: nowrap;padding-top:30px;padding-bottom: 58px;letter-spacing: 2.67px;">News</span></a>
		<?php
	}
	if ( ICL_LANGUAGE_CODE === 'en' ) {
		?>
		<a href="/en/air-purification-devices/" style="display: none;border:2px solid #9e0e0e;background:#9e0e0e;font-family: 'Work Sans';height: 150px;width: 45px;position:fixed;left:0px;top:400px;z-index: 99;font-size:18px;text-align: center;padding:14px 0;color:#ffffff;text-transform:uppercase;"><span style="transform: rotate(270deg);display: inline-block;white-space: nowrap;padding-top:30px;padding-bottom: 58px;letter-spacing: 2.67px;">News</span></a>
		<?php
	}
	if ( ICL_LANGUAGE_CODE === 'fr' ) {
		?>
		<a href="/fr/purificateurs-dair/" style="display: none;border:2px solid #9e0e0e;background:#9e0e0e;font-family: 'Work Sans';height: 150px;width: 45px;position:fixed;left:0px;top:400px;z-index: 99;font-size:18px;text-align: center;padding:14px 0;color:#ffffff;text-transform:uppercase;"><span style="transform: rotate(270deg);display: inline-block;white-space: nowrap;padding-top:30px;padding-bottom: 58px;letter-spacing: 2.67px;">News</span></a>
		<?php
	}
endif;
