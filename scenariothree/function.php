<?php
function assignment_one_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'assignment-two'),
    ));
}
add_action('after_setup_theme', 'assignment_one_theme_setup');
function custom_theme_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_style');
