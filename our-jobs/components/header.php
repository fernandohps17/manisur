<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo html_entity_decode($meta_title) ?></title>

  <link rel="canonical" href="<?php echo $canonical ?>" />

  <meta name="theme-color" content="#2b2c6b">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriend" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <link rel="apple-touch-icon" href="/public/img/manisur_logo.webp">
  <link rel="apple-touch-startup-image" href="/public/img/manisur_logo.webp">
  <link rel="stylesheet" href="/public/css/main.css">

  <meta name="description" content="<?php echo html_entity_decode($description); ?>">
  <link rel="icon" href="/public/img/logo-guardamuebles-islatrans.png">
  <link rel="apple-touch-icon" href="/public/icon/favicon.ico">
  <link rel="apple-touch-startup-image" href="/public/icon/favicon.ico">
  <link rel="icon" href="/public/icon/favicon.ico">

  <?php if ($css === "create-post")
    require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/components/scriptTextarea.php";
  // require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/components/scriptTextarea_en.php";
  ?>

  <!-- <link rel="stylesheet" href="/public/css/style-v4.css"> -->
  <!-- CSS -->
  <?php
  // La variable css viene desde el folder data
  echo "<link rel='stylesheet' href='/public/css/$css.css'>";

  if ($css == "create-post") {
    echo "<script defer src='/public/js/showImgCreatePost.js'></script>
          <script defer src='/public/js/generate_uri.js'></script>
          ";
  }

  if ($css == "post") {
    echo "<script defer src='/public/js/recaptcha.js'></script>";
  }

  if (isset($_SESSION['login'])) {
    echo "<script defer src='/public/js/btn_admin.js'></script>";
  }
  ?>

  <!-- Google Tag Manager -->
  <script defer>
    function CargarTagManager() {
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-5GM3R3');
    }
    setTimeout(function() {
      CargarTagManager()
    }, 4000);
  </script>
  <!-- End Google Tag Manager -->
</head>

<body itemscope='' itemtype="http://schema.org/blog/">
  <!-- Google Tag Manager (noscript) -->
  <noscript id="tagmanager">
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GM3R3" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->




  <main>
    <div class="container" id="inicio">
      <div class="content">
        <div class="banner_top">

          <div class="banner_top_logo">
            <a href="/home/">
              <picture>
                <source type='image/webp' srcset="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-logo.webp">
                <img src="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-logo.png" alt="Manisur" title="Manisur" width="100" height="100">
              </picture>
            </a>
          </div>

          <div class="banner_top_contact">

            <div class="banner_top_contact_tel">
              <a href="tel:34956888601" onclick="gtag('event', 'telefonos')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                </svg>
                <p>956 888 601</p>
              </a>
            </div>

            <div class="banner_top_contact_ws">
              <a class="banner_top_contact_ws_icon" href="tel:+34956888601" onclick="gtag('event', 'telefonos')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg>
                Send WhatsApp
              </a>
            </div>

          </div>

          <div class="banner_top_certificado">
            <picture class="picture-defer">
              <source type='image/webp' srcset="/public/img/certificado2.webp">
              <img src="/public/img/certificado2.jpg" alt="Manisur" title="Manisur certificado" width="100" height="100">
            </picture>

            <picture class="picture-defer">
              <source type='image/webp' srcset="/public/img/certificado1.webp">
              <img src="image" srcset="/public/img/certificado1.jpg" alt="Manisur" title="Manisur certificado" width="100" height="100">
            </picture>
          </div>

        </div>
      </div>
    </div>


    <!-- MENU -->
    <?php
    $home = "";
    $services = "";
    $jobs = "";
    $contact = "";

    if (strpos($_SERVER['REQUEST_URI'], 'services')) {
      $services = "here activeNav2";
    } else if (strpos($_SERVER['REQUEST_URI'], 'jobs')) {
      $jobs = "here activeNav2";
    } else if (strpos($_SERVER['REQUEST_URI'], 'contact')) {
      $contact = "here activeNav2";
    } else if (strpos($_SERVER['REQUEST_URI'], 'home')) {
      $home = "";
    } else {
      $home = "here activeNav2";
    }
    ?>


    <!-- MENU -->
    <div class="container bg_blue">
      <div class="content">
        <div class="menu">
          <div class="toggle">
            <svg xmlns="http://www.w3.org/2000/svg" id="openMenu" height="48" width="48">
              <path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z" />
            </svg>
          </div>

          <div class="menu_enlaces" id="menuMobile">

            <nav class="menu_enlaces_a">
              <p class="closeMenu" id="closeMenu">X</p>
              <a href="/home/" class="<?php echo $home ?>"><strong>HOME</strong></a>
              <a href="/services/" class="<?php echo $services ?>"><strong>SERVICES</strong></a>
              <a href="/our-jobs/" class="<?php echo $jobs ?>"><strong>OUR JOBS</strong></a>
              <a href="/contact-us/" class="<?php echo $contac ?>"><strong>CONTACT</strong></a>
            </nav>

            <div class="menu_social">
              <div class="menu_idioma">
                <div class="menu_social_idioma">
                  <a href="/our-jobs/">ENG</a>
                  <a href="/nuestros-trabajos/"><span>|</span> ESP</a>
                </div>
              </div>

              <div class="menu_social_icon">
                <a href="https://www.instagram.com/" title="instagram" target="_blank" class="menu_social_icon_svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                  </svg></a>
                <a href="https://twitter.com/" title="twitter" target="_blank" class="menu_social_icon_svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                  </svg></a>
                <a href="https://www.facebook.com/" title="facebook" target="_blank" class="menu_social_icon_svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                  </svg></a>
              </div>
            </div>
          </div>

          <div class="menu_idioma2">
            <div class="menu_social_idioma">
              <a href="/our-jobs/">ENG</a>
              <a href="/nuestros-trabajos/"><span>|</span> ESP</a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Seccion del header -->
    <div class="banner">
      <div class="header">
        <h1 id="title">OUR JOBS</h1>
        <p id="subtitle">100% satisfied customers</p>
      </div>
      <div class="header_img">
        <picture>
          <source id="sourceMobile" media="(max-width: 600px)" srcset="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-fondo-servicios-mobile.webp">
          <source id="sourceDes" type='image/webp' srcset="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-fondo-trabajos.webp">
          <img id="imageDes" class="imageSlider" src="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-fondo-trabajos.jpg" alt="Manisur servicios banner" title="Manisur banner servicios" width="100" height="100">
        </picture>
      </div>
    </div>


    <!-- Iconos principales -->
    <div class="container bg_icon_principal">
      <div class="content">
        <div class="icon_principal">

          <div class="icon_principal_img">

            <picture class="picture-defer">
              <source class="image source" type='image/webp' data-img="/public/icon/icono-fabrica.webp">
              <img class="image" data-img="/public/img/icono-fabrica.png" alt="Manisur Icono de Fabrica" title="Manisur Icono de Fabrica" width="100" height="100">
            </picture>

            <div class="icon_principal_content">
              <h2 class="icon_principal_content_title">Industrial</h2>

              <div class="icon_principal_content_list">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                  <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                </svg>
                <p>Refrigerated chambers</p>
              </div>

              <div class="icon_principal_content_list">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                  <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                </svg>
                <p>Industrial air conditioning, fan coil</p>
              </div>

              <div class="icon_principal_content_list">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                  <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                </svg>
                <p>Water chillers</p>
              </div>

              <div class="icon_principal_content_list">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                  <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                </svg>
                <p>Catering machinery, <br> kitchens and laundry</p>
              </div>

              <div class="icon_principal_content_list">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                  <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                </svg>
                <p>Ventilation</p>
              </div>
            </div>
          </div>

          <div class="icon_principal_img">
            <picture class="picture-defer">
              <source class="image source" type='image/webp' data-img="/public/icon/icono-barco.webp">
              <img class="image" data-img="/public/img/icono-barca.png" alt="Manisur Icono de Barco" title="Manisur Icono de Borco" width="100" height="100">
            </picture>

            <div class="icon_principal_content">
              <h2 class="icon_principal_content_title">Naval</h2>

              <div class="icon_principal_content_list">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                  <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                </svg>
                <p>Refrigeration and air conditioning naval sector</p>
              </div>

              <div class="icon_principal_content_list">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                  <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                </svg>
                <p>Gambuzas</p>
              </div>

              <div class="icon_principal_content_list">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                  <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                </svg>
                <p>Chiller units</p>
              </div>

              <div class="icon_principal_content_list">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                  <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                </svg>
                <p>Ice makers</p>
              </div>

              <div class="icon_principal_content_list">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                  <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                </svg>
                <p>Screw compressors</p>
              </div>
            </div>
          </div>

          <div class="icon_principal_img">
            <picture class="picture-defer">
              <source class="image source" type='image/webp' data-img="/public/icon/icono-casa.webp">
              <img class="image" data-img="/public/img/icono-casa.png" alt="Manisur Icono de Casa" title="Manisur Icono de Casa" width="100" height="100">
            </picture>

            <div class="icon_principal_content">
              <h2 class="icon_principal_content_title">Domestic</h2>

              <div class="icon_principal_content_list">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                  <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                </svg>
                <p>Air conditioning</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div><br> <br>


    <!-- <div class="icon_principal_img">
      <picture class="picture-defer">
        <source type='image/webp' srcset="/public/icon/icono-barco.webp">
        <img src="/public/img/icono-barca.png" alt="Manisur Icono de Barco" title="Manisur Icono de Borco" width="100" height="100">
      </picture>

      <div class="icon_principal_content">
        <h2 class="icon_principal_content_title">Naval</h2>

        <div class="icon_principal_content_list">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
            <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
          </svg>
          <p>Frío y climatización sector naval</p>
        </div>

        <div class="icon_principal_content_list">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
            <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
          </svg>
          <p>Gambuzas</p>
        </div>

        <div class="icon_principal_content_list">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
            <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
          </svg>
          <p>Unidades enfriadoras</p>
        </div>

        <div class="icon_principal_content_list">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
            <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
          </svg>
          <p>Fabricadoras de hielo</p>
        </div>

        <div class="icon_principal_content_list">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
            <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
          </svg>
          <p>Compresores de tornillo</p>
        </div>
      </div>
    </div>

    <div class="icon_principal_img">
      <picture class="picture-defer">
        <source type='image/webp' srcset="/public/icon/icono-casa.webp">
        <img src="/public/img/icono-casa.png" alt="Manisur Icono de Casa" title="Manisur Icono de Casa" width="100" height="100">
      </picture>

      <div class="icon_principal_content">
        <h2 class="icon_principal_content_title">Doméstico</h2>

        <div class="icon_principal_content_list">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
            <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
          </svg>
          <p>Aire acondicionado</p>
        </div>
      </div>
    </div>

    </div>
    </div>
    </div> -->


    <!-- Barra con frase -->
    <div class="container">
      <div class="content">
        <div class="bar_info">
          <div class="bar_info_position">
            <picture class="picture-defer">
              <source type='image/webp' srcset="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-fondo-frase.webp">
              <img src="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-fondo-frase.jpg" alt="Manisur mensaje" title="Manisur mensaje" width="100" height="100">
            </picture>
            <section class="bar_info_content">
              <header class="bar_info_title">
                <h2>
                  AT MANISUR WE OFFER YOU THE SOLUTION YOU NEED
                </h2>
              </header>
              <p class="bar_info_subtitle">for the design, installation and maintenance of your refrigeration system</p>
            </section>
          </div>
        </div>
      </div>
    </div>

  </main>

  <?php
  require_once $_SERVER["DOCUMENT_ROOT"] . "/our-jobs/components/btnsAdminBlog.php";
  ?>
  <!-- Boton de Inicio -->
  <div class="inicio">
    <a href="#inicio" aria-label="ininio"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zm11.3-395.3l112 112c4.6 4.6 5.9 11.5 3.5 17.4s-8.3 9.9-14.8 9.9H304v96c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V256H144c-6.5 0-12.3-3.9-14.8-9.9s-1.1-12.9 3.5-17.4l112-112c6.2-6.2 16.4-6.2 22.6 0z" />
      </svg></a>
  </div>