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
                                    <a href="/cookie-policies/">ENG</a>
                                    <a href="/politicas-de-cookies/"><span>|</span> ESP</a>
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
                            <a href="/cookie-policies/">ENG</a>
                            <a href="/politicas-de-cookies/"><span>|</span> ESP</a>
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
                            <h1>POLÍTICAS DE COOKIES</h1>
                        </header>
                    </section><br>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>1. ¿QUÉ SON LAS COOKIES?</h2>
                        </header>
                        <p class="politicas_content_paragrah">Este sitio web utiliza cookies y/o tecnologíassimilares que almacenan y recuperan información cuando navegas. En general, estastecnologías pueden servir para finalidades muy diversas, como, por ejemplo, reconocerle como usuario, obtener información sobre sus hábitos de navegación, o personalizar la forma en que se muestra el contenido. Los usos concretos que hacemos de estas tecnologías se describen a continuación.</p>
                        <p class="politicas_content_paragrah">Las Cookies son esenciales para el funcionamiento de Internet; no pueden dañar el equipo/dispositivo del usuario y, si se encuentran activadas en la configuración de su navegador, ayudan a identificar y resolver posibles errores de funcionamiento del Sitio Web.</p>
                    </section>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>2. UTILIZACIÓN DE COOKIES</h2>
                        </header>
                        <p class="politicas_content_paragrah">En nuestra Web, podemos recabar información sobre su ordenador, terminal, etc., incluida, en su caso, su dirección de IP, sistema operativo y tipo de navegador, mediante una serie de Cookies propias y de terceros. En general, obtenemos datos estadísticos sobre cómo navega por nuestro sitio Web, lo que nos ayuda a mejorarlo y a prestarle un servicio mejor y más personalizado.</p>
                        <p class="politicas_content_paragrah">Estas cookies, ocasionalmente pueden permitir hacer una estimación sobre números y patrones de uso, almacenar información acerca de sus preferencias y personalizar nuestro sitio Web de conformidad con sus intereses individuales, acelerar sus búsquedas, reconocerle cuando regrese de nuevo a nuestro sitio o enviarle publicidad.</p>
                        <p class="politicas_content_paragrah">Le informamos de que, si se produce el consentimiento por su parte, habrá aceptado su uso, para que llevemos a cabo el tratamiento de los datos de carácter personal, bien mediante el uso de los parámetros adecuados del navegador o de otras aplicaciones, para lo cuál puede proceder a su configuración durante su instalación o actualización.</p>
                        <p class="politicas_content_paragrah">
                        Puede negarse a aceptar nuestras cookies activando en la configuración del navegador el rechazo alas cookies. Le advertimos expresamente que si selecciona esta configuración, quizás no pueda acceder a determinadas zonas de nuestro sitio Web, o no pueda beneficiarse de alguno de nuestros productos y/o servicios.
                        </p>
                        <p class="politicas_content_paragrah">
                        Esto no impedirá el posible almacenamiento o acceso de índole técnica mediante cookies específicas al 4 solo fin de efectuar la transmisión de una comunicación por una red de comunicaciones electrónicas o, en la medida que resulte estrictamente necesario, para la prestación del servicio de expresamente solicitado y que son imprescindibles para garantizar la navegación en nuestro site y eluso de los servicios ofrecidos en el mismo.
                        </p>
                        <p class="politicas_content_paragrah">
                        Le informamos que si la configuración de su navegador no rechaza cookies, nuestro sistema producirá cookies cuando se conecte a nuestro sitio.
                        </p>
                    </section>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>3. TIPOS DE COOKIES QUE UTIIZAMOS</h2>
                        </header>
                        <p class="politicas_content_paragrah">Las Cookies que utilizamos, en función de su permanencia, pueden dividirse en: Cookies de sesión o permanentes. Las primerasson temporales y dejan de utilizarse cuando el Usuario cierra el navegador. Las segundas se mantienen hasta el momento en que se presta el servicio para el que sirven (por ejemplo, para que el Usuario se mantenga identificado en nuestros servicios) o bien cuando se borran manualmente.</p>
                        <p class="politicas_content_paragrah">Por otra parte, las Cookies pueden clasificarse de la siguiente forma:
                            <li><b>COOKIES TÉCNICAS:</b> Las cookies técnicas son esenciales para que te puedas mover por una página web y usar sus funciones. De manera general, estas cookies habilitan las diferentes funciones de la página web, hacen que su navegación sea más segura o aportan funcionalidades que son previamente solicitadas por usted. Al ser necesarias para el funcionamiento del sitio, estas cookies por defecto estarán activadas y no podrán denegarse.</li>
                            <li><b>COOKIES DE PREFERENCIAS O PERSONALIZACIÓN:</b> Le permiten acceder al servicio con algunas características de carácter general predefinidas en función de una serie de criterios en el terminal del usuario como por ejemplo serian el idioma, el tipo de navegador a través del cual accede al servicio, la configuración regional desde donde accede al servicio, etc.</li>
                            <li><b>COOKIES DE ANÁLISIS:</b> Permiten al responsable de las mismas, el seguimiento y análisis del comportamiento de los usuarios de los sitios web a los que están vinculadas. La información recogida mediante este tipo de cookies se utiliza en la medición de la actividad de los sitios web, aplicación o plataforma y para la elaboración de perfiles de navegación de los usuarios de dichos sitios, aplicaciones y plataformas, con el fin de introducir mejoras en función del análisis de los datos de uso que hacen los usuarios del servicio.</li>
                            <li><b>COOKIES DE PUBLICIDAD:</b> Este tipo de “Cookies” permiten ampliar la información de los anuncios publicitarios. Podrían almacenar la duración o frecuencia de visualización de 5 muestras publicitarias, patrones de navegación y/o comportamientos que facilitan un perfil de interés comercial y ofrecer publicidad, afín a los intereses del visitante.</li>
                            <li><b>COOKIES DE PUBLICIDAD COMPORTAMENTAL:</b> almacenan información del comportamiento de los usuarios obtenida a través de la observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico para mostrar publicidad en función del mismo.</li>
                            <li><b>COOKIES DE REDES SOCIALES EXTERNAS:</b> se utilizan para que los visitantes puedan interactuar con el contenido de diferentes plataformas sociales (facebook, youtube, twitter, linkedIn, etc..) y que se generen únicamente para los usuarios de dichas redes sociales. Las condiciones de utilización de estas cookies y la información recopilada se regula por la política de privacidad de la plataforma social correspondiente.</li>
                        </p>

                        <p class="politicas_content_paragrah">En resumen, para su conocimiento sepa que utilizamos las siguientes:</p>
                        
                        <table border="1">
                            <tr>
                                <th>Cookies</th>
                                <th>Finalidad de la cookie</th>
                                <th>Duración</th>
                                <th>Entidad que utiliza las cookies</th>
                                <th>Mas información</th>
                            </tr>
                            <tr align="center" class="td">
                                <td>Colocar por informático</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Colocar por informático</td>
                            </tr>
                            <tr align="center" class="td">
                                <td>Colocar por informático</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Colocar por informático</td>
                            </tr>
                            <tr align="center" class="td">
                                <td>Colocar por informático</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Colocar por informático</td>
                            </tr>
                        </table>
                    </section>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>4. CÓMO ADMINISTRAR LAS COOKIES</h2>
                        </header>
                        <p class="politicas_content_paragrah">Las Cookies que utilizamos, en función de su permanencia, pueden dividirse en: Cookies de sesión o permanentes. Las primerasson temporales y dejan de utilizarse cuando el Usuario cierra el navegador. Las segundas se mantienen hasta el momento en que se presta el servicio para el que sirven (por ejemplo, para que el Usuario se mantenga identificado en nuestros servicios) o bien cuando se borran manualmente.</p>
                        <p class="politicas_content_paragrah">Puede bloquear y eliminar cookies cambiando la configuración de tu navegador. Para administrar las cookies, la mayoría de los navegadores permiten rechazar o aceptar todas las cookies o solo aceptar ciertos tipos de cookies. El proceso para la gestión y eliminación de cookies se puede encontrar en la función de ayuda integrada en el navegador. Si desea limitar el uso de cookies, no podrá utilizar todas las funciones interactivas de nuestro sitio web.</p>
                        <p class="politicas_content_paragrah">De igual manera, puede permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones del navegador instalado en su ordenador:
                            <li><b>Firefox:</b> <a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web">https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web...</a></li>
                            <li><b>Chrome:</b> <a href="https://support.google.com/accounts/answer/61416?hl=es">https://support.google.com/accounts/answer/61416?hl=es</a></li>
                            <li><b>Explorer:</b> <a href="https://support.microsoft.com/es-es/help/17442/windows-internetexplorer-dele">https://support.microsoft.com/es-es/help/17442/windows-internetexplorer-dele</a></li>
                            <li><b>Safari:</b> <a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac"> https://support.apple.com/es-es/guide/safari/sfri11471/mac</a></li>
                            <li><b>Opera:</b> <a href="https://help.opera.com/Windows/11.50/es-ES/cookies.html">https://help.opera.com/Windows/11.50/es-ES/cookies.html</a></li>
                        </p>
                        <p class="politicas_content_paragrah">Además, también puede gestionar el almacén de cookies en su navegador a través de herramientas como las siguientes:</p>
                        <p class="politicas_content_paragrah">Ghostery: <a href="www.ghostery.com">www.ghostery.com</a></p>
                        <p class="politicas_content_paragrah">Your online choices: <a href="www.youronlinechoices.com/es">www.youronlinechoices.com/es</a></p>
                    </section>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>5.CONFIGURACIÓN DE ANUNCIOS EN OTRAS PLATAFORMAS</h2>
                        </header>
                        <p class="politicas_content_paragrah">Al igual que sucede en los navegadores de ordenadores, los navegadores de los dispositivos móviles permiten realizar cambios en las opciones o ajustes de privacidad para desactivar o eliminar las cookies.</p>
                        <p class="politicas_content_paragrah">Si desea modificar las opciones de privacidad siga las instrucciones especificadas por el desarrollador de su navegador para dispositivo móvil.</p>
                        <p class="politicas_content_paragrah">A continuación, podrá encontrar algunos ejemplos de los links que le guiarán para modificar las opciones de privacidad en su dispositivo móvil:</p>
                        <p class="politicas_content_paragrah">
                            <a href="Safari para IOS">Safari para IOS</a>
                        </p>
                        <p class="politicas_content_paragrah">
                            <a href="Chrome para Android">Chrome para Android</a>
                        </p>
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