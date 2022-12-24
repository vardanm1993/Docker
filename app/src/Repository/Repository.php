<?php

namespace app\src\Repository;

use app\src\Database\Connection;

abstract class Repository
{
    protected \PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::getInstance()->getPdo();
    }
}