<?php

/**
 *  función para contar las visualizaciones de un post.
 */

function set_post_views() {
    if ( is_single() ) {
        $post_ID = get_the_ID();
        $count = get_post_meta( $post_ID, 'post_views', true );

        if ( $count == '' ) {
            delete_post_meta( $post_ID, 'post_views' );
            add_post_meta( $post_ID, 'post_views', 1 );
        } else {
            update_post_meta( $post_ID, 'post_views', ++$count );
        }
    }
}
add_action( 'wp', 'set_post_views' );

/**
 *  funcion para obtener el número de visualizaciones de un post
 */

function get_post_views( $post_ID ){
    $count = get_post_meta($post_ID, 'post_views', true);

    if ( $count == '' ){
        delete_post_meta($post_ID, 'post_views');
        add_post_meta($post_ID, 'post_views', 0);
        return 0;
    }

    return $count;
}

/**
 *  Añadir columna al listado de post de wp-admin
*/
function posts_column_views( $defaults ){
    $defaults['post_views'] = __('Vistas', 'your_textdomain');

    return $defaults;
}
add_filter( 'manage_posts_columns', 'posts_column_views' );

function posts_custom_column_views( $column_name, $id ){
    if ( $column_name === 'post_views' ){
        echo get_post_views( get_the_ID() );
    }
}
add_action( 'manage_posts_custom_column', 'posts_custom_column_views', 5, 2 );

?>