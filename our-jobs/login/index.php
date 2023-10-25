<?php

  session_start();

  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/auth.php");
  there_is_login();

  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/data/dataLogin.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/header.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/login.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/footer.php");

?>