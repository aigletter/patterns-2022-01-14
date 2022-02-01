<?php

namespace patterns\Adapter;

class OrderManager
{
    protected $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function createOrder($data, $user)
    {
        // Много кода

        $this->mailer->sendMail($user['email'], 'Ваш заказа успешно оформлен');
    }
}