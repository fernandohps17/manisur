<?php 
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/conexion.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/Controller/PostsController.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/cardPost.php";

  $posts = get_posts_pendding();
  
  // Virificamos si hay login para asi mostrar los botones del crud
  $login = true;

  // Abrimos contenedor de las card
  echo "<div class='lists-post'>";

    // Recorremos los posts para obtener solo los 6 que corresponden a la pagina
    foreach($posts as $data){
      // LLamos la funcion que muestra el template de cada post
        card_post(
          $data['title_en'], 
          $data['img_mobile'], 
          $data['img_mobile_web'], 
          $data['description_en'], 
          $data['uri'], 
          $data['fecha'], 
          $data['id'],
          $data['seo'],
          $login
        );
    }
  echo "</div>";

?>