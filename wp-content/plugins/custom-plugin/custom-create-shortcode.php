<?php

function dwwp_custome_shortcode_callback($atts, $content = NULL) {
    //print_r($atts);
    $atts = shortcode_atts(
            array(
        'title' => 'Default Title',
        'src' => 'ww.google.com'
            ), $atts
    );
    //print_r($atts);
    //print_r($content);
    return '<h1>' . $atts['title'] . '</h1>';
}

add_shortcode('custom_shortcode', 'dwwp_custome_shortcode_callback');

function dwwp_shortcode_callback($atts, $content = NULL) {
    //print_r($atts);
    $atts = shortcode_atts(
            array(
        'title' => 'My Title',
        'src' => 'ww.google.com'
            ), $atts
    );
    
    return '<h1>' . $atts['title'] . '</h1>';
}

add_shortcode('custom_shortcode', 'dwwp_shortcode_callback');


