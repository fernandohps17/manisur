<?php

  session_start();

  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/auth.php");
  there_is_login();

  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/data/dataLogin.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/header.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/login.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/footer.php");

?>