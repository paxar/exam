<?php
/*
Template Name: blog page
*/
?>

<?php get_header() ?>

<section class="blogs">
	<div class="container">
		<div class="blog-posts col-xs-12 col-md-8" >
			<?php
			$args = array(
				//'post_type' => 'your_post_type',
				//'order' => 'ASC', // old first
				'posts_per_page' => 10
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) :

				while ($query->have_posts()) : $query->the_post();
					?>
					<div class="col-xs-12 col-sm-6">
					<div class="blog-item">
						<div class="img-wrap">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('medium', ['class' => 'your-class']); ?>
							<?php endif; ?>
							<a class="blog-item-link" href="<?php the_permalink() ?>"><i class="fa fa-share" aria-hidden="true"></i></a>
						</div>

						<div class="item-description">
							<h3> <?php the_title(); ?> </h3>
							<p><?php the_excerpt(); ?></p>
						</div>
                        <div class="item-date">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo get_the_date(); ?></p>
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
		</div>

        <div class="sidebar col-xs-12 col-md-4 ">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>

	</div>



</section>











<?php get_footer() ?>

