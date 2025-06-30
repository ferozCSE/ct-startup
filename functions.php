<?php
// Load Tailwind CSS in frontend
function ct_startup_enqueue_styles() {
    wp_enqueue_style(
        'ct-startup-style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css') // cache busting
    );
}
add_action('wp_enqueue_scripts', 'ct_startup_enqueue_styles');

// Load startup CSS in block editor (FSE)
function ct_startup_enqueue_editor_styles() {
    add_editor_style('style.css');
}
add_action('admin_init', 'ct_startup_enqueue_editor_styles');