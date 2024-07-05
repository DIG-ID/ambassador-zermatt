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
			/familien/
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
			/en/family-holiday-in-zermatt/ 
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
			/fr/vacances-en-famille-a-zermatt/ 
			<?php endif; ?>"><div class="col-md-3 intro-a-blocks" style="background-image:url('/wp-content/uploads/2021/07/familien.jpg ');"><span>
			<?php if(ICL_LANGUAGE_CODE=='de'): ?>
			Familien
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
			Families
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
			Familles
			<?php endif; ?>										        
			</span></div></a>

			<a href="<?php if(ICL_LANGUAGE_CODE=='de'): ?>
			/aktivurlaub/
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
			/en/active-holiday-in-zermatt/ 
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
			/fr/vacances-actives-a-zermatt/ 
			<?php endif; ?>"><div class="col-md-3 intro-a-blocks" style="background-image:url('/wp-content/uploads/2021/07/aktive.jpg ');"><span>
			<?php if(ICL_LANGUAGE_CODE=='de'): ?>
			Aktive
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
			Active
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
			Actif
			<?php endif; ?>
			</span></div></a>

			<a href="<?php if(ICL_LANGUAGE_CODE=='de'): ?>
			/mountainbiken-in-zermatt/
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
			/en/mountainbiking-in-zermatt/ 
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
			/fr/vtt-a-zermatt/ 
			<?php endif; ?>"><div class="col-md-3 intro-a-blocks" style="background-image:url('/wp-content/uploads/2021/07/mountainbike.jpg ');"><span>
			<?php if(ICL_LANGUAGE_CODE=='de'): ?>
			Mountainbike
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
			Mountainbike
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
			VTT
			<?php endif; ?>
			</span></div></a>

			<a href="<?php if(ICL_LANGUAGE_CODE=='de'): ?>
			/wandern-in-zermatt/
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
			/en/hiking-in-zermatt/ 
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
			/fr/randonnee-a-zermatt/ 
			<?php endif; ?>"><div class="col-md-3 intro-a-blocks" style="background-image:url('/wp-content/uploads/2021/07/wandern.jpg ');"><span>
			<?php if(ICL_LANGUAGE_CODE=='de'): ?>
			Wandern
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
			Hiking
			<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
			Randonnée
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
