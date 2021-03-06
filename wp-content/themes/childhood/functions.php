<?php
add_action('wp_enqueue_scripts', 'childhood_scripts');
function childhood_scripts ()
{
    wp_enqueue_style('childhoodStyle', get_stylesheet_uri());
    wp_enqueue_style('childhoodStyle2', get_template_directory_uri() . '/assets/styles/style2.css');
    wp_enqueue_script('childhoodScript', get_template_directory_uri().'/assets/js/main.min.js', array(), null, true);
}
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_filter( 'wpcf7_validate_configuration', '__return_false' );