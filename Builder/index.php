<?php

include __DIR__ . '/../../vendor/autoload.php';

// 200
// 300
// grey
// abs = true
$abs = true;
/*$car = new \patterns\Builder\Car(
    200,
    300,
    'grey',
    null,
    null,
    null,
    $abs
);*/

/*$builder = new \patterns\Builder\CarBuilder();
$builder->setPower(200);
$builder->setAbs($abs);
$builder->setMaxSpeed(300);
$builder->setColor('gray');
$car = $builder->build();*/

$car = (new \patterns\Builder\CarBuilder())
    ->setPower(200)
    ->setAbs($abs)
    ->setMaxSpeed(300)
    ->setColor('gray')
    ->build();

$builder = new \patterns\Builder\CarBuilder();
$builder
    ->setPower(100)
    ->setMaxSpeed(300)
    ->setColor('gray')
    ->setLuk(true);

if (isset($abs)) {
    $builder->setAbs($abs);
}

$car2 = $builder->build();

exit();