<?php

// Enqueuing
function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('fonts', "https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap", [], 'all');
    wp_enqueue_style('fonts');

    wp_enqueue_style('cmstheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

    wp_register_style('main', get_template_directory_uri() . '/style.css', [], 1, 'all');
    wp_enqueue_style('main');


}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{   

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', [], 1, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');


// Nav Menus
register_nav_menus( array(
    'top-menu' => __( 'Top Menu', 'theme' ),
    'footer-menu' => __( 'Footer Menu', 'theme' ),
) );

// Theme Support
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// Image Sizes
add_image_size('small', 600, 600, false);