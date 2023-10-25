<?php
// Obtenemos los datos necesarios para el head de los 

require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/components/data/getUri.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/core/conexion.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/core/Controller/PostsController.php";

$page = getUri();

$css = "post";

// Obteniendo el post mediante la uri que esta almacenada en $page
$post = get_post_for_uri($page);
foreach ($post as $value) {
  $id = $value['id'];
  $title = $value['title'];
  $title_en = $value['title_en'];
  $content = $value['content'];
  $content_en = $value['content_en'];
  $img_portada = $value['img_portada'];
  $img_portada_web = $value['img_portada_web'];
  $img_mobile_web = $value['img_mobile_web'];
  $fecha = $value['fecha'];
  $meta_title = $value['meta_title'];
  $meta_title_en = $value['meta_title_en'];
  $description = $value['description'];
  $description_en = $value['description_en'];

  // validamos si es url prioritaria o no
  if ($value['seo'] === 'true') {
    $canonical = create_canonical('' . $page);
  } else {
    $canonical = create_canonical('our-jobs/post/' . $page);
  }
}
