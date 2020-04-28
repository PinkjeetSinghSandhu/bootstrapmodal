<?php
  class DbConnection{
    private $host = "localhost";
    private $dbname = "send";
    private $username = "root";
    private $password = "";
    public $connection;

    public function __construct() {
      try {
        $pdodbcon = $this->connection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->password);
      } catch (PDOException $ex) {
        echo $ex->getMessage();
      }
    }
  }
?>