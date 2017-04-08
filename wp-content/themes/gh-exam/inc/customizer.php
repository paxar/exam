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
        'main-hero-section',
        array(
            'title' => esc_html__('Main Hero settings', 'gh-exam'),
            'priority' => 10,
            'panel' => 'main_page',
        )
    );
	$wp_customize->add_setting(
		'hero-title'
	);
	$wp_customize->add_control(
		'hero-title',
		array(
			'label' => esc_html__('Title', 'gh-exam'),
			'section' => 'main-hero-section'
		)
	);
	$wp_customize->add_setting(
		'hero-subtitle'
	);
	$wp_customize->add_control(
		'hero-subtitle',
		array(
			'label' => esc_html__('Subtitle1', 'gh-exam'),
			'section' => 'main-hero-section'
		)
	);
	$wp_customize->add_setting(
		'hero-subtitle2'
	);
	$wp_customize->add_control(
		'hero-subtitle2',
		array(
			'label' => esc_html__('Subtitle2', 'gh-exam'),
			'section' => 'main-hero-section'
		)
	);
	$wp_customize->add_setting(
		'hero-info'
	);
	$wp_customize->add_control(
		'hero-info',
		array(
			'label' => esc_html__('Intro description', 'gh-exam'),
			'section' => 'main-hero-section',
			'type' => 'textarea'
		)
	);
	$wp_customize->add_setting(
		'hero-image'
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hero-image',
			array(
				'label' => esc_html__('Hero image', 'gh-exam'),
				'section' => 'main-hero-section'
			)
		)
	);
	/*--------------------------------------------------------------
   # Info section
   --------------------------------------------------------------*/
	$wp_customize->add_section(
		'main-info-section',
		array(
			'title' => esc_html__('Main info settings', 'gh-exam'),
			'priority' => 10,
			'panel' => 'main_page',
		)
	);
	$wp_customize->add_setting(
		'info-title'
	);
	$wp_customize->add_control(
		'info-title',
		array(
			'label' => esc_html__('Title', 'gh-exam'),
			'section' => 'main-info-section'
		)
	);
	$wp_customize->add_setting(
		'info-description'
	);
	$wp_customize->add_control(
		'info-description',
		array(
			'label' => esc_html__('description', 'gh-exam'),
			'section' => 'main-info-section',
			'type' => 'textarea'
		)
	);
	$wp_customize->add_setting(
		'info-image'
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'info-image',
			array(
				'label' => esc_html__('Info image', 'gh-exam'),
				'section' => 'main-info-section'
			)
		)
	);
	$wp_customize->add_setting(
		'info_hide'
	);
	$wp_customize->add_control(
		'info_hide',
		array(
			'label' => esc_html__('Show section', 'dwellings'),
			'section' => 'main-info-section',
			'type'     => 'checkbox'
		)
	);
	/*--------------------------------------------------------------
	# Icon section
	--------------------------------------------------------------*/
	$wp_customize->add_section(
		'main-icons-section',
		array(
			'title' => esc_html__('Icons section settings', 'gh-exam'),
			'priority' => 10,
			'panel' => 'main_page',
		)
	);
	$wp_customize->add_setting(
		'icons_title'
	);
	$wp_customize->add_control(
		'icons_title',
		array(
			'label' => esc_html__('Title', 'gh-exam'),
			'section' => 'main-icons-section'
		)
	);
	$wp_customize->add_setting(
		'icons_subtitle'
	);
	$wp_customize->add_control(
		'icons_subtitle',
		array(
			'label' => esc_html__('Subtitle', 'gh-exam'),
			'section' => 'main-icons-section',

		)
	);
	$wp_customize->add_setting(
		'icons_hide'
	);
	$wp_customize->add_control(
		'icons_hide',
		array(
			'label' => esc_html__('Show section', 'dwellings'),
			'section' => 'main-icons-section',
			'type'     => 'checkbox'
		)
	);













	/*--------------------------------------------------------------
	# Footer panel
	--------------------------------------------------------------*/
	$wp_customize->add_panel( 'footer', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Footer', 'gh-exam' ),
		'description' => __( 'Settings of footer.', 'gh-exam' ),
	) );
	/*--------------------------------------------------------------
   # Partners section
   --------------------------------------------------------------*/
	$wp_customize->add_section(
		'footer-partners-section',
		array(
			'title' => esc_html__('partners settings', 'gh-exam'),
			'priority' => 10,
			'panel' => 'footer',
		)
	);

	$wp_customize->add_setting(
		'partner-title'
	);
	$wp_customize->add_control(
		'partner-title',
		array(
			'label' => esc_html__('Title', 'gh-exam'),
			'section' => 'footer-partners-section'
		)
	);

    $wp_customize->add_setting(
	    'partner1-img'
    );
    $wp_customize->add_control(
	    new WP_Customize_Image_Control(
		    $wp_customize,
		    'partner1-img',
		    array(
			    'label' => esc_html__('Background image', 'gh-exam'),
			    'section' => 'footer-partners-section'
		    )
	    )
    );
	$wp_customize->add_setting(
		'partner1-url'
	);
	$wp_customize->add_control(
		'partner1-url',
		array(
			'label' => esc_html__('URL', 'gh-exam'),
			'section' => 'footer-partners-section'
		)
	);
	$wp_customize->add_setting(
		'partner2-img'
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'partner2-img',
			array(
				'label' => esc_html__('Background image', 'gh-exam'),
				'section' => 'footer-partners-section'
			)
		)
	);
	$wp_customize->add_setting(
		'partner2-url'
	);
	$wp_customize->add_control(
		'partner2-url',
		array(
			'label' => esc_html__('URL', 'gh-exam'),
			'section' => 'footer-partners-section'
		)
	);
	$wp_customize->add_setting(
		'partner3-img'
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'partner3-img',
			array(
				'label' => esc_html__('Background image', 'gh-exam'),
				'section' => 'footer-partners-section'
			)
		)
	);
	$wp_customize->add_setting(
		'partner3-url'
	);
	$wp_customize->add_control(
		'partner3-url',
		array(
			'label' => esc_html__('URL', 'gh-exam'),
			'section' => 'footer-partners-section'
		)
	);
	$wp_customize->add_setting(
		'partner4-img'
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'partner4-img',
			array(
				'label' => esc_html__('Background image', 'gh-exam'),
				'section' => 'footer-partners-section'
			)
		)
	);
	$wp_customize->add_setting(
		'partner4-url'
	);
	$wp_customize->add_control(
		'partner4-url',
		array(
			'label' => esc_html__('URL', 'gh-exam'),
			'section' => 'footer-partners-section'
		)
	);
	$wp_customize->add_setting(
		'partners_hide'
	);
	$wp_customize->add_control(
		'partners_hide',
		array(
			'label' => esc_html__('Show section', 'dwellings'),
			'section' => 'footer-partners-section',
			'type'     => 'checkbox'
		)
	);
	/*--------------------------------------------------------------
   # footer section
   --------------------------------------------------------------*/
	$wp_customize->add_section(
		'footer-section',
		array(
			'title' => esc_html__('footer settings', 'gh-exam'),
			'priority' => 10,
			'panel' => 'footer',
		)
	);
	$wp_customize->add_setting(
		'footer-description'
	);
	$wp_customize->add_control(
		'footer-description',
		array(
			'label' => esc_html__('Deccription', 'gh-exam'),
			'section' => 'footer-section'
		)
	);
	$wp_customize->add_setting(
		'footer-phone'
	);
	$wp_customize->add_control(
		'footer-phone',
		array(
			'label' => esc_html__('Phone', 'gh-exam'),
			'section' => 'footer-section'
		)
	);
	$wp_customize->add_setting(
		'footer-address'
	);
	$wp_customize->add_control(
		'footer-address',
		array(
			'label' => esc_html__('Address', 'gh-exam'),
			'section' => 'footer-section'
		)
	);
	$wp_customize->add_setting(
		'footer-copy'
	);
	$wp_customize->add_control(
		'footer-copy',
		array(
			'label' => esc_html__('Copyright', 'gh-exam'),
			'section' => 'footer-section'
		)
	);
	$wp_customize->add_setting(
		'footer-bg'
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'footer-bg',
			array(
				'label' => esc_html__('Background image', 'gh-exam'),
				'section' => 'footer-section'
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
            background: url(<?php echo get_theme_mod('footer-bg') ?>)center /cover no-repeat;
        }


        /* -------------------- Hide sections --------------------- */
        <?php if( false === get_theme_mod( 'info_hide' ) ) { ?>
        .home-info { display: none; }
        <?php } // end if ?>
        <?php if( false === get_theme_mod( 'info_hide' ) ) { ?>
        .partners { display: none; }
        <?php } // end if ?>
        <?php if( false === get_theme_mod( 'icons_hide' ) ) { ?>
        .icons { display: none; }
        <?php } // end if ?>



    </style>
    <?php
}
add_action('wp_head', 'custom_style');

function gh_exam_customize_preview_js() {
	wp_enqueue_script( 'gh_exam_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gh_exam_customize_preview_js' );
