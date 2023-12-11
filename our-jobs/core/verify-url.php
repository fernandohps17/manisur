<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/conexion.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/Controller/PostsController.php";
  

  $url = htmlentities(addslashes($_POST['url']));

  $validate = verify_url($url);

  if($validate){
    echo "<strong class='no-url'>La url ingresada esta siendo usada por otro post</strong>";
  }else{
    echo "<strong class='yes-url'>La url ingresada es correcta y no esta siendo usada</strong>";
  }
?>