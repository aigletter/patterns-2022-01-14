<?php

namespace patterns\Adapter;

use PHPMailer\PHPMailer\PHPMailer;

class MailerExtended implements MailerInterface
{
    protected $mailer;

    public function __construct(PHPMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendMail($email, $text)
    {
        echo 'Sending mail by ' . PHPMailer::class . PHP_EOL;
        $this->mailer->addAddress($email);
        $this->mailer->Body = $text;
        $this->mailer->send();
    }
}