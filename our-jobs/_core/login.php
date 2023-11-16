<?php 
  session_start();
  
  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/auth.php");
  there_is_login();

  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/conexion.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/Controller/UsersController.php"; 

  $user = htmlentities(addslashes($_POST['user']));
  $password = htmlentities(addslashes($_POST['password']));

  $isLogin = verify_login($user, $password);

  if($isLogin){
    open_login();
    header("Location: /our-jobs/");
  }else{
    $_SESSION['error'] = "The username or password is incorrect";
    header("Location: /our-jobs/login/");
  }

?>