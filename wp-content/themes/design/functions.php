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
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/mywebsite.css', array(), '1.0.0', 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/mywebsite.js', array(), '1.0.1', true);
}

add_action('wp_enqueue_scripts', 'MyWebSite_script_enqueue');

/*
  ===============================
  Active Menus
  ===============================
 */

function design_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', 'primary header navigation');
    register_nav_menu('secondary', 'secondary header Navigation');
}

add_action('init', 'design_theme_setup');
/*
  ===============================
  Theme Suport SetUp
  ===============================
 */
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

/*
  ===============================
  Sidebar SetUp
  ===============================
 */

function design_sidebar() {
    register_sidebar(
            array(
                'name' => 'Sidebar',
                'id' => 'sidebar-1',
                'class' => 'custom',
                'description' => 'standared',
                'before_widget' => '<li id="%1$s" class="widget %2$s">',
                'after_widget' => '</li>',
                'before_title' => '<h2 class="widgettitle">',
                'after_title' => '</h2>',
            )
    );
}

add_action('widgets_init', 'design_sidebar');

