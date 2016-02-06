<?php

return [
    'title'       => 'Main',
    'description' => 'sasdas',
    papi_property([
        'slug'        => 'modules',
        'title'       => __('Modules', 'intra'),
        'description' => __('Modules to display on page', 'intra'),
        'type'        => 'relationship',
        'settings'    => [
            'post_type' => 'module',
        ],
    ]),

];
