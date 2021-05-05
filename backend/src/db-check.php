<?php

class DB{
    private $servername;
  private $username;
  private $password;
  private $conn;
  private $db;

  function __construct($servername, $username, $password, $db) {
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
    $this->db = $db;
  }

  function connect(){

    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    return $this->conn;
  }

}