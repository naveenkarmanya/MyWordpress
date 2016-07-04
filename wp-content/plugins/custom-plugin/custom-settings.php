<?php

function dwwp_add_custom_submenu() {
    add_submenu_page(
            'edit.php?post_type=terminals', 
            'reorder terminals', 
            'reorder terminals', 
            'manage_options', 
            'reorder_terminlas', 
            'reorder_admin_terminals_callback'
    );
}

add_action('admin_menu', 'dwwp_add_custom_submenu');

function reorder_admin_terminals_callback() {
    $args = array(
        'post_type' => 'terminals',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'no_found_rows' => true,
        'update_post_term_cache' => false,
        'posts_per_page' => 10
    );
    $new_Query = new WP_Query($args);
    echo '<pre>';
    var_dump($new_Query);
    echo '</pre>';
}

function dwwp_add_custom_submenu_gallery() {
    add_submenu_page(
            'edit.php?post_type=gallery', 
            'reorder galleries', 
            'reorder galleries', 
            'manage_options', 
            'reorder_galleries', 
            'reorder_admin_galleries_callback'
    );
}

add_action('admin_menu', 'dwwp_add_custom_submenu_gallery');

function reorder_admin_galleries_callback()
{

$args = array( 
    'post_type' => 'gallery',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'no_found_rows' => true,
        'update_post_term_cache' => false,
        'posts_per_page' => 10
    );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  the_title();
  echo '<div class="entry-content">';
  the_content();
  echo "<h2>This is New query post </h2>";
  echo '</div>';
endwhile;
}

