<?php

session_start();

require_once($_SERVER["DOCUMENT_ROOT"] . "/nuestros-trabajos/components/auth.php");
auth_with_title();

require_once $_SERVER["DOCUMENT_ROOT"] . "/nuestros-trabajos/core/conexion.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/nuestros-trabajos/core/Controller/PostsController.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/nuestros-trabajos/components/modal_sitemap.php";

update_sitemap_landing();
update_sistemap_date();
update_sitemap_posts();

header("Location: /nuestros-trabajos/");
