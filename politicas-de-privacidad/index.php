<?php
session_start();
require_once "../comons/version_css_js.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="APARATOS Y MAQUINARIA RELACIONADAS CON EL FRÍO NAVAL, INDUSTRIAL Y DOMESTICO.">
    <meta name="theme-color" content="#2b2c6b">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriend" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="canonical" href="https://www.manisur.com/aviso-legal">
    <link rel="apple-touch-icon" href="/public/icon/favicon.ico">
    <link rel="apple-touch-startup-image" href="/public/icon/favicon.ico">
    <link rel="icon" href="/public/icon/favicon.ico">

    <title>Manisur</title>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Manisur",
            "image": "https://www.manisur.com/public/img/manisur_logo.webp",
            "telephone": ["34 956 888 601"],
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Polígono industrial Tres caminos Puerto Real (Cádiz)"
            },
            "url": "https://www.manisur.com/aviso-legal"
        }
    </script>
</head>

<body>
    <main>
        <?php
        require_once '../comons/bannerTop.php';
        ?>






        <?php
        $inicio = "";
        $servicios = "";
        $trabajos = "";
        $contacto = "";

        if (strpos($_SERVER['REQUEST_URI'], 'servicios')) {
            $servicios = "here activeNav2";
        } else if (strpos($_SERVER['REQUEST_URI'], 'trabajos')) {
            $trabajos = "here activeNav2";
        } else if (strpos($_SERVER['REQUEST_URI'], 'contacto')) {
            $contacto = "here activeNav2";
        } else if (strpos($_SERVER['REQUEST_URI'], 'inicio')) {
            $inicio = "";
        } else {
            $inicio = "here activeNav2";
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
                            <a href="/" class="<?php echo $inicio ?>"><strong>INICIO</strong></a>
                            <a href="/servicios/" class="<?php echo $servicios ?>"><strong>SERVICIOS</strong></a>
                            <a href="/nuestros-trabajos/" class="<?php echo $trabajos ?>"><strong>NUESTROS TRABAJOS</strong></a>
                            <a href="/contacto/" class="<?php echo $contacto ?>"><strong>CONTACTO</strong></a>
                        </nav>

                        <div class="menu_social">
                            <div class="menu_idioma">
                                <div class="menu_social_idioma">
                                    <a href="/privacy-policies/">ENG</a>
                                    <a href="/politicas-de-privacidad/"><span>|</span> ESP</a>
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
                            <a href="/privacy-policies/">ENG</a>
                            <a href="/politicas-de-privacidad/"><span>|</span> ESP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="container">
            <div class="content">
                <div class="politicas">
                    <section class="politicas_spacing">
                        <header class="politicas_title">
                            <h1>POLÍTICAS DE PRIVACIDAD</h1>
                        </header>
                        <p class="politicas_subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, deleniti illum tenetur eum libero corrupti error debitis veniam! Expedita enim laboriosam quo rerum dolor est commodi excepturi omnis placeat assumenda, officia eius maiores nulla recusandae a voluptate libero, earum doloremque! Nam ratione quis doloribus qui quae! Repellendus, corporis. Eveniet perferendis ipsa rerum commodi! Eaque molestias animi beatae ab repellendus cupiditate dolores quas deserunt reprehenderit, temporibus vitae nisi. Id qui quaerat repudiandae, corrupti provident consequatur? Excepturi unde in, nostrum error et iusto reprehenderit voluptas autem ad animi aut consequuntur reiciendis voluptatem atque deleniti, velit perspiciatis hic qui expedita! Officiis, ullam rem!</p>
                        <p class="politicas_subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, deleniti illum tenetur eum libero corrupti error debitis veniam! Expedita enim laboriosam quo rerum dolor est commodi excepturi omnis placeat assumenda, officia eius maiores nulla recusandae a voluptate libero, earum doloremque! Nam ratione quis doloribus qui quae! Repellendus, corporis. Eveniet perferendis ipsa rerum commodi! Eaque molestias animi beatae ab repellendus cupiditate dolores quas deserunt reprehenderit, temporibus vitae nisi. Id qui quaerat repudiandae, corrupti provident consequatur? Excepturi unde in, nostrum error et iusto reprehenderit voluptas autem ad animi aut consequuntur reiciendis voluptatem atque deleniti, velit perspiciatis hic qui expedita! Officiis, ullam rem!</p>
                        <p class="politicas_subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, deleniti illum tenetur eum libero corrupti error debitis veniam! Expedita enim laboriosam quo rerum dolor est commodi excepturi omnis placeat assumenda, officia eius maiores nulla recusandae a voluptate libero, earum doloremque! Nam ratione quis doloribus qui quae! Repellendus, corporis. Eveniet perferendis ipsa rerum commodi! Eaque molestias animi beatae ab repellendus cupiditate dolores quas deserunt reprehenderit, temporibus vitae nisi. Id qui quaerat repudiandae, corrupti provident consequatur? Excepturi unde in, nostrum error et iusto reprehenderit voluptas autem ad animi aut consequuntur reiciendis voluptatem atque deleniti, velit perspiciatis hic qui expedita! Officiis, ullam rem!</p>
                        <p class="politicas_subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, deleniti illum tenetur eum libero corrupti error debitis veniam! Expedita enim laboriosam quo rerum dolor est commodi excepturi omnis placeat assumenda, officia eius maiores nulla recusandae a voluptate libero, earum doloremque! Nam ratione quis doloribus qui quae! Repellendus, corporis. Eveniet perferendis ipsa rerum commodi! Eaque molestias animi beatae ab repellendus cupiditate dolores quas deserunt reprehenderit, temporibus vitae nisi. Id qui quaerat repudiandae, corrupti provident consequatur? Excepturi unde in, nostrum error et iusto reprehenderit voluptas autem ad animi aut consequuntur reiciendis voluptatem atque deleniti, velit perspiciatis hic qui expedita! Officiis, ullam rem!</p>
                    </section>
                </div>
            </div>
        </div>



        <?php
        require_once '../comons/footer.php';
        require_once '../comons/btn_top.php';
        ?>
    </main>

    <script src="/public/js/carga_diferida.js"></script>
    <script src="/public/js/menu.js"></script>
</body>

</html>