<?php
if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

function theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'theme'),
    ]);
}

function theme_scripts() {
    wp_enqueue_style('theme-style', get_stylesheet_uri(), [], _S_VERSION);
}