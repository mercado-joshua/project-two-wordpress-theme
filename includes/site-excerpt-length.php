<?php

/**
 * @package projectone
 */

/**
 * Set Custom Excerpt Length
 */

function prjt_excerpt_length() {
    $length = 15; // set number of characters allowed

    return $length; 
}    


add_filter( 'excerpt_length', 'prjt_excerpt_length' );