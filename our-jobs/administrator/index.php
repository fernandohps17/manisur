<?php
  session_start();

  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/auth.php");
  auth_only_login();
  
  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/data/dataAdmin.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/header.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/administrador.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/footer.php");
?>