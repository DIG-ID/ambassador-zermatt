<?php 
get_header();
while ( have_posts() ) : the_post();
	?>
	<style>
	.newintro {width: 100%;display: block;position: relative;}
	.newintro .row {display: block; padding: 0;width: 83%;margin: 0 auto;overflow: hidden;position: relative;}
	.newintro-title{color: #807B73;font-family: "Playfair Display";margin-bottom: 24px;font-size: 32px;line-height: 48px;font-weight: bold;hyphens: auto;}
	.newintro-text {text-align: center;max-width: 682px;margin:0 auto;padding:100px 0;}
	.newintro-items .intro-a-blocks{width:23%;height:248px;float:left;display: block;text-align: center; padding: 130px 0;color: #FFFFFF;font-family: "Work Sans";font-size: 28px;line-height: 28px;background-repeat: no-repeat;background-position: center;}
	.newintro-items .intro-a-blocks::before{content: "";position: absolute;top: 0; left: 0;width: 100%; height: 100%;left: 50%;background:transparent;transform: translateX(-50%);max-width: 334px;}
	.intro-a-blocks span{z-index: 8;position: relative;}
	.newintro-items > a:not(:last-child) .intro-a-blocks{margin-right: 15px;}
	.newintro-items .intro-a-blocks > span{visibility: visible;}
	.newintro-items .intro-a-blocks::before{background:rgba(0,0,0,0.5);}
	.newintro-items .intro-a-blocks::before{transition: 0.2s;}
	@media screen and (max-width: 996px){
		.newintro-items .intro-a-blocks{width: 100%;max-width: none;margin-bottom:20px;}
	}
</style>

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
	# Fields
	$entityFields = get_fields();
	
	# Content Composer
	ergopix_home_content_composer($entityFields);
	
	# Page Bottom
	if(array_key_exists('page_bottom', $entityFields) && is_array($entityFields['page_bottom']) && count($entityFields['page_bottom']) > 0){
		
		$pageBottom = $entityFields['page_bottom'];
		
		$bgImage = '';
		if($pageBottom['background_image'] != ''){
			$bgImage = wp_get_attachment_image_src($entityFields['page_bottom']['background_image'], 'gallery-full');
			$bgImage = 'style="background-image:url('.reset($bgImage).');"';
		}
	?>

	<div class="section home-section-bottom" <?php echo $bgImage; ?>>
		<div class="row no-gutters">
			<div class="col-12">
				<div class="text-block">
					<?php if($pageBottom['title'] != '' ) { ?>
						<span class="hp-bt-title"><?php echo $pageBottom['title']; ?></span>
					<?php } ?>
					<?php if($pageBottom['text'] != '' ) { ?>
						<span class="hp-bt-text"><?php echo wpautop($pageBottom['text']); ?></span>
					<?php } ?>
					<?php if(is_array($pageBottom['link']) && count($pageBottom['link']) > 0 ) { ?>
						<span class="hp-bt-link">
							<a href="<?php echo $pageBottom['link']['url']; ?>" target="<?php echo $pageBottom['link']['target']; ?>" class="btn"><?php echo $pageBottom['link']['title']; ?></a>
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
