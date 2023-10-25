<?php
  session_start();

  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/auth.php");
  auth_with_id();
  
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/conexion.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/Controller/ComentarysController.php";


  $id = htmlentities(addslashes($_POST['id']));

  delete_comentary($id);
  
  // Obtenemos la ruta con la que llegamos aqui para luego redireccion a esa ruta anterior
  $url_anterior = $_SERVER['HTTP_REFERER'];
  $url_anterior = explode('/our-jobs/', $url_anterior);
  $url_anterior = end($url_anterior);

  header("Location: /our-jobs/$url_anterior#comentario");

?>