<?php 

session_start();

require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/auth.php");
auth_with_id();

require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/data/dataEditPost.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/header.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/editPost.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/footer.php");

?>