<?php

function prowp_register_my_post_types() {
    register_post_type('terminals', array(
        'labels'                 => array(
            'name'               => 'Terminals',
            'singular_name'      => 'Terminal',
            'add_new'            => 'Add New Terminal',
            'add_new_item'       => 'Add New Terminal',
            'edit_item'          => 'Edit Terminal',
            'new_item'           => 'New Terminal',
            'all_items'          => 'All Terminals',
            'view_item'          => 'View Terminal',
            'search_items'       => 'Search Terminals',
            'not_found'          => 'No Terminals found',
            'not_found_in_trash' => 'No Terminals found in Trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Terminals',
        ),
        'public'        => true,
        'menu_icon'     => 'dashicons-admin-site',
        'has_archive'   => true,
        'taxonomies'    => array('category'),
        'rewrite'       => array(
            'slug'      => 'gallery',
            'pages'     => true,
        ),
        'supports' => array(
            'title',
            'editor',
            'author',
            'custom-fields',
            'thumbnail',
            'comments'
        ))
    );
    register_post_type('gallery', array(
        'labels'                 => array(
            'name'               => 'gallaries',
            'singular_name'      => 'gallery',
            'add_new'            => 'Add New gallery',
            'add_new_item'       => 'Add New gallery',
            'edit_item'          => 'Edit gallery',
            'new_item'           => 'New gallery',
            'all_items'          => 'All gallery',
            'view_item'          => 'View gallery',
            'search_items'       => 'Search gallery',
            'not_found'          => 'No gallery found',
            'not_found_in_trash' => 'No gallery found in Trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'gallery'
        ),
        'public' => true,
        'menu_icon'     => 'dashicons-dashboard',
        'has_archive'   => true,
        'taxonomies'    => array('category'),
        'rewrite'       => array(
            'slug'      => 'gallery',
            'pages'     => true,
        ),
        'supports' => array(
            'title',
            'editor',
            'author',
            'custom-fields',
            'thumbnail',
            'comments'
        ))
    );
}

add_action('init', 'prowp_register_my_post_types');


