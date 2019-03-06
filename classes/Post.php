<?php
class Post{

    private $pdo;
    //private $table;
    
    public function __construct($connect){
        $this->pdo = $connect;
    }

    public function fetchMainPageStartupPosts(){
        
        $statement = $this->pdo->prepare(
            'SELECT works.*, creators.name 
            AS creator_name 
            FROM works 
            INNER JOIN creators 
            ON works.creator_id = creators.id');

        $statement->execute();

        $fetched_posts = $statement->fetchAll(PDO::FETCH_ASSOC);

        shuffle($fetched_posts);

        return $fetched_posts;
    }

    public function fetchSinglePost($id){
        //$statement = $this->pdo->prepare('SELECT * FROM works WHERE id = :id');
        $statement = $this->pdo->prepare(
            'SELECT works.*, creators.name 
            AS creator_name 
            FROM works 
            INNER JOIN creators 
            ON works.creator_id = creators.id 
            WHERE works.id = :id');

        $statement->execute(
            [
                ':id' => $id
            ]
        );

        $fetched_post = $statement->fetch();

        return $fetched_post;
    }

    public function fetchCreatorsWork($id){
        $statement = $this->pdo->prepare(
            'SELECT * 
            FROM works 
            WHERE creator_id = :id');

        $statement->execute(
            [
                ':id' => $id
            ]
        );

        $fetched_posts = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $fetched_posts;
    }

    public function fetchWorkFromSearch($name){
        $name = strtolower($name);
        $statement = $this->pdo->prepare(
            'SELECT works.*, creators.name AS creator_name
            FROM works
            INNER JOIN creators 
            ON works.creator_id = creators.id
            WHERE works.name = :name');

        $statement->execute(
            [
                ':name' => $name
            ]
        );

        $fetched_post = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $fetched_post;
    }


}