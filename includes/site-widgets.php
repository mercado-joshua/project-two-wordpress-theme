<?php

/**
 * @package projectone
 */

/**
 * Enables "widget support"
 */

function prjt_widget_areas() {
    register_sidebar( array(
        'before_title' => '<h2>',
        'after_title' => '</h2>',
        'before_widget' => '',
        'after_widget' => '',
        'id' => 'main-sidebar',
        'name' => __( 'Main Sidebar', 'projectone' ),
        'description' => __( 'Main Sidebar Widget', 'projectone' )
    ));
}

add_action( 'widgets_init', 'prjt_widget_areas' );
