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

    public function fetchPorfilesFromSearch($name){

        $name = strtolower($name);

        $statement = $this->pdo->prepare(
            'SELECT *
            FROM creators
            WHERE creators.name LIKE concat("%", :name, "%")');

        $statement->execute(
            [
                ':name' => $name
            ]
        );

        $fetched_profiles = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $fetched_profiles;

    }

}