<?php

namespace LobbyKit\Intra;

class Setup
{
    public function __construct()
    {
        add_filter('pre_http_request', '\LobbyKit\Intra\Setup::wp_api_block_request', 10, 3);
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
}

new Setup();
