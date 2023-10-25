<?php

// Toda la info del post viene desde dataPost.php 

require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/core/conexion.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/core/Controller/PostsController.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/core/Controller/ComentarysController.php";

// Virificamos si hay login para asi mostrar los botones del crud
$login = false;
if (isset($_SESSION['login'])) {
  $login = true;
}

// Obtenemos uri anterior y siguiente
list($uri_prev, $seo_prev) = get_uri_prev_for_id($id);
list($uri_next, $seo_next) = get_uri_next_for_id($id);

// Obtenemos los ultimos 10 posts sin contar el post actual
$last_ten = get_post_last_ten($id);

// Obtenemos informacion de los comentarios para dicho post
$comentarys = get_comentarys_for_post($id);

echo "
    <div class='container'>
      <div class='content'>
        <div class='section-post' itemscope itemtype='http://schema.org/Article'>
          <div class='post'>
            <div class='img-portada'>
              <picture>
                <source type='image/webp' srcset='/public/img/blog/$page/$img_mobile_web' media='(max-width: 700px)'>
                <source type='image/webp' srcset='/public/img/blog/$page/$img_portada_web'>
                <img itemprop='image' src='/public/img/blog/$page/$img_portada' title='" . html_entity_decode($title_en) . "' alt='" . html_entity_decode($title_en) . "'  width='100' height='100' />
              </picture>";

// Si hay login mostramos los botones de delete y update
if ($login === true) {
  echo "
                <div class='btn-admin btn-edit-post'>
                  <form action='/our-jobs/edit-post/' method='POST'>
                    <input type='hidden' name='id' value='$id'>
                    <button type='submit'><i class=''>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='#ffff' height='24' viewBox='0 -960 960 960' width='24'><path d='M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z'/></svg>
                    </i></button>
                  </form>
                </div>
  
                <div class='btn-admin btn-delete-post'>
                  <form action='/our-jobs/delete-post/' method='POST'>
                    <input type='hidden' name='id' value='$id'>
                    <button type='submit'><i class=''>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='#ffff' height='24' viewBox='0 -960 960 960' width='24'><path d='M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z'/></svg>
                    </i></button>
                  </form>
                </div>
                ";
}


echo     "</div>
            <div class='title text-start'>
              <h1 itemprop='name'>" . html_entity_decode($title_en) . "</h1>
            </div>
            <div class='text breakpoint'>
              <a href='#comentario' title='Deja un Comentario'>Leave a comment</a>
              <p> / </p>
              <a href='/our-jobs/' title='Trabajos'>Jobs</a>
              <p> / </p>
              <a href='/' title='Manisur'>for Manisur</a>
            </div>
            <div itemprop='articleBody' class='content-post text'>
              $content_en
            </div>
            <div class='text'>
              <p itemprop='datePublished' content='$fecha'>$fecha</p>
            </div>
            <div class='text btn-pre-next'>";


// if (!empty($uri_prev)) {
//   if ($seo_prev === 'true') {
//     $path_uri_prev = "/$uri_prev/";
//   } else {
//     $path_uri_prev = "/nuestros-trabajos/post/$uri_prev/";
//   }
//   echo "<div class='btn-prev'>
//                 <a href='$path_uri_prev' title='Entrada Anterior'><i class='fas fa-arrow-left'></i> Entrada anterior</a>
//               </div>";
// } else {
//   echo "<div></div>";
// }

// if (!empty($uri_next)) {
//   if ($seo_next === 'true') {
//     $path_uri_next = "/$uri_next/";
//   } else {
//     $path_uri_next = "/nuestros-trabajos/post/$uri_next/";
//   }

//   echo "<div class='btn-next'>
//                 <a href='$path_uri_next' title='Entrada siguiente'>Entrada siguiente <i class='fas fa-arrow-right'></i></a>
//               </div>";
// }


echo    "</div>
            <div class='form-comentary' id='comentario'>
              <div class='title2 text-start'>
                <h3><strong>Leave a comment</strong></h3>
              </div>
              <div class='text '>
                <p>Your email address will not be published. Required fields are marked with <span class='required'>*</span></p>
              </div>

              <form action='/our-jobs/add-comment/' method='POST'>
                <textarea name='comentary' placeholder='Write here *'></textarea>
                <div class='group'>
                  <input type='hidden' name='uri' value='$id'>
                  <input type='text' name='name' placeholder='Name *' required>
                  <input type='email' name='email' placeholder='Email*' required>
                  <input type='text' name='web' placeholder='Web'>
                  <input type='hidden' id='g-recaptcha-response' name='g-recaptcha-response'> 
                </div>
                <button type='submit'>Post comment</button>
              </form>
              
            </div>
            <div class='list-comentary'>";

if (isset($comentarys)) {
  if ($login === true) {
    foreach ($comentarys as $value) {
      // Verificamos que boton mostrar
      $btn_name = ($value['public'] === "false") ? 'Publicar' : 'No publicar';
      $css_btn = ($value['public'] === "false") ? 'show-post' : 'unshow-post';

      echo "
                    <div class='comentary'>
                      <div class='author'>
                        <p>" . $value['name'] . "</p>
                        <div class='option-comentary'>
                          <form class='public-comentary' action='/our-jobs/active-comment/' method='POST'>
                            <input type='hidden' name='id' value='" . $value['id'] . "'>
                            <input type='hidden' name='status' value='" . $value['public'] . "'/>
                            <input type='hidden' name='uri' value='$page'/>
                            <button class='$css_btn btn-admin-comentary' type='submit'>$btn_name</button>
                          </form>
                          <form class='delete-comentary' action='/our-jobs/delete-comment/' method='POST'>
                            <input type='hidden' name='id' value='" . $value['id'] . "'>
                            <button type='submit'><i class=''>
                            <svg xmlns='http://www.w3.org/2000/svg' fill='#ffff' height='24' viewBox='0 -960 960 960' width='24'><path d='M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z'/></svg>
                            </i></button>
                          </form>
                        </div>
                      </div>
                      <div class='text text-coment'>
                        <p>" . $value['comentary'] . "</p>
                      </div>
                    </div>
                    ";
    }
  } else {
    foreach ($comentarys as $value) {
      if ($value['public'] !== "false") {
        echo "
                      <div class='comentary'>
                        <div class='author'>
                          <p>" . $value['name'] . "</p>
                        </div>
                        <div class='text text-coment'>
                          <p>" . $value['comentary'] . "</p>
                        </div>
                      </div>
                      ";
      }
    }
  }
}

echo   "</div>
          </div>
          <div class='last-post'>
            <div class='title2 text-start'>
              <h2>Recent logins</h2>
            </div>
            <div class='text list-last-post'>";

if (!empty($last_ten)) {
  foreach ($last_ten as $value) {
    if ($value['seo'] === "true") {
      $path_last_ten = "/" . $value['uri'] . "/";
    } else {
      $path_last_ten = "/our-jobs/post/" . $value['uri'] . "/";
    }

    echo "
              <div class='item-post'>
                <a href='$path_last_ten'>" . html_entity_decode($value['title_en']) . "</a>
                <p>" . $value['fecha'] . "</p>
              </div>
              ";
  }
} else {
  echo "<p>There are no more entries</p>";
}


echo    "</div>
          </div>
        </div>  
      </div>
    </div>
  ";
