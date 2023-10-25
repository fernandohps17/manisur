<?php 

session_start();

require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/auth.php");
auth_only_login();

require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/data/dataCreatePost.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/header.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/createPost.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/footer.php");

?>