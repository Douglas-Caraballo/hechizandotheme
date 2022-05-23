<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hechizandotheme
 */

?>
<?php if ( have_posts() ) : ?>

<header class="page-header">
	<h1 class="page-title">
		<?php
		/* translators: %s: search query. */
		printf( esc_html__( 'Search Results for: %s', 'hechizandotheme' ), '<span>' . get_search_query() . '</span>' );
		?>
	</h1>
</header><!-- .page-header -->
<div class="wrapper-content-archive">
	<div class="archive-wrapper-item">
		<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/components/search/element-page', 'search' );

			endwhile;

			hechizandotheme_numeric_pagination();

			else :

			get_template_part( 'template-parts/content', '404' );

			endif;
		?>
	</div>
	<div class="wrapper-sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>