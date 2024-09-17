<?php
if (!function_exists('themeEnqueue')) :

    function themeEnqueue()
    {
        wp_enqueue_style('theme-css', get_stylesheet_directory_uri() . '/build/index.css');

        wp_enqueue_script('theme-jquery', 'https://code.jquery.com/jquery-3.7.0.min.js', '', '3.7.0', true);
        wp_enqueue_script('theme-scripts', get_stylesheet_directory_uri() . '/build/index.js', '', '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'themeEnqueue');

endif;
