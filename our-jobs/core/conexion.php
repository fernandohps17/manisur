<?php
  function open_db(){

    try{
      $conn = new PDO("mysql:host=localhost:3306; dbname=blog_manisur", "root","");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn->exec("SET CHARACTER SET utf8");
      
      return $conn;
    }catch(Exception $e){
      echo "Ha ocurrido un error en la conexion : " .$e->getLine();
    }
  }

  function close_db($conn){
    $conn = null;
  }
?>