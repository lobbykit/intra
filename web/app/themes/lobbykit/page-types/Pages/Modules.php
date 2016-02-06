<?php

class Modules_Page_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'     => 'page',
            'name'          => __('Module page', 'intra'),
            'description'   => __('Simple page with modules and a sidebar column', 'intra'),
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
        $this->box(__DIR__.'/../Templates/Module.php');
        $this->box(__DIR__.'/../Templates/Sidebar.php');
    }
}
