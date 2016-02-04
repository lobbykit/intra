<?php

add_filter('show_admin_bar', '__return_false');

/**
 * Global assets functions.
 */
function assets($file)
{
    return \LobbyKit\Intra\Assets::get($file);
}
