<?php

session_start();

require_once($_SERVER["DOCUMENT_ROOT"] . "/nuestros-trabajos/components/auth.php");
auth_with_title();

require_once $_SERVER["DOCUMENT_ROOT"] . "/nuestros-trabajos/core/conexion.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/nuestros-trabajos/core/Controller/PostsController.php";


// $id = "SELECT id FROM posts";

$sql = "UPDATE posts SET update_fecha = CURDATE() WHERE id = 7";


update_sitemap_posts();



header("Location: /nuestros-trabajos/");

?>