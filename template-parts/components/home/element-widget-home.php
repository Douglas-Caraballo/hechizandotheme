<div class="wrapper-home-widgets">
    <?php if(is_active_sidebar('home')): ?>
        <aside id="home" class="widget-area-home">
            <?php dynamic_sidebar('home'); ?>
        </aside>
    <?php endif; ?>
</div>