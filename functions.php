<?php
/**
 * @package twentytwenty
 */

/**
 * -----------------------------------+
 * Table of contents:
 * -----------------------------------+
 * 
 *  A. Hooks
 *  
 *  1. Enables "add theme support"
 *  2. Registers navigation menus
 *  3. Registers CSS stylesheets
 *  4. Registers JS scripts
 *  5. Enables "widget support"
 *  6. Adds customization to dashboard 
 *     site settings
 *  7. Set custom excerpt length
 *  8. Remove wordpress generator version
 * 
 *  B. Collection of walkers
 * 
 *  1. walker_nav_primary
 */



 
/**
 * -----------------------------------+
 * HOOKS
 */

/**
 * [1] Enables "add theme support"
 */
require_once( get_template_directory() . '/includes/site-theme-support.php' );


/**
 * [2] Registers navigation menus
 */
require_once( get_template_directory() . '/includes/site-nav-menus.php' );


/**
 * [3] Registers CSS stylesheets
 */
require_once( get_template_directory() . '/includes/site-register-styles.php' );


/**
 * [4] Registers JS scripts
 */
require_once( get_template_directory() . '/includes/site-register-scripts.php' );


/**
 * [5] Enables "widget support"
 */
require_once( get_template_directory() . '/includes/site-widgets.php' );


/**
 * [6] Adds customization to dashboard site settings
 */
require_once( get_template_directory() . '/includes/site-customizer-settings.php' );


/**
 * [7] Set Custom Excerpt Length
 */
require get_template_directory() . '/includes/site-excerpt-length.php';

/**
 * [8] Remove wordpress generator version
 */
require get_template_directory() . '/includes/site-remove-generator-version.php';




/**
 * -----------------------------------+
 * COLLECTION OF WALKERS
 */

/**
 * [1] WALKER_NAV_PRIMARY
 */
require get_template_directory() . '/classes/walker_nav_primary.php';


