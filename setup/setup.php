<?php

if (!function_exists('themeSetup')) :

    function themeSetup()
    {
        /** supports */
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
    }

    add_action('after_setup_theme', 'themeSetup');

endif;
