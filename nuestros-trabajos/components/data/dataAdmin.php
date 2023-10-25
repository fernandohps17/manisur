<?php
  // Obtenemos la data necesaria para el head de ADMINISTRADOR
  require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/data/getUri.php";

  $page = getUri();
  $css = "login";
  $meta_title = create_title("Administrador");
  $canonical = create_canonical('nuestros-trabajos/'.$page.'/');
  $description = create_description();
