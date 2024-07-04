<?php $lang = $args['lang']; ?>
<div class="header-menu-container">
	<div class="header-menu-content">
		<ul>
			<?php
			$main_menu         = array( wp_get_nav_menu_items( 'Main Menu - ' . $lang ) );
			$remasterize_mmenu = array();

			// Parse Menu Mobile.
			foreach ( $main_menu as $mm => $a_menu ) :
				foreach ( $a_menu as $mm => $item ) :
					// Parent.
					if ( icl_object_id( $item->menu_item_parent, 'page' ) === 0 ) :
						$remasterize_mmenu[ $item->ID ] = array(
							'parent'          => array(
								'url'    => $item->url,
								'title'  => $item->title,
							),
							'active'          => '',
							'active-as-child' => '',
							'children'        => array(),
						);
						if ( icl_object_id( $post->post_parent, 'page' ) === icl_object_id( $item->object_id, 'page' ) || icl_object_id( $post->ID, 'page' ) === icl_object_id( $item->object_id, 'page' ) ) :
							$remasterize_mmenu[ $item->ID ]['active'] = 'active';
							// Repeating current/parent item at the top of the potential child list (if any).
							$remasterize_mmenu[ $item->ID ]['active-as-child'] = 'active selected';
						endif;
					else :
						// Child.
						$remasterize_mmenu[ $item->menu_item_parent ]['children'][ $item->ID ] = array(
							'url'    => $item->url,
							'title'  => $item->title,
							'active' => '',
						);
						if ( icl_object_id( $post->ID, 'page' ) === icl_object_id( $item->object_id, 'page' ) ) :
							$remasterize_mmenu[ $item->menu_item_parent ]['children'][ $item->ID ]['active'] = 'active';
							$remasterize_mmenu[ $item->menu_item_parent ]['active-as-child']                 = '';
						endif;
					endif;
				endforeach;
			endforeach;
			foreach ( $remasterize_mmenu as $m_id => $main_menu_item ) :
				//digid_print($main_menu_item);
				$main_menu_item_html = '<li id="li-' . $m_id . '" class="item ">';
				// Do we have Children?
				$child_list = '';
				if ( count( $main_menu_item['children'] ) > 0 ) :
					// Check validity of each.
					foreach ( $main_menu_item['children'] as $c_id => $child ) :
						$child_list .= '<li class="item child-item ' . $child['active'] . '"><a href="' . $child['url'] . '" class="' . $child['active'] . '">' . $child['title'] . '</a></li>' . "\n";
					endforeach;
				endif;
				// We Have one or some child valid.
				if ( '' !== $child_list ) :
					$item_it_self = '';
					if ( isset( $main_menu_item['parent']['title'] ) && isset( $main_menu_item['parent']['active-as-child'] ) ) {
						$item_it_self = '<li class="item child-item ' . $main_menu_item['parent']['active-as-child'] . ' itemItself">' . $main_menu_item['parent']['title'] . '</li>';
					}
					$main_menu_item_html .= '<ul class="sub-menu">' . $item_it_self . $child_list . '</ul>' . "\n"; // '<span>'.$main_menu_item['parent']['title'].'</span>'.
				else :
					$main_menu_item_html .= '<a href="' . $main_menu_item['parent']['url'] . '" class="' . $main_menu_item['parent']['active'] . '">' . $main_menu_item['parent']['title'] . '</a>';
				endif;
				$main_menu_item_html .= '</li>' . "\n";
				// Print Element.
				echo $main_menu_item_html;
			endforeach;
			?>
		</ul>
	</div><!-- .header-menu-content -->
		
		<style>
			#covid-button{display: none;}
			.newmenu {width: 100%;display: block;position: absolute;top: 39%;left: 0;right: 0;z-index: 105;max-width: none;}
			.newmenu .row {display: block; padding: 0;width: 75%;margin: 0 auto;overflow: hidden;position: relative;    z-index: 106;}
			.newmenu-title{color: #807B73;font-family: "Playfair Display";margin-bottom: 24px;font-size: 32px;line-height: 48px;font-weight: bold;hyphens: auto;}
			.newmenu-items {}
			.newmenu-items .menu-a-blocks{width:24%;height:248px;float:left;display: block;text-align: center; padding: 130px 0;color: #FFFFFF;font-family: "Work Sans";font-size: 28px;line-height: 28px;background-repeat: no-repeat;background-position: center;}
			.newmenu-items .menu-a-blocks::before{content: "";position: absolute;top: 0; left: 0;width: 100%; height: 100%;background:rgba(0,0,0,0.5);left: 50%;transform: translateX(-50%);max-width: 334px;}
			.menu-a-blocks span{z-index: 9;position: relative;}
			.newmenu-items > a:not(:last-child) .menu-a-blocks{margin-right: 15px;}
			.newmenu-items .menu-a-blocks:hover > span{/*visibility: hidden;*/}
			.newmenu-items .menu-a-blocks:hover::before{/*background:transparent;*/}
			.newmenu-items .menu-a-blocks::before{transition: 0.2s;}
			.header-sub-menu-content{bottom:120px;}
			.header-sub-menu-content ul li{display: list-item;width:auto;float: none;}
			/*.header-menu-content > ul > li:last-child{display: none;}*/
			@media (max-width:768px){
				.boxzilla{width:100%;}
			}
			@media screen and (max-width: 1499px){
				.newmenu > .row {width: 100%;}
			}
		</style>



	<div class="header-sub-menu-content">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-12">
					<ul>
						<?php
						// Menus
						$main_menu = wp_get_nav_menu_items( 9 );
						// Parse Menu Mobile
						foreach($main_menu as $mm => $item){
							$active = '';
							if( $post->post_parent == $item->object_id || $post->ID == $item->object_id ){
								$active = 'active';
							}
							echo '<li class="'.$active.'"><a href="'.$item->url.'" class="'.$active.'">'.$item->title.'</a></li>';
						}
						?>
					</ul>
				</div>
				</div>
		</div>
	</div>
</div>
