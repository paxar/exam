<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh-exam
 */

?>

	</div><!-- #content -->
    <section class="pre-footer partners">
        <div class="container">
            <h2 class="main-title"><?php echo get_theme_mod( 'partner-title' ); ?> </h2>

            <div class="partners-icons-wrap">

                <div class=" partners-item col-xs-12 col-sm-6 col-md-3">
	                <?php if ( get_theme_mod( 'partner1-img' ) != '' ): ?>
                        <a href="<?php echo get_theme_mod( 'partner1-url' ); ?>">
                            <img src="<?php echo get_theme_mod( 'partner1-img' ); ?>" alt="partner">
                        </a>
	                <?php endif; ?>
                </div>

                <div class="partners-item col-xs-12 col-sm-6 col-md-3">
		            <?php if ( get_theme_mod( 'partner2-img' ) != '' ): ?>
                        <a href="<?php echo get_theme_mod( 'partner2-url' ); ?>">
                            <img src="<?php echo get_theme_mod( 'partner2-img' ); ?>" alt="partner">
                        </a>
		            <?php endif; ?>
                </div>

                <div class=" partners-item col-xs-12 col-sm-6 col-md-3">
		            <?php if ( get_theme_mod( 'partner3-img' ) != '' ): ?>
                        <a href="<?php echo get_theme_mod( 'partner3-url' ); ?>">
                            <img src="<?php echo get_theme_mod( 'partner3-img' ); ?>" alt="partner">
                        </a>
		            <?php endif; ?>
                </div>

                <div class="partners-item col-xs-12 col-sm-6 col-md-3">
		            <?php if ( get_theme_mod( 'partner4-img' ) != '' ): ?>
                        <a href="<?php echo get_theme_mod( 'partner4-url' ); ?>">
                            <img src="<?php echo get_theme_mod( 'partner4-img' ); ?>" alt="partner">
                        </a>
		            <?php endif; ?>
                </div>

            </div>




        </div>


    </section>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="container bg-footer">

            <div class="footer-info col-xs-12 col-md-6">
                <h2 class="footer-title">Contact Us:</h2>
                <p class="footer-description"><?php echo get_theme_mod( 'footer-description' ); ?></p>

                <span class="info-phone"><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_theme_mod( 'footer-phone' ); ?></span>
                <span class="info-address"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo get_theme_mod( 'footer-address' ); ?></span>

                <div class="info-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424143.0428923837!2d150.6517768587637!3d-33.847973036102246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2z0KHQuNC00L3QtdC5INCd0L7Qsi4g0K7Qti4g0KPRjdC70YzRgSwg0JDQstGB0YLRgNCw0LvQuNGP!5e0!3m2!1sru!2sua!4v1491650962929" width="100%" height="390px" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>


            </div>

            <div class="footer-form col-xs-12 col-md-6">

	            <?php echo do_shortcode("[contact-form-7 id=\"77\" title=\"Untitled\"]"); ?>
            </div>




		</div><!-- .site-info -->
        <div class="footer-logo">
	        <?php the_custom_logo(); ?>
        </div>
        <div class="footer-copy">
			<p><?php echo get_theme_mod( 'footer-copy' ); ?></p>
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
