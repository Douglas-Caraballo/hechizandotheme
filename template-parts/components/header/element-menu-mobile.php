<aside class="aside-menu aside-activate" id="menu">
    <div class="aside-menu__wrapper">
        <span class="aside-menu__wrapper__close" id="close">&times</span>
        <div class="mobile-menu">
            <?php
                $args = [
                    'menu' => 'Menu 1',
                    'menu_class'=> 'aside-menu__wrapper_list',
                    'container'=> '',
                ];

                wp_nav_menu($args);
            ?>
            <div>
                <?php get_template_part('template-parts/components/reusable/element', 'search'); ?>
            </div>
            <div>
                <?php get_template_part('template-parts/components/reusable/element', 'social'); ?>
            </div>
        </div>
    </div>
</aside>