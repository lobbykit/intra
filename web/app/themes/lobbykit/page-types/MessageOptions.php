<?php

class Message_Options_Type extends Papi_Option_Type
{
    public function meta()
    {
        return [
            'menu' => 'themes.php',
            'name' => __('Messages', 'intra'),
        ];
    }

    public function register()
    {
        $this->box(__('Authentication', 'intra'), [

            papi_property([
                'slug'        => 'message_login',
                'title'       => __('Login', 'intra'),
                'description' => __('Shows when the user tries to login to LobbyKit', 'intra'),
                'type'        => 'editor',
            ]),

            papi_property([
                'slug'        => 'message_forgot',
                'title'       => __('Forgot', 'intra'),
                'description' => __('When the user tries to get a login link', 'intra'),
                'type'        => 'editor',
            ]),

            papi_property([
                'slug'        => 'message_register',
                'title'       => __('Register', 'intra'),
                'description' => __('When the user tries to register new account', 'intra'),
                'type'        => 'editor',
            ]),

            papi_property([
                'slug'        => 'message_new_account',
                'title'       => __('New account success', 'intra'),
                'description' => __('When a new account is created with the green new message to user', 'intra'),
                'type'        => 'editor',
            ]),

            papi_property([
                'slug'        => 'message_email_welcome',
                'title'       => __('Email welcome', 'intra'),
                'description' => __('Email text when user gets new welcome mail', 'intra'),
                'type'        => 'editor',
            ]),

        ]);
    }
}
