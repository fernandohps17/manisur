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
    <meta name="description" content="AVISO LEGAL DE MANISUR, INDUSTRIAL Y DOMESTICO.">
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
                                    <a href="/legal-warning/">ENG</a>
                                    <a href="/aviso-legal/"><span>|</span> ESP</a>
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
                            <a href="/legal-warning/">ENG</a>
                            <a href="/aviso-legal/"><span>|</span> ESP</a>
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
                            <h1>AVISO LEGAL</h1>
                        </header>
                    </section><br>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>1. OBJETO Y ÁMBITO DE APLICACIÓN DE LAS CONDICIONES DE UTILIZACIÓN DE LA WEB</h2>
                        </header>
                        <p class="politicas_content_paragrah">Las presentes Condiciones tienen por objeto regular el acceso gratuito a los contenidos de la web www.manisur.com titularidad de MANISUR 2005, S.L.U.  (en lo sucesivo y en toda la web como MANISUR), por el Usuario a través de la Web. El sitio web www.manisur.com, en adelante el Portal o página Web, se rige por la normativa exclusivamente aplicable en España, quedando sometida a ella, tanto nacionales como extranjeros que utilicen esta web.</p>
                    </section>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>2. TITULARIDAD DE LA WEB Y MEDIOS DE CONTACTO</h2>
                        </header>
                        <p class="politicas_content_paragrah">En cumplimiento de la Ley 34/2002 de Servicios de la Sociedad de la Información y de Comercio Electrónico de España, le informamos que esta página Web es propiedad de MANISUR 2005, S.L.U.   siendo sus datos identificativos:</p>
                        <p class="politicas_content_paragrah">Denominación social: MANISUR 2005, S.L.U. , en adelante MANISUR.</p>
                        <p class="politicas_content_paragrah">NIF: B11804804 </p>
                        <p class="politicas_content_paragrah">Domicilio social:  CL. CHOCO, 8 (P.I. TRES CAMINOS) - 11510 PUERTO REAL (CÁDIZ)</p>
                        <p class="politicas_content_paragrah"><span>Inscrita en el Registro Mercantil de LOCALIDAD:  · Tomo TOMO· Folio NUMERO DE FOLIO · Hoja nº NÚMERO DE HOJA – Inscripción INSCRIPCIÓN.</span></p>
                        <p class="politicas_content_paragrah"><span>Título académico oficial, datos del colegio profesional y número de colegiado (si ejerce una profesión regulada).</span></p>
                        <p class="politicas_content_paragrah">Para comunicarse con nosotros, ponemos a su disposición los siguientes medios de contacto:</p>
                        <p class="politicas_content_paragrah"><b>Tfno:</b> 956888601</p>
                        <p class="politicas_content_paragrah"><b>Email:</b> administracion@manisur.com</p>
                        <p class="politicas_content_paragrah">Todas las notificaciones y comunicaciones entre los usuarios y MANISUR se considerarán eficaces, a todos los efectos, cuando se realicen a través de cualquier medio de los detallados anteriormente.</p>

                        <div class="politicas_content_paragrah_box">
                            <p class="politicas_content_paragrah"><span>1: Incluir y rellenar en el caso de que el responsable sea una sociedad, si es una persona física hay que eliminar este párrafo. En el caso de empresas registradas en el Registro Mercantil o cualquier otro registro público, deberán señalarse el numero y datos de inscripción que le corresponda.</span></p>
                            <p class="politicas_content_paragrah"><span>2: Si ejerce una profesión regulada deberá indicar los datos del Colegio profesional al que se pertenezca y número de colegiado, el título académico oficial o profesional con el que cuente y las normas profesionales aplicables al ejercicio de su profesión y los medios a través de los cuales se puedan conocer, incluidos los electrónicos. Además, en el caso de que su actividad estuviese sujeta a un régimen de autorización administrativa previa, los datos relativos a dicha autorización y los identificativos del órgano competente encargado de su supervisión.</span></p>
                        </div>
                    </section>


                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>3. ACEPTACIÓN, DISPONIBILIDAD Y MODIFICACIONES DE LAS CONDICIONES DE UTILIZACIÓN DE LA WEB</h2>
                        </header>
                        <p class="politicas_content_paragrah">El Usuario se compromete a leer y acepta expresamente las presentes Condiciones de Utilización de la Web, en la versión publicada por MANISUR en el momento en que el Usuario acceda a los contenidos publicitados, teniendo las Condiciones a su disposición, siempre y en todo caso, pudiendo ser almacenadas y/o reproducidas. Así, MANISUR podrá modificar las presentes Condiciones siempre que existan causa o motivo suficiente, sin que ello pueda afectar a los contenidos publicitados.</p>
                    </section>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>4. NORMAS APLICABLES</h2>
                        </header>
                        <p class="politicas_content_paragrah">El presente Aviso Legal está sujeto a lo dispuesto en la Ley Orgánica 3/2018, de Protección de Datos Personales y garantía de los derechos digitales, de 5 de diciembre de 2018 (LOPDGDD), Reglamento UE 2016/679 del Parlamento Europeo y del Consejo de 27 de abril de 2016 relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos y por el que se deroga la Directiva 95/46/CE (Reglamento general de protección de datos), la Ley 34/2002 de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico.</p>
                        <p class="politicas_content_paragrah">Tanto el acceso al sitio Web propiedad de MANISUR como el uso que pueda hacerse de la información y contenidos incluidos en el mismo, será de la exclusiva responsabilidad de quien lo realice. Las condiciones de acceso al Sitio Web estarán supeditadas a la legalidad vigente y los principios de la buena fe y uso lícito por parte del Usuario de la  misma, quedando prohibido con carácter general cualquier tipo de actuación en perjuicio del Titular. Se considerará terminantemente prohibido el uso del Sitio Web con fines ilegales o no autorizados.</p>
                    </section>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>5. CONDICIONES DE ACCESO AL SITIO WEB Y USO DE LOS PRODUCTOS Y SERVICIOS</h2>
                        </header>
                        <p class="politicas_content_paragrah">El acceso a la Web de MANISUR es gratuito y solo debe realizar compras a través del mismo si usted es mayor de edad. Como Usuario se compromete a:
                            <li>No falsear su identidad o su fecha de nacimiento para acceder al sitio.</li>
                            <li>No utilizar ninguno de los contenidos que MANISUR pone a su disposición, con fines ilícitos.</li>
                            <li>No realizar cualquier actividad que pudiera dañar, sobrecargar, deteriorar o impedir la actividad normal de la Web.</li>
                            <li>No obtener los contenidos facilitados en la Web por medios ilícitos, fraudulentos, robo o plagio, de conformidad con lo establecido en el Código Penal y en la normativa de aplicación.</li>
                        </p>
                        <p class="politicas_content_paragrah">En el supuesto de que el Usuario causara daños a terceros, por hacer uso de cualquier contenido facilitado a través de la Web, exonera expresamente a MANISUR de cualquier responsabilidad que le pudiera ser imputada. A tales efectos, el Usuario asume la responsabilidad exclusiva que pudiera derivarse.</p>
                        <p class="politicas_content_paragrah">MANISUR al objeto de garantizar los derechos en cumplimiento de las presentes Condiciones y el respeto a la legislación vigente podrá:
                            <li>Proceder a la supervisión de la Web por medio de sus administradores, con respeto al secreto de las comunicaciones y la intimidad del Usuario y en particular, adoptar todas las medidas necesarias para que en caso de descubrir falseamiento de identidad en un menor de edad sea puesto en conocimiento llegado el caso de sus padres o tutores legales.</li>
                            <li>Interrumpir temporalmente el servicio sin preaviso por razones tecnológicas o legales que serán convenientemente motivadas.</li>
                            <li>Modificar las Condiciones de uso de los contenidos, cuando exista causa o motivo suficiente, así lo aconsejen razones tecnológicas o legales.</li>
                            <li>Modificar los contenidos de la Web sin comunicarlo previamente, cuando por razones de su actividad así lo considere conveniente.</li>
                            <li>Prohibir acceso a los contenidos, sin previo aviso, a cualquier Usuario que contravenga lo dispuesto en las presentes Condiciones.</li>
                        </p>
                        <p class="politicas_content_paragrah">RESPONSABILIDADES DE LAS PARTES</p>
                    </section>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>6. RESPONSABILIDADES DE LAS PARTES</h2>
                        </header>
                        <p class="politicas_content_paragrah">Responsabilidad de MANISUR:
                        <li>MANISUR, únicamente responderá de los daños que el Usuario pueda sufrir como consecuencia del acceso a la Web cuando dichos daños sean imputables a una actuación dolosa de la empresa.</li>
                        <li>Asimismo, no será responsable de ningún daño que se genere al Usuario en caso de imposibilidad de prestar el servicio debido a supuestos de caso fortuito, fuerza mayor u otras causas no imputables a MANISUR.</li>
                        <li>Asimismo, MANISUR tampoco será responsable del inadecuado funcionamiento de la Web si ello obedece a labores de mantenimiento, a incidencias, a un defectuoso funcionamiento del terminal o su insuficiente capacidad para soportar los sistemas indispensables para hacer uso del servicio.</li>
                        <li>MANISUR  adoptará las medidas oportunas para asegurar una respuesta rápida, sin responsabilizarse por los retrasos que sean debidos a los servicios de telecomunicaciones.</li>
                        </p>
                        <p class="politicas_content_subtitle">Responsabilidad del Usuario:
                            <li>El Usuario será el único responsable de las consecuencias derivadas por la comunicación de datos que no sean verdaderos, (incluida la edad), así como de datos pertenecientes a personas distintas al propio Usuario.</li>
                            <li>En caso de incumplimiento por parte del Usuario de sus obligaciones, MANISUR se reserva las acciones legales oportunas, así como el derecho a restringir el acceso a los contenidos publicitados.</li>
                        </p>
                    </section>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>7. LIMITACIÓN DE RESPONSABILIDAD</h2>
                        </header>
                        <p class="politicas_content_paragrah">MANISUR se esfuerza para que la información que aparece en la Web sea correcta y se encuentre actualizada.</p>
                        <p class="politicas_content_paragrah">El Usuario exonera a MANISUR de cualquier responsabilidad que pudiera derivarse de las interrupciones de disponibilidad en el acceso a los contenidos, motivados por causas de fuerza mayor o fuera de su control, tales como el módem, el sistema informático del Usuario, el software de navegación, virus, interconexión de redes telefónicas y eléctricas, línea ADSL, fibra óptica, RDSI, y/o cualquier otra infraestructura de transporte o telecomunicaciones utilizadas por el Usuario.</p>
                        <p class="politicas_content_paragrah">MANISUR no será responsable de los daños o perjuicios que pudiesen causar al Usuario los contenidos propiedad de terceros. Los riesgos derivados del acceso a contenidos propiedad de terceros corresponden exclusivamente al Usuario, que deberá regirse por los términos y Condiciones de los mismos, de los que igualmente MANISUR no se hace responsable.</p>
                        <p class="politicas_content_paragrah">En el caso de que cualquier usuario o un tercero considere que existen hechos o circunstancias que revelen el carácter ilícito de la utilización de cualquier contenido y/o de la realización de cualquier actividad en las páginas web incluidas o accesibles a través del sitio web, tiene la obligación de enviar enviar una notificación a MANISUR  identificándose debidamente y especificando las supuestas infracciones.</p>
                    </section>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>8. PROPIEDAD INTELECTUAL E INDUSTRIAL</h2>
                        </header>
                        <p class="politicas_content_paragrah">Los derechos de propiedad intelectual de este Sitio Web, su código fuente, diseño, estructuras de navegación y los distintos elementos en ella contenidos son titularidad exclusiva de MANISUR a quien corresponde el ejercicio de los derechos de explotación de los mismos en cualquier forma y, en especial, los derechos de reproducción, distribución, comunicación pública y transformación, de acuerdo con la legislación española y de la Unión Europea aplicable.</p>
                        <p class="politicas_content_paragrah">Queda totalmente prohibida la reproducción total o parcial de los contenidos de este Sitio Web sin consentimiento expreso y por escrito por parte del Titular.</p>
                        <p class="politicas_content_paragrah">La utilización no autorizada de estos contenidos por cualquier otra persona o empresa dará lugar a las responsabilidades legalmente establecidas.</p>
                        <p class="politicas_content_paragrah">MANISUR puede mostrar servicios o productos con las Marcas Registradas y con los distintivos comerciales que se indiquen en su Web. MANISUR es la propietaria legítima de sus Marcas Registradas y de su material promocional.</p>
                        <p class="politicas_content_paragrah">Queda prohibida cualquier modalidad de explotación, incluyendo todo tipo de reproducción, distribución, cesión a terceros, comunicación pública y transformación, mediante cualquier tipo de soporte y medio, de las obras antes referidas, creaciones y signos distintivos sin autorización previa y expresa de sus respectivos titulares.</p>
                        <p class="politicas_content_paragrah">El incumplimiento de esta prohibición podrá constituir infracción sancionable por la legislación vigente.</p>
                        <p class="politicas_content_paragrah">Queda prohibido, salvo en los casos que expresamente lo autorice MANISUR, presentar este Sitio Web o la información contenida en ella bajo frames o marcos, signos distintivos, marcas o denominaciones sociales o comerciales de otra persona, empresa o entidad incluyendo de forma expresa el contenido fotográfico que se considera propiedad exclusiva del Titular.</p>
                        <p class="politicas_content_paragrah">La infracción de cualquiera de los citados derechos puede constituir una vulneración de las presentes Condiciones Generales de Uso, así como un delito castigado de acuerdo con los artículos 270 y siguientes del Código Penal.</p>
                    </section>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>9. LEGISLACIÓN Y JURISDICCIÓN APLICABLE</h2>
                        </header>
                        <p class="politicas_content_paragrah">Las presentes condiciones se rigen por la Normativa Española vigente que le es de aplicación. Para la resolución de las controversias que pudieran derivarse como consecuencia de lo dispuesto en las presentes disposiciones, y con renuncia expresa a cualquier otro fuero que pudiera corresponder, el Usuario acuerda someterse a la Jurisdicción de los Juzgados y Tribunales de SAN FERNANDO, excepto en lo vinculado a las cuestiones derivadas del propio contrato de la venta online, que se someterán al fuero del domicilio del comprador.</p>
                        <p class="politicas_content_paragrah">Conforme al  Reglamento (UE) nº 524/2013 del Parlamento Europeo y del Consejo, de 21 de mayo de 2013, ponemos a disposición del cliente el siguiente enlace que permite el acceso a la plataforma de resolución de litigios en línea de la Unión Europea, plataforma de resolución de litigios en línea de la Unión Europea.</p>
                    </section>

                    <section class="politicas_content">
                        <header class="politicas_content_subtitle">
                            <h2>10. NULIDAD E INEFICACIA DE LAS CLÁUSULAS</h2>
                        </header>
                        <p class="politicas_content_paragrah">Si cualquier cláusula incluida en estas Condiciones fuese declarada total o parcialmente nula o ineficaz, tal nulidad afectará tan sólo a dicha disposición o la parte de la misma que resulte nula o ineficaz, subsistiendo en todo lo demás las Condiciones.</p>
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