<?php 
get_header();
while ( have_posts() ) :
	the_post();
	?>
	<div class="section section-single-post">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 offset-md-3 wysiwyg-container">
					<span class="news-date"><?php echo get_the_date( 'd F Y' ); ?></span>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
	<?php
endwhile;
get_footer();
