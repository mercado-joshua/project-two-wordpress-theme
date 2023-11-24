<?php

/**
 * @package projectone
 */

/**
 * Registers JS scripts
 */


function prjt_admin_register_scripts() {

    /**
     * [1] trigger the scripts of the media uploader
     */

    wp_enqueue_media(); 

    /**
     * [2] remove default jquery
     */

    wp_deregister_script( 'jquery' );

    /**
     * [3] vendor scripts
     */

    // jquery
    wp_register_script( 
        'prjt_admin_jquery', 
        get_template_directory_uri() . '/assets/js/jquery.min.js', 
        array(), 
        '3.7.1', 
        'all',
        true 
    );

    wp_enqueue_script( 'prjt_admin_jquery' );


    /**
     * [4] custom scripts
     */

    // wp_register_script( 
    //     'prjt_admin_app', 
    //     get_template_directory_uri() . '/assets/js/app.js',
    //     array( 'cust_admin_jquery' ), 
    //     '1.0',
    //     'all',
    //     true 
    // );

    // wp_enqueue_script( 'prjt_admin_app' );
}


add_action( 'admin_enqueue_scripts', 'prjt_admin_register_scripts' );