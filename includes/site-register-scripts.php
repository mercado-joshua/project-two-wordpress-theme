<?php

/**
 * @package projectone
 */

/**
 * Registers JS scripts
 */

function prjt_register_scripts() {

    /**
     * [1] remove default jquery
     */

    wp_deregister_script( 'jquery' );

    /**
     * [2] vendor scripts
     */

    // jquery
    wp_register_script( 
        'prjt_jquery', 
        get_template_directory_uri() . '/assets/js/jquery.min.js', 
        array(), 
        '3.7.1', 
        'all',
        true 
    );

    wp_enqueue_script( 'prjt_jquery' );

    // fontawesome icons
    wp_register_script( 
        'prjt_fontawesome', 
        get_template_directory_uri() . '/assets/js/all.min.js', 
        array(), 
        '6.4.2', 
        'all',
        true 
    );

    wp_enqueue_script( 'prjt_fontawesome' );

    // bootstrap
    wp_register_script( 
        'prjt_bootstrap', 
        get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', 
        array( 'prjt_jquery' ), 
        '5.3.2', 
        'all',
        true 
    );

    wp_enqueue_script( 'prjt_bootstrap' );

    // polyfill
    wp_register_script( 
        'prjt_polyfill', 
        get_template_directory_uri() . '/assets/js/polyfill.min.js', 
        array(), 
        '1.0', 
        'all',
        true 
    );

    wp_enqueue_script( 'prjt_polyfill' );


    /**
     * [3] custom scripts
     */

    // wp_register_script( 
    //     'prjt_app', 
    //     get_template_directory_uri() . '/assets/js/behaviors/app.js',
    //     array(), 
    //     '1.0',
    //     'all',
    //     true 
    // );

    // wp_enqueue_script( 'prjt_app' );
}

add_action( 'wp_enqueue_scripts', 'prjt_register_scripts' );
