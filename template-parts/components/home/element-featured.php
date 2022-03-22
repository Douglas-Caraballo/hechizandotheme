<?php
    $args=[
        'post_type'=>'post',
        'post_status'=>'publish',
        'post_per_page'=>5,
        'tax_query'=>[
            array(
                'taxonomy'=>'section',
                'field'=>'slug',
                'terms'=>'destacado'
            ),
        ]
    ];

    $query_featured= new WP_Query($args);
?>
<div class="slider">
    <button class="featured-button button-left" id="button-left">
        &#60;
    </button>
    <div class="wrapper-featured" id="slider">
        <?php if ($query_featured -> have_posts()): ?>
            <?php
                while($query_featured-> have_posts()):
                    $query_featured->the_post();
            ?>
            <article class="featured-item">
                <figure class="featured-item__figure">
                    <?php the_post_thumbnail('', ['class'=>'featured-img']); ?>
                </figure>
                <div class="featured-item__info">
                    <?php the_title('<h3><a href='.get_the_permalink().'>','</a></h3>'); ?>
                    <span class="featured-item__info__redirect"><a href="<?= esc_url(get_permalink($query_featured->id)); ?>">Ver Post</a></span>
                </div>
            </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <button class="featured-button button-right" id="button-right">
        &#62;
    </button>
</div>