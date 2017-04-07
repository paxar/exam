<?php
/*
Template Name: Home page
*/
?>

<?php get_header() ?>
<section>
    <div class="container">

        <?php
        $args = array(
            //'post_type' => 'your_post_type',
            //'order' => 'ASC', // old first
            'posts_per_page' => 100
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
                        <a href="<?php the_permalink() ?>"> <?php the_title() ?></a>
                        <h3> <?php the_title(); ?> </h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>

                <?php
            endwhile;
            wp_reset_postdata();

        else :
            echo '<p> No content </p>';

        endif;
        ?>




</section>

<section class="test-form">
    <div class="container">

    <?php echo do_shortcode("[shortcode]"); ?>
    </div>
</section>


<?php get_footer() ?>
