<?php
class Article_Page_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'     => 'page',
            'name'          => __('Article page', 'intra'),
            'description'   => __('Simple text and modules under', 'intra'),
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
        $this->box(__('Modules', 'intra'), [
            papi_property([
                'slug' => 'modules',
                'title' => __('Modules', 'intra'),
                'description' => __('Modules to display on page under the content', 'intra'),
                'type'  => 'relationship',
                'settings' => [
                    'post_type' => 'module',
                ],
            ]),
        ]);
    }
}
