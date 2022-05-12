<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package hechizandotheme
 */

get_header();
?>

	<main id="primary" class="site-main wrapper-search">
		<?php get_template_part('template-parts/content-search'); ?>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
