<?php

  session_start();

  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/auth.php");
  auth_with_id();

  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/conexion.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/Controller/UsersController.php";


  $id = htmlentities(addslashes($_POST['id']));
  $user = htmlentities(addslashes($_POST['user']));
  $password = htmlentities(addslashes($_POST['password']));
  $email = htmlentities(addslashes($_POST['email']));
  update_user($id, $user, $password, $email);

  header("Location: /our-jobs/");
?>