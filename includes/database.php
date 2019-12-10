<?php

class Database {

    private $connection;

    public function __construct() {
        $this->connection = new PDO(
            'mysql:host='.DATABASE_HOST.';dbname='.DATABASE_DBNAME,
            DATABASE_USER,
            DATABASE_PASSWORD
        );

    }

    public function __destruct() {
        $this->connection = null;
    }

    public function __invoke($query, $data_arr) {
        $query = $this->connection->prepare($query);
        $query->execute($data_arr);
        return $query;
    }

};

?>