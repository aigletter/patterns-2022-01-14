<?php

namespace patterns\Singleton;

class Db
{
    private static $instance;

    protected static $params;

    protected $connection;

    public static function setParams($params)
    {
        self::$params = $params;
    }

    public static function getConnection()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        $params = self::$params;
        $dsn = 'mysql:dbname=' . $params['database'] . ';host=127.0.0.1';
        $this->connection = new \PDO($dsn, $params['username'], $params['password']);
    }

    public function query($sql)
    {
        $result = $this->connection->query($sql);
        $rows = $result->fetchAll(\PDO::FETCH_ASSOC);
        return $rows;
    }
}