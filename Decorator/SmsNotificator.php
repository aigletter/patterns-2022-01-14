<?php

namespace patterns\Decorator;

class SmsNotificator implements NotificatorInterface
{
    protected $notificator;

    public function __construct(?NotificatorInterface $notificator = null)
    {
        $this->notificator = $notificator;
    }

    public function notify($order, $user)
    {
        echo 'Sms to ' . $user['phone'] . ' was sent successfully' . PHP_EOL;

        if ($this->notificator) {
            $this->notificator->notify($order, $user);
        }
    }
}