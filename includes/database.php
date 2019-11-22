<?php

class Database {

    public function __construct() {
        $this->pdo = new PDO(
            'mysql:host='.DATABASE_HOST.';dbname='.DATABASE_DBNAME,
            DATABASE_USER,
            DATABASE_PASSWORD
        );

    }

    public function __destruct() {

    }

    public function __invoke($query, $data) {

    }

    private $pdo;
};