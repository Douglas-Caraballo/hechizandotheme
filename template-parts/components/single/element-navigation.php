<?php
    //Get Next Adjacent Post
    $next_post = get_adjacent_post( false, '', false,);
    //Get Previous Adjacent Post
    $previous_post = get_adjacent_post();
?>
<nav class="navigation-post-single">
    <?php if (!empty($next_post)) : ?>
        <div class="navigation-article">
            <h4><?php _e('Next Article', 'hechizandotheme'); ?></h4>
            <?php navigation_post_thumb_and_title($next_post->ID); ?>
        </div>
    <?php endif; ?>
    <?php if(!empty($previous_post)) : ?>
        <div class="navigation-article">
            <h4><?php _e('Previous Article', 'hechizandotheme'); ?></h4>
            <?php navigation_post_thumb_and_title($previous_post->ID); ?>
        </div>
    <?php endif; ?>
</nav>