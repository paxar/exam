<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gh-exam
 */

get_header(); ?>

    <p class="helper">single.php</p>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
			the_post(); ?>
            <section class="blog-single">
                <div class="container">
                    <div class="blog-posts col-xs-12 col-md-8">


                        <div class="blog-single-item">


                            <div class="item-description">
                                <h3> <?php the_title(); ?> </h3>
                                <p><?php the_content(); ?></p>
                            </div>

                        </div>

                        <?php the_post_navigation() ?>


						<?php endwhile; // End of the loop.
						?>


                    </div>

                    <div class="sidebar col-xs-12 col-md-4 ">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div>

                </div>


            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
