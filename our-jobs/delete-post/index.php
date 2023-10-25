<?php
  session_start();

  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/auth.php");
  auth_with_id();
  
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/conexion.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/Controller/PostsController.php";

  $id = htmlentities(addslashes($_POST['id']));

  // Obtenemos el post
  $post = get_post_for_id($id);
  
  // Obtenemos uri para borrar las imagenes y la carpeta del post
  foreach($post as $data){
    $uri = $data['uri'];
    $seo = $data['seo'];
  }
  delete_folder_and_img($uri, $seo);

  // Eliminamos el post
  delete_post($id);

  // Obtenemos la cantidad de posts
  $posts = get_count_posts();

  // Ejecutamos funcion que cuenta cuantos posts hay y borrar las carpetas sobrantes en nuestro page
  $new_count_pages = delete_folder($posts); //Retorna la cantidad de paginas reales

  // // Obtenemos la ruta con la que llegamos aqui para luego redireccion a esa ruta anterior
  // $url_anterior = $_SERVER['HTTP_REFERER'];
  // $url_anterior = explode('/blog/', $url_anterior);
  // $url_anterior = end($url_anterior);

  // // Extraemos el numero de la pagina anterior en caso de que el post fue borrado desde la lista de post
  // $number_url = explode('pagina/', $url_anterior);
  // $number_url = end($number_url);
  // $number_url = explode('/', $number_url);
  // $number_url = $number_url[0];

  // // Validamos si la pagina existe o fue elimina
  // $url_anterior = ($number_url > $new_count_pages) ? "" : $url_anterior;
  
  // // Validamos que la url anterior no sea desde el mismo post que se esta eliminando
  // $url_anterior = ($url_anterior == 'post/'.$uri.'/') ? '' : $url_anterior;

  header("Location: /our-jobs/");
?>