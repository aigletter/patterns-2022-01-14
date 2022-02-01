<?php

use patterns\AbstractFactory\OrderFactoryInterface;

include __DIR__ . '/../../vendor/autoload.php';


function orderManager(OrderFactoryInterface $factory)
{
    $order = $factory->createOrder();
    $count = rand(1, 5);
    for ($i = 0; $i < $count; $i++) {
        $orderItem = $factory->createOrderItem();
        $order->addOrderItem($orderItem);
    }

    echo $order->calculateTotalSum() . PHP_EOL;
}

$factory = new \patterns\AbstractFactory\RealOrderFactory();
orderManager($factory);

$factory = new \patterns\AbstractFactory\VirtualOrderFactory();
orderManager($factory);

exit();