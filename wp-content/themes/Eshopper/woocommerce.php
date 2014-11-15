<?php get_header();?>
	
	<?php get_template_part('slider'); ?>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php get_sidebar(); ?> 
				</div>
				
				<div class="col-sm-9 padding-right woocommerce">
					<?php woocommerce_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<?php get_footer();?>