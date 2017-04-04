<?php

// custom-post-types.php
function create_post_type() {
    $arr_post = array( "slider-hero", "services", "clients", "news", "partners" );
    for ( $i=0; $i<count( $arr_post ); $i++ ) {
        register_post_type( $arr_post[$i],
            array(
                'labels' => array(
                    'name' => esc_html__( $arr_post[$i], 'gh-exam' ),
                    'singular_name' => esc_html__( 'Post', 'gh-exam' ),
                    'add_new' => esc_html__( 'New post', 'gh-exam' )
                ),
                'public' => true,
                'has_archive' => true,
                'show_ui' => true,
                'taxonomies' => array( 'category', 'post_tag' ),
                'capability_type' => 'post',
                'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields' ),
            )
        );
    }
}
add_action( 'init', 'create_post_type' );

//custom loop



        $args = array(
            'post_type' => 'your_post_type',
            'order' => 'ASC', // old first
            'posts_per_page' => 3
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :

            while ($query->have_posts()) : $query->the_post();
                ?>

                <div class="item">
                    <div class="img-wrap">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium', ['class' => 'your-class']); ?>
                        <?php endif; ?>
                    </div>

                    <div class="item-description">
                        <h3> <?php the_title(); ?> </h3>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>

                <?php
            endwhile;
            wp_reset_postdata();

        else :
            echo '<p> No content </p>';

        endif;
