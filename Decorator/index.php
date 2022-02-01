<?php

include __DIR__ . '/../../vendor/autoload.php';

$notificator = new \patterns\Decorator\EmailNotificator();
$notificator = new \patterns\Decorator\SmsNotificator($notificator ?? null);
$notificator = new \patterns\Decorator\PushNotificator($notificator ?? null);

$orderManager = new \patterns\Decorator\OrderManager($notificator);
$orderManager->createOrder([], ['email' => 'helloworld@gmail.com', 'phone' => '12345678']);

exit();