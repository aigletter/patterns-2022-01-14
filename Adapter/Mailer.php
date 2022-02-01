<?php

namespace patterns\Adapter;

class Mailer implements MailerInterface
{
    public function sendMail($email, $text)
    {
        echo 'Sent mail with text "' . $text . '" to ' . $email . PHP_EOL;
    }
}