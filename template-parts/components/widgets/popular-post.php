<?php

    class Popular_post_Widget extends WP_Widget {

        public function __construct() {
            $widget_options = array(
                'classname' => 'widget_popular_post',
                'description' => 'Display the popular posts',
            );

            parent::__construct( 'popularpost', 'Hechizando theme Popular Post' ,$widget_options );
        }

        // Back-end display of widget
        public function form( $instance ) {
            //echo 'Sin opciones para mostrar';

            $defaults= array(
                'number_post'=> 1
            );

            extract(wp_parse_args( (array) $instance, $defaults));
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'number_post' ) ); ?>"><?php _e( 'Number category:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_post' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number_post' ) ); ?>" type="number" value="<?php echo esc_attr( $number_post ); ?>" />
        </p>
        <?php
        }
        public function update($new_instance, $old_instance){
            $instance = $old_instance;
            $instance['number_post'] = isset($new_instance['number_post']) ? wp_strip_all_tags($new_instance['number_post']):'';
            return $instance;
        }

        // Front-end display of widget
        public function widget( $args, $instance ) {
            $number_post = isset($instance['number_post'])? $instance['number_post'] : '';
            echo $args[ 'before_widget' ];

            ?>
            <div class="see-popular">
                    <?php
                        $args_post = [
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'meta_key'=>'votes_count',
                        'orderby' => 'meta_value_num',
                        'order' => 'DESC',
                        'posts_per_page' => $number_post,
                        ];
                        $the_query = new WP_Query( $args_post );
                    ?>
                        <ul class="popular-post">
                            <?php if( $the_query->have_posts() ) : ?>
                                <?php while( $the_query->have_posts() ) :
                                    $the_query->the_post();
                                    $permalink = esc_url(get_the_permalink());
                                    $thumbnail = get_the_post_thumbnail($post_id,'',['class'=>'img-popular-post']);
                                    $title= get_the_title();
                                    $date= get_the_date('M d, Y');
                                ?>
                                <li class="popular-post__item">
                                    <figure class="popular-post__item__figure">
                                        <?= $thumbnail;?>
                                    </figure>
                                    <div class="popular-post__item__summary">
                                        <h4><a class="widget-item-list" href="<?= $permalink; ?>"><?= $title;?></a></h4>
                                        <h6><?= $date;?></h6>
                                    </div>
                                </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <?php
                    echo $args[ 'after_widget' ];
        }
    }add_action( 'widgets_init', function() {
        register_widget( 'Popular_post_Widget' );
    } );