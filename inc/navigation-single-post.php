<?php

function navigation_post_thumb_and_title($post_id){ ?>
    <div class="post-nav">
        <?php
            $page_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post_id),'');
            if(!empty($page_thumb[0])):
        ?>
        <a href="<?php echo get_the_permalink($post_id);?>" class="navigation-thumb">
            <img class="navigation-thumb__img" src="<?php echo $page_thumb[0];?>"/>
        </a>
        <?php
            endif;
        ?>
        <a class="navigation-post-title" href="<?php echo get_the_permalink($post_id);?>">
            <?php echo get_the_title($post_id); ?>
        </a>
    </div>
<?php
}