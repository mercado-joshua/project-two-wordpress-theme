<?php

/**
 * @package projectone
 */

/**
 * Registers CSS stylesheets
 */

function prjt_admin_register_styles() {
    $version = wp_get_theme()->get( 'Version' );

    wp_register_style( 
        'prjt_admin_style', 
        get_stylesheet_uri(), 
        array(), 
        $version, 
        'all' 
    );

    wp_enqueue_style( 'prjt_admin_style' );
}

add_action( 'admin_enqueue_scripts', 'prjt_admin_register_styles' );