<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<div class="container">
  <div class="content">
    <?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/nuestros-trabajos/components/errorForm.php");
    ?>
    <div class="create-post">
      <div class="title">
        <h1>Crear un nuevo Post</h1>
      </div>

      <form id="frm-test" action="/nuestros-trabajos/core/createPost.php" method="post" enctype="multipart/form-data">

        <div class="gruop">
          <label class="text" for=""><strong>Título del Post</strong></label>
          <input id="title-input" type="text" name="title" required>
        </div>


        <div class="gruop">
          <label class="text" for=""><strong>Meta Título del Post</strong></label>
          <input type="text" name="meta_title" required>
        </div>




        <div class="gruop">
          <p class="label-file" id="btn-generate-uri">GENERAR URL</p>
        </div>



        <div class="gruop">
          <label class="text" for=""><strong>URL del Post</strong></label>
          <input type="text" name="uri" id='input-uri' required>
        </div>



        <div class="gruop">
          <p id="response-input"></p>
          <p class="label-file" id="btn-verify-uri">VERIFICAR URL</p>
        </div>




        <div class="gruop">
          <label class="text" for=""><strong>Agregar una descripción que atraiga al usuario</strong></label>
          <textarea class='text-description' name="description"></textarea>
        </div>





        <div class="gruop">
          <div class="text">
            <p><strong>NOTA:</strong> pasar la imagen por <a href='https://tinypng.com/' target="_blank"><strong>tinypng</strong></a> para bajarle el peso sin que pierda su calidad y solo se permiten jpeg, jpg y png</p>
          </div>
          <label class="label-file" for="image">Imagen de Portada</label>
          <img id="show-img" />
          <input class="d-none" type="file" name="image" id="image" onchange="getImg(this);" required>
        </div>

        <div class="area-content">
          <label class="text" for=""><strong>Contenido del Post</strong></label>
          <textarea id="txtEditor" name="content" value=""></textarea>
        </div><br><br><br>





























        <!-- Publicacion del post en ingles -->

        <div class="title">
          <h1>Create a new Post</h1>
        </div>

        <div class="gruop">
          <label class="text" for=""><strong>Post title</strong></label>
          <input id="title-input" type="text" name="title_en" required>
        </div>

        <div class="gruop">
          <label class="text" for=""><strong>Meta Post Title</strong></label>
          <input type="text" name="meta_title_en" required>
        </div>






        <!-- <div class="gruop">
          <p class="label-file" id="btn-generate-uri_en">GENERAR URL</p>
        </div> -->



        <!-- <div class="gruop">
          <label class="text" for=""><strong>URL del Post</strong></label>
          <input type="text" name="uri_en" id='input-uri_en' required>
        </div> -->



        <!-- <div class="gruop">
          <p id="response-input_en"></p>
          <p class="label-file" id="btn-verify-uri_en">VERIFICAR URL</p>
        </div> -->







        <div class="gruop">
          <label class="text" for=""><strong>Add a description that attracts the user</strong></label>
          <textarea class='text-description' name="description_en"></textarea>
        </div>



        <div class="area-content">
          <label class="text" for=""><strong>Post Content</strong></label>
          <textarea id="txtEditor_en" name="content_en" value=""></textarea>
        </div>







































        <div class="public-post">
          <input type="checkbox" name="public-post" id="public-post">
          <label class="text" for="public-post"><strong>¿Publicar Post?</strong></label>
        </div>



        <div class="public-post">
          <input type="checkbox" name="post-raiz" id="post-raiz">
          <label class="text" for="post-raiz"><strong>¿Desea priorizar este Post?</strong></label>
        </div>

        <div class="public-post">
          <input type="checkbox" name="sitemap" id="sitemap">
          <label class="text" for="sitemap"><strong>¿Desea que no se indexe esta página?</strong></label>
        </div>

        <button id="btn-enviar" type="submit">Crear Post</button>
      </form>
    </div>
  </div>
</div>