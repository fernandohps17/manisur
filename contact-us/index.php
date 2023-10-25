<?php
session_start();
require_once "../comons/version_css_js.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CONTACT MANISUR.">
    <meta name="theme-color" content="#2b2c6b">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriend" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="canonical" href="https://www.manisur.es/contact">
    <link rel="apple-touch-icon" href="/public/icon/favicon.ico">
    <link rel="apple-touch-startup-image" href="/public/icon/favicon.ico">
    <link rel="icon" href="/public/icon/favicon.ico">

    <title>Manisur | Contact</title>
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
            "url": "https://www.manisur.es/contact"
        }
    </script>
</head>

<body>
    <main>





        <!-- Banner top -->
        <div class="container" id="inicio">
            <div class="content">
                <div class="banner_top">

                    <div class="banner_top_logo">
                        <a href="/home/">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' data-img="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-logo.webp">
                                <img class="image" data-img="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-logo.jpg" alt="Manisur Logo" title="Manisur Logo" width="112" height="126">
                            </picture>
                            <!-- <picture class="picture-defer">
                        <source type='image/webp' srcset="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-logo.webp">
                        <img src="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-logo.jpg" alt="Manisur" title="Manisur certificado" width="112" height="126">
                    </picture> -->
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
                        <!-- <picture class="picture-defer">
                    <source type='image/webp' srcset="/public/img/certificado2.webp">
                    <img src="/public/img/certificado2.jpg" alt="Manisur" title="Manisur certificado" width="112" height="126">
                </picture> -->
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' data-img="/public/img/certificado2.webp">
                            <img class="image" data-img="/public/img/certificado2.jpg" alt="Manisur Certificado" title="Manisur Certificado" width="112" height="126">
                        </picture>

                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' data-img="/public/img/certificado1.webp">
                            <img class="image" data-img="/public/img/certificado1.jpg" alt="Manisur Certificado" title="Manisur Certificado" width="112" height="126">
                        </picture>
                        <!-- <picture class="picture-defer">
                    <source type='image/webp' srcset="/public/img/certificado1.webp">
                    <img src="/public/img/certificado1.jpg" alt="Manisur" title="Manisur certificado" width="112" height="126">
                </picture> -->
                    </div>
                </div>
            </div>
        </div>


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
                            <a href="/contact-us/" class="<?php echo $contact ?>"><strong>CONTACT</strong></a>
                        </nav>

                        <div class="menu_social">
                            <div class="menu_idioma">
                                <div class="menu_social_idioma">
                                    <a href="/contact-us/">ENG</a>
                                    <a href="/contacto/"><span>|</span> ESP</a>
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
                            <a href="/contact-us/">ENG</a>
                            <a href="/contacto/"><span>|</span> ESP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!-- Seccion del header -->
        <div class="banner">
            <div class="header">
                <h1 id="title">CONTACT</h1>
            </div>
            <div class="header_img">
                <picture>
                    <source id="sourceMobile" media="(max-width: 600px)" srcset="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-fondo-contacto-mobile.webp">
                    <source id="sourceDes" type='image/webp' srcset="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-fondo-contacto.webp">
                    <img id="imageDes" class="imageSlider" src="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-fondo-contacto.webp" alt="Manisur Banner contacto" title="Manisur Banner contacto" width="100" height="100">
                </picture>
            </div>
        </div>




        <!-- ICON PRINCIPAL -->
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




        <!-- Section de info sede -->
        <div class="container">
            <div class="content">
                <div class="contacto_parrafo">
                    <section>
                        <header class="title">
                            <h2>OUR HEADQUARTERS</h2>
                        </header>
                        <br>
                        <p class="subtitle">You can visit us at our offices, we will be happy to assist you personally and advise you on the best solution for the needs of your company, business or home.</p><br>
                        <p class="subtitle">The company has a work center in the Tres Caminos industrial estate, in Puerto Real. Specifically, it is a warehouse with a floor area of 286.76 m2 and a mezzanine of 215.33 m2 intended for workshops and offices, as well as another warehouse with a floor area of 159 m2 and a mezzanine of 68 m2 dedicated to warehouse and archive.</p><br>
                        <p class="subtitle">Among the means of production used (machines and tools) we can mention in general equipment of:</p><br>

                        <div class="contact_list">
                            <li class="subtitle"><span>Equipment for the recovery and treatment of refrigerant gases.</span><br></li>
                            <li class="subtitle"><span>Calibration equipment (megger, manovacuometers, current clamps, micrometers,...).</span><br></li>
                            <li class="subtitle"><span>Vertical standing drill.</span><br></li>
                            <li class="subtitle"><span>Emery stone</span><br></li>
                            <li class="subtitle"><span>Industrial cutting saws.</span><br></li>
                            <li class="subtitle"><span>Lathe</span><br></li>
                            <li class="subtitle"><span>Electric welding equipment.</span><br></li>
                            <li class="subtitle"><span>Autogenous welding equipment.</span><br></li>
                        </div><br>

                        <p class="subtitle">In addition, the company has a fleet of vehicles, used for the transport of workers, which provides extraordinary mobility when executing the different jobs that the company undertakes.</p><br>
                    </section><br>

                    <div class="contacto_img">

                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' data-img="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-sede1.webp">
                            <img class="image" data-img="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-sede1.jpg" alt="Manisur imagenes contacto" title="Manisur imagenes contacto" width="100" height="100">
                        </picture>

                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' data-img="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-sede2.webp">
                            <img class="image" data-img="/public/img/manisur-aparatos-maquinaria-frio-naval-industrial-y-domestico-sede2.jpg" alt="Manisur imagenes contacto" title="Manisur imagenes contacto" width="100" height="100">
                        </picture>

                    </div>
                </div>
            </div>
        </div>



        <br>
        <!-- Paragrah of contact -->
        <div class="container">
            <div class="content">
                <div class="contacto_parrafo">
                    <section>
                        <header class="title">
                            <h2>CONTACT WITH US</h2>
                        </header>
                        <br>
                        <p class="subtitle">If you want more detailed information about any of our services, or have any questions or queries, you can contact us by phone, whatsapp, e-mail, filling out the following form or you can visit us at our headquarters.</p>
                    </section>
                </div>
            </div>
        </div>
        <br>


        <!-- Section form two -->
        <div class="container bg_form_two">
            <div class="content">
                <div class="form_contact_two">
                    <div class="from_contact_two_title">
                        <section class="spacing_title">
                            <header>
                                <h2>REQUEST MORE INFORMATION WITHOUT COMMITMENT</h2>
                            </header>
                            <p>If you want more information, fill out this form and we will contact you as soon as possible:</p>
                        </section>
                    </div>

                    <div class="from_contact_two_from">
                        <form action="/contact-contact-us/" method="POST">
                            <label class="from_contact_two_from_spacing">

                                <div class="from_contact_two_from_display">
                                    <label class="from_contact_two_from_input">
                                        <p>Name and surname</p>
                                        <input type="text" name="name" required>
                                    </label>
                                    <label class="from_contact_two_from_input">
                                        <p>Phone</p>
                                        <input type="text" name="tel" required>
                                    </label>
                                    <label class="from_contact_two_from_input">
                                        <p>E-mail</p>
                                        <input type="email" name="email" required>
                                    </label>
                                </div><br>

                                <div>
                                    <label class="from_contact_two_from_input_textarea">
                                        <p>Please explain the reason for your inquiry:</p>
                                        <textarea name="message" cols="30" rows="10" required></textarea>
                                    </label>
                                </div>

                                <label class="from_contact_two_from_input_checkbox">
                                    <input type="checkbox" required>
                                    <p>I have read and accepted the <a href="/privacy-policies/">privacy policy</a></p>
                                </label>

                            </label>

                            <div class="from_contact_two_button">
                                <input type="hidden" class="g-recaptcha-response" name="g-recaptcha-response">
                                <button type="submit">SEND</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Section del Mapa -->
        <div class="mapa">
            <div class="bigMap" id='map1'></div>

            <div class="cardMap" id="cardMap">
                <div class="cardMap_icono">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path d="M24 23.5q1.45 0 2.475-1.025Q27.5 21.45 27.5 20q0-1.45-1.025-2.475Q25.45 16.5 24 16.5q-1.45 0-2.475 1.025Q20.5 18.55 20.5 20q0 1.45 1.025 2.475Q22.55 23.5 24 23.5Zm0 16.55q6.65-6.05 9.825-10.975Q37 24.15 37 20.4q0-5.9-3.775-9.65T24 7q-5.45 0-9.225 3.75Q11 14.5 11 20.4q0 3.75 3.25 8.675Q17.5 34 24 40.05ZM24 44q-8.05-6.85-12.025-12.725Q8 25.4 8 20.4q0-7.5 4.825-11.95Q17.65 4 24 4q6.35 0 11.175 4.45Q40 12.9 40 20.4q0 5-3.975 10.875T24 44Zm0-23.6Z" />
                    </svg>
                    <h2>YOU WILL FIND US IN:</h2>
                    <p>C/ Choco, 8G <br> Tres caminos industrial estate <br> Puerto Real (Cádiz)</p>
                </div>
                <div class="cardMap_icono">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path d="m31.35 33.65 2.25-2.25-7.95-8V13.35h-3V24.6ZM24 44q-4.1 0-7.75-1.575-3.65-1.575-6.375-4.3-2.725-2.725-4.3-6.375Q4 28.1 4 24t1.575-7.75q1.575-3.65 4.3-6.375 2.725-2.725 6.375-4.3Q19.9 4 24 4t7.75 1.575q3.65 1.575 6.375 4.3 2.725 2.725 4.3 6.375Q44 19.9 44 24t-1.575 7.75q-1.575 3.65-4.3 6.375-2.725 2.725-6.375 4.3Q28.1 44 24 44Zm0-20Zm0 17q7 0 12-5t5-12q0-7-5-12T24 7q-7 0-12 5T7 24q0 7 5 12t12 5Z" />
                    </svg>
                    <h2>SCHEDULE</h2>
                    <p>From Monday to Friday</p>
                    <p>9:00 - 14:00 / 16:00 - 19:00H.</p>
                </div>

                <div class="cardMap_icono">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path d="M7 40q-1.2 0-2.1-.9Q4 38.2 4 37V11q0-1.2.9-2.1Q5.8 8 7 8h34q1.2 0 2.1.9.9.9.9 2.1v26q0 1.2-.9 2.1-.9.9-2.1.9Zm17-15.1L7 13.75V37h34V13.75Zm0-3L40.8 11H7.25ZM7 13.75V11v26Z" />
                    </svg>
                    <h2>CONTACT US</h2>
                    <a href="mailto:administracion@manisur.com" onclick="gtag('event', 'email')">administracion@manisur.com</a> <br>
                    <a href="tel:34956888601" onclick="gtag('event', 'teléfonos')">956 888 601</a><br>
                </div>
            </div>
        </div>

        <!-- Section Footer -->
        <div class="container bg_footer1">
            <div class="content">
                <div class="section_footer_politicas ">
                    <nav class="section_footer_politicas_enlaces">
                        <a href="/legal-warning/" target="_blank">Legal Notice</a>
                        <a href="/cookie-policies/" title="politicas-de-cookies" target="_blank">Cookies Policy</a>
                        <a href="/politicas-de-privacidad/" target="_blank">Privacy Policy</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container bg_footer2">
            <div class="content">
                <footer class="section_footer">
                    <div class="section_footer_derechos">
                        <p class="parrafo_uno">© 2023 Manisur. All rights reserved.</p>
                        <p class="parrafo_dos">WEB design by <a href="https://servynet.es" target="_blank">Servynet</a></p>
                    </div>
                </footer>
            </div>
        </div>

        <?php
        require_once '../comons/btn_top.php';
        require_once '../comons/cookies.php';
        require_once '../comons/modal_en.php';
        ?>
    </main>

    <script src="/public/js/carga_diferida.js"></script>
    <script src="/public/js/menu.js"></script>
    <script src="/public/js/mapa.js"></script>
    <script src="/public/js/recatpcha.js"></script>
    <script src="/public/js/modal.js"></script>
</body>

</html>