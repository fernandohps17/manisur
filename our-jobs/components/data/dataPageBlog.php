<?php
// Obtenemos los datos necesarios para el head de las paginas del BLOG

require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/components/data/getUri.php";

$page = getUri();

if ($page == "1") {
  // Si page es 1 redireccionamos al blog que es la primera pagina y evitamos contenido duplicado
  header("Location: /our-jobs/");
  exit();
} else {

  // Si page es blog o algun numero mayor a 0 mostramos el css de blog
  $css = "blog";
  $meta_title = "Manisur works. Company related to industrial and domestic naval refrigeration machinery";

  if ($page == "nuestros-trabajos") {
    $canonical = create_canonical("our-jobs");
  } else {
    $canonical = create_canonical("our-jobs/page/" . $page);
  }

  $description = create_description();
}
