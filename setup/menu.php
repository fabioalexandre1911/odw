<?php
if (!function_exists('themeMenu')) :

    function themeMenu()
    {
        /** register menu */
        register_nav_menus(
            array(
                'primary' => esc_html__('Menu Principal', 'odw')
            )
        );
    }

    add_action('after_setup_theme', 'themeMenu');

endif;

