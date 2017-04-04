<?php
/**
 * gh-exam Theme Customizer
 */

function gh_exam_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    /*--------------------------------------------------------------
    # Home page panel
    --------------------------------------------------------------*/
    $wp_customize->add_panel( 'main_page', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Home page', 'gh-exam' ),
        'description' => __( 'Settings of home page.', 'gh-exam' ),
    ) );

    /*--------------------------------------------------------------
    # Hero section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'hero-section',
        array(
            'title' => esc_html__('Hero settings', 'gh-exam'),
            'priority' => 10,
            'panel' => 'main_page',
        )
    );
    $wp_customize->add_setting(
        'hero-intro'
    );
    $wp_customize->add_control(
        'hero-intro',
        array(
            'label' => esc_html__('Intro', 'gh-exam'),
            'section' => 'hero-section'
        )
    );
    $wp_customize->add_setting(
        'hero_description'
    );
    $wp_customize->add_control(
        'hero_description',
        array(
            'label' => esc_html__('Intro description', 'gh-exam'),
            'section' => 'hero-section',
            'type' => 'textarea'
        )
    );
    $wp_customize->add_setting(
        'btn_url'
    );
    $wp_customize->add_control(
        'btn_url',
        array(
            'label' => esc_html__('Button URL', 'gh-exam'),
            'section' => 'hero-section',
            'type'     => 'dropdown-pages'
        )
    );
    $wp_customize->add_setting(
        'btn_text'
    );
    $wp_customize->add_control(
        'btn_text',
        array(
            'label' => esc_html__('Button text', 'gh-exam'),
            'section' => 'hero-section'
        )
    );
    $wp_customize->add_setting(
        'bg-hero'
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bg-hero',
            array(
                'label' => esc_html__('Background image', 'gh-exam'),
                'section' => 'hero-section'
            )
        )
    );
}
add_action( 'customize_register', 'gh_exam_customize_register' );


function custom_style() {
    ?>
    <style type="text/css">

        /* -------------- set custom properties ---------------  */

        .info {
            background: url(<?php echo get_theme_mod('bg-info') ?>)center /cover no-repeat;
        }

        .site-footer {
            background-color: <?php echo get_theme_mod('bg-footer') ?>;
        }


        /* -------------------- Hide sections --------------------- */
        <?php if( false === get_theme_mod( 'block1_hide' ) ) { ?>
        .project-involved-wrap { display: none; }
        <?php } // end if ?>



    </style>
    <?php
}
add_action('wp_head', 'custom_style');

function gh_exam_customize_preview_js() {
	wp_enqueue_script( 'gh_exam_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gh_exam_customize_preview_js' );
