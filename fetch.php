<?php
  require_once('DbConnection.php');

  class Fetch extends DbConnection{
    public function accessAdmin($username){
      $sql = "SELECT * FROM admin WHERE username = :username";
      $query = $this->connection->prepare($sql);
      $query->execute([':username' => $username]);

      if ($query->errorCode() == 0) {
        if ($query->rowCount() == 0) {
          return ['status' => 0, 'message' => 'Username Not Found'];
        } else {
          return $query->fetchAll(PDO::FETCH_ASSOC);
        }
      } else {
        return ['status' => 1, 'message'=>$query->errorInfo()[2]];
      }   
    }


  }
  $fetch = new Fetch;