<?php

class DB
{

  public static function connect()
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = null;
    try {
      $conn = new PDO("mysql:host=$servername;dbname=recettedb", $username, $password);

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    } finally
    {
      return $conn;
    }
  }
}
