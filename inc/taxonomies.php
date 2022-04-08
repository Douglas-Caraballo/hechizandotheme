<?php
/**
 * Registro de taxonomia para las secciones de la pagina
 */

function register_taxonomy_section(){
    $label = [
        'name'              => __('Sección'),
        'singular_name'     => __('Seccion'),
        'search_items'      => __('Buscar'),
        'all_items'         => __('Todas'),
        'parent_item'       => __('Parent'),
        'parent_item_colon' => __('Parent:'),
        'edit_item'         => __('Editar'),
        'update_item'       => __('Actualizar'),
        'add_new_item'      => __('Agregar nueva'),
        'new_item_name'     => __('Nuevo nombre'),
        'menu_name'         => __('Sección'),
    ];

    $args = [
        'hierarchical'      => true,
        'labels'            => $label,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'Sección'],
    ];

    register_taxonomy('section', ['post'],$args);
}
add_action('init', 'register_taxonomy_section');