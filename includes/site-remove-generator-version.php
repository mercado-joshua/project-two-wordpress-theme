<?php

/**
 * @package projectone
 */

/**
 * Remove Wordpress Generator Version
 */

 /** [1] removes <meta> wordpress generator version */
function prjt_remove_generator_version() {
    return ''; 
}

add_filter( 'the_generator', 'prjt_remove_generator_version' );

/** [2] remove version strings "&ver=" from js and css */
function prjt_remove_css_js_version( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

add_filter( 'script_loader_src', 'prjt_remove_css_js_version' );
add_filter( 'style_loader_src', 'prjt_remove_css_js_version' );