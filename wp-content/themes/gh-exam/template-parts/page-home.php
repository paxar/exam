<?php
/*
Template Name: Home page
*/
?>

<?php get_header() ?>
<section class="home-info">
    <div class="container">


        <div class="info-img col-xs-12 col-md-4">
			<?php if ( get_theme_mod( 'info-image' ) != '' ): ?>

                <img src="<?php echo get_theme_mod( 'info-image' ); ?>" alt="image">
			<?php endif; ?>

        </div>

        <div class="info-text-wrap col-xs-12 col-md-8">
			<?php if ( get_theme_mod( 'info-title' ) != '' ): ?>
                <h2 class="info-title"><?php echo get_theme_mod( 'info-title' ); ?></h2>
			<?php endif; ?>

			<?php if ( get_theme_mod( 'info-description' ) != '' ): ?>
                <h2 class="info-description"><?php echo get_theme_mod( 'info-description' ); ?></h2>
			<?php endif; ?>
        </div>
    </div>
</section>

<section class="icons">
    <div class="container">
	    <?php if ( get_theme_mod( 'icons_title' ) != '' ): ?>
            <h2 class="main-title"><?php echo get_theme_mod( 'icons_title' ); ?></h2>
	    <?php endif; ?>
	    <?php if ( get_theme_mod( 'icons_subtitle' ) != '' ): ?>
            <p class="main-subtitle"><?php echo get_theme_mod( 'icons_subtitle' ); ?></p>
	    <?php endif; ?>

        <div class="icons-wrap">
			<?php

			$args = array(
				'post_type'      => 'main-icons',
				'order'          => 'ASC', // old first
				'posts_per_page' => 3
			);

			$query = new WP_Query( $args );

			if ( $query->have_posts() ) :

				while ( $query->have_posts() ) : $query->the_post();
					?>

                    <div class="item col-xs-12 col-md-4">
                        <div class="img-wrap">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'medium', [ 'class' => 'your-class' ] ); ?>
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


			?>

        </div>


    </div>


</section>


<section class="gallery">
    <div class="container">
	    <?php if ( get_theme_mod( 'icons_title' ) != '' ): ?>
            <h2 class="main-title"><?php echo get_theme_mod( 'icons_title' ); ?></h2>
	    <?php endif; ?>
	    <?php if ( get_theme_mod( 'icons_subtitle' ) != '' ): ?>
            <p class="main-subtitle"><?php echo get_theme_mod( 'icons_subtitle' ); ?></p>
	    <?php endif; ?>




        <div id="options">
            <div id="filters" class="button-group">
                <button class="button is-checked" data-filter="*">View All</button>
                <button class="button" data-filter=".Design">Design</button>
                <button class="button" data-filter=".Development">Development</button>
                <button class="button" data-filter=".SEO">SEO</button>
                <button class="button" data-filter=".Others">Others</button>

            </div>
        </div>
        <div class="isotope">

			<?php

			$args = array(
				'post_type'      => 'gallery',
				'order'          => 'ASC', // old first
				'posts_per_page' => 30
			);

			$query = new WP_Query( $args );

			if ( $query->have_posts() ) :

				while ( $query->have_posts() ) : $query->the_post();

					$category = get_the_category();

					?>

                    <div class="item <?php echo $category[0]->cat_name; ?>">
                        <div class="portfolio-image-wrap">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'medium', [ 'class' => 'your-class' ] ); ?>
							<?php endif; ?>
                            <div class="hover">
                                <div class="hover-border">
                                    <a class="hover-button" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                                </div>
                            </div>
                        </div>
                    </div>


					<?php
				endwhile;
				wp_reset_postdata();

			else :
				echo '<p> No content </p>';

			endif;


			?>


             


        </div>


</section>




<?php get_footer() ?>
