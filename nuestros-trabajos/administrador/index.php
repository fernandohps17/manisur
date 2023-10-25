<?php
  session_start();

  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/auth.php");
  auth_only_login();
  
  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/data/dataAdmin.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/header.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/administrador.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/footer.php");
?>