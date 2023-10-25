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
    <link rel="canonical" href="https://www.manisur.com/">
    <link rel="apple-touch-icon" href="/public/icon/favicon.ico">
    <link rel="apple-touch-startup-image" href="/public/icon/favicon.ico">
    <link rel="icon" href="/public/icon/favicon.ico">

    <title>Manisur</title>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Manisur",
            "image": "https://www.manisur.com/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-logo.webp",
            "telephone": ["34 956 888 601"],
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Polígono industrial Tres caminos Puerto Real (Cádiz)"
            },
            "url": "https://www.manisur.com/"
        }
    </script>
</head>

<body>
    <main>
        <?php
        require_once '../comons/bannerTop.php';
        require_once '../comons/navBar.php';
        ?>

        <!-- Seccion del header -->
        <div class="banner">
            <div class="header">
                <h1 id="title">MAQUINARIA PARA EL FRIO</h1>
                <p id="subtitle">Uso industrial, naval y doméstico</p>
            </div>
            <div class="header_img">
                <picture>
                    <source id="sourceMobile" media="(max-width: 600px)" srcset="/public/img/banner-inicio-01-mobile.webp">
                    <source id="sourceDes" type='image/webp' srcset="/public/img/banner-inicio-01.webp">
                    <img id="imageDes" class="imageSlider" src="/public/img/banner-inicio-01.webp" alt="Manisur" title="Manisur" width="100" height="100">
                </picture>
            </div>
            <div class="arrow_right" id="arrow_right">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                    <path d="m18.75 36-2.15-2.15 9.9-9.9-9.9-9.9 2.15-2.15L30.8 23.95Z" />
                </svg>
            </div>
            <div class="arrow_left" id="arrow_left">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                    <path d="M28.05 36 16 23.95 28.05 11.9l2.15 2.15-9.9 9.9 9.9 9.9Z" />
                </svg>
            </div>
        </div>

        <?php
        require_once '../comons/iconPrincipal.php';
        ?>


        <div class="container">
            <div class="content">
                <div class="error">
                    <section class="error_title">
                        <header>
                            <h2>ERROR 404</h2>
                        </header>
                    </section>

                    <p class="error_subtitle">
                        La página que buscabas no puede ser encontrada
                    </p>
                </div>

                <div class="error_btn">
                    <a href="/">Volver al Inicio</a>
                </div><br><br>
            </div>
        </div>



        <?php
        require_once '../comons/footer.php';
        require_once '../comons/btn_top.php';
        require_once '../comons/cookies.php';
        ?>
    </main>

    <script src="/public/js/carga_diferida.js?ver=<?php echo $ver ?>"></script>
    <script src="/public/js/menu.js?ver=<?php echo $ver ?>"></script>
    <script src="/public/js/slider.js?ver=<?php echo $ver ?>"></script>
    <script src="/public/js/recatpcha.js?ver=<?php echo $ver ?>"></script>
    <script src="/public/js/translate.js?ver=<?php echo $ver ?>"></script>
</body>

</html>