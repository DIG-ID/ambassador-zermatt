<?php
// Languages.
$post_lang = apply_filters( 'wpml_post_language_details', null, get_the_ID() );
$lang      = ! empty( $post_lang['language_code'] ) ? $post_lang['language_code'] : 'fr';
?>
		<footer class="footer-digid">
			<div class="container container-partners">
				<div class="row justify-content-center align-items-center row-partners">
					<div class="col-5 col-md-2 partner">
						<img src="/wp-content/uploads/2023/11/thefork-black.svg" alt="the fork, a tripadvisor company" style="width: 100%;max-width: 190px;">
					</div>
					<div class="col-5 col-md-2 partner">
						<img src="/wp-content/uploads/2023/11/tc-2022-ll-blackmin.svg" style="max-height: 115px;">
					</div>
					<div class="col-5 col-md-2 partner">
						<a class="badge_award" href='https://www.kayak.de/Zermatt-Hotels-Hotel-Ambassador-Zermatt.134275.ksp' target='_blank' ><img src='https://content.r9cdn.net/seo-res/badges/v4/DARK_MEDIUM_TRAVEL_AWARDS.png' style="max-height: 115px;"/></a>
					</div>
					<div class="col-5 col-md-2 partner">
						<!-- TrustYou Widget --> <iframe src="https://api.trustyou.com/hotels/37cbf743-49b8-46e9-b1a6-ea26577395f0/seal.html?key=63fc125c-2c8e-4473-a176-3ea27c63be70&size=l&scale=5" allowtransparency="true" frameborder="0" scrolling="no" height="101px" width="125px"> </iframe> <!-- /TrustYou Widget --> 
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-2 footer-digid-widget">
						<span class="footer-digid-widget--title"><?php _e( 'Find us' ); ?></span><br/>
						Hotel Ambassador<br/>
						Spissstrasse 10<br/>
						CH - 3920 Zermatt
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 contact-details footer-digid-widget">
						<span class="footer-digid-widget--title"><?php _e( 'Contact us' ); ?></span><br/>
						<span>T</span> <a href="tel:+41279662611">+41 27 966 26 11</a><br/>
						<span>E</span> 
						<?php
						$content = "info@ambassadorzermatt.com";
						// with this values the link text will be replaced by 'example', otherwise set $args = array();
						$args = array( 'alt_linktext' => 'info@ambassadorzermatt.com', 'opt_linktext' => 1 );
						echo ( function_exists( 'encryptx' ) )? encryptx( $content, $args ) : $content;
						?>
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-2 contact-details footer-digid-widget">
						<span class="footer-digid-widget--title"><?php _e( 'Links' ); ?></span><br/>
						<?php if ( ICL_LANGUAGE_CODE == 'de' ) : ?>
							<a href="https://www.ambassadorzermatt.com/impressum/">Impressum</a><br/>
							<a href="https://www.ambassadorzermatt.com/datenschutzhinweis/">Datenschutzhinweis</a><br/>
						<?php elseif ( ICL_LANGUAGE_CODE == 'en' ) : ?>
							<a href="https://www.ambassadorzermatt.com/en/imprint/">Imprint</a><br/>
							<a href="https://www.ambassadorzermatt.com/en/data-protection-notice/">Data protection notice</a><br/>
						<?php elseif ( ICL_LANGUAGE_CODE == 'fr' ): ?>
							<a href="https://www.ambassadorzermatt.com/fr/mentions-legales/">Mentions légales</a><br/>
							<a href="https://www.ambassadorzermatt.com/fr/avis-sur-la-protection-des-donnees/">Avis sur la protection des données</a><br/>
						<?php endif; ?>
					</div>
					<!-- <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 footer-social">
						<img src="/wp-content/uploads/2022/05/tc-2022-ll-transparent-bg-1.svg" style="width: 87px;float: left;">
						<a class="badge_award" href='https://www.kayak.de/Zermatt-Hotels-Hotel-Ambassador-Zermatt.134275.ksp' target='_blank' style="float:left;margin: 0 15px;"><img height="130px" src='https://content.r9cdn.net/seo-res/badges/v4/DARK_MEDIUM_TRAVEL_AWARDS.png'/></a>
						<iframe src="https://api.trustyou.com/hotels/37cbf743-49b8-46e9-b1a6-ea26577395f0/seal.html?key=63fc125c-2c8e-4473-a176-3ea27c63be70&size=l&scale=5" allowtransparency="true" frameborder="0" scrolling="no" height="101px" width="125px" style="float:left;"> </iframe>
					</div> -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-2 footer-digid-widget">
						<a style="border-radius: 0px!important;border:0px!important;" href="http://eepurl.com/g35BeL" class="btn newsletter-btn" target="_blank">Newsletter</a><br><br><br>
						<a href="https://www.facebook.com/pages/Hotel-Ambassador-Zermatt/213432722020893" target="_blank" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/ambassadorzermatt/" target="_blank" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col">
						<p class="copyright">
							<?php
							$y = date( 'Y' );
							printf(
								esc_html__( 'Urheberrecht &copy; %d Ambassador Zermatt', 'digid' ),
								esc_html( $y )
							);
							?>
						</p>
					</div>
				</div>
			</div>
		</footer>
		<nav id="menu-mobile">
			<ul>
				<?php
				// Menus.
				$mmenu = array( wp_get_nav_menu_items( 'Main Menu - ' . $lang ), wp_get_nav_menu_items( 'Sub Menu - ' . $lang ) );
				//var_dump( $menu );
				$remasterizeMMenu = array();

				// Parse Menu Mobile.
				foreach( $mmenu as $m => $aMenu ) {
					$i = 0;
					foreach( $aMenu as $m => $item ) {
						// Parent.
						if ( icl_object_id( $item->menu_item_parent, 'page' ) == 0 ) {
							$remasterizeMMenu[$item->ID] = array( 'parent' => array( 'url' => $item->url, 'title' => $item->title ),
								'active' => '',
								'active-as-child' => '',
								'children' => array(),
							);
							if ( icl_object_id( $post->post_parent, 'page' ) == icl_object_id( $item->object_id, 'page' )|| icl_object_id( $post->ID, 'page' ) == icl_object_id( $item->object_id, 'page' ) ){
								$remasterizeMMenu[$item->ID]['active'] = 'active';
								// Repeating current/parent item at the top of the potential child list (if any).
								$remasterizeMMenu[$item->ID]['active-as-child'] = 'active selected';
							}
						}
						// Child.
						else {
							$remasterizeMMenu[$item->menu_item_parent]['children'][$item->ID] = array( 'url' => $item->url, 'title' => $item->title, 'active' => '' );
							if(icl_object_id($post->ID, 'page') == icl_object_id($item->object_id, 'page')){
								$remasterizeMMenu[$item->menu_item_parent]['children'][$item->ID]['active'] = 'active';
								$remasterizeMMenu[$item->menu_item_parent]['active-as-child'] = '';
							}
						}
					}
				}
				foreach ( $remasterizeMMenu as $mID => $menuItem ) {
					$menuItemHTML = '<li id="li-'.$item->ID.'" class="item '.$menuItem['active'].'">';
					// Do we have Children?
					$childList = '';
					if ( count( $menuItem['children'] ) > 0 ) {
						// Check validity of each.
						foreach ( $menuItem['children'] as $cID => $child ) {
							//'.$child['active'].'
							$childList.= '<li class="item child-item "><a href="'.$child['url'].'" class="'.$child['active'].'">'.$child['title'].'</a></li>'."\n";
						}
					}
					// We Have one or some child valid.
					if ( $childList != '' ) {
						// $itemItSelf = '<li class="item child-item '.$menuItem['active-as-child'].' itemItself"><a href="'.$menuItem['parent']['url'].'" class="'.$menuItem['parent']['active'].'">'.$menuItem['parent']['title'].'</a></li>';
						$itemItSelf = '';
						$menuItemHTML.= '<span>'.$menuItem['parent']['title'].'</span>'.'<ul class="sub-menu">'.$itemItSelf.$childList.'</ul>'."\n";
					}
					// '.$menuItem['parent']['active-as-child'].'
					else $menuItemHTML.= '<li><a href="'.$menuItem['parent']['url'].'" class="'.$menuItem['parent']['title'].'</a></li>';
					$menuItemHTML.= '</li>'."\n";

					// Print Element.
					echo $menuItemHTML;
				}

				do_action( 'wpml_add_language_selector' );
				?>
				<!--<div id="label-hotel-home-mobile"><img src="https://www.ambassadorzermatt.com/wp-content/uploads/2020/06/cleansafehotellabel.png"></div>
				<div id="label-hotel-restaurants-mobile"><img src="https://www.ambassadorzermatt.com/wp-content/uploads/2020/06/cleansaferestaurantlabel.png"></div>
				<div id="label-hotel-restaurants-mobile"><img src="https://www.ambassadorzermatt.com/wp-content/uploads/2020/06/cleansafewellnesslabel.png"></div>-->
			</ul>
		</nav>
		<?php wp_footer(); ?>
	</body>
</html>
