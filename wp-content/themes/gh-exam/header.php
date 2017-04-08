<?php
/**
 * The header for our theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">

                <header id="masthead" class="site-header" role="banner">
                    <div class="container ">
                    <div class="nav-header">
                        <h1 class="logo">
							<?php the_custom_logo(); ?>

                        </h1>

                    </div>
                    <nav class="main-nav">
                        <button class="nav-btn open-btn" id="open-nav">
                            <i class="fa fa-bars"></i>
                        </button>
                        <button class="nav-btn close-btn remove-btn" id="close-nav">
                            <i class="fa fa-times"></i>
                        </button>
						<?php wp_nav_menu( array(
							'them_location' => 'menu-1',
							'container'     => false,
							'menu_class'    => 'navigation'
						) ) ?>
                    </nav>
                    </div>
                </header>


            <section class="hero">
                <div class="container header-page">

					<?php if ( is_front_page() ) : ?>


                        <div class="hero-img col-xs-12 col-md-6">
	                        <?php if (get_theme_mod('hero-image') != ''): ?>

                                <img src="<?php echo get_theme_mod('hero-image'); ?>" alt="image">
	                        <?php endif; ?>

                        </div>

                        <div class="hero-description col-xs-12 col-md-6">
	                        <?php if (get_theme_mod('hero-title') != ''): ?>
                                <h2 class="hero-title"><?php echo get_theme_mod('hero-title'); ?></h2>
	                        <?php endif; ?>
	                        <?php if (get_theme_mod('hero-subtitle') != ''): ?>
                                <span class="hero-subtitle"><?php echo get_theme_mod('hero-subtitle'); ?></span>
	                        <?php endif; ?>
	                        <?php if (get_theme_mod('hero-subtitle2') != ''): ?>
                                <span class="hero-subtitle2"><?php echo get_theme_mod('hero-subtitle2'); ?></span>
	                        <?php endif; ?>
	                        <?php if (get_theme_mod('hero-info') != ''): ?>
                                <p class="hero-info"><?php echo get_theme_mod('hero-info'); ?></p>
	                        <?php endif; ?>



                        </div>

                        <a href="#" class="hero-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>


					<?php else : ?>
                        <div>
                        <h2 class="hero-title-others"><?php the_title() ?></h2>
                        </div>

					<?php endif; ?>


                </div>
            </section>

            <div id="content" class="site-content">
