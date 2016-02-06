<?php
return [
    'title' => 'Sidebar',
    
    papi_property([
        'slug'        => 'sidebar_post',
        'title'       => __('Sidebar Reference', 'intra'),
        'description' => __('Points to another page sidebar', 'intra'),
        'type'        => 'post',
        'settings'    => [
            'placeholder' => 'No page selected, inherit startpage if sidebar empty',
            'post_type' => 'page',
        ],
    ]),

    papi_property([
        'slug'        => 'sidebar',
        'title'       => __('Sidebar', 'intra'),
        'description' => __('If no sidebar reference then place modules here!', 'intra'),
        'type'        => 'relationship',
        'rules' => [
            [
            'operator' => '=',
            'value'    => null,
            'slug'     => 'sidebar_post'
            ],
        ],
        'settings'    => [
            'post_type' => 'module',
        ],
    ]),

];