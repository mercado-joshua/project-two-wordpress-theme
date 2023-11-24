<?php

/**
 * @package projectone
 */

/**
 * Registers navigation menus
 */

function prjt_nav_menus() {
    $locations = array(
        'primary_menu' => __( 'Primary Header Nav Menu', 'projectone' )
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'prjt_nav_menus' );