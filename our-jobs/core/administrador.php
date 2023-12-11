<?php

  session_start();

  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/auth.php");
  auth_with_id();

  require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/conexion.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/Controller/UsersController.php";


  $id = htmlentities(addslashes($_POST['id']));
  $user = htmlentities(addslashes($_POST['user']));
  $password = htmlentities(addslashes($_POST['password']));
  $email = htmlentities(addslashes($_POST['email']));
  update_user($id, $user, $password, $email);

  header("Location: /nuestros-trabajos/");
?>