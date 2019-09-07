<?php

/*  
 * /scorpiotek-accessibility.php
 *
 * @package ScorpioTekAccessibility
 * @author  Manfred Dahmen, Paola Ortega, Christian Saborío
 * @license https://wordpress.org/about/gpl/ GNU General Public License
 * 
    Plugin Name: ScorpioTek Accessibility
    Description: A WordPress plugin that exposes a class to display accessibility button functionality in your website.
    Author: Manfred Dahmen, Paola Ortega, Christian Saborío
    @since  0.0.1
    Version: 0.0.1
	Text Domain: scorpiotek_accessibility
*/

namespace ScorpioTek\WordPress\Accessibility;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

define('STA_VERSION', '0.0.1');
define("PLUGIN_DIR", plugin_dir_path(__FILE__));

// Load Assets File
if ( file_exists( PLUGIN_DIR . '/inc/assets.php' ) ) {
    require_once( 'inc/assets.php' );
}
else {
    error_log( 'Error loading file /inc/assets.php' );
}

// Load the Classes File
if ( file_exists( PLUGIN_DIR . '/inc/AccessibilityButtonBuilder.php' ) ) {
    require_once( 'inc/AccessibilityButtonBuilder.php' );
}
else {
    error_log( 'Error loading file /inc/AccessibilityButtonBuilder.php' );
}

// Load the Shortcodes File
/*
 * The easiest way to test this would be to attach each 
 * action to a short code, create a blank post in WordPress
 * and load each short code. More info about shortcode 
 * debugging here:
 * 
 * https://wpshout.com/how-to-create-wordpress-shortcodes/
 * 
*/

if ( file_exists( PLUGIN_DIR . '/inc/shortcodes.php' ) ) {
    require_once( 'inc/shortcodes.php' );
}
else {
    error_log( 'Error loading file /inc/shortcodes.php' );
}