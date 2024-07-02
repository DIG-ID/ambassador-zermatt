<?php $lang = $args['lang']; ?>
<div class="wrapper">
	<!--<div class="header-mobile d-block d-lg-none d-md-none hidden-print">-->
	<div class="header-mobile d-block d-lg-none hidden-print">
		<div style="display:table;width:100%;">
			<div style="display:table-cell">
				<a class="logo" href="<?php echo get_home_url('/'); ?>">
					<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="Logo" width="150" />
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
	</div><!-- .header-mobile -->
	<?php
	global $post, $entity_fields;
	$bg       = '';
	$image_bg = get_template_directory_uri() . '/assets/images/default-header.png';
	if ( ! is_404() ) {
		// Get Fields.
		$entity_fields = get_fields();
		$header_title  = $post->post_title;
		if ( is_front_page() ) {
			// Get Random Headers if exists.
			$random_headers = get_field( 'random_headers' );
			if ( is_array( $random_headers ) && array_key_exists( 'header', $random_headers ) && count( $random_headers['header'] ) > 0 ) {
				$headers = $random_headers['header'];
				shuffle( $headers );
				$header       = reset( $headers );
				$image_bg     = reset( wp_get_attachment_image_src( $header['image'], 'gallery-full' ) );
				$header_title = $header['title'];
			}
		} elseif ( is_page() ) {
			$image_bg = reset( wp_get_attachment_image_src( get_post_thumbnail_id(), 'gallery-full' ) );
		} elseif ( is_single() && 'post' === $post->post_type ) {
			$image_bg = reset( wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ) );
		}
	}
	if ( '' !== $image_bg ) {
		$bg = ' style="background:linear-gradient(0deg, rgba(0, 0, 0, .45) 0%, rgba(0, 0, 0, .297) 30%, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0) 60%, rgba(0, 0, 0, .297) 80%, rgba(0, 0, 0, .45) 100%), url(\'' . $image_bg . '\');"';
		if ( is_front_page() ) {
			$bg = ' style="background: url(\'' . $image_bg . '\');"';
		}
	}
	?>
	<header <?php echo $bg; ?> itemscope itemtype="http://schema.org/WebSite">
		<div class="main-header">
			<div class="header-menu-wrapper container-fluid">
				<div class="header-menu">
					<div class="big-mac" style="display:table-cell;text-align:right;vertical-align: middle;">
						<a id="hamburger" href="#hamburger" class="hamburger">
							<span class="top-bar"></span>
							<span class="middle-bar"></span>
							<span class="bottom-bar"></span>
						</a>
					</div>
					<?php get_template_part( 'template-parts/components/header/languages' ); ?>
				</div>
				<?php get_template_part( 'template-parts/components/header/logo' ); ?>
				<?php get_template_part( 'template-parts/components/header/booking' ); ?>
			</div>
		</div>
		<div class="page-header-block">
			<?php
			if ( is_front_page() && ! is_404() ) {
				?><h1><?php echo $header_title; ?></h1><?php
				get_template_part( 'template-parts/components/header/weather' );
				get_template_part( 'template-parts/components/header/restaurant-button' );
			} else {
				?>
				<div class="container">
					<div class="row">
						<div class="col-md-11 offset-md-1">
							<h1><?php echo $header_title; ?></h1>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>

		<?php get_template_part( 'template-parts/components/header/socials' ); ?>
		<?php get_template_part( 'template-parts/components/header/mega-menu', false, array( 'lang' => $lang ) ); ?>
		<?php get_template_part( 'template-parts/components/header/page-header-buttons', false, array( 'entity_fields' => $entity_fields ) ); ?>
	</header>
</div>


<?php get_template_part( 'template-parts/modules/news-button' ); ?>
<?php get_template_part( 'template-parts/modules/covid-note' ); ?>
<?php get_template_part( 'template-parts/modules/booking-section' ); ?>
<?php get_template_part( 'template-parts/modules/mobile-fixed-buttons' ); ?>
