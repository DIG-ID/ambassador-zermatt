<?php
get_header();
?>
<div class="wrapper">
	<div class="section section-404">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-8 ">
					<h1 class="h1-404"><?php esc_html_e( 'The webpage cannot be found', 'ergopix' ); ?></h1>
					<h4 class="h4-404">
						<?php esc_html_e( 'The requested page ', 'ergopix' ); ?>
						<?php
						if ( isset( $_SERVER['HTTP_HOST'], $_SERVER['REQUEST_URI'] ) ) {
							$url = 'http://' . sanitize_text_field( wp_unslash( $_SERVER['HTTP_HOST'] ) ) . sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) );
							echo esc_url( $url );
						}
						?>
						<?php esc_html_e( ', does not exist.', 'ergopix '); ?>
					</h4>
					<h3><?php esc_html_e( 'What you can try:', 'ergopix' ); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Go back to the homepage', 'ergopix' ); ?> <a href="<?php echo home_url(); ?>"><?php echo home_url(); ?></a></li>
					</ol>
					<h3><?php esc_html_e( 'Most likely causes:', 'ergopix' ); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Your bookmark / favorite is outdated', 'ergopix' ); ?></li>
						<li><?php esc_html_e( 'You used a browser that has an outdated link to this site', 'ergopix' ); ?></li>
						<li><?php esc_html_e( 'There might be a typing error in the address', 'ergopix' ); ?></li>
						<li><?php esc_html_e( 'You do not have access to this page', 'ergopix' ); ?></li>
						<li><?php esc_html_e( 'An error occurred while executing the query', 'ergopix' ); ?></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
