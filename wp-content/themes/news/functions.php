<?php


// Add Style Files To Theme
function add_styles() {
    wp_enqueue_style( 'media_query', get_template_directory_uri() . '/css/media_query.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style( 'owlCarousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style( 'owlCarouselthemeDefault', get_template_directory_uri() . '/css/owl.theme.default.css');
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'fontsGoogle', 'https://fonts.googleapis.com/css?family=Poppins');
    wp_enqueue_style( 'style_1', get_template_directory_uri() . '/css/style_1.css' );
}
add_action( 'wp_enqueue_scripts', 'add_styles' );

// Add script Files To Theme

function add_scripts() {
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
    wp_enqueue_script( 'carouselJS', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script( 'tetherJS', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js');
    wp_enqueue_script( 'bootstrapJS', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js');
    wp_enqueue_script( 'jquery_waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js');
//    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js',array(),'1.0',false);
}
add_action( 'wp_enqueue_scripts', 'add_scripts' );


// Add script Files To Theme
function theme_settings($wp_customize)
{
    $wp_customize->add_panel('theme_options', array(
        'title'    => 'Theme Settings',
        'description' => 'Desc Header',
    ));
    $wp_customize->add_section('header_section', array(
        'title'    => 'Header',
        'description' => 'Desc Header',
        'panel' => 'theme_options'
    ));

    // add Text
    $wp_customize->add_setting('input_header_section', array(
        'default'        => 'welcome',

    ));
    $wp_customize->add_control('input_header_text', array(
        'label'      => 'Test Text',
        'section'    => 'header_section',
        'settings'   => 'input_header_section',
    ));

    // add textarea
    $wp_customize->add_setting('textarea_header_section', array(
        'default'        => 'welcome textarea',

    ));
    $wp_customize->add_control('input_header_textarea', array(
        'label'      => 'Test textarea',
        'section'    => 'header_section',
        'settings'   => 'textarea_header_section',
        'type'       => 'textarea'
    ));

    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('header_logo_settings', array(
        'default'           => get_template_directory_uri() .'/images/default_logo.png',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label'    => 'logo Upload',
        'section'  => 'header_section',
        'settings' => 'header_logo_settings',
    )));
}
add_action( 'customize_register', 'theme_settings' );
