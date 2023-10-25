<?php
  session_start();
  $response_recaptcha = $_POST["g-recaptcha-response"];

  if(isset($response_recaptcha) && $response_recaptcha){

    $secret = "6LcBeo8oAAAAAPZMTAH1MWDXNXjN_H5TjvD_bNQh";
    $ip = $_SERVER["REMOTE_ADDR"];
    $validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recaptcha&remoteip=$ip");
    
    if($validation_server["success"] == true){

      require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/auth.php");
      there_is_post();

      require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/conexion.php";
      require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/Controller/ComentarysController.php";
      require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/notificacion.php";
      require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/Controller/UsersController.php";

      $send_email = get_email_user();

      $id = htmlentities(addslashes($_POST['uri']));
      $comentary = htmlentities(addslashes($_POST['comentary']));
      $name = htmlentities(addslashes($_POST['name']));
      $email = htmlentities(addslashes($_POST['email']));
      $web = (isset($_POST['web'])) ? htmlentities(addslashes($_POST['web'])) : "" ;

      add_comentary($id, $name, $comentary, $email, $web);
      
      // Obtenemos la ruta con la que llegamos aqui para luego redireccion a esa ruta anterior
      $url_post = $_SERVER['HTTP_REFERER'];

      send_notification($name, $comentary, $email, $web, $url_post, $send_email);
    }
  }

  $_SESSION['modal'] = true;
  $_SESSION['content_modal'] = "
    <p>Gracias por publicar su comentario.</p>
    <p>Cuando sea aprobado por el administrador de la WEB se hará visible.</p>
    <p>Aprovechamos para saludarle atentamente.</p>";
  
  header("Location: $url_post");

?>