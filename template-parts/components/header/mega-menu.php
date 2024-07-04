<div class="header-menu-container">
	<div class="header-menu-content">
		<ul>
			<?php
			$menu_name         = 'menu-main';
			$locations         = get_nav_menu_locations();
			$remasterize_mmenu = array();
			if ( $locations && isset( $locations[ $menu_name ] ) ) :
				$main_menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
				if ( $main_menu ) :
					$main_menu_items = wp_get_nav_menu_items( $main_menu->term_id );
					foreach ( $main_menu_items as $item ) :
						if ( empty( $item->menu_item_parent ) ) :
							$remasterize_mmenu[ $item->ID ] = array(
								'parent'          => array(
									'url'   => $item->url,
									'title' => $item->title,
								),
								'active'          => '',
								'active-as-child' => '',
								'children'        => array(),
							);
							if ( $item->object_id === $post->ID || ( $post->post_parent && $item->object_id === $post->post_parent ) ) :
								$remasterize_mmenu[ $item->ID ]['active'] = 'active';
								$remasterize_mmenu[ $item->ID ]['active-as-child'] = 'active selected';
							endif;
						else :
							$remasterize_mmenu[ $item->menu_item_parent ]['children'][ $item->ID ] = array(
								'url'    => $item->url,
								'title'  => $item->title,
								'active' => '',
							);
							if ( $item->object_id === $post->ID ) :
								$remasterize_mmenu[ $item->menu_item_parent ]['children'][ $item->ID ]['active'] = 'active';
								$remasterize_mmenu[ $item->menu_item_parent ]['active-as-child'] = '';
							endif;
						endif;
					endforeach;
					foreach ( $remasterize_mmenu as $m_id => $main_menu_item ) :
						$main_menu_item_html = '<li id="li-' . $m_id . '" class="item ">';
						$child_list = '';
						if ( count( $main_menu_item['children'] ) > 0 ) :
							foreach ( $main_menu_item['children'] as $c_id => $child ) :
								$child_list .= '<li class="item child-item ' . $child['active'] . '"><a href="' . esc_url( $child['url'] ) . '" class="' . esc_attr( $child['active'] ) . '">' . esc_html( $child['title'] ) . '</a></li>' . "\n";
							endforeach;
						endif;
						if ( ! empty( $child_list ) ) :
							$item_it_self = '';
							if ( isset( $main_menu_item['parent']['title'] ) && isset( $main_menu_item['active-as-child'] ) ) :
								$item_it_self = '<li class="item child-item ' . esc_attr( $main_menu_item['active-as-child'] ) . ' itemItself">' . esc_html( $main_menu_item['parent']['title'] ) . '</li>';
							endif;
							$main_menu_item_html .= '<ul class="sub-menu">' . $item_it_self . $child_list . '</ul>' . "\n";
						else :
							$main_menu_item_html .= '<a href="' . esc_url( $main_menu_item['parent']['url'] ) . '" class="' . esc_attr( $main_menu_item['parent']['active'] ) . '">' . esc_html( $main_menu_item['parent']['title'] ) . '</a>';
						endif;
						$main_menu_item_html .= '</li>' . "\n";
						echo $main_menu_item_html;
					endforeach;
				endif;
			endif;
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
						$menu_name         = 'menu-sub';
						$locations         = get_nav_menu_locations();
						$remasterize_mmenu = array();
						if ( $locations && isset( $locations[ $menu_name ] ) ) :
							$sub_menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
							if ( $sub_menu ) :
								$sub_menu_items = wp_get_nav_menu_items( $sub_menu->term_id );
								foreach ( $sub_menu_items as $item ) :
									$active = '';
									if ( $post->post_parent === $item->object_id || $post->ID === $item->object_id ) :
										$active = 'active';
									endif;
									echo '<li class="' . esc_attr( $active ) . '"><a href="' . esc_url( $item->url ) . '" class="' . esc_attr( $active ) . '">' . esc_html( $item->title ) . '</a></li>';

								endforeach;
							endif;
						endif;
						?>
					</ul>
				</div>
				</div>
		</div>
	</div>
</div>
