<?php
  session_start();

  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/auth.php");
  auth_with_id();

  require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/conexion.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/Controller/ComentarysController.php";

  $id = htmlentities(addslashes($_POST['id']));
  $status = htmlentities(addslashes($_POST['status']));
  $uri = htmlentities(addslashes($_POST['uri']));

  $status = ($status === "false") ? "true" : "false";

  update_status_comentary($id, $status);

  header("Location: /nuestros-trabajos/post/$uri#comentario");
?>