<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/conexion.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/Controller/PostsController.php";
  

  $url = htmlentities(addslashes($_POST['url']));

  $validate = verify_url($url);

  if($validate){
    echo "<strong class='no-url'>The url entered is being used by another post</strong>";
  }else{
    echo "<strong class='yes-url'>The url entered is correct and is not being used</strong>";
  }
?>