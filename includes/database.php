<?php

class Database {

    private $pdo;

    public function __construct() {
        $this->pdo = new PDO(
            'mysql:host='.DATABASE_HOST.';dbname='.DATABASE_DBNAME,
            DATABASE_USER,
            DATABASE_PASSWORD
        );

    }

    public function __destruct() {
        $this->pdo = null;
    }

    public function __invoke($query, $data_arr) {
        $query_obj = $this->pdo->prepare($query);
        $query_obj->execute($data_arr);
        return $query_obj->fetch();
    }

};

?>