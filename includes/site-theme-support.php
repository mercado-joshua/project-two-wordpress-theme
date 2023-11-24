<?php

/**
 * @package projectone
 */

/**
 * Enables "add theme support"
 */

function prjt_theme_support() {

    // adds <title>sitename</title> dynamically
    add_theme_support( 'title-tag' );

    // adds site logo to the wordpress dashboard
    add_theme_support( 'custom-logo', array(
        'height' => 250,
        'width' => 250,
        'flex-width' => true,
        'flex-height' => true
    ));

    // adds featured image to any posts
    add_theme_support( 'post-thumbnails' );

    // adds default posts and comments rss feed links to head
    add_theme_support( 'automatic-feed-links' );

    // add support for selective refresh for widgets
    add_theme_support( 'customize-selective-refresh-widgets' );

    // switch default markup
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    // activate post formats
    add_theme_support( 'post-formats', array(
        'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'
    ));
}

add_action( 'after_setup_theme', 'prjt_theme_support' );