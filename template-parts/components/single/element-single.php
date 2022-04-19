<?php
    $post_views= get_post_views(get_the_ID());
?>
<div class="wrapper-single">
    <div class="single-header">
        <div class="single-header__details">
            <div class="single-header__details__category-date">
                <span class="single-header__details__category-date__categories"><h5><?php the_category(); ?></h5></span>
                <span><h5><?php the_date('M d,Y'); ?></h5></span>
            </div>
            <div>
                <span><?php the_title('<h2 class="title-single"><a href='.get_the_permalink().'>','</a></h2>'); ?></span>
            </div>
            <div class="single-header__details__info">
                <span class="single-header__details__info__comments"><h5><a href="<?= comments_link();?>"><?php echo get_comments_number(get_the_ID()) . ' comments' ?></a></h5></span>
                <span><h5><?php the_author(); ?></h5></span>
                <span><h5><?php echo($post_views).' views';?></h5></span>
            </div>
        </div>
        <figure class="single-header__figure">
            <?php the_post_thumbnail( '', ['class'=>'single-thumbnail'] ); ?>
        </figure>
    </div>
    <div class= "wrapper-content">
        <?php the_content(); ?>
    </div>
</div>