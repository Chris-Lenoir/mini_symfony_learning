<?php 

class Database {
    public function getConnection(): PDO
    {
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        $pdo= new PDO($dsn, $user, $password);

        return $pdo;
    }
}