<?php get_header();?>
	
	<?php get_template_part('slider'); ?>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php get_sidebar(); ?> 
				</div>
				
				<div class="col-sm-9 padding-right">
					<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					the_title();
					the_content();	
		
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
				</div>
			</div>
		</div>
	</section>
	<?php get_footer();?>