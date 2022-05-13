<article id="post-<?php the_ID(); ?>" class="search-item">

	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			echo get_the_date('M d, Y');
			hechizandotheme_posted_by();
			?>
		</div>
		<?php endif; ?>
	</header>
    <div class="search-post">
        <figure class="archive-item__figure">
            <a href="<?= esc_url(get_permalink());?>">
                <?php the_post_thumbnail( '', ['class'=> 'archive-thumbnail'] ); ?>
            </a>
        </figure>

        <div class="entry-summary">
            <?php the_excerpt(); ?>
            <a class="archive-item__info__archive-link" href="<?= esc_url(get_permalink()); ?>">Leer &rarr;</a>
        </div>
    </div>

</article>