<?php
function theme_setup()
{
    // Register navigation menu
    register_nav_menu('primary', __('Primary Menu'));

    // Enqueue scripts and styles
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '', true);
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/custom.min.css', array(), '1.0', 'all');
    wp_enqueue_style('core-styles', get_template_directory_uri() . '/css/core.min.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'theme_setup');
