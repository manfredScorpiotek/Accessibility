<?php

namespace ScorpioTek\WordPress\Accessibility;

class AccessibilityButtonBuilder {

    public function __construct() {
        return 'ButtonBuilder created!';
    }

    public function display_default_text_button() {
        return '<h1>Some Header</h1>';
    }

    public function display_increase_font_size_button() {
        return 'display_increase_font_size_button invoked!';
    }

    public function display_toggle_dyslexic_font_button() {
        return 'display_toggle_dyslexic_font_button invoked!';
    }

    public function display_toggle_contrast_button() {
        return 'display_toggle_contrast_button invoked!';
    }

}