<?php

/**
 * @package projectone
 */

/**
 * [1] Registers CSS stylesheets
 */

function prjt_register_styles() {
    $version = wp_get_theme()->get( 'Version' );

    wp_register_style( 
        'prjt_fontawesome', 
        get_template_directory_uri() . '/assets/css/fontawesome.css', 
        array(), 
        '6.4.2', 
        'all' 
    );

    wp_enqueue_style( 'prjt_fontawesome' );


    wp_register_style( 
        'prjt_bootstrap', 
        get_template_directory_uri() . '/assets/css/bootstrap.css',
        array(), 
        '5.3.2', 
        'all'
    );

    wp_enqueue_style( 'prjt_bootstrap' );


    wp_register_style( 
        'prjt_style', 
        get_stylesheet_uri(), 
        array( 'prjt_bootstrap' ), 
        $version, 
        'all' 
    );

    wp_enqueue_style( 'prjt_style' );
}

add_action( 'wp_enqueue_scripts', 'prjt_register_styles' );

/**
 * [2] Remove CSS stylesheets
 */


/** remove gutenberg block library */

function prjt_remove_block_library() {
    wp_dequeue_style( 'wp-block-library' );
}


add_action( 'wp_print_styles', 'prjt_remove_block_library' );

/** remove wp-emoji css */
remove_action( 'wp_print_styles', 'print_emoji_styles' );