<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hechizandotheme
 */

get_header();
?>

	<main id="primary" class="site-main archive-wrapper">
		<?php
			get_template_part('template-parts/content-archive');

		?>
	</main><!-- #main -->

<?php
get_footer();
