<?php

namespace LobbyKit\Intra;

class Setup
{
    public function __construct()
    {
        add_filter('pre_http_request', '\LobbyKit\Intra\Setup::wp_api_block_request', 10, 3);
        add_action('init', '\LobbyKit\Intra\Setup::register_menues');
        add_filter('nav_menu_css_class', '\LobbyKit\Intra\Setup::special_nav_class', 10, 2);
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
            'sidebar-authorized' => __('Sidebar Authorized', 'intra'),
            'sidebar-unauthorized' => __('Sidebar Unauthorized', 'intra'),
            'footer-menu' => __('Footer Menu', 'intra'),
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

new Setup();
