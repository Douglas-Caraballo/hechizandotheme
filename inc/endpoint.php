<?php

/**
 *  /wp-json/post/posts
 */

function new_endpoints(){
    register_rest_route( 'post/', 'posts', array(
        'methods' => WP_REST_Server::READABLE,
        'callback'=>'get_news'
    ));
}
add_action('rest_api_init', 'new_endpoints');

function get_news($request){
    $per_page = $request -> get_param('per_page') ? $request->get_param('per_page'):4;
    $paged = $request -> get_param('paged') ? $request->get_param('paged'):1;
    $args =[
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $paged,
        'posts_per_page' => $per_page
    ];

    $read_more_query = new WP_Query($args);
    $posts = [];
    $array_posts= [];
    $taxonomie = ['category'];

    if($read_more_query -> have_posts()){
        foreach($read_more_query -> posts as $post):
            $id = $post -> ID;
            $user_id = $post -> post_author;
            array_push($posts,[
                'title' => get_the_title($id),
                'permalink' => get_the_permalink($id),
                'thumbnail' => get_the_post_thumbnail( $id, '', ['class'=>'home-image'] ),
                'excerpt' => get_the_excerpt($id),
                'author' => get_the_author_meta('nickname', $user_id),
                'date' => get_the_date('M d, Y', $id),
                'views' => get_post_views($id),
                'thumbnail_url' => get_the_post_thumbnail_url($id),
                'category' => wp_get_post_terms( $id, $taxonomie)
            ]);
        endforeach;
    }
    $array_posts['posts'] = $posts;
    wp_reset_postdata();
    return $array_posts;
}