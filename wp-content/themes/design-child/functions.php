<?php

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function dwwp_change_icon($plural) {
    $plural['name'] = 'naveen';
    return $args;
}

add_filter('dwwp_post_type_args', 'dwwp_change_icon');

?>