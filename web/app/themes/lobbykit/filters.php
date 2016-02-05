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

add_action('wp_ajax_nopriv_login', 'LobbyKit\Intra\Authentications\Login::ajax');
add_action('wp_ajax_nopriv_forgot', 'LobbyKit\Intra\Authentications\Forgot::ajax');
add_action('wp_ajax_nopriv_forgot_request', 'LobbyKit\Intra\Authentications\Forgot::request');
add_action('wp_ajax_nopriv_register', 'LobbyKit\Intra\Authentications\Register::ajax');

add_action('phpmailer_init', 'LobbyKit\Intra\Mandrill::initPHPMailer');

add_filter('wp_mail_content_type', function ($content_type) {
    return 'text/html';
});
