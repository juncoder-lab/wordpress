<?php
add_action('wp_enqueue_scripts', 'childhood_scripts');
function childhood_scripts () {
    wp_enqueue_style('childhoodStyle', get_stylesheet_uri());
    wp_enqueue_style('childhoodStyle2', get_template_directory_uri() . '/assets/styles/style2.css');
    wp_enqueue_script('childhoodScript', get_template_directory_uri().'/assets/js/main.min.js', array(), null, true);
}