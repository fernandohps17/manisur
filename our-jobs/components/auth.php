<?php
  // Funcion encargada de validar si no hay login
  function auth_only_login(){
    if(!isset($_SESSION['login'])){
      header("Location: /our-jobs/");
      exit();
    }
  }

  // Funcion encargada de validar si hay login
  function there_is_login(){
    if(isset($_SESSION['login'])){
      header("Location: /our-jobs/");
      exit();
    }
  }

  // Funcion encargada de validar si hay login y si se recive un if
  function auth_with_id(){
    if(!isset($_SESSION['login']) || empty($_POST['id'])){
      header("Location: /our-jobs/");
      exit();
    }
  }

  // Funcion encargada de validar si hay login y un campo title
  function auth_with_title(){
    if(!isset($_SESSION['login']) && !isset($_POST['title'])){
      header("Location: /our-jobs/");
      exit();
    }
  }

  // Funcion encargada de validar si se hizo post de formulario
  function there_is_post(){
    if(!isset($_POST)){
      header("Location: /our-jobs/");
      exit();
    }
  }

?>