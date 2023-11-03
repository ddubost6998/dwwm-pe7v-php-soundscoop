<?php

class DbConnection extends PDO
{
    public function __construct() {
        $dbConfig = parse_ini_file(__DIR__ . '/../config/db.ini');

        [
            'DB_HOST'     => $host,
            'DB_PORT'     => $port,
            'DB_NAME'     => $dbName,
            'DB_CHARSET'  => $dbCharset,
            'DB_USER'     => $user,
            'DB_PASSWORD' => $password
        ] = $dbConfig;

        $dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=$dbCharset";

        parent::__construct($dsn, $user, $password, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
}
