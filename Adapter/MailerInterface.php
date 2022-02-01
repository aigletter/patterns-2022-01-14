<?php


namespace patterns\Adapter;


interface MailerInterface
{
    public function sendMail($email, $text);
}