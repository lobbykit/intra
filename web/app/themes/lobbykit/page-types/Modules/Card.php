<?php

class Card_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'     => 'module',
            'name'          => __('Card', 'intra'),
            'description'   => __('A simple card to place in sidebar or modules', 'intra'),
            'template'      => LobbyKit\Intra\Papi::template(),
            'thumbnail'     => LobbyKit\Intra\Papi::thumbnail(),
        ];
    }

    public function remove($post_type_supports = [])
    {
        return [
            'commentstatusdiv',
        ];
    }

    public function register()
    {
        $this->box(__('Call To Action', 'intra'), [

            papi_property([
                'slug'        => 'cta',
                'title'       => __('Link button', 'intra'),
                'description' => __('A call to action button / link under text', 'intra'),
                'type'        => 'link',
            ]),

            papi_property([
                'slug'        => 'cta_color',
                'title'       => __('Link button color', 'intra'),
                'description' => __('The color of the link button', 'intra'),
                'type'        => 'dropdown',
                'settings'    => [
                    'placeholder' => __('Select a color!', 'intra'),
                    'items'       => [
                        'No color' => 'btn-secondary',
                        'Red'      => 'btn-danger',
                        'Green'    => 'btn-success',
                        'Blue'     => 'btn-primary',
                        'Orange'   => 'btn-warning',
                        'Link'     => 'btn-link',
                    ],
                ],
            ]),

        ]);
    }
}
