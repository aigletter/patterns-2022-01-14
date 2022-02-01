<?php

namespace patterns\Decorator;

class OrderManager
{
    protected $notificator;

    public function __construct(NotificatorInterface $notificator)
    {
        $this->notificator = $notificator;
    }

    public function createOrder($data, $user)
    {
        // Много кода, по созданию заказа
        $order = ['id' => 12345];
        // ...

        $this->notificator->notify($order, $user);
    }
}