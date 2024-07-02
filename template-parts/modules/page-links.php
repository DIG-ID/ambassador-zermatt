<section class="section-page-links">
	<div class="row no-gutters">
		<?php
		$plink_01 = get_field( 'link_1' );
		if ( $plink_01 ) :
			$image = get_field( 'link_1_link_image' );
			$plink = get_field( 'link_1_link_url' );
			if ( $image ) :
				$bg = wp_get_attachment_image_url( $image, 'full' );
			endif;
			?>
			<div class="page-link page-link--01 col-12 col-md-12 col-lg-6 no-gutters" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.45) 0%, rgba(0, 0, 0, 0.30) 20.83%, rgba(0, 0, 0, 0.30) 78.65%, rgba(0, 0, 0, 0.45) 100%), url(<?php echo esc_url( $bg ); ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
				<?php
				if ( $plink ) :
					$link_url    = $plink['url'];
					$link_title  = $plink['title'];
					$link_target = $plink['target'] ? $plink['target'] : '_self';
					?>
					<a class="page-link-content" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<span class="page-link-button"><?php echo esc_html( $link_title ); ?>
							<svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M1.29642 18.7632C0.910793 18.4396 0.900014 17.9054 1.27234 17.5702L9.68025 10L1.27235 2.42981C0.900015 2.09458 0.910795 1.56043 1.29642 1.23676C1.68205 0.913083 2.2965 0.922454 2.66883 1.25769L11.7277 9.41394C12.0908 9.74088 12.0908 10.2591 11.7277 10.5861L2.66883 18.7423C2.2965 19.0775 1.68205 19.0869 1.29642 18.7632Z" fill="#9E0E0E" stroke="#9E0E0E" stroke-width="2"/>
							</svg>
						</span>
					</a>
					<?php
				endif;
				?>
			</div>
			<?php
		endif;
		$plink_02 = get_field( 'link_2' );
		if ( $plink_02 ) :
			$image = get_field( 'link_2_link_image' );
			$plink = get_field( 'link_2_link_url' );
			if ( $image ) :
				$bg = wp_get_attachment_image_url( $image, 'full' );
			endif;
			?>
			<div class="page-link page-link--02 col-12 col-md-12 col-lg-6 no-gutters" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.45) 0%, rgba(0, 0, 0, 0.30) 20.83%, rgba(0, 0, 0, 0.30) 78.65%, rgba(0, 0, 0, 0.45) 100%), url(<?php echo esc_url( $bg ); ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
				<?php
				if ( $plink ) :
					$link_url    = $plink['url'];
					$link_title  = $plink['title'];
					$link_target = $plink['target'] ? $plink['target'] : '_self';
					?>
					<a class="page-link-content" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<span class="page-link-button"><?php echo esc_html( $link_title ); ?>
							<svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M1.29642 18.7632C0.910793 18.4396 0.900014 17.9054 1.27234 17.5702L9.68025 10L1.27235 2.42981C0.900015 2.09458 0.910795 1.56043 1.29642 1.23676C1.68205 0.913083 2.2965 0.922454 2.66883 1.25769L11.7277 9.41394C12.0908 9.74088 12.0908 10.2591 11.7277 10.5861L2.66883 18.7423C2.2965 19.0775 1.68205 19.0869 1.29642 18.7632Z" fill="#9E0E0E" stroke="#9E0E0E" stroke-width="2"/>
							</svg>
						</span>
					</a>
					<?php
				endif;
				?>
			</div>
			<?php
		endif;
		?>
	</div>
</section>
