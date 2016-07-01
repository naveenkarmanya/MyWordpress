<?php

function remove_dashboard_widgets() {

    remove_meta_box('dashboard_primary', 'dashboard', 'side');
}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

function dwwp_addaction_hooks() {
    global $wp_admin_bar;
    //var_dump($wp_admin_bar);
    $wp_admin_bar->add_menu(array(
        'id' => 'custommenu',
        'title' => 'CustomMenu',
        'href' => 'https://www.google.com'
    ));
}

add_action('wp_before_admin_bar_render', 'dwwp_addaction_hooks');
