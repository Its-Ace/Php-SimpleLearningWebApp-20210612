<?php
  function test_connection()
  {
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    
    try {

      $conn = new PDO("mysql:host=$servername;dbname=ems", $username, $password);
      // set the PDO error mode to exception

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return mysqli_connect("localhost","root","admin","ems");

    } catch(PDOException $e) 
    {
      //echo "Connection failed: " . $e->getMessage();
      die("Db not working");
      return false;
    }
    
  }
?>