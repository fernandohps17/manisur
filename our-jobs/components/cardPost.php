<?php

// Funcion encargada de muestrar el template de cada Card de la lista de Posts
function card_post($title_en, $img_mobile, $img_mobile_web, $description_en, $uri, $fecha, $id, $seo, $login)
{

  if ($seo === 'true') {
    $path = "/$uri/";
  } else {
    $path = "/our-jobs/post/$uri/";
  }

  echo "
            <div class='card-post' itemprop='blogPosts' itemscope itemtype='http://schema.org/BlogPosting'>";

  // Si hay login mostramos los btn del crud
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

  echo    "<a href='" . $path . "' title='" . html_entity_decode($title_en) . "' class='img-post'>
                <picture>
                  <source type='image/webp' srcset='/public/img/blog/$uri/$img_mobile_web' media='(max-width: 700px)'>
                  <img itemprop='image' src='/public/img/blog/$uri/$img_mobile' alt='" . html_entity_decode($title_en) . "'  width='100' height='100'>
                </picture>
              </a>
              <div class='content-text'>
                <div class='title-post'>
                  <h2 itemprop='name'>" . html_entity_decode($title_en) . "</h2>
                </div>
                <div class='description-post'>
                  <p itemprop='articleBody'>" . html_entity_decode($description_en) . "</p>
                </div>
                <div class='info-post'>
                  <a itemprop='url' href='" . $path . "' title='" . html_entity_decode($title_en) . "'>Know more</a>
                </div>
              </div>
              <div class='fecha-post'>
                <p itemprop='datePublished' content='$fecha'>$fecha</p>
              </div>
            </div>
          ";
}
