<?php
  // Obtenemos la data necesaria para el head de CREATE POST
  require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/data/getUri.php";

  $page = getUri();
  $css = "create-post";
  $meta_title = create_title("Crear Post");
  $canonical = create_canonical('nuestros-trabajos/'.$page.'/');
  $description = create_description();
  $content = ""; //Esta variable solo tendra valor cuando se va a editar un post
