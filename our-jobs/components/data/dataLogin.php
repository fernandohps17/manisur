<?php
    // Obtenemos la data necesaria para el head de LOGIN
    require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/data/getUri.php";

    $page = getUri();
    $css = "login";
    $meta_title = create_title($page);
    $canonical = create_canonical('our-jobs/'.$page.'/');
    $description = create_description();
