<?php

include dirname(__DIR__, 2) . '/vendor/autoload.php';

\patterns\Singleton\Db::setParams([
  'hostname' => 'localhost',
  'username' => 'root',
  'password' => '1q2w3e',
  'database' => 'examples'
]);


/// Где надо работать с базой (1)
//$db = new \patterns\Singleton\Db();
$db1 = \patterns\Singleton\Db::getConnection();
$users = $db1->query("SELECT * FROM users");


// Другой программист (2)
//$db = new \patterns\Singleton\Db();
$db2 = \patterns\Singleton\Db::getConnection();
$posts = $db2->query("SELECT * FROM posts");

// ... (n)
//$db3 = new \patterns\Singleton\Db;
$db3 = \patterns\Singleton\Db::getConnection();
// ...

$result = $db1 === $db2 && $db2 === $db3;
var_dump($result);

exit();