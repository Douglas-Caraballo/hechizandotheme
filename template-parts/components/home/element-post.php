<?php

$args= [
    'post_type'=> 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'paged' => 1,
    'posts_per_page'=>4
];

$homeQuery = new WP_Query($args);
$taxonomie = ['category'];
?>
<div class="wrapper-post">
    <div class="content-post">
        <?php if($homeQuery -> have_posts()): ?>
            <?php
                while($homeQuery -> have_posts()):
                    $homeQuery -> the_post();
                    $postVews = get_post_views(get_the_ID( $homeQuery->id ));
            ?>
                <article class="content-post__item">
                    <figure class="content-post__item__img">
                        <a href="<?= esc_url(get_permalink($homeQuery->id)); ?>">
                            <?php the_post_thumbnail('', ['class'=>'home-image']); ?>
                        </a>
                    </figure>
                    <div class="content-post__item__info">
                        <span>
                            <?php the_title('<h3 class=post-title><a href='.get_the_permalink().'>','</a></h3>'); ?>
                        </span>
                        <div class="content-post__item__info__details">
                            <span class="category-home">
                                <h5>
                                    <?php
                                        $term = wp_get_post_terms(get_the_ID(),$taxonomie);
                                        echo $term[0]->name;
                                    ?>
                                </h5>
                            </span>
                            <span><h5><?php echo get_the_date('M d, Y');?></h5></span>
                            <span><h5><?php the_author(); ?></h5></span>
                            <span><h5><?php echo ($postVews); ?> views </h5></span>
                        </div>
                        <div class="content-post__item__info__excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <a class="see-more-redirect" href="<?php echo esc_url(get_permalink($homeQuery->id));?>">Leer Más &rarr;</a>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php get_template_part('template-parts/components/reusable/element-load','more');  ?>
</div>