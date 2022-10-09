<?php

include 'include/class-wp-bootstrap-navwalker.php';

// Add Theme Support
    add_theme_support('post-thumbnails');


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
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js',array(),'1.0',false);
}
add_action( 'wp_enqueue_scripts', 'add_scripts' );


// Add script Files To Theme
function theme_settings($wp_customize)
{
    $wp_customize->add_panel('theme_options', array(
        'title'    => 'Theme Settings',
        'description' => 'Desc Header',
    ));

    //  =============================
    //  = logo header Upload              =
    //  =============================
    $wp_customize->add_section('header_section', array(
        'title'    => 'Header',
        'description' => 'Desc Header',
        'panel' => 'theme_options'
    ));
    $wp_customize->add_setting('header_logo_settings', array(
        'default'           => get_template_directory_uri() .'/images/default_logo.png',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label'    => 'logo Upload',
        'section'  => 'header_section',
        'settings' => 'header_logo_settings',
    )));

    //  =============================
    //  = Social Media Section           =
    //  =============================

    $wp_customize->add_section('social_media_section', array(
        'title'    => 'Social Media',
        'description' => 'Desc Social Media',
        'panel' => 'theme_options'
    ));

    $wp_customize->add_setting('fb_social_media', array(
        'default'           => 'https://www.facebook.com',
    ));
    $wp_customize->add_control( 'fb_social_media_field', array(
        'label'    => 'Url facebook',
        'section'  => 'social_media_section',
        'settings' => 'fb_social_media',
    ));

    $wp_customize->add_setting('twitter_social_media', array(
        'default'           => 'https://www.twitter.com',
    ));
    $wp_customize->add_control( 'twitter_social_media_field', array(
        'label'    => 'Url twitter',
        'section'  => 'social_media_section',
        'settings' => 'twitter_social_media',
    ));
    $wp_customize->add_setting('google_plus_social_media', array(
        'default'  => 'https://www.google.com',
    ));
    $wp_customize->add_control( 'google_plus_social_media_field', array(
        'label'    => 'Url google-plus',
        'section'  => 'social_media_section',
        'settings' => 'google_plus_social_media',
    ));

    $wp_customize->add_setting('linkedin_social_media', array(
        'default'  => 'https://www.linkedin.com',
    ));
    $wp_customize->add_control( 'linkedin_social_media_field', array(
        'label'    => 'Url linkedin',
        'section'  => 'social_media_section',
        'settings' => 'linkedin_social_media',
    ));


}
add_action( 'customize_register', 'theme_settings' );


function register_menu(){
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu'
    ));
}
add_action( 'after_setup_theme', 'register_menu' );
