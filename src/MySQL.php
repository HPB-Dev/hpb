<?php
/*
HPB - MySql - Integrazione
(C) 2021 - 2022 Federico Cosma
*/

namespace hpb;

class MySQL{
  
  public function connetti($h, $u, $p, $db) {
    $servername = "localhost";
    $username = "username";
    $password = "password";

    $conn = new mysqli($servername, $username, $password);

    return $conn->connect_error;
  }
  
  public function crea($dbname) {
    $sql = "CREATE DATABASE $dbname";
    return $conn->query($sql);
  }
  
  public function invia($sq) {
    return $conn->query($sql);
  }
}
?>
