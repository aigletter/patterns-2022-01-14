<?php

namespace patterns\Decorator;

interface NotificatorInterface
{
    public function notify($order, $user);
}