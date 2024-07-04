<?php
// Languages

$lang = apply_filters( 'wpml_current_language', null );

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="facebook-domain-verification" content="v1p8aczbsqycbj3beuw4xf7jd7d5s1" />
	<meta name="google-site-verification" content="CcjyYefqoHP6fakebZxrhLnhLMCEP-dNOXCKJWmSka8" />

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon-16x16.png">
	<link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/site.webmanifest">


	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-M2H7VXR');</script>
	<!-- End Google Tag Manager -->

	<!-- Google Tag Manager -->
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
	<!-- End Google Tag Manager -->

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)   {if(f.fbq) return;n=f.fbq=function() {n.callMethod?   n.callMethod.apply(n,arguments) :n.queue.push(arguments) };  if(!f._fbq) f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';  n.queue=[];t=b.createElement(e) ;t.async=!0;  t.src=v;s=b.getElementsByTagName(e) [0];  s.parentNode.insertBefore(t,s) }(window, document,'script',  'https://connect.facebook.net/en_US/fbevents.js') ;  fbq('init', '290390748774757') ;  fbq('track', 'PageView') ;</script> <noscript> <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr? id=290390748774757&ev=PageView&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

	<!-- Start of Zendesk Chat Script -->
	<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){
		z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
		$.src='https://v2.zopim.com/?5zNxPNIi7TlyYthFmKw7I5kkA6OACmr7';z.t=+new Date;$.
		type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
	</script>
	<!-- End of Zendesk Chat Script -->

	<!-- Start of Simple Booking Script -->
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
	<!-- END of Simple Booking Script -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2H7VXR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php do_action( 'wp_body_open' ); ?>
	<?php get_template_part( 'template-parts/header', 'main', array( 'lang' => $lang ) ); ?>