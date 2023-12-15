<?php

// Obteniendo todos los posts
function get_all_posts()
{
  try {
    // Conexion a la base de datos
    $conn = open_db();
    $data = [];

    $get_posts = $conn->query("SELECT * FROM posts ORDER BY id DESC");

    // Guardando los posts en el array
    foreach ($get_posts as $key => $value) {
      array_push($data, $value);
    }

    $get_posts->closeCursor();

    return $data;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController linea: " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

//Obtiene un post mediante su id
function get_post_for_id($id)
{
  try {
    $conn = open_db();
    $data = [];

    $get_post = $conn->prepare("SELECT * FROM posts WHERE id=:id");

    $get_post->execute(array(
      ":id" => $id
    ));

    foreach ($get_post as $key => $value) {
      array_push($data, $value);
    }

    $get_post->closeCursor();

    return $data;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en el archivo PostsController en la linea: " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

// Obtiene solo 6 posts apartir de la fila indicada
function get_posts_for_limit($row_start, $limit)
{
  try {
    $conn = open_db();
    $data = [];
    $six_posts = $conn->query("SELECT * FROM posts WHERE published='true' ORDER BY id DESC LIMIT $row_start, $limit");

    foreach ($six_posts as $key => $value) {
      array_push($data, $value);
    }

    $six_posts->closeCursor();

    return $data;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController linea: " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

// Obtiene el post mediante su uri
function get_post_for_uri($uri)
{
  try {
    $conn = open_db();
    $data = [];
    $get_post = $conn->prepare("SELECT * FROM posts WHERE uri=:uri");

    $get_post->execute(array(
      ":uri" => "$uri"
    ));

    foreach ($get_post as $key => $value) {
      array_push($data, $value);
    }

    $get_post->closeCursor();

    return $data;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController linea: " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

// Obtiene los ultimos 10 posts
function get_post_last_ten($id_post_actual)
{
  try {
    $conn = open_db();
    $data = [];
    $get_posts = $conn->query("SELECT title, uri, fecha, seo FROM posts WHERE id != $id_post_actual AND published='true' ORDER BY id DESC LIMIT 10");

    foreach ($get_posts as $key => $value) {
      array_push($data, $value);
    }

    $get_posts->closeCursor();

    return $data;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController linea: " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

// Obtenemos los post que estan pendientes
function get_posts_pendding()
{
  try {
    $conn = open_db();
    $data = [];
    $get_posts = $conn->query("SELECT * FROM posts WHERE published='false' ORDER BY id DESC");

    foreach ($get_posts as $key => $value) {
      array_push($data, $value);
    }

    $get_posts->closeCursor();

    return $data;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController linea: " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

// Obtiene el post siguente del post actual
function get_uri_next_for_id($id)
{
  try {
    $conn = open_db();
    $uri = "";
    $seo = "";

    $uri_prev = $conn->prepare("SELECT uri, seo FROM posts WHERE id > :id AND published='true' ORDER BY id LIMIT 1");

    $uri_prev->execute(array(
      ":id" => $id
    ));

    foreach ($uri_prev as $data) {
      $uri = $data['uri'];
      $seo = $data['seo'];
    }

    $uri_prev->closeCursor();

    return [$uri, $seo];
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController linea: " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

// Obtiene el post anterior del post actual
function get_uri_prev_for_id($id)
{
  try {
    $conn = open_db();
    $uri = "";
    $seo = "";

    $uri_prev = $conn->prepare("SELECT uri, seo FROM posts WHERE id < :id AND published='true' ORDER BY id DESC LIMIT 1");

    $uri_prev->execute(array(
      ":id" => $id
    ));

    foreach ($uri_prev as $data) {
      $uri = $data['uri'];
      $seo = $data['seo'];
    }

    $uri_prev->closeCursor();

    return [$uri, $seo];
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController linea: " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

// Funcion encargada de agregar un nuevo post
function insert_post($title, $title_en, $meta_title, $meta_title_en, $description, $description_en, $content, $content_en, $uri, $imgPortada, $imgPortadaWebp, $imgMobile, $imgMobileWebp, $fecha, $update_fecha, $published, $url_raiz, $sitemap)
{
  try {
    $conn = open_db();

    $insert = $conn->prepare("INSERT INTO posts
                                  (title, title_en, meta_title, meta_title_en, description, description_en, content, content_en, fecha, update_fecha, img_portada, img_portada_web, img_mobile, img_mobile_web, uri, published, seo, sitemap) VALUES 
                                  (:title, :title_en, :meta_title, :meta_title_en, :description, :description_en, :content, :content_en, :fecha, :update_fecha, :img_portada, :img_portada_web, :img_mobile, :img_mobile_web, :uri, :published, :seo, :sitemap)");

    $insert->execute(array(
      ":title" => $title,
      ":title_en" => $title_en,
      ":meta_title" => $meta_title,
      ":meta_title_en" => $meta_title_en,
      ":description" => $description,
      ":description_en" => $description_en,
      ":content" => $content,
      ":content_en" => $content_en,
      ":fecha" => $fecha,
      ":update_fecha" => $update_fecha,
      ":img_portada" => $imgPortada,
      ":img_portada_web" => $imgPortadaWebp,
      ":img_mobile" => $imgMobile,
      ":img_mobile_web" => $imgMobileWebp,
      ":uri" => $uri,
      ":published" => $published,
      ":seo" => $url_raiz,
      ":sitemap" => $sitemap,
    ));

    $insert->closeCursor();
    update_sitemap_posts();
    return true;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController linea: " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

// Verificamos que la url no exista
function verify_url($url)
{
  try {
    $conn = open_db();
    $validate = false;

    $validate_uri = $conn->prepare("SELECT uri FROM posts WHERE uri=:uri");

    $validate_uri->execute(array(
      ":uri" => $url
    ));

    foreach ($validate_uri as $data) {
      $validate = true;
    }

    $validate_uri->closeCursor();

    return $validate;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController en la linea : " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

// Funcion encargada de eliminar el post envia por el id
function delete_post($id)
{
  try {
    $conn = open_db();

    $delete = $conn->prepare("DELETE FROM posts WHERE id=:id");

    $delete->execute(array(
      ":id" => $id
    ));

    $delete->closeCursor();
    update_sitemap_posts();
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController en la linea : " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

// Funcion encargada de borrar la carpeta y las imagenes del post
function delete_folder_and_img($uri, $seo)
{
  // Creamos la ruta donde esta el post del blog
  if ($seo === 'true') {
    // En caso de ser post prioritario va a la carpeta raiz
    $path = "../../$uri";
  } else {
    // Si no es prioritario va a la carpeta /blog/post/
    $path = "../post/$uri";
  }

  // Primero borrarmos el folder
  // Borramos el archivo
  unlink($path . '/index.php');
  // Borramos la carpeta
  rmdir($path);

  // Luego borramos las imagenes
  $images = scandir("../../public/img/blog/$uri");
  foreach ($images as $data) {
    unlink('../../public/img/blog/' . $uri . '/' . $data . '');
  }

  rmdir('../../public/img/blog/' . $uri);
}

// Obtenemos la cantidad de posts
function get_count_posts()
{
  try {
    $conn = open_db();
    $number = 0;

    $count = $conn->query("SELECT COUNT(id) FROM posts WHERE published='true'");

    foreach ($count as $data) {
      $number = $data[0];
    }

    $count->closeCursor();

    return $number;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController en la linea : " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

// Funcion encargada de contar los posts y crear paginas
function create_folder($count_posts)
{
  $page = 1;
  $limit = 6; //Declaramos cuantos posts hay por pagina
  $suma_limit = $limit; // Creamos variable pivot para contar de 6 en 6 cada que se cambie de pagina

  // Recorremos para saber si faltan carpetas por crear
  for ($i = 1; $i <= $count_posts; $i++) {
    if ($i <= $limit) {
      if (!file_exists("../pagina/$page/")) {
        mkdir("../pagina/" . $page . "/");
        copy('../index.php', "../pagina/$page/index.php");
      }
    } else {
      $page++;
      $limit += $suma_limit;
      if (!file_exists("../pagina/$page/")) {
        mkdir("../pagina/" . $page . "/");
        copy('../index.php', "../pagina/$page/index.php");
      }
    }
  }
}

// Funcion encargada de contar los posts y eliminar paginas
function delete_folder($count_posts)
{
  $limit = 6; //Declaramos el limite de posts por pagina
  $pages = $count_posts / $limit; // Obtenemos la cantidad de paginas que tienen que haber
  $pages = ceil($pages); //Redondeamos hacia arriba

  // obtenemos  el # de carpetas que exite dentro de page (# de paginas para la paginacion)
  $dir = scandir('../pagina/');
  asort($dir); // Ordenamos de menor a mayor
  $dir = end($dir); // Obtenemos el ultimo elemento del array que contiene el ultimo page

  // Recorremos la cantidad de paginas sobrantes y las borramos
  for ($i = $pages + 1; $i <= $dir; $i++) {
    // Borramos el archivo
    unlink('../pagina/' . $i . '/index.php');
    // Borramos la carpeta
    rmdir('../pagina/' . $i);
  }

  //Retornamos la cantidad de paginas reales para luego validar y saber si la redireccion es correcta
  return $pages;
}

// Funcion encargada de borrar unicamente la carpeta del post
function delete_only_folder_post($uri, $seo)
{
  if ($seo === 'true') {
    // En caso de ser post prioritario va a la carpeta raiz
    $path = "../../$uri";
  } else {
    // Si no es prioritario va a la carpeta /blog/post/
    $path = "../post/$uri";
  }

  // Primero borrarmos el folder
  // Borramos el archivo
  unlink($path . '/index.php');
  // Borramos la carpeta
  rmdir($path);
}

// Funcion encargada de quitar tildes, caracteres especiales y poner todo en minusculas
function repalceString($string, $titulo = false)
{
  $no_permitidas = array("á", "é", "í", "ó", "ú", "ñ", "ü", " ", ",");
  $permitas = array("a", "e", "i", "o", "u", "n", "u", "-", "");

  $texto = str_replace($no_permitidas, $permitas, $string);

  $texto = ($titulo) ? preg_replace('([^A-Za-z0-9 -])', '', $texto) : preg_replace('([^A-Za-z0-9 -.])', '', $texto);

  $texto = strtolower($texto);

  return $texto;
}

// Funcion encargada de reducir el tamaño de la imagen para destok y para mobile
function redimensionImg($max_ancho, $imagen, $mobile, $folder)
{
  try {
    // Validamos que la imagen sea de extension permitida
    if ($imagen['type'] == 'image/png' || $imagen['type'] == 'image/jpeg') {

      //Ruta de la carpeta donde se guardarán las imagenes
      $patch = '../../public/img/blog';
      $max_alto = 600;

      // VALIDANDO SI LA CARPETA QUE CONTENDRA TODAS LAS IMAGENES EXISTE Y EN CASO DE QUE NO LA CREE
      if (!file_exists($patch)) {
        mkdir($patch);
      }

      // Nombre de la imagen
      $nombrearchivo = $imagen['name'];
      $nombrearchivo = repalceString($nombrearchivo);

      // Creamos el nombre para la imagen webp
      $nombreSplice = explode('.', $nombrearchivo);
      $nombreWebp = $nombreSplice[0] . '.webp';

      // Validamos si la imagen es para mobile para agregarle -mobile al final
      if ($mobile) {
        $nombrearchivo = $nombreSplice[0] . '-mobile.' . $nombreSplice[1];
        $nombreWebp = $nombreSplice[0] . '-mobile.webp';
      }

      // Creamos la carpeta respectiva para las imagenes del post
      $patch .= "/$folder";
      if (!file_exists($patch)) {
        mkdir($patch);
      }

      //Redimensionar
      $rtOriginal = $imagen['tmp_name'];

      if ($imagen['type'] == 'image/jpeg') {
        $original = imagecreatefromjpeg($rtOriginal);
      } else if ($imagen['type'] == 'image/png') {
        $original = imagecreatefrompng($rtOriginal);
      }

      list($ancho, $alto) = getimagesize($rtOriginal);


      $x_ratio = $max_ancho / $ancho;
      $y_ratio = $max_alto / $alto;

      if (($ancho <= $max_ancho) && ($alto <= $max_alto)) {
        $ancho_final = $ancho;
        $alto_final = $alto;
      } elseif (($x_ratio * $alto) < $max_alto) {
        $alto_final = ceil($x_ratio * $alto);
        $ancho_final = $max_ancho;
      } else {
        $ancho_final = ceil($y_ratio * $ancho);
        $alto_final = $max_alto;
      }

      $lienzo = imagecreatetruecolor($ancho_final, $alto_final);
      imagecopyresampled($lienzo, $original, 0, 0, 0, 0, $ancho_final, $alto_final, $ancho, $alto);

      if ($imagen['type'] == 'image/jpeg') {
        imagejpeg($lienzo, $patch . "/" . $nombrearchivo);
      } else if ($imagen['type'] == 'image/png') {
        imagepng($lienzo, $patch . "/" . $nombrearchivo);
      }

      // Creamos las imagenes webp
      imagewebp($lienzo, $patch . "/" . $nombreWebp, 100);

      return [$nombrearchivo, $nombreWebp];
    } else {
      throw new Exception();
    }
  } catch (Exception $e) {
    $_SESSION['error'] = "Solo se permiten imagenes jpeg, jpg y png";
  }
}

// Funcion encargada de editar el post si hay nueva imagen
function edit_post_with_img($title, $title_en, $meta_title, $meta_title_en, $description, $description_en, $content, $content_en, $uri, $id, $imgPortada, $imgPortadaWebp, $imgMobile, $imgMobileWebp, $published, $fecha, $seo, $sitemap, $update_fecha)
{
  try {
    $conn = open_db();

    $update_post = $conn->prepare("UPDATE posts SET title=:title, title_en=:title_en, meta_title=:meta_title, meta_title_en=:meta_title_en, description=:description, description_en=:description_en, content=:content, content_en=:content_en, uri=:uri, img_portada=:img_portada, img_portada_web=:img_portada_web, img_mobile=:img_mobile, img_mobile_web=:img_mobile_web, published=:published, fecha=:fecha, update_fecha=:update_fecha, seo=:seo, sitemap=:sitemap WHERE id=:id");

    $update_post->execute(array(
      ":title" => $title,
      ":title_en" => $title_en,
      ":meta_title" => $meta_title,
      ":meta_title_en" => $meta_title_en,
      ":description" => $description,
      ":description_en" => $description_en,
      ":content" => $content,
      ":content_en" => $content_en,
      ":uri" => $uri,
      ":img_portada" => $imgPortada,
      ":img_portada_web" => $imgPortadaWebp,
      ":img_mobile" => $imgMobile,
      ":img_mobile_web" => $imgMobileWebp,
      ":id" => $id,
      ":published" => $published,
      ":fecha" => $fecha,
      ":update_fecha" => $update_fecha,
      ":seo" => $seo,
      ":sitemap" => $sitemap,
    ));

    $update_post->closeCursor();
    update_sitemap_posts();
    return true;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController linea: " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

// Funcion encargada de editar los post sin no hay imagen nueva
function edit_post_without_img($title, $title_en, $meta_title, $meta_title_en, $description, $description_en, $content, $content_en, $uri, $id, $published, $fecha, $seo, $sitemap, $update_fecha)
{
  try {
    $conn = open_db();

    $update_post = $conn->prepare("UPDATE posts SET title=:title, title_en=:title_en, meta_title=:meta_title, meta_title_en=:meta_title_en, description=:description, description_en=:description_en, content=:content, content_en=:content_en, uri=:uri, published=:published, fecha=:fecha, update_fecha=:update_fecha, seo=:seo, sitemap=:sitemap WHERE id=:id");

    $update_post->execute(array(
      ":title" => $title,
      ":title_en" => $title_en,
      ":meta_title" => $meta_title,
      ":meta_title_en" => $meta_title_en,
      ":description" => $description,
      ":description_en" => $description_en,
      ":content" => $content,
      ":content_en" => $content_en,
      ":uri" => $uri,
      ":id" => $id,
      ":published" => $published,
      ":fecha" => $fecha,
      ":update_fecha" => $update_fecha,
      ":seo" => $seo,
      ":sitemap" => $sitemap,
    ));

    $update_post->closeCursor();
    update_sitemap_posts();
    return true;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController linea: " . $e->getLine();
  } finally {
    close_db($conn);
  }
}

// Function para completar el sitemap
function completeText($file)
{
  $text = "";

  // recorremos la info traida del sitemap
  foreach ($file as $value) {
    $count = 0; // esta variable nos sirve para saber que posicion tenemos

    // recorremos cada objeto que nos trae la iteracion del sitemap
    foreach ($value as $data) {
      // si es 0 tenemos loc
      if ($count === 0) {
        $text .= "<url>\n<loc>" . $data[0] . "</loc>\n";
      } else if ($count === 1) {
        // si es 1 tenemos lastmod
        $text .= "<lastmod>" . $data[0] . "</lastmod>\n";
      } else {
        // si es 3 tenemos priority
        $text .= "<priority>" . $data[0] . "</priority>\n</url>\n";
      }
      $count++;
    }
  }

  return $text;
}

function update_sitemap_posts()
{
  try {
    $posts = get_all_posts();
    $sitemap_landing = simplexml_load_file("../../sitemap-landings.xml");

    $texto = "<?xml version='1.0' encoding='UTF-8'?>\n";
    $texto .= "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>\n";

    $texto .= completeText($sitemap_landing);

    $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", " de ");
    $meses_NUM = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "-");

    // $currentHour = date('TH:i:s');
    $fechaActual = date('Y-m-d\TH:i:s');
    // $currentHour = date('TH:i:sO');Y-m-d

    foreach ($posts as $value) {
      if (isset($value['update_fecha'])) {
        $fecha_sitemap = $value['update_fecha'];
      } else {
        $fecha_sitemap = $value['fecha'];
      }
      // validamos si queremos indexar la url
      if ($value['sitemap'] === 'true') {
        $fechas = str_replace($meses_ES, $meses_NUM, $fecha_sitemap);
        $fecha_separada = explode('-', $fechas);

        $new_date = $fecha_separada[2] . "-" . $fecha_separada[1] . "-" . $fecha_separada[0];

        if ($value['seo'] === 'false') {
          $texto .= "<url>\n<loc>https://" . $_SERVER["SERVER_NAME"] . '/nuestros-trabajos/post/' . $value['uri'] . "/</loc>\n<lastmod>" . $fechaActual . "+1:00" . "</lastmod>\n<priority>1.00</priority>\n</url>\n";
        } else {
          $texto .= "<url>\n<loc>https://" . $_SERVER["SERVER_NAME"] . '/' . $value['uri'] . "/</loc>\n<lastmod>" . $fechaActual . "+1:00" . "</lastmod>\n<priority>1.00</priority>\n</url>\n";
        }
      }
    }

    $texto .= "</urlset>";

    $file = '../../sitemap.xml';
    $fp = fopen($file, "w+");
    fwrite($fp, $texto);
    fclose($fp);

    return true;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController linea: " . $e->getLine();
  }
}

// Funcion para actualizar el sitemap de los posts
function update_sitemap_landing()
{
  try {
    $list_url = [
      "https://www.manisur.com/",
      "https://www.manisur.com/home/",
      "https://www.manisur.com/servicios/",
      "https://www.manisur.com/services/",
      "https://www.manisur.com/nuestros-trabajos/",
      "https://www.manisur.com/our-jobs/",
      "https://www.manisur.com/contacto/",
      "https://www.manisur.com/contact-us/"
    ];

    $fechaActual = date('Y-m-d\TH:i:s');
    $texto = "<?xml version='1.0' encoding='UTF-8'?>\n";
    $texto .= "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>\n";

    foreach ($list_url as $value) {
        $texto .= "<url>\n<loc>". $value ."</loc>\n<lastmod>". "$fechaActual" ."+1:00"."</lastmod>\n<priority>1.00</priority>\n</url>\n";
      }
    

    $texto .= "</urlset>";

    $file = '../../sitemap-landings.xml';
    $fp = fopen($file, "w+");
    fwrite($fp, $texto);
    fclose($fp);

    return true;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController linea: " . $e->getLine();
  }


}

// Funcion para actualizar la fecha del sitemap
function update_sistemap_date()
{

  try {

    $cadena_fecha_mysql_update = date('Y-m-d');
    $objeto_DateTime_update = date_create_from_format('Y-m-d', $cadena_fecha_mysql_update);
    $cadena_nuevo_formato_update = date_format($objeto_DateTime_update, "d-F-Y");


    $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", "-");
    $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", "-");


    $update_fecha = str_replace($meses_EN, $meses_ES, $cadena_nuevo_formato_update);

    $conn = open_db();

    $update_post = $conn->prepare("UPDATE posts SET update_fecha=:update_fecha");

    $update_post->execute(array(
      ":update_fecha" => $update_fecha,
    ));

    $update_post->closeCursor();
    return true;
  } catch (Exception $e) {
    echo "Ha ocurrido un error en PostsController linea: " . $e->getLine();
  }
}
