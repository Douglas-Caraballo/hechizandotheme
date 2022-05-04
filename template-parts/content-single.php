<?php
	while ( have_posts() ) :
		the_post();
?>
	<div class="single-content">
		<?php
			get_template_part('template-parts/components/single/element', 'single');
			get_template_part('template-parts/components/single/element', 'navigation');

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>
	</div>
	<?php
	get_template_part('template-parts/components/single/element-widget', 'single');
?>

