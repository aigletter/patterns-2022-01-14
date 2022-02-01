<?php

use PHPMailer\PHPMailer\PHPMailer;

include __DIR__ . '/../../vendor/autoload.php';

//$mailer = new \patterns\Adapter\Mailer();
//$mailer = new PHPMailer(true);
$phpMailer = new PHPMailer();
$mailer = new \patterns\Adapter\MailerExtended($phpMailer);

$manager = new \patterns\Adapter\OrderManager($mailer);
$manager->createOrder([], ['email' => 'hello@gmail.com']);

exit();