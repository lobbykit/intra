<?php


namespace LobbyKit\Intra;

if (!defined('ABSPATH')) {
    die('ABSPATH is missing!');
}

function autoloader($class)
{
    $namespace_parts = explode('\\', $class);
    $file_parts = array_map(__NAMESPACE__.'\\convert_namespace_part_to_file_part', $namespace_parts);
    $file = get_theme_root().'/lobbykit/src/'.implode(DIRECTORY_SEPARATOR, $file_parts).'.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register(__NAMESPACE__.'\\autoloader');

/**
 * Convert namespace part to file part.
 *
 * @param string $part namespace part
 *
 * @return string filename part
 */
function convert_namespace_part_to_file_part($part)
{
    return str_replace('_', '-', $part);
}
