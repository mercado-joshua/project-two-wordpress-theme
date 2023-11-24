<?php

/**
 * @package projectone
 */

/**
 * Adds customization settings to the wordpress dashboard
 */


function prjt_customizer_settings( $wp_customizer ) {

    /**
     * Header Background Section
     */

    // [1] include a section
    $wp_customizer->add_section( 'header', array(
        'title' => __( 'Header Settings', 'projectone' ),
        'priority' => 70
    ));

    // [2] add capabilities to the section
    $wp_customizer->add_setting( 'header_image', array(
        'capability' => 'edit_theme_options'
    ));

    // [3] add controls in the customizer settings: creates button for uploading image
    $wp_customizer->add_control( new WP_Customize_Image_Control( $wp_customizer, 'header_image', array(
        'label' => __( 'Header Image', 'projectone' ),
        'section' => 'header'
    )));

    /**
     * Header Title
     */

    // [a] add capabilities to the section
    $wp_customizer->add_setting( 'header_title', array(
        'capability' => 'edit_theme_options',
        'default' => 'type your title here...'
    ));

    // [b] add controls in the customizer settings: creates button for uploading image
    $wp_customizer->add_control( 'header_title', array(
        'label' => __( 'Header Title', 'projectone' ),
        'description' => 'Change header title',
        'settings' => 'header_title',
        'section' => 'header'
    ));


    /**
     * Header Description
     */

    // [a] add capabilities to the section
    $wp_customizer->add_setting( 'header_desc', array(
        'capability' => 'edit_theme_options',
        'default' => 'type your description here...'
    ));

    // [b] add controls in the customizer settings: creates button for uploading image
    $wp_customizer->add_control( 'header_desc', array(
        'label' => __( 'Header Description', 'projectone' ),
        'description' => 'Change header description',
        'settings' => 'header_desc',
        'section' => 'header'
    ));
}


add_action( 'customize_register', 'prjt_customizer_settings' );