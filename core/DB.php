<?php

namespace Core;

use PDO;
use PDOException;

class DB
{
    private static $pdo;

    public static function connect()
    {
        if (!self::$pdo) {
            $host = getenv('DB_HOST');
            $db = getenv('DB_NAME');
            $user = getenv('DB_USER');
            $port = getenv('DB_PORT');
            $password = getenv('DB_PASSWORD');
            $charset = 'utf8mb4';
            $dsn = "mysql:host=$host;dbname=$db;port=$port;charset=$charset";

            try {
                self::$pdo = new PDO($dsn, $user, $password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]);
            } catch (PDOException $e) {
                throw new \Exception('Database connection failed: ' . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
