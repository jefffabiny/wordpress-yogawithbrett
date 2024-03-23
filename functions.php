<?php
function theme_register_nav_menu()
{
    register_nav_menu('primary', __('Primary Menu'));
}
add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_enqueue_scripts()
{
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/scripts.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function enqueue_custom_styles()
{
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
