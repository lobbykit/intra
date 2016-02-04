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
                $subject = __('Login link','intra');
                $message = __('Login link required. This can only be used once.<br/>','intra');
                $link = admin_url('admin-ajax.php') . '?action=forgot&id=' . $user->ID . '&nonce=' . $nonce . '&token=' . $token;
                $message .= $link;

                $mail = new \LobbyKit\Intra\Mandrill();
                $mail->setBody($message);
                $mail->setSubject($subject);
                $mail->setToEmail($email);

                if (!$mail->send()) {
                    $result['success'] = false;
                    $result['message'] = $mail->getResult();
                } else {
                    $result['success'] = true;
                    $result['message'] = __('Login link sent! Check your email...', 'intra');
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
