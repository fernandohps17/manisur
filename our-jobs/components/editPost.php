<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<?php

// Todas las variables vienen desde el header que se hizo alla para poder mostrar el value del content

echo '
        <div class="container">
          <div class="content">';
require_once($_SERVER["DOCUMENT_ROOT"] . "/our-jobs/components/errorForm.php");
echo '  <div class="create-post">
            <div class="title">
              <h1>Editar Post</h1>
            </div>
          
            <form id="frm-test" action="/nuestros-trabajos/core/editPost.php" method="post" enctype="multipart/form-data">
              <div class="gruop">
                <label class="text" for=""><strong>Título del Post</strong></label>
                <input type="text" id="title-input" name="title" value="' . $title . '" required>
              </div>
          
              <div class="gruop">
                <label class="text" for=""><strong>Meta Título del Post</strong></label>
                <input type="text" name="meta_title" value="' . $meta_title . '" required>
              </div>
        
              <div class="gruop">
                <p class="label-file" id="btn-generate-uri">GENERAR URL</p>
              </div>
              <div class="gruop">
                <label class="text" for=""><strong>URL del Post</strong></label>
                <input type="text" name="uri" id="input-uri" value="' . $uri . '" required>
              </div>
              <div class="gruop">
                <p id="response-input"></p>
                <p class="label-file" id="btn-verify-uri">VERIFICAR URL</p>
              </div>
              <div class="gruop">
                <label class="text" for=""><strong>Agregar una descripción que atraiga al usuario</strong></label>
                <textarea class="text-description" name="description">' . $description . '</textarea>
              </div>
        
              <div class="gruop">
                <div class="text">
                  <p><strong>NOTA:</strong> pasar la imagen por <a href="https://tinypng.com/" target="_blank"><strong>tinypng</strong></a> para bajarle el peso sin que pierda su calidad y solo se permiten jpeg, jpg y png</p>
                </div>
                <label class="label-file" for="image">Imagen de Portada</label>
                <img id="show-img" src="/public/img/blog/' . $uri . '/' . $img_mobile . '"  width="100" height="100" />
                <input class="d-none" type="file" name="image" id="image" onchange="getImg(this);">
              </div>
              <div class="area-content">
                <label class="text" for=""><strong>Contenido del Post</strong></label>
                <textarea id="txtEditor" name="content" value=""></textarea>
              </div>
              ';









echo '
            <div class="title"><br><br>
              <h1>Edit Post</h1>
            </div>
          
            <form id="frm-test" action="/nuestros-trabajos/core/editPost.php" method="post" enctype="multipart/form-data">

              <div class="gruop">
                <label class="text" for=""><strong>Post Title</strong></label>
                <input type="text" id="title-input" name="title_en" value="' . $title_en . '" required>
              </div>
      
              <div class="gruop">
              <label class="text" for=""><strong>Meta Post Title</strong></label>
              <input type="text" name="meta_title_en" value="' . $meta_title_en . '" required>
            </div>
       
      
              <div class="gruop">
                <label class="text" for=""><strong>Adding a description that attracts the user</strong></label>
                <textarea class="text-description" name="description_en">' . $description_en . '</textarea>
              </div>
        
              <div class="area-content">
                <label class="text" for=""><strong>Post Content</strong></label>
                <textarea id="txtEditor_en" name="content_en" value=""></textarea>
              </div>
              ';















if ($published === 'true') {
  echo '<div class="public-post">
                  <input type="checkbox" name="public-post" id="public-post" checked>
                  <label class="text" for="public-post"><strong>¿Publish Post?</strong></label>
                </div>';
} else {
  echo '<div class="public-post">
                  <input type="checkbox" name="public-post" id="public-post">
                  <label class="text" for="public-post"><strong>¿Publish Post?</strong></label>
                </div>';
}

if ($seo === 'true') {
  echo '<div class="public-post">
    <input type="checkbox" name="post-url" id="post-url" checked>
    <label class="text" for="post-url"><strong>¿You want to prioritize this Post?</strong></label>
  </div>';
} else {
  echo '<div class="public-post">
    <input type="checkbox" name="post-url" id="post-url">
    <label class="text" for="post-url"><strong>¿You want to prioritize this Post?</strong></label>
  </div>';
}

if ($sitemap === 'true') {
  echo '<div class="public-post">
  <input type="checkbox" name="sitemap" id="sitemap">
  <label class="text" for="sitemap"><strong>¿You want this page not to be indexed?</strong></label>
  </div>';
} else {
  echo '<div class="public-post">
    <input type="checkbox" name="sitemap" id="sitemap" checked>
    <label class="text" for="sitemap"><strong>¿You want this page not to be indexed?</strong></label>
  </div>';
}

echo      '<input type="hidden" name="old_uri" value="' . $uri . '" />
              <input type="hidden" name="id" value="' . $id . '" />
              <input type="hidden" name="oldStatus" value="' . $published . '" />
              <input type="hidden" name="oldSeo" value="' . $seo . '" />
              <input type="hidden" name="fecha" value="' . $fecha . '" />
              <button id="btn-enviar" type="submit">Edit Post</button>
            </form>
          </div>
        </div>
      </div>
      ';
