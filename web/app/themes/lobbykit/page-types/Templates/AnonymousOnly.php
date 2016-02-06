<?php

return [
    'title'        => __('Authorization', 'intra'),
    'context'      => 'side',
    'priority'     => 'default',
    papi_property([
        'slug'        => 'anonymous_only',
        'title'       => __('Anonymous only', 'intra'),
        'description' => __('Check this if only non logged in users should see this module', 'intra'),
        'type'        => 'bool',
    ]),

];
