<?php
session_start();

require_once($_SERVER["DOCUMENT_ROOT"] . "/our-jobs/components/auth.php");
auth_with_title();

// Validamos que se haya enviado una imagen
if (isset($_FILES['image'])) {

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
  $title = htmlentities(addslashes($title));
  $imagen = $_FILES['image'];
  $published = (isset($_POST['public-post']) ? 'true' : 'false');
  $url_raiz = (isset($_POST['post-raiz']) ? 'true' : 'false');
  $sitemap = ($_POST['sitemap']) ? 'false' : 'true';

  // FECHA
  setlocale(LC_TIME, 'es_ES.UTF-8');
  $cadena_fecha_mysql = strftime("%Y-%m-%d");
  $objeto_DateTime = date_create_from_format('Y-m-d', $cadena_fecha_mysql);
  $cadena_nuevo_formato = date_format($objeto_DateTime, "d-F-Y");

  $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", " - ");
  $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", "-");

  $fecha = str_replace($meses_EN, $meses_ES, $cadena_nuevo_formato);

  // Redimencionamos, creamos img, creamos webp, enviamos a carpeta blog dentro de img y retornamos nameImg
  list($imgPortada, $imgPortadaWebp) = redimensionImg(1000, $imagen, false, $uri);
  list($imgMobile, $imgMobileWebp) = redimensionImg(700, $imagen, true, $uri);

  // Si hubo un error con la imagen redireccionamos al crear post y mostramos el error
  if (!isset($imgPortada)) {
    header("Location: /our-jobs/create-post/");
    exit();
  }

  // Creamos la carpeta donde estara el post del blog
  if ($url_raiz === 'true') {
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

  insert_post($title, $title_en, $meta_title, $meta_title_en, $description, $description_en, $content, $content_en, $uri, $imgPortada, $imgPortadaWebp, $imgMobile, $imgMobileWebp, $fecha, $published, $url_raiz, $sitemap);

  // Obtenemos los posts para verificar si hay que crear  una nueva pagina
  $posts = get_count_posts();
  create_folder($posts);

  header("Location: /our-jobs/");
} else {
  $_SESSION['error'] = "No se envio una imagen";

  header("Location: /our-jobs/create-post/");
}
