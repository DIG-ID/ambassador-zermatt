<?php
/**
 * Template Name: Impressum
 */

get_header();

while ( have_posts() ) :
	the_post();

	// Content Composer.
	global $entity_fields;
	ergopix_content_composer( $entity_fields );
	?>
	<div class="wrapper">
		<div class="section">
			<div class="row no-gutters">
				<div class="col-8 impressum-container">
					<?php if ( ICL_LANGUAGE_CODE === 'de' ) : ?>
						<h3>Kontaktadresse</h3>
						<p>Hotel Ambassador<br>
						Spissstrasse 10<br>
						CH - 3920 Zermatt</p>

						&nbsp;
						<h3>Haftungsausschluss</h3>
						<p>Der Autor übernimmt keinerlei Gewähr hinsichtlich der inhaltlichen Richtigkeit, Genauigkeit, Aktualität, Zuverlässigkeit und Vollständigkeit der Informationen.
						Haftungsansprüche gegen den Autor wegen Schäden materieller oder immaterieller Art, welche aus dem Zugriff oder der Nutzung bzw. Nichtnutzung der veröffentlichten Informationen, durch Missbrauch der Verbindung oder durch technische Störungen entstanden sind, werden ausgeschlossen.
						Alle Angebote sind unverbindlich. Der Autor behält es sich ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.</p>

						&nbsp;
						<h3>Haftung für Links</h3>
						<p>Verweise und Links auf Webseiten Dritter liegen ausserhalb unseres Verantwortungsbereichs Es wird jegliche Verantwortung für solche Webseiten abgelehnt. Der Zugriff und die Nutzung solcher Webseiten erfolgen auf eigene Gefahr des Nutzers oder der Nutzerin.</p>

						&nbsp;
						<h3>Urheberrechte</h3>
						<p>Die Urheber- und alle anderen Rechte an Inhalten, Bildern, Fotos oder anderen Dateien auf der Website gehören ausschliesslich der Firma Hotel Ambassador AG oder den speziell genannten Rechtsinhabern. Für die Reproduktion jeglicher Elemente ist die schriftliche Zustimmung der Urheberrechtsträger im Voraus einzuholen.</p>
					<?php elseif ( ICL_LANGUAGE_CODE === 'en' ) : ?>
						<h3>Contact Address</h3>
						<p>Hotel Ambassador<br>
						Spissstrasse 10<br>
						CH - 3920 Zermatt</p>

						&nbsp;
						<h3>Disclaimer</h3>
						<p>The author assumes no liability whatsoever with regard to the correctness, accuracy, topicality, reliability and completeness of the information provided.
						Liability claims against the author for material or immaterial damages resulting from access to or use or non-use of the published information, misuse of the connection or technical faults are excluded.
						All offers are non-binding. Parts of the pages or the complete publication including all offers and information might be extended, changed or partly or completely deleted by the author without separate announcement.</p>

						&nbsp;
						<h3>Liability for links</h3>
						<p>References and links to third party websites are outside our area of responsibility. We decline any responsibility for such websites. Access and use of such websites is at the user's own risk.</p>

						&nbsp;
						<h3>Copyrights</h3>
						<p>The copyrights and all other rights to content, images, photos or other files on the website belong exclusively to Hotel Ambassador Ltd. or the specifically named holders of rights. For the reproduction of any elements, the written consent of the copyright holders must be obtained in advance.</p>
					<?php elseif ( ICL_LANGUAGE_CODE === 'fr' ) : ?>
						<h3>Adresse de contact</h3>
						<p>Hôtel Ambassador<br>
						Spissstrasse 10<br>
						CH - 3920 Zermatt</p>

						&nbsp;
						<h3>Disclaimer</h3>
						<p>L'auteur n'assume aucune responsabilité quant à l'exactitude, la précision, l'actualité, la fiabilité et l'exhaustivité des informations fournies.
						Les recours en responsabilité contre l'auteur pour des dommages matériels ou immatériels résultant de l'accès aux informations publiées, de leur utilisation ou de leur non-utilisation, d'une mauvaise utilisation de la connexion ou de défauts techniques sont exclus.
						Toutes les offres sont sans engagement. Des parties de pages ou la publication complète, y compris toutes les offres et informations, peuvent être étendues, modifiées ou partiellement ou totalement supprimées par l'auteur sans annonce séparée.</p>

						&nbsp;
						<h3>Responsabilité pour les liens</h3>
						<p>Les références et les liens vers des sites web tiers ne relèvent pas de notre responsabilité, et nous déclinons toute responsabilité quant à ces sites. L'accès et l'utilisation de ces sites web se font aux risques et périls de l'utilisateur.</p>

						&nbsp;
						<h3>Droits d'auteur</h3>
						<p>Les droits d'auteur et tous les autres droits sur le contenu, les images, les photos ou les autres fichiers du site web appartiennent exclusivement à l'Hotel Ambassador Ltd. ou aux détenteurs de droits spécifiquement nommés. Pour la reproduction de tout élément, le consentement écrit des détenteurs des droits d'auteur doit être obtenu au préalable.</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<?php
endwhile;

get_footer();
