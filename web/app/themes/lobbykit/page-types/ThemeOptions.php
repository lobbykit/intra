<?php

class Theme_Options_Type extends Papi_Option_Type
{

    public function meta()
    {
        return [
            'menu' => 'themes.php',
            'name' => 'LobbyKit',
        ];
    }

    public function register()
    {
        $this->box(__('Authentication', 'intra'), [

            papi_property([
                'slug' => 'login_message',
                'title' => __('Login Message', 'intra'),
                'type' => 'text',
            ]),

            papi_property([
                'slug' => 'forgot_message',
                'title' => __('Forgot Message', 'intra'),
                'type' => 'text',
            ]),

            papi_property([
                'slug' => 'register_message',
                'title' => __('Register Message', 'intra'),
                'type' => 'text',
            ]),

            papi_property([
                
                'slug' => 'register_page',
                'title' => __('Register page', 'intra'),
                'type' => 'post',
                'settings' => [
                    'placeholder' => __('No register page set!', 'intra'),
                    'post_type' => 'page',
                ],

            ]),

            papi_property([
                
                'slug' => 'profile_page',
                'title' => __('Profile page', 'intra'),
                'type' => 'post',
                'settings' => [
                    'placeholder' => __('No profile page set!', 'intra'),
                    'post_type' => 'page',
                ],

            ]),

        ]);

        $this->box(__('Mandrill settings', 'intra'), [

            papi_property([
                'slug' => 'mandrill_from_name',
                'title' => __('From Name', 'intra'),
                'type' => 'string',
            ]),
            papi_property([
                'slug' => 'mandrill_from',
                'title' => __('From Email', 'intra'),
                'type' => 'string',
            ]),
            papi_property([
                'slug' => 'mandrill_key',
                'title' => __('Secret Key', 'intra'),
                'type' => 'string',
            ]),

        ]);
    }
}
