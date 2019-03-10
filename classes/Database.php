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

/*
EXAMPLE CODE
<?php 
  class Database {
    // DB Params
    private $host = 'localhost';
    private $db_name = 'myblog';
    private $username = 'root';
    private $password = 'root';
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }

  */