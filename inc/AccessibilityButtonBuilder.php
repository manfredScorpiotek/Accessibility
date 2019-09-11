<?php

namespace ScorpioTek\WordPress\Accessibility;

class AccessibilityButtonBuilder {

    public function __construct() {
        return 'ButtonBuilder created!';
    }

    public function display_default_text_button() {
        return '<button title="Reset Font" class="font-size-change" id="btn-orig" name="btn-orig">A</button>';
    }

    public function display_increase_font_size_button() {
        return '<button title="Increase Font" class="font-size-change" id="btn-increase" name="btn-increase">+A</button>';
    }

    public function display_toggle_dyslexic_font_button() {
        return '<button title="Dyslexic" class="font-size-change" id="btn-dis" name="btn-dis">D</button>';
    }

    public function display_toggle_contrast_button() {
        return 'display_toggle_contrast_button invoked!';
    }

}