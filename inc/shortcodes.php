<?php

use ScorpioTek\WordPress\Accessibility\AccessibilityButtonBuilder;

if ( class_exists( AccessibilityButtonBuilder::class ) ) {
    $abb = new AccessibilityButtonBuilder();

    add_shortcode( 'display_default_text_button', array( $abb, 'display_default_text_button') );
    add_shortcode( 'display_increase_font_size_button', array( $abb, 'display_increase_font_size_button' ) );
    add_shortcode( 'display_toggle_dyslexic_font_button', array( $abb, 'display_toggle_dyslexic_font_button' ) );
    add_shortcode( 'display_toggle_contrast_button', array( $abb, 'display_toggle_contrast_button' ) );
}