<?php
  // Obtenemos la data necesaria para el head de CREATE POST
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/data/getUri.php";

  $page = getUri();
  $css = "create-post";
  $meta_title = create_title("Create Post");
  $canonical = create_canonical('our-jobs/'.$page.'/');
  $description = create_description();
  $content = ""; //Esta variable solo tendra valor cuando se va a editar un post
