<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
  =================================
  Include Scripts
  =================================
 */

function MyWebSite_script_enqueue() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
    wp_enqueue_style('customcss', get_template_directory_uri() . '/css/components.css', array(), '3.3.4', 'all');

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/responsee.css', array(), '3.3.4', 'all');
    wp_enqueue_style('customcss1', get_template_directory_uri() . '/owl-carousel/owl.carousel.css', array(), '3.3.4', 'all');
    wp_enqueue_style('customcss2', get_template_directory_uri() . '/owl-carousel/owl.theme.css', array(), '3.3.4', 'all');
    wp_enqueue_style('customcss3', get_template_directory_uri() . '/css/template-style.css', array(), '3.3.4', 'all');

    wp_enqueue_script('jquery');
    wp_enqueue_script('customjs1', get_template_directory_uri() . '/js/jquery-1.8.3.min.js', array('jquery'));
    wp_enqueue_script('customjs2', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'));
    wp_enqueue_script('customjs3', get_template_directory_uri() . '/js/modernizr.js', array('jquery'));
    wp_enqueue_script('customjs4', get_template_directory_uri() . '/js/responsee.js', array('jquery'));
    wp_enqueue_script('customjs5', get_template_directory_uri() . '/owl-carousel/owl.carousel.js', array('jquery'));
    wp_enqueue_script('customjs6', get_template_directory_uri() . '/js/carousel.js', array('jquery'));
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
}

add_action('wp_enqueue_scripts', 'MyWebSite_script_enqueue');

/*
  ===============================
  Active Menus
  ===============================
 */

function mywebsite_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', 'primary header navigation');
    register_nav_menu('secondary', 'Footer Navigation');
    register_nav_menu('ternary', 'body Navigation');
}

add_action('init', 'mywebsite_theme_setup');
/*
  ===============================
  Theme Suport SetUp
  ===============================
 */
//add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',));


/*
  ===============================
  Sidebar SetUp
  ===============================
 */

function mywebsite_sidebar() {

    register_sidebar(
            array(
                'name' => 'Sidebar',
                'id' => 'sidebar-1',
                'class' => 'custom',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h1 class="widget-title">',
                'after_title' => '</h1>',
            )
    );
    register_sidebar(array(
        'name' => 'Content Sidebar',
        'id' => 'sidebar-2',
        'description' => 'custome',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => 'Footer Widget LeftArea',
        'id' => 'sidebar-3',
        'description' => 'custom',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => 'Footer Widget RightArea',
        'id' => 'sidebar-4',
        'description' => 'custom',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => 'Responsive Slider-1',
        'id' => 'sidebar-5',
        'description' => 'custom',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => 'Responsive Slider-2',
        'id' => 'sidebar-6',
        'description' => 'custom',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => 'Responsive Slider-3',
        'id' => 'sidebar-7',
        'description' => 'custom',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => 'Amazing Title',
        'id' => 'sidebar-8',
        'description' => 'custom',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => 'Google Map',
        'id' => 'sidebar-9',
        'description' => 'custom',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => 'Header Slider-1',
        'id' => 'sidebar-10',
        'description' => 'custom',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => 'Header Slider-2',
        'id' => 'sidebar-11',
        'description' => 'custom',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => 'Header Slider-3',
        'id' => 'sidebar-12',
        'description' => 'custom',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}

add_action('widgets_init', 'mywebsite_sidebar');

function prowp_register_my_post_types() {
    register_post_type('terminals', array(
        'labels' => array(
            'name' => 'Terminals',
            'singular_name' => 'Terminal',
            'add_new' => 'Add New Terminal',
            'add_new_item' => 'Add New Terminal',
            'edit_item' => 'Edit Terminal',
            'new_item' => 'New Terminal',
            'all_items' => 'All Terminals',
            'view_item' => 'View Terminal',
            'search_items' => 'Search Terminals',
            'not_found' => 'No Terminals found',
            'not_found_in_trash' => 'No Terminals found in Trash',
            'parent_item_colon' => '',
            'menu_name' => 'Terminals'
        ),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'rewrite' => array('slug' => 'terminal'),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments')
            )
    );
}

add_action('init', 'prowp_register_my_post_types');

function wpb_widgets_init() {

    register_sidebar(array(
        'name' => __('Main Sidebar', 'wpb'),
        'id' => 'sidebar-0',
        'description' => __('The main sidebar appears on the right on each page except the front page template', 'wpb'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        register_sidebar(array(
            'name' => __('Front page sidebar', 'wpb'),
            'id' => 'sidebar-01',
            'description' => __('Appears on the static front page template', 'wpb'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ))
    ));
}

add_action('widgets_init', 'wpb_widgets_init');


add_action('widgets_init', 'sydney_widgets_init');
