<?php
class Database{

    private $servername = "localhost";
    private $db_name = "mood";
    private $username = "root";
    private $password = "root";
    private $charset = "utf8";
    private $pdo;

    public function connect(){
        
        $this->pdo = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->db_name . ";charset=utf8",
        $this->username,
        $this->password);

        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        return $this->pdo;
        
    }

}
