<?php
/**
 * Theme functions and definitions
 */

// Include theme setup and scripts
require get_template_directory() . '/inc/setup.php';

// Add action hooks
add_action('after_setup_theme', 'theme_setup');
add_action('wp_enqueue_scripts', 'theme_scripts');