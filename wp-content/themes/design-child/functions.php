<?php

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function dwwp_change_icon($args) {
    $args['menu-icon'] = 'dashicons-admin-multisite';
    return $args;
}

add_filter('prowp_register_my_post_types', 'dwwp_change_icon');

