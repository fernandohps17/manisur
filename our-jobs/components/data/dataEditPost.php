<?php
// Obtenemos la data necesaria para el head de EDIT POST
require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/components/data/getUri.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/core/conexion.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/core/Controller/PostsController.php";

$page = getUri();
$css = "create-post";
$canonical = create_canonical('our-jobs/' . $page . '/');

// Obtenemos la informacion desde aqui para poder usar el content en el script del linea control
$id = htmlentities(addslashes($_POST['id']));
$posts = get_post_for_id($id);

foreach ($posts as $data) {
  if ($data['id'] == $id) {
    $id = $data['id'];
    $title = $data['title'];
    $title_en = $data['title_en'];
    $description = $data['description'];
    $description_en = $data['description_en'];
    $content = $data['content'];
    $content_en = $data['content_en'];
    $img_mobile = $data['img_mobile'];
    $uri = $data['uri'];
    $meta_title = $data['meta_title'];
    $meta_title_en = $data['meta_title_en'];
    $published = $data['published'];
    $fecha = $data['fecha'];
    $seo = $data['seo'];
    $sitemap = $data['sitemap'];
  }
}
