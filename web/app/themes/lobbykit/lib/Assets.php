<?php
/**
 * Global assets functions.
 */
function assets($file)
{
    return get_stylesheet_directory_uri().'/dist/'.$file;
}
