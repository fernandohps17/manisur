<?php
  // Obtenemos la data necesaria para el head de ADMINISTRADOR
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/data/getUri.php";

  $page = getUri();
  $css = "login";
  $meta_title = create_title("Administrator");
  $canonical = create_canonical('our-jobs/'.$page.'/');
  $description = create_description();
