<?php

namespace LobbyKit\Intra\Authentications;

class Register
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

            if (!is_email($email)) {
                $result['success'] = false;
                $result['message'] = __('Email is not acceptable!', 'intra');
                echo json_encode($result);
                exit(0);
            }

            $display_name = esc_attr($_REQUEST['display_name']);

            if (!$display_name ||
                strlen($display_name)<3 ||
                !strpos($display_name, ' ')) {
                $result['success'] = false;
                $result['message'] = __('Please ensure first name and last name!', 'intra');
                echo json_encode($result);
                exit(0);
            }

            $password = esc_attr($_REQUEST['password']);
            if (strlen($password)<6) {
                $result['success'] = false;
                $result['message'] = __('Password needs to be at least 6 letters or digits long.', 'intra');
                echo json_encode($result);
                exit(0);
            }

            $phone = esc_attr($_REQUEST['phone']);
            $workplace = esc_attr($_REQUEST['workplace']);

            $user = \get_user_by('email', $_REQUEST['email']);
            if (!$user) {
                $user = \get_user_by('login', $_REQUEST['email']);
            }

            if ($user) {
                $result['success'] = false;
                $result['message'] = __('Email address already exists. Use the "Forgot password" to get a login link!', 'intra');
                echo json_encode($result);
                exit(0);
            } else {
                $user_id = wp_create_user($email, $password, $email);

                $name = explode(' ', $display_name);
                $user_data = [
                    'ID' => $user_id,
                    'display_name' => $display_name,
                    'first_name' => isset($name[0]) ? $name[0] : $display_name,
                    'last_name' => isset($name[1]) ? $name[1] : '',
                ];
                wp_update_user($user_data);

                update_user_meta($user_id, 'phone', $phone);
                update_user_meta($user_id, 'workplace', $workplace);

                if ($user_id) {
                    $result['success'] = true;
                    $result['message'] = papi_get_option('message_new_account');

                    $mail = new \LobbyKit\Intra\Mandrill();
                    $mail->setBody(papi_get_option('message_email_welcome'));
                    $mail->setSubject(get_bloginfo('title'));
                    $mail->setToName($display_name);
                    $mail->setToEmail($email);
                    $mail->send();

                } else {
                    $result['success'] = false;
                    $result['message'] = __('Not possible to create an account with the data given.', 'intra');
                }
            }
        } else {
            $result['success'] = false;
            $result['message'] = __("Security error! Try reload the page and try again! (nonce=$nonce)", 'intra');
        }


        echo json_encode($result);
        exit(0);
    }
}
