<?php

function custom_post_types() {

    #Professor Post Type
    register_post_type('professor', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'professors'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Professors',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor',
        ),
        'menu_icon' => 'dashicons-welcome-learn-more',
    ));

    #Program Post Type
    register_post_type('department', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'departments'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Departments',
            'add_new_item' => 'Add New Department',
            'edit_item' => 'Edit Department',
            'all_items' => 'All Departments',
            'singular_name' => 'Department',
        ),
        'menu_icon' => 'dashicons-building',
    ));
}

add_action('init', 'custom_post_types');

?>