<article class="archive-item">
    <figure class="archive-item__figure">
        <a href="<?= esc_url(get_permalink());?>">
            <?php the_post_thumbnail( '', ['class'=> 'archive-thumbnail'] ); ?>
        </a>
    </figure>
    <div class="archive-item__info">
        <span><?php the_title('<h3 class="archive-title-post"><a href='.get_the_permalink().'>','</a></h3>'); ?></span>
        <div class= "archive-item__info__detalist">
            <span><h5><?php the_author(); ?></h5></span>
            <span><h5><?php echo get_the_date('M d, Y'); ?></h5></span>
        </div>
        <div class="archive-item__info__excerpt">
            <?php the_excerpt(); ?>
        </div>
        <a class="archive-item__info__archive-link" href="<?= esc_url(get_permalink()); ?>">Leer</a>
    </div>
</article>