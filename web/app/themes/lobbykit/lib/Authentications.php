<?php
namespace LobbyKit\Intra;

class Authentications
{
    public function __construct()
    {
        add_action('wp_ajax_nopriv_login', '\LobbyKit\Intra\Authentications::login');
    }

    public static function login()
    {
        $result = [];

        $nonce = isset($_REQUEST['nonce']) ? $_REQUEST['nonce'] : '';
        if ($nonce && wp_verify_nonce($nonce, 'lobbykit')) {
            if (is_user_logged_in()) {
                wp_logout();
            }

            $user = \get_user_by('email', $_REQUEST['email']);
            if (!$user) {
                $user = \get_user_by('login', $_REQUEST['email']);
            }

            if (!$user) {
                $result['success'] = false;
                $result['message'] = __("Sorry! Given credentials is not correct.",'intra');
            } else {
                $creds = [];
                $creds['user_login'] = $user->user_login;
                $creds['user_password'] = $_REQUEST['password'];
                $creds['remember'] = isset($_REQUEST['remember'])?$_REQUEST['remember']:false;
                $user = wp_signon($creds, false);
                if (is_wp_error($user)) {
                    $result['success'] = false;
                    $result['message'] = __("Sorry! Given credentials is not correct.",'intra');
                } else {
                    $result['success'] = true;
                    $result['message'] = __("Welcome! We will now start redirecting you...",'intra');
                }
            }
        } else {
            $result['success'] = false;
            $result['message'] = __("Security error! Try reload the page and try again! (nonce=$nonce)",'intra');
        }

        echo json_encode($result);

        exit(0);
    }
}

new Authentications();
