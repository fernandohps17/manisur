<?php
// Obtenemos la pagina dependiendo de la uri /pagina/15/
function getUri()
{
  $page = $_SERVER['REQUEST_URI'];
  $page = explode('/', $page);
  array_pop($page);
  $page = end($page);

  return $page;
}

// Creamos el canonical con una base
function create_canonical($add)
{
  return "https://www.manisur.es/$add/";
}

// Creamos un title que necesite como base el nombre de la empresa
function create_title($add)
{
  return "Manisur | $add";
}

// Creamos una descripcion que sera usada en las paginas del blog, login, create, edit, administrado
function create_description()
{
  return "Manisur company in charge of the industrial and domestic refrigeration machine";
}
