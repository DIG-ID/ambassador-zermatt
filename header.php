<?php
// Languages
$lang = 'fr';
if ( function_exists( 'icl_get_languages' ) ) {
	$languages = icl_get_languages( 'skip_missing=0&orderby=name&order=asc&link_empty_to=str' );
	foreach ( $languages as $abrv => $language ) {
		// Active?
		if ( 1 == $language['active'] ) {
			$lang = $abrv;
			break;
		}
	}
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="facebook-domain-verification" content="v1p8aczbsqycbj3beuw4xf7jd7d5s1" />
	<meta name="google-site-verification" content="CcjyYefqoHP6fakebZxrhLnhLMCEP-dNOXCKJWmSka8" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/site.webmanifest">
	<title><?php wp_title(); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,700i|Work+Sans" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/fontawesome/css/font-awesome.min.css" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/slick/slick-theme.css">
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slick/slick.js" type="text/javascript" charset="utf-8"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=G-19TPK24ZR7"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-19TPK24ZR7"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('set', {
				'linker': {
					'accept_incoming': true,
					'domains': ['www.simplebooking.it']
				},
				'anonymize_ip': true,
					'transport_type': 'beacon'
		});
		gtag('config', 'G-19TPK24ZR7');
	</script>

	<script type="text/javascript">var $ = jQuery;</script>
	<!--Start of Zendesk Chat Script-->
	<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){
		z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
		$.src='https://v2.zopim.com/?5zNxPNIi7TlyYthFmKw7I5kkA6OACmr7';z.t=+new Date;$.
		type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
	</script>
	<!--End of Zendesk Chat Script-->
	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)   {if(f.fbq) return;n=f.fbq=function() {n.callMethod?   n.callMethod.apply(n,arguments) :n.queue.push(arguments) };  if(!f._fbq) f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';  n.queue=[];t=b.createElement(e) ;t.async=!0;  t.src=v;s=b.getElementsByTagName(e) [0];  s.parentNode.insertBefore(t,s) }(window, document,'script',  'https://connect.facebook.net/en_US/fbevents.js') ;  fbq('init', '290390748774757') ;  fbq('track', 'PageView') ;</script> <noscript> <img height="1" width="1" style="display:none"  src="https://www.facebook.com/tr? id=290390748774757&ev=PageView&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

	<script type="text/javascript">
		(function (i, s, o, g, r, a, m) {
			i['SBSyncroBoxParam'] = r; i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date(); a = s.createElement(o),
			m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://cdn.simplebooking.it/search-box-script.axd?IDA=5288','SBSyncroBox');

		SBSyncroBox({
				CodLang: '<?php echo strtoupper( $lang ); ?>',
				Styles: {
				Theme: 'light-pink',
				CustomColor: "#000000",
				CustomButtonBGColor: "rgba(0,0,0,0.2)",
				CustomButtonHoverBGColor: "rgba(0,0,0,0.1)",
				CustomIconColor: "rgba(0,0,0,0.2)",
				CustomLinkColor: "rgba(0,0,0,0.6)"
			}
		});

		SBSyncroBox({
			CodLang: '<?php echo strtoupper( $lang ); ?>',
			Currency: 'CHF',
			MainContainerId: 'sb-container-bar',
			Labels: {
				NumAdults: {'DE':'Pers.'},
			},
			Styles: {
				Theme: 'light-pink',
				CustomColor: "#eeeeee",
				CustomLabelColor:"#eeeeee",
				CustomBGColor: "transparent",
				CustomButtonColor: "#eeeeee",
				CustomButtonBGColor: "#9e0e0e",
				CustomIntentSelectionDaysBGColor: "#9e0e0e",
				CustomIntentSelectionColor: "#eeeeee",
				CustomButtonHoverBGColor:"#9e0e0e",
				CustomLabelHoverColor:"#eeeeee",
				CustomLinkColor:"#eeeeee",
				CustomBoxShadowColorFocus:"#6e6e70",
				CustomAddRoomBoxShadowColor:"#6e6e70",
				CustomAccentColor:"#eeeeee",
				CustomFieldBackgroundColor:"#6e6e70",
				CustomSelectedDaysColor:"#9e0e0e",
				CustomCalendarBackgroundColor:"#807B73",
				CustomWidgetColor:"#eeeeee",
				CustomWidgetBGColor:"#807B73",
				CustomWidgetElementHoverColor:"#000",
				CustomWidgetElementHoverBGColor:"#000",
				CustomBoxShadowColor:"#6e6e70",
				CustomBoxShadowColorHover:"#6e6e70",
				CustomColorHover:"#eeeeee",
				CustomIconColor:"#eeeeee",
				CustomAccentColorHover:"#eeeeee"
			}
		});
	</script>
	<script type="text/javascript">
		/*$(function() { 
			$(document).click(function() {
				$('#covid-button').removeClass('opened');
				$('#covid-text').animate({left: '-705px'});
				$('#covid-text').fadeOut(600);
			});
			$('#covid-button').click(function(){
				$(this).addClass('opened');
				$('#covid-text').fadeIn();
				$('#covid-text').animate({left: '0px'});
				return false;
			});
		});*/
	</script>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper">
		<!--<div class="header-mobile d-block d-lg-none d-md-none hidden-print">-->
		<div class="header-mobile d-block d-lg-none hidden-print">
			<div style="display:table;width:100%;">
				<div style="display:table-cell">
					<a class="logo" href="<?php echo get_home_url('/'); ?>">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo" width="150" />
					</a>
				</div>
				<div style="display:table-cell;text-align:right;vertical-align: middle;">
					<a id="hamburger-mobile" href="#menu-mobile" class="hamburger hamburger-mobile">
						<span class="top-bar"></span>
						<span class="middle-bar"></span>
						<span class="bottom-bar"></span>
					</a>
				</div>
			</div>
		</div>
		<?php
		global $post, $entityFields;
		$bg = '';
		$imageBg = get_template_directory_uri() . '/images/default-header.png';
		if ( ! is_404() ){
			// Get Fields
			$entityFields = get_fields();
			$headerTitle  = $post->post_title;
			if ( is_front_page() ) {
				// Get Random Headers if exists
				$randomHeaders = get_field( 'random_headers' );
				if (is_array( $randomHeaders ) && array_key_exists( 'header', $randomHeaders ) && count( $randomHeaders['header'] ) > 0 ) {
					$headers = $randomHeaders['header'];
					shuffle( $headers );
					$header = reset( $headers );
					$imageBg = @reset( wp_get_attachment_image_src( $header['image'], 'gallery-full') );
					$headerTitle = $header['title'];
					//#[image] => 98,
					//#[link] =>
				}
			} elseif ( is_page() ) {
				$imageBg = @reset( wp_get_attachment_image_src( get_post_thumbnail_id(), 'gallery-full' ) );
			} elseif ( is_single() && $post->post_type == 'post' ) {
				// $imageBg = @reset(wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'));
			}
		}
		if ( $imageBg != '' ) {
			$bg = ' style="background:linear-gradient(0deg, rgba(0, 0, 0, .45) 0%, rgba(0, 0, 0, .297) 30%, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0) 60%, rgba(0, 0, 0, .297) 80%, rgba(0, 0, 0, .45) 100%), url(\'' . $imageBg . '\');"';
			if ( is_front_page() ) {
				$bg = ' style="background: url(\'' . $imageBg . '\');"';
			}
		}
		?>
		<header <?php echo $bg; ?>>
			<div class="main-header">
				<div class="header-menu-wrapper container-fluid">
					<div class="header-menu">
						<div style="display:table-cell;text-align:right;vertical-align: middle;" class="big-mac">
							<a id="hamburger" href="#hamburger" class="hamburger">
								<span class="top-bar"></span>
								<span class="middle-bar"></span>
								<span class="bottom-bar"></span>
							</a>
						</div>
						<div class="header-languages">
							<ul>
								<?php
								// TEMP
								// http://shop.e-guma.ch/ambassador-zermatt/fr/bons-cadeaux
								$bookingUrlLg = 'https://www.simplebooking.it/ibe/hotelbooking/search?hid=5288&lang=fr';
								$bookingURL   = array(
									'fr' => 'https://www.simplebooking.it/ibe/hotelbooking/search?hid=5288&lang=fr',
									'en' => 'https://www.simplebooking.it/ibe/hotelbooking/search?hid=5288&lang=en',
									'de' => 'https://www.simplebooking.it/ibe/hotelbooking/search?hid=5288&lang=de',
								);

								// Languages
								$languages = icl_get_languages( 'skip_missing=0&orderby=custom&link_empty_to=str' );
								foreach ( $languages as $abrv => $language ){
									// Active?
									$selected = '';
									if ( $language['active'] == 1) {
										$selected     = ' selected';
										$bookingUrlLg = $bookingURL[$abrv];
									}
									// No translation available
									$noTranslation = '';
									if ( $language['url'] == 'str' ) {
										$noTranslation = ' disabled';
									}
									echo '<li class="menu-lang"' . $selected.$noTranslation . '><a href="' . $language['url'] .'">' . $abrv . '</a></li>';
								}
								?>
							</ul>
						</div>
					</div>
					<div class="header-logo">
						<a class="logo" href="<?php echo get_home_url('/'); ?>">
							<img class="img-responsive logo-neg" src="<?php echo get_template_directory_uri(); ?>/images/logo-neg.svg" alt="Logo" width="350" />
							<img class="img-responsive logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo" width="350" />
						</a>
					</div>
					<div class="header-booking">
						<?php if ( ICL_LANGUAGE_CODE === 'de' ) { ?><a href="https://module.lafourchette.com/de_CH/module/750984-f9eb6" data-fancybox data-type="iframe"
	data-preload="false" data-width="580" data-height="640" class="btn">Tisch reservieren</a> <?php } ?>
						<?php if ( ICL_LANGUAGE_CODE === 'en' ) { ?><a href="https://module.lafourchette.com/en_GB/module/750984-f9eb6" data-fancybox data-type="iframe"
	data-preload="false" data-width="580" data-height="640" class="btn">Book a table</a><?php } ?>
						<?php if ( ICL_LANGUAGE_CODE === 'fr' ) { ?><a href="https://module.lafourchette.com/fr_CH/module/750984-f9eb6" data-fancybox data-type="iframe"
	data-preload="false" data-width="580" data-height="640" class="btn">Réserver une table</a><?php } ?>

						<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="https://shop.e-guma.ch/ambassador-zermatt/de/gift-vouchers" class="btn btn-secondary" target="_blank">Gutscheine</a><?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="https://shop.e-guma.ch/ambassador-zermatt/en/gift-vouchers" class="btn btn-secondary" target="_blank">Voucher</a><?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="https://shop.e-guma.ch/ambassador-zermatt/fr/bons-cadeaux" class="btn btn-secondary" target="_blank">Bons Cadeaux</a><?php } ?>
					</div>
				</div>
			</div>
			<div class="page-header-block">
				<?php 
				if(is_front_page() && !is_404()){
					$zermattWeather = ergopix_getFormattedWeather();
					?>
						<h1><?php echo $headerTitle; ?></h1>
						<?php 
						# Weather
						if(is_array($zermattWeather)){
							?><span class="weather"><?php echo '<img src="'.get_template_directory_uri().'/images/weather/'.$zermattWeather['icon'].'.png" alt="" class="weather-icon" /><span> '.$zermattWeather['temp'].'&deg; '.date_i18n('l d F  H \h i', ( time() + 7200 ) ); ?> (UTC +1)</span></span>
							<?php
						}
						?>
						<a href="restaurant-carbon-zermatt/" class="restaurant-carbon-btn">
							<?php
							$dig_lang = apply_filters( 'wpml_current_language', null );
							switch ( $dig_lang ) :
								case 'en' :
									echo esc_html( 'NEW: RESTAURANT CARBON' );
									break;
								case 'fr':
									echo esc_html( 'NOUVEAU: RESTAURANT CARBON' );
									break;
								case 'de':
									echo esc_html( 'NEU: RESTAURANT CARBON' );
									break;
							endswitch;
							?>
							<svg width="22" height="14" viewBox="0 0 22 14" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0.213663 0.382175C0.554877 -0.0520963 1.18353 -0.127535 1.6178 0.213678L8.6178 5.71368C8.85321 5.89864 8.99337 6.17935 8.99975 6.47867C9.00614 6.77799 8.87808 7.06442 8.65077 7.25925L1.65077 13.2593C1.23145 13.6187 0.600147 13.5701 0.240725 13.1508C-0.118697 12.7315 -0.0701357 12.1002 0.34919 11.7407L6.42417 6.53361L0.38216 1.78632C-0.0521116 1.4451 -0.12755 0.816447 0.213663 0.382175ZM13.2137 0.382175C13.5549 -0.0520963 14.1835 -0.127535 14.6178 0.213678L21.6178 5.71368C21.8532 5.89864 21.9934 6.17935 21.9998 6.47867C22.0061 6.77799 21.8781 7.06442 21.6508 7.25925L14.6508 13.2593C14.2314 13.6187 13.6001 13.5701 13.2407 13.1508C12.8813 12.7315 12.9299 12.1002 13.3492 11.7407L19.4242 6.53361L13.3822 1.78632C12.9479 1.4451 12.8724 0.816447 13.2137 0.382175Z" fill="white"/>
							</svg>

						</a>
						<?php
				}
				else {
					?>
					<div class="container">
						<div class="row">
							<div class="col-md-11 offset-md-1">
								<h1><?php echo $headerTitle; ?></h1>
							</div>
						</div>
					</div>
					<?php 
				} 
				?>

			</div>
			<div class="header-social">
				<div class="container reference-container">
					<div class="row">
						<div class="col-12">
							<a href="https://www.facebook.com/pages/Hotel-Ambassador-Zermatt/213432722020893" target="_blank" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="https://www.instagram.com/ambassadorzermatt/" target="_blank" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
			<?php get_template_part( 'template-parts/header-mnain' ); ?>

			<?php
			# Page Header Buttons
			if(is_array($entityFields) && array_key_exists('page_content', $entityFields) && is_array($entityFields['page_content']) && count($entityFields['page_content']) > 0) {
				
				# Parse Layouts
				foreach($entityFields['page_content'] as $l => $layout){
					
					# Header Buttons
					if($layout['acf_fc_layout'] == 'header_buttons'){
						
						# Do we have buttons?
						if(array_key_exists('buttons', $layout) && is_array($layout['buttons']) && count($layout['buttons']) > 0){
							?>
							<div class="header-page-buttons">
								<div class="container">
									<div class="row">
										<div class="col-md-11 offset-md-1">
											<?php 
											foreach($layout['buttons'] as $b => $btn){
												# Get Link
												$link = '#';
												$target = '';
												if(is_array($btn['link'])){
													if($btn['link']['url'] != '') $link = $btn['link']['url'];
													if($btn['link']['target'] != '') $target = ' target="'.$btn['link']['target'].'"';
													
													echo '<a href="'.$link.'"'.$target.'>'.$btn['link']['title'].'</a>';
												}
												
											}
											?>
										</div>
									</div>
								</div>
							</div>
							<?php 
						}
						
					}
					
				} 
			
			}
			?>
		</header>
	</div>

		<?php /*
	if ( is_front_page() ) {
			?>
			<div id="label-hotel-home"><img src="https://www.ambassadorzermatt.com/wp-content/uploads/2020/06/cleansafehotellabel.png"></div>
			<?php
	}
	?>
	<?php 
	if ( is_page(array(898,899,900)) ) {
			?>
			<div id="label-hotel-rooms"><img src="https://www.ambassadorzermatt.com/wp-content/uploads/2020/06/cleansafehotellabel.png"></div>
			<?php
	}
	?>
		<?php 
	if ( is_page(array(192,539,34,187,36,531)) ) {
			?>
			<div id="label-hotel-restaurants"><img src="https://www.ambassadorzermatt.com/wp-content/uploads/2020/06/cleansaferestaurantlabel.png"></div>
			<?php
	}
	?>
			<?php 
	if ( is_page(array(203,42,563)) ) {
			?>
			<div id="label-hotel-restaurants"><img src="https://www.ambassadorzermatt.com/wp-content/uploads/2020/06/cleansafewellnesslabel.png"></div>
			<?php
	}*/
	?>
	<style>
		#covid-button:hover{cursor: pointer;background:#ffffff!important;color:#9e0e0e!important;}
		#covid-button.opened{background:#9e0e0e!important;color:#ffffff!important;}
		#covid-button:focus{border:none;outline:0;}
		#covid-button{transition: .3s all ease-in-out;}
		#covid-text{display: none;}
		#covid-text ul{list-style-type: square;padding-left: 17px;margin-left:0;}
		#covid-text ul > li{font-size: 14px;line-height: 18px;color:#ffffff;}
		#covid-button a{color:#9e0e0e;}
		#covid-button a:hover{color:#ffffff;}
	</style>
	<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
		<?php if (is_front_page()): ?>
		<a href="https://www.ambassadorzermatt.com/luftreinigungsgeraete/" style="display: none;border:2px solid #9e0e0e;background:#9e0e0e;font-family: 'Work Sans';height: 150px;width: 45px;position:fixed;left:0px;top:400px;z-index: 99;font-size:18px;text-align: center;padding:14px 0;color:#ffffff;text-transform:uppercase;"><span style="transform: rotate(270deg);display: inline-block;white-space: nowrap;padding-top:30px;padding-bottom: 58px;letter-spacing: 2.67px;">News</span></a>
	<?php endif; ?>
	<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?>
		<?php if (is_front_page()): ?>
		<a href="https://www.ambassadorzermatt.com/en/air-purification-devices/" style="display: none;border:2px solid #9e0e0e;background:#9e0e0e;font-family: 'Work Sans';height: 150px;width: 45px;position:fixed;left:0px;top:400px;z-index: 99;font-size:18px;text-align: center;padding:14px 0;color:#ffffff;text-transform:uppercase;"><span style="transform: rotate(270deg);display: inline-block;white-space: nowrap;padding-top:30px;padding-bottom: 58px;letter-spacing: 2.67px;">News</span></a>
		<?php endif; ?>
	<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
		<?php if (is_front_page()): ?>
		<a href="https://www.ambassadorzermatt.com/fr/purificateurs-dair/" style="display: none;border:2px solid #9e0e0e;background:#9e0e0e;font-family: 'Work Sans';height: 150px;width: 45px;position:fixed;left:0px;top:400px;z-index: 99;font-size:18px;text-align: center;padding:14px 0;color:#ffffff;text-transform:uppercase;"><span style="transform: rotate(270deg);display: inline-block;white-space: nowrap;padding-top:30px;padding-bottom: 58px;letter-spacing: 2.67px;">News</span></a>
		<?php endif; ?>
	<?php } ?>
	
	
	<div id="covid-text" style="position:fixed;top:200px;width: 650px;min-height:230px;padding:20px 20px 0px 85px;background:#141414;color:#ffffff!important;z-index: 990;font-size: 16px;line-height: 18px;left:-705px;">
		<p style="font-size: 16px;line-height: 18px!important;color:#ffffff!important;font-weight: bold;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Unbeschwerte Tage in Zermatt<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Carefree days in Zermatt<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Des vacances sans souci à Zermatt<?php } ?>
		</p>
		<p style="font-size: 16px;line-height: 18px;color:#ffffff;">	
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
			Die Gesundheit unserer Gäste und Mitarbeiter hat bei uns höchste Priorität.<br><br>
			Bitte beachten Sie, dass wir aufgrund der aktuellen Situation <b>für die Wintersaison 2021/2022 im gesamten Hotel Ambassador</b>, für alle ab 16 Jahren, <b>die 2G-Regel (geimpft oder genesen)</b> eingeführt haben.<br><br>
			<b>Dank dieser Regelung können wir Ihnen entspannte Tage in unserem Hotel und einen erholsamen Urlaub in Zermatt garantieren.</b><br><br>
			Bei Fragen stehen wir Ihnen jederzeit zur Verfügung.
			<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>
			The health of our guests and staff is our highest priority. <br><br>
			Please note that due to the current situation, <b>we have introduced the 2G rule (vaccinated or recovered) in the entire Hotel Ambassador for the winter season 2021/2022</b>, for everyone aged 16 and over.<br><br>
			<b>Thanks to this rule, we can guarantee you relaxed days in our hotel and a restful holiday in Zermatt.</b><br><br>
			If you have any questions, please do not hesitate to contact us.
			<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
			La santé de nos hôtes et de nos collaborateurs est notre priorité absolue. <br><br>
			Veuillez noter qu'en raison de la situation actuelle, nous avons introduit <b>la règle des 2G (vaccinés ou guéris) pour la saison d'hiver 2021/2022 dans tout l'Hôtel Ambassador</b>, pour toute personne à partir de 16 ans.<br><br>
			<b>Grâce à cette réglementation, nous pouvons vous garantir des jours de détente dans notre hôtel et des vacances reposantes à Zermatt.</b><br><br>
			Si vous avez des questions, nous sommes volontiers à votre entière disposition.
			<?php } ?>
		</p>
		<p style="font-size: 16px;line-height: 18px!important;color:#ffffff;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
			Wir danken Ihnen für Ihr Verständnis und freuen uns auf Ihren Besuch.<br>
			Ihr Ambassador Team<br><br><br>
			
			Folgende Links sind hilfreich für alle unsere Gäste aus dem Ausland:<br><br>
			Aktuelle Informationen zur Einreise in die Schweiz: <br>
			<a href="https://www.bag.admin.ch/" target="_blank" style="color:#ffffff;text-decoration:underline!important;">https://www.bag.admin.ch/</a><br><br>
			Prüfen Sie hier die Gültigkeit Ihres Zertifikates in der Schweiz:<br>
			<a href="https://travelcheck.admin.ch/home" target="_blank" style="color:#ffffff;text-decoration:underline!important;">https://travelcheck.admin.ch/home</a><br><br>
			Wandeln Sie hier Ihr Covid-19 Zertifikat zu einem Schweizer Zertifikat um:<br>
			<a href="www.Covidcertificate-form.admin.ch" target="_blank" style="color:#ffffff;text-decoration:underline!important;">www.Covidcertificate-form.admin.ch</a><br><br>
			<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>
			We thank you for your understanding and look forward to your visit.<br>
			Your Ambassador Team<br><br><br>
			
			The following links are helpful for all our guests from abroad:<br><br>
			Current information on entering Switzerland:  <br>
			<a href="https://www.bag.admin.ch/" target="_blank" style="color:#ffffff;text-decoration:underline!important;">https://www.bag.admin.ch/</a><br><br>
			Check the validity of your certificate in Switzerland here:<br>
			<a href="https://travelcheck.admin.ch/home" target="_blank" style="color:#ffffff;text-decoration:underline!important;">https://travelcheck.admin.ch/home</a><br><br>
			Convert your Covid-19 certificate to a Swiss certificate here: <br>
			<a href="www.Covidcertificate-form.admin.ch" target="_blank" style="color:#ffffff;text-decoration:underline!important;">www.Covidcertificate-form.admin.ch</a><br><br>
			<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
			Nous vous remercions de votre compréhension et nous réjouissons de vous accueillir prochainement.<br>
			Votre équipe Ambassador<br><br><br>
			
			Les liens suivants sont utiles pour tous nos hôtes venant de l'étranger :<br><br>
			Informations actuelles sur l'entrée en Suisse :   <br>
			<a href="https://www.bag.admin.ch/" target="_blank" style="color:#ffffff;text-decoration:underline!important;">https://www.bag.admin.ch/</a><br><br>
			Vérifiez ici la validité de votre certificat en Suisse : <br>
			<a href="https://travelcheck.admin.ch/home" target="_blank" style="color:#ffffff;text-decoration:underline!important;">https://travelcheck.admin.ch/home</a><br><br>
			Convertissez ici votre certificat Covid-19 en un certificat suisse : <br>
			<a href="www.Covidcertificate-form.admin.ch" target="_blank" style="color:#ffffff;text-decoration:underline!important;">www.Covidcertificate-form.admin.ch</a><br><br>
			<?php } ?>
		</p>
	</div>

	<div id="booking-section" style="width: 100%;position: fixed;bottom: 60px;max-height: 72px!important;z-index: 9999;">
		<style>
			@media(min-width: 767px){
				footer{height: 356px;}
				#footbar{display: none;}
				.zopim{display: none!important;}
			}
			@media(max-width: 766px){
				#booking-section, .zopim, #covid-button{display: none!important;}
				#footbar {position: fixed;background: #9e0e0e;bottom: 0px;height: 60px;width: 100%;z-index: 9999;display:flex;justify-content:center;align-items:center;}
				#iconsfixed {width: 100%;display:flex; justify-content:space-around;align-items:center;}
				#iconsfixed .btn { display: block; text-align: center; font-size:13px; border:none; padding: 10px; margin: 2px; }
				#iconsfixed .separator { display: block; height: 50px; width: 2px; background-color: #651418; }
				.pfixed {color: #ffffff;text-align: center;font-size: 22px;padding-top: 15px;}
				.zopim{display: none!important;}
				.fancybox__content {padding: 5px; }
			}
			/*html.opened #covid-button{display: none;}*/
			.header-social{visibility: hidden;}
			#sb-container-bar {max-width: 1280px;width:100%;padding: 0 84px;margin:0 auto;}
			#sb-container-bar_sb-container_sb__form-field--checkin {margin-right: 11px;}
			#sb-container-bar_sb-container_sb__form-field--checkin, #sb-container-bar_sb-container_sb__form-field--checkout{width: 48%!important;}
			#sb-container-bar .sb__form-field-label{visibility: hidden;}
			#sb-container-bar .sb-screen-m .sb__guests-rooms{padding-left: 0!important;padding-right: 14px!important;}
			#sb-container-bar .sb__footer{visibility: hidden;}
			#sb-container-bar input{transition: .3s all ease-in-out;}
			#sb-container-bar input:hover{transform: scale(1.04);}
			#sb-container-bar input,#sb-container-bar .sb-custom-field-bg-color{border-radius: 0!important;}
			#sb-container-bar .sb__guests-room select > option{background:#141414;}
		</style>
		<div id="sb-container-bar" style=""></div> 
	</div>	
	<div id="footbar" class="fixed_foot">
		<div id="iconsfixed">
			<?php if ( ICL_LANGUAGE_CODE === 'de' ) { ?><a href="https://module.lafourchette.com/de_CH/module/750984-f9eb6" data-fancybox data-type="iframe"
data-preload="false" data-height="574" class="btn">Tisch reservieren</a> <?php } ?>
			<?php if ( ICL_LANGUAGE_CODE === 'en' ) { ?><a href="https://module.lafourchette.com/en_GB/module/750984-f9eb6" data-fancybox data-type="iframe"
data-preload="false" data-height="574" class="btn">Book a table</a><?php } ?>
			<?php if ( ICL_LANGUAGE_CODE === 'fr' ) { ?><a href="https://module.lafourchette.com/fr_CH/module/750984-f9eb6" data-fancybox data-type="iframe"
data-preload="false" data-height="574" class="btn">Réserver une table</a><?php } ?>
				<span class="separator"></span>
			<a href="<?php echo $bookingUrlLg; ?>" target="_blank" class="btn">
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
	<?php if (is_front_page()) { ?>
		<!-- <div id="sb-container"></div>  -->
	<?php } ?>