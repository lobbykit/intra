<?php
class Profile_Page_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'     => 'page',
            'name'          => __('Profile page', 'intra'),
            'description'   => __('A page to edit the current logged in profile', 'intra'),
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
    }
}
