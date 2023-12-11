<?php 
  session_start();
  
  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/auth.php");
  there_is_login();

  require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/conexion.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/Controller/UsersController.php"; 

  $user = htmlentities(addslashes($_POST['user']));
  $password = htmlentities(addslashes($_POST['password']));

  $isLogin = verify_login($user, $password);

  if($isLogin){
    open_login();
    header("Location: /nuestros-trabajos/");
  }else{
    $_SESSION['error'] = "El usuario o la contraseña son incorrectas";
    header("Location: /nuestros-trabajos/login/");
  }

?>