<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hechizandotheme
 */

?>

<div class="wrapper-page">
	<section class="wrapper-page__content">
		<?php get_template_part('template-parts/components/page/element', 'page'); ?>
	</section>
	<div class="wrapper-page__sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>