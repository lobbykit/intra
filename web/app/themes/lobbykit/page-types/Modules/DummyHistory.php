<?php
class Dummy_History_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'     => 'module',
            'name'          => __('Dummy History', 'intra'),
            'description'   => __('This module is just a dummy...', 'intra'),
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
    }
}
