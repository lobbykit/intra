<?php

namespace LobbyKit\Intra\Authentications;

class Register
{
    public static function ajax()
    {
        $result = [];

        $result['success'] = false;
        $result['message'] = __('NONO!', 'intra');

        echo json_encode($result);

        exit(0);
    }
}
