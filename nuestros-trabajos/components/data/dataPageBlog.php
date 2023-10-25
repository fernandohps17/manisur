<?php
// Obtenemos los datos necesarios para el head de las paginas del BLOG

require_once $_SERVER["DOCUMENT_ROOT"] . "/nuestros-trabajos/components/data/getUri.php";

$page = getUri();

if ($page == "1") {
  // Si page es 1 redireccionamos al blog que es la primera pagina y evitamos contenido duplicado
  header("Location: /nuestros-trabajos/");
  exit();
} else {

  // Si page es blog o algun numero mayor a 0 mostramos el css de blog
  $css = "blog";
  $meta_title = "Trabajos de Manisur. Empresa relacionada con la maquinaria de frio naval industrial y domestico";

  if ($page == "nuestros-trabajos") {
    $canonical = create_canonical("nuestros-trabajos");
  } else {
    $canonical = create_canonical("nuestros-trabajos/pagina/" . $page);
  }

  $description = create_description();
}
