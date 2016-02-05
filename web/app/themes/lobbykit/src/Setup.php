<?php

namespace LobbyKit\Intra;

class Setup
{
    public static function theme_setup()
    {
        load_theme_textdomain('intra', get_template_directory().'/languages');
    }

    /**
     * Block external WordPress API request.
     */
    public static function wp_api_block_request($pre, $args, $url)
    {
        if (strpos($url, 'api.wordpress.org')) {
            return true;
        } else {
            return $pre;
        }
    }

    public static function register_menues()
    {
        register_nav_menus([
            'sidebar-authorized'   => __('Sidebar Authorized', 'intra'),
            'sidebar-unauthorized' => __('Sidebar Unauthorized', 'intra'),
            'footer-menu'          => __('Footer Menu', 'intra'),
        ]);
    }

    public static function special_nav_class($classes, $item)
    {
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active ';
        }

        return $classes;
    }
}
