<?php
function hechizando_widgets_areas(){
    register_sidebar( array(
        'name'=>__('Hechizando Footer', 'hechizandotheme'),
        'id'=>'footer',
        'description'=> __('Widget area to define widgest into footer','hechizandotheme'),
        'before_widget'=>'<div class="%2$s">',
        'after_widget'=>'</div>'
    ));

    register_sidebar(array(
        'name'=> __('Hechizando Home', 'hechizandotheme'),
        'id'=>'home',
        'description'=> __('Widget area to define widgest into the home','hechizandotheme'),
        'before_widget'=>'<div class="%2$s">',
        'after_widget'=>'</div>'

    ));

    register_sidebar(array(
        'name'=> __('Hechizando Single', 'hechizandotheme'),
        'id'=>'single',
        'description'=> __('Widget area to define widgest into the single page','hechizandotheme'),
        'before_widget'=>'<div class="%2$s">',
        'after_widget'=>'</div>'

    ));
}

add_action( 'widgets_init','hechizando_widgets_areas');