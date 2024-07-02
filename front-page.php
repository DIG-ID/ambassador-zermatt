<?php 
get_header();
while ( have_posts() ) :
	the_post();
	?>
	<div class="newintro container">
		<div class="row">
			<div class="col-md-12">
				<p class="newintro-text">
				<?php if(ICL_LANGUAGE_CODE=='de'): ?>
						Es gibt viele Gründe, Zermatt zu besuchen. Ganz egal, welcher davon Sie zur Perle der Alpen führt: Wir stellen sicher, dass es Ihnen an nichts fehlt. Entdecken Sie unsere Sonderangebote und lassen Sie sich begeistern!
				<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
						There are many reasons to visit Zermatt. No matter which one brings you to the Pearl of the Alps: We’re here to make sure you can fully enjoy your trip. Discover our special offers and let us inspire you!
				<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
						Il existe de nombreuses raisons de visiter Zermatt. Peu importe laquelle vous amène à la Perle des Alpes : Nous ferons en sorte que vous ne manquiez de rien. Découvrez nos offres spéciales et laissez-nous vous inspirer !
				<?php endif; ?>		
				</p>
			</div>
		</div>
		<div class="row newintro-items">
			<a href="<?php if(ICL_LANGUAGE_CODE=='de'): ?>
					https://www.ambassadorzermatt.com/familienurlaub-im-winter-in-zermatt/
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
					https://www.ambassadorzermatt.com/en/family-holiday-in-winter-in-zermatt/
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
					https://www.ambassadorzermatt.com/fr/vacances-en-famille-en-hiver-a-zermatt/
			<?php endif; ?>"><div class="col-12 col-sm-6 col-lg-3 intro-a-blocks" style="background-image:url('/wp-content/uploads/2021/11/familie-ambassador-s.jpg');"><span>
			<?php if(ICL_LANGUAGE_CODE=='de'): ?>
			Familienurlaub im Winter
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
					Family holiday in winter
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
					Vacances en famille en hiver
			<?php endif; ?>
			</span></div></a>

			<a href="<?php if(ICL_LANGUAGE_CODE=='de'): ?>
					https://www.ambassadorzermatt.com/winteraktivitaeten/
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
					https://www.ambassadorzermatt.com/en/winter-activities/
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
					https://www.ambassadorzermatt.com/fr/activites-dhiver/
			<?php endif; ?>"><div class="col-12 col-sm-6 col-lg-3 intro-a-blocks" style="background-image:url('/wp-content/uploads/2021/11/aktiv-ambassador-s.jpg');"><span>
			<?php if(ICL_LANGUAGE_CODE=='de'): ?>
			Winteraktivitäten
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
					Winter activities
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
					Activités d'hiver
			<?php endif; ?>
			</span></div></a>

			<a href="<?php if(ICL_LANGUAGE_CODE=='de'): ?>
					https://www.ambassadorzermatt.com/ski-snowboard-in-zermatt/
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
					https://www.ambassadorzermatt.com/en/ski-snowboard-in-zermatt/
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
					https://www.ambassadorzermatt.com/fr/ski-et-snowboard-a-zermatt/
			<?php endif; ?>"><div class="col-12 col-sm-6 col-lg-3 intro-a-blocks" style="background-image:url('/wp-content/uploads/2021/11/ski-ambassador-s.jpg');"><span>
			<?php if(ICL_LANGUAGE_CODE=='de'): ?>
					Ski & Snowboard
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
					Ski & Snowboard
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
					Ski et snowboard
			<?php endif; ?>
			</span></div></a>

			<a href="<?php if(ICL_LANGUAGE_CODE=='de'): ?>
					https://www.ambassadorzermatt.com/winterwandern-in-zermatt/
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
					https://www.ambassadorzermatt.com/en/winter-hiking-in-zermatt/
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
					https://www.ambassadorzermatt.com/fr/randonnee-hivernale-a-zermatt/
			<?php endif; ?>"><div class="col-12 col-sm-6 col-lg-3 intro-a-blocks" style="background-image:url('/wp-content/uploads/2021/11/winterwandern-s.jpg');"><span>
			<?php if(ICL_LANGUAGE_CODE=='de'): ?>
					Winterwandern
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
					Winter hiking
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
					Randonnée hivernale
			<?php endif; ?>
			</span></div></a>
		</div>
	</div>
	<?php
	// Fields.
	$entity_fields = get_fields();

	// Content Composer.
	digid_home_content_composer( $entity_fields );

	// Page Bottom.
	if ( array_key_exists( 'page_bottom', $entity_fields ) && is_array( $entity_fields['page_bottom'] ) && count( $entity_fields['page_bottom'] ) > 0 ){

		$page_bottom = $entity_fields['page_bottom'];
		$bg_image    = '';

		if ( '' !== $page_bottom['background_image'] ) {
			$bg_image = wp_get_attachment_image_src( $entity_fields['page_bottom']['background_image'], 'gallery-full' );
			$bg_image = 'style="background-image:url(' . reset( $bg_image ) . ');"';
		}
		?>
		<div class="section home-section-bottom" <?php echo $bg_image; ?>>
			<div class="row no-gutters">
				<div class="col-12">
					<div class="text-block">
						<?php if ( '' !== $page_bottom['title'] ) { ?>
							<span class="hp-bt-title"><?php echo esc_html( $page_bottom['title'] ); ?></span>
						<?php } ?> 
						<?php if ( '' !== $page_bottom['text'] ) { ?>
							<span class="hp-bt-text"><?php echo wp_kses_post( wpautop( $page_bottom['text'] ) ); ?></span>
						<?php } ?>
						<?php if ( is_array( $page_bottom['link'] ) && count( $page_bottom['link'] ) > 0 ) { ?>
							<span class="hp-bt-link">
								<a href="<?php echo esc_url( $page_bottom['link']['url'] ); ?>" target="<?php echo esc_attr( $page_bottom['link']['target'] ); ?>" class="btn"><?php echo esc_html( $page_bottom['link']['title'] ); ?></a>
							</span>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
endwhile;
get_footer();
