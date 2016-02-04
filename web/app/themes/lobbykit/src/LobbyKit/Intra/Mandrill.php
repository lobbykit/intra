<?php

namespace LobbyKit\Intra;

class Mandrill
{
    protected $subject;
    protected $body;
    protected $text;
    protected $to_name;
    protected $to_email;
    protected $result;

    /**
     * Will send message via Mandrill.
     *
     * @return bool result
     */
    public function send()
    {
        $mandrill = new \Mandrill(papi_get_option('mandrill_key'));
        $message = [
            'html'       => $this->body,
            'text'       => $this->text,
            'subject'    => $this->subject,
            'from_email' => papi_get_option('mandrill_from'),
            'from_name'  => papi_get_option('mandrill_from_name'),
            'to'         => [
                [
                    'email' => $this->to_email,
                    'name'  => $this->to_name,
                    'type'  => 'to',
                ],
            ],
            'headers'    => $headers,
        ];
        $async = false;
        try {
            $this->result = $mandrill->messages->send($message, $async);

            return true;
        } catch (Mandrill_Error $e) {
            $this->result = $e->getMessage();

            return false;
        }
    }

    /**
     * Set the body.
     *
     * @param string $body message body
     */
    public function setBody($body)
    {
        $this->body = $body;
        $this->text = substr(strip_tags($body), 0, 100);
    }

    /**
     * Sets the subject.
     *
     * @param string $subject strips tags and set subject
     */
    public function setSubject($subject)
    {
        $this->subject = strip_tags($subject);
    }

    /**
     * Set message to email.
     *
     * @param string $email the email address
     */
    public function setToEmail($email)
    {
        $this->to_email = $email;
    }

    /**
     * Sets message to name.
     *
     * @param string $name the name of the message receiver
     */
    public function setToName($name)
    {
        $this->to_name = $name;
    }

    /**
     * [getResult description].
     *
     * @return [type] [description]
     */
    public function getResult()
    {
        return $this->result;
    }
}
