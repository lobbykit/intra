<?php

add_action('init', 'LobbyKit\Intra\PostTypes::register');
add_action('wp_enqueue_scripts', 'LobbyKit\Intra\Assets::enqueueScripts');
add_filter('pre_http_request', 'LobbyKit\Intra\Setup::wp_api_block_request', 10, 3);
add_action('init', 'LobbyKit\Intra\Setup::register_menues');
add_filter('nav_menu_css_class', 'LobbyKit\Intra\Setup::special_nav_class', 10, 2);
add_action('after_setup_theme', 'LobbyKit\Intra\Setup::theme_setup');

add_filter('papi/settings/directories', function ($directories) {
    $directories[] = dirname(__FILE__).'/page-types';

    return $directories;
});

add_filter('gatekeeper/messages/new', function () {
    return papi_get_option('message_new_account');
});
