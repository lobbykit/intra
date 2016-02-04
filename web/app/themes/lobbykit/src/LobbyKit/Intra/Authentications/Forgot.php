<?php

namespace LobbyKit\Intra\Authentications;

class Forgot
{
    public static function ajax()
    {
        $result = [];

        $nonce = isset($_REQUEST['nonce']) ? $_REQUEST['nonce'] : '';
        if ($nonce && wp_verify_nonce($nonce, 'lobbykit')) {
            if (is_user_logged_in()) {
                wp_logout();
            }

            $email = esc_attr($_REQUEST['email']);
            $user = \get_user_by('email', $email);
            if (!$user) {
                $user = \get_user_by('login', $email);
            }

            if (!$user) {
                $result['success'] = false;
                $result['message'] = __('Sorry! Given credentials are not correct.', 'intra');
            } else {
                $token = md5(uniqid(rand(), true));
                update_user_meta($user->ID, 'login_token', $token);
                $subject = __('Login link to ', 'intra') . get_bloginfo('title');
                $message = __('Login link requested. This can only be used once.<br/>', 'intra');
                $link = admin_url('admin-ajax.php').'?action=forgot_request&id='.$user->ID.'&nonce='.$nonce.'&token='.$token;
                $message .= '<p><a href="' . $link . '">' . __('Secret Login Link', 'intra') . '</a></p>';

                $mail = new \LobbyKit\Intra\Mandrill();
                $mail->setBody($message);
                $mail->setSubject($subject);
                $mail->setToEmail($email);

                if (!$mail->send()) {
                    $result['success'] = false;
                    $result['message'] = $mail->getResult();
                } else {
                    $result['success'] = true;
                    $result['message'] = __('Login link sent. Check your inbox!', 'intra');
                }
            }
        } else {
            $result['success'] = false;
            $result['message'] = __("Security error! Try reload the page and try again! (nonce=$nonce)", 'intra');
        }

        echo json_encode($result);

        exit(0);
    }

    public static function request()
    {
        $nonce = isset($_REQUEST['nonce']) ? $_REQUEST['nonce'] : '';
        if ($nonce && wp_verify_nonce($nonce, 'lobbykit')) {
            if (is_user_logged_in()) {
                wp_logout();
            }

            $id = (int)($_REQUEST['id']);

            if ($id) {
                $token=$_REQUEST['token'];
                $user_token=get_user_meta($id, 'login_token', true);
                if ($user_token==$token) {
                    wp_clear_auth_cookie();
                    wp_set_current_user($id);
                    wp_set_auth_cookie($id);
                }
            }
        }
        wp_redirect('/');
        exit(0);
    }
}
