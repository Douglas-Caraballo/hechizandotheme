<div class="wrapper-widget-single">
    <?php if(is_active_sidebar('single')): ?>
        <aside id='single' class="widget-area-single">
            <?php dynamic_sidebar( 'single' ); ?>
        </aside>
    <?php endif; ?>
</div>