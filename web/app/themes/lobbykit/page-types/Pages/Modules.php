<?php
class Modules_Page_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'     => 'page',
            'name'          => __('Module page', 'intra'),
            'description'   => __('Simple page with modules', 'intra'),
            'template'      => LobbyKit\Intra\Papi::template(),
            'thumbnail'     => LobbyKit\Intra\Papi::thumbnail(),
        ];
    }

    public function remove($post_type_supports = [])
    {
        return [
            'commentstatusdiv',
            'editor',
        ];
    }
    
    public function register()
    {
        $this->box(__('Modules', 'intra'), [
            papi_property([
                'slug' => 'modules',
                'title' => __('Modules', 'intra'),
                'description' => __('Modules to display on page', 'intra'),
                'type'  => 'relationship',
                'settings' => [
                    'post_type' => 'module',
                ],
            ]),
        ]);
    }
}
