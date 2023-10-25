<?php 

session_start();

require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/auth.php");
auth_with_id();

require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/data/dataEditPost.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/header.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/editPost.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/footer.php");

?>