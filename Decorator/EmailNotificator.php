<?php

namespace patterns\Decorator;

class EmailNotificator implements NotificatorInterface
{
    public function notify($order, $user)
    {
        // Много кода
        echo 'Order with id ' . $order['id'] . ' was sent to ' . $user['email'] . PHP_EOL;
    }
}