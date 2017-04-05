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
    <div class="container">
        <header id="masthead" class="site-header" role="banner">
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
                    <?php wp_nav_menu(array('them_location' => 'menu-1', 'container' => false, 'menu_class' => 'navigation')) ?>
                </nav>
        </header>
    </div>

    <section class="hero">
        <div class="container header-page">

            <?php if ( is_front_page() ) : ?>
           <div> hero section</div>
            <?php else : ?>
                <div> other hero section</div>

            <?php endif; ?>



        </div>
    </section>

	<div id="content" class="site-content">
