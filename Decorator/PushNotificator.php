<?php

namespace patterns\Decorator;

class PushNotificator implements NotificatorInterface
{
    protected $notificator;

    public function __construct(?NotificatorInterface $notificator = null)
    {
        $this->notificator = $notificator;
    }

    public function notify($order, $user)
    {
        echo 'Push notification sent to ' . PHP_EOL;

        if ($this->notificator) {
            $this->notificator->notify($order, $user);
        }
    }
}