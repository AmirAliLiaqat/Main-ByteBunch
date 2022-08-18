<?php

/*********************************** Register custom post types ***********************************/
function bb_register_portfolio() {
    $args = array(
        'label' => 'Portfolio',
        'description' => '',
        'menu_position' => 40,
        'public' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
		'can_export' => true,
		'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies' => array('category'),
		'capability_type' => 'page',
    );

    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'bb_register_portfolio' );

function bb_register_team() {
    $args = array(
        'label' => 'Team Members',
        'description' => '',
        'menu_icon' => 'dashicons-businessman',
        'menu_position' => 40,
        'public' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
		'can_export' => true,
		'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies' => array(),
		'capability_type' => 'page',
    );

    register_post_type( 'team', $args );
}
add_action( 'init', 'bb_register_team' );
