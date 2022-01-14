<?php

include dirname(__DIR__, 2) . '/vendor/autoload.php';

function transportManager(\patterns\FactoryMethod\CarFactoryInterface $factory)
{
    $car = $factory->createInstance();
    echo $car->move('notebook', 'a', 'b') . PHP_EOL;
    // FINISH
}

$factory = new \patterns\FactoryMethod\FordFactory();
transportManager($factory);

$factory = new \patterns\FactoryMethod\ToyotaFactory();
transportManager($factory);