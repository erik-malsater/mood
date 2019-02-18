<?php

class Profile{

    private $pdo;

    public function __construct($connect){
        $this->pdo = $connect;
    }

    public function fetchProfile($id){

        $statement = $this->pdo->prepare('SELECT * FROM creators WHERE id = :id');
        $statement->execute(
            [
                ':id' => $id
            ]
        );

        $fetched_profile = $statement->fetch();

        return $fetched_profile;

    }

}