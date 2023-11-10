<?php

session_start();

require_once($_SERVER["DOCUMENT_ROOT"] . "/our-jobs/components/auth.php");
auth_with_title();

require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/core/conexion.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/core/Controller/PostsController.php";

$title = htmlentities(addslashes($_POST['title']));
$title_en = htmlentities(addslashes($_POST['title_en']));
$meta_title = htmlentities(addslashes($_POST['meta_title']));
$meta_title_en = htmlentities(addslashes($_POST['meta_title_en']));
$description = htmlentities(addslashes($_POST['description']));
$description_en = htmlentities(addslashes($_POST['description_en']));
$content = $_POST['content'];
$content_en = $_POST['content_en'];
$uri = $_POST['uri'];
$imagen = $_FILES['image'];
$old_uri = htmlentities(addslashes($_POST['old_uri']));
$id = htmlentities(addslashes($_POST['id']));
$published = (isset($_POST['public-post']) ? 'true' : 'false');
$oldStatus = htmlentities(addslashes($_POST['oldStatus']));
$post_url = (isset($_POST['post-url']) ? 'true' : 'false');
$oldSeo = htmlentities(addslashes($_POST['oldSeo']));
$sitemap = ($_POST['sitemap']) ? 'false' : 'true';

// if ($published != $oldStatus) {
//   setlocale(LC_TIME, 'es_ES.UTF-8');
//   $cadena_fecha_mysql = strftime("%Y-%m-%d");
//   $objeto_DateTime = date_create_from_format('Y-m-d', $cadena_fecha_mysql);
//   $cadena_nuevo_formato = date_format($objeto_DateTime, "d-F-Y");

//   $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", " - ");
//   $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", "-");

//   $fecha = str_replace($meses_EN, $meses_ES, $cadena_nuevo_formato);
// } else {
//   $fecha = htmlentities(addslashes($_POST['fecha']));
// }

// Variables to check the status
$published = isset($_POST['published']) ? $_POST['published'] : '';
$oldStatus = isset($_POST['oldStatus']) ? $_POST['oldStatus'] : '';

// If the published status has changed
if ($published != $oldStatus) {
  // Get the current date and time
  setlocale(LC_TIME, 'es_ES.UTF-8');
  $currentDateTime = new DateTime();
  $currentDate = $currentDateTime->format('d-F-Y');

  // Define the Spanish month names
  $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", " - ");
  $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", "-");

  // Replace the English month names with the Spanish ones
  $fecha = str_replace($meses_EN, $meses_ES, $currentDate);
  $published = 'true';
} else {
  // If the published status has not changed, get the submitted date from the POST data
  $fecha = htmlentities(addslashes($_POST['fecha']));
}

// HAY IMAGEN
if ($_FILES['image']['name'] != "") {

  // BORRAMOS TODO DEL POST
  delete_folder_and_img($old_uri, $oldSeo);

  // Redimencioamos, creamos img, creamos webp, enviamos a carpeta blog dentro de img y retornamos nameImg
  list($imgPortada, $imgPortadaWebp) = redimensionImg(1000, $imagen, false, $uri);
  list($imgMobile, $imgMobileWebp) = redimensionImg(700, $imagen, true, $uri);

  // Si hubo un error redireccionamos al edit post y mostramos el error
  if (!isset($imgPortada)) {
    header("Location: /our-jobs/edit-post/");
    exit();
  }

  // Creamos la carpeta donde estara el post del blog
  if ($post_url === 'true') {
    // En caso de ser post prioritario va a la carpeta raiz
    $path = "../../$uri";
  } else {
    // Si no es prioritario va a la carpeta /blog/post/
    $path = "../post/$uri";
  }

  if (!file_exists($path)) {
    mkdir($path);
  }

  copy('../template/postTemplate.php', "$path/index.php");
}

// NO HAY IMAGEN
if ($_FILES['image']['name'] == "") {

  // BORRAMOS LA CARPETA DEL POST
  delete_only_folder_post($old_uri, $oldSeo);

  // Creamos la carpeta donde estara el post del blog
  if ($post_url === 'true') {
    // En caso de ser post prioritario va a la carpeta raiz
    $path = "../../$uri";
  } else {
    // Si no es prioritario va a la carpeta /blog/post/
    $path = "../post/$uri";
  }

  if (!file_exists($path)) {
    mkdir($path);
  }

  copy('../template/postTemplate.php', "$path/index.php");

  // Renombramos la carpeta de la imagen
  $pathImg = "../../public/img/blog/";
  rename($pathImg . $old_uri, $pathImg . $uri);
}

if (isset($imgPortada)) {
  edit_post_with_img($title, $title_en, $meta_title, $meta_title_en, $description, $description_en, $content, $content_en, $uri, $id, $imgPortada, $imgPortadaWebp, $imgMobile, $imgMobileWebp, $published, $fecha, $post_url, $sitemap);
} else {
  edit_post_without_img($title, $title_en, $meta_title, $meta_title_en, $description, $description_en, $content, $content_en, $uri, $id, $published, $fecha, $post_url, $sitemap);
}

header("Location: $path");
