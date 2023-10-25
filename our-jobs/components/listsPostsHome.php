<?php 
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/conexion.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/Controller/PostsController.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/cardPostHome.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/pagination.php";

  // Setear a numero y en caso de que de 0 es porque no hay numero y quiere decir que estamos en la home del blog
  $page = intval($page);
  $page = ($page == 0) ? 1 : $page;

  $limit = 6; // Esta variable nos indicara el limite de post por pagina
  $indice_start = ($limit * $page) - $limit; //Esta variable nos indica desde que post comenzar a contar

  $posts = get_posts_for_limit($indice_start, $limit);
  
  // Virificamos si hay login para asi mostrar los botones del crud
  $login = false;
  if(isset($_SESSION['login'])){
    $login = true;
  }

  // Abrimos contenedor de las card
//   echo "<div class='container_testimony'>";




//     echo "  <div class='arrow_right_blog next'>
//     <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 -960 960 960'>
//       <path d='m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z' />
//     </svg>
//   </div>";

//     echo "<div class='arrow_left_blog prev'>
//     <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 -960 960 960'>
//       <path d='M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z' />
//     </svg>
//   </div>";








    // echo "<div class='slider' itemprop='blogPosts' itemscope itemtype='http://schema.org/BlogPosting'>";
    // echo "<div id='map'></div>";



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
//   echo "</div>";
//   echo "</div>";
//   echo "</div>";

  // Mostramos la paginacion y le pasamos la pagina actual
//   pagination($page);
