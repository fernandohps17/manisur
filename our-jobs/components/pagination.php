<?php

  // FUNCION ENCARGADA DE MOSTRAR LA PAGINACION
  function pagination($page){ //Recibe la pagina actual

    // obtenemos  el # de carpetas que exite dentro de page (# de paginas para la paginacion)
    $dir = scandir($_SERVER["DOCUMENT_ROOT"].'/our-jobs/pagina/');
    asort($dir); // Ordenamos de menor a mayor
    $dir = end($dir); // Obtenemos el ultimo elemento del array que contiene el ultimo page

    // Calculamos cual sera el minimo de pagina y el maximo de pagina dentro de la pagina actual que se este cargando
    $min = ($page <= 3) ? 1 : $page - 2; //Nos servira para saber cuanta paginacion antes mostrar
    $max = 0; // Nos servira para saber cuanta paginacion despues mostrar

    // Validamos para saber si agregar 2 paginacion mas o solo 1 en caso de que estemos cerca de la ultima page
    if(is_numeric($dir)){
      if(($page + 2 ) >= $dir){ 
        $max = $page + 1;
        if($page == $dir){
          $max = $page;
        }
      }else{
        $max = $page + 2;
      }
    }

    // Mostramos la paginacion
    echo '<div class="pagination">';
            //Nos servira para ir a la pagina 1 no importa donde estemos
            if($min != 1){ 
              echo "<a href='/our-jobs/'>1</a>";
            }

            // Recorremos para saber cuanta paginacion mostra dependiendo de la pagina actual
            for ($i=$min; $i <= $max ; $i++) { 
              if($i == $page){
                if($i == 1){
                  echo "<a href='/our-jobs/' class='pagination-active'>$i</a>";
                }else{
                  echo "<a href='/our-jobs/pagina/$i/' class='pagination-active'>$i</a>";
                }
              }else{
                if($i == 1){
                  echo "<a href='/our-jobs/'>$i</a>";
                }else{
                  echo "<a href='/our-jobs/page/$i/'>$i</a>";
                }
              }
            }

            //Nos servira para ir a la ultima pagina no importa donde estemos
            if($max != $dir && $max != 0){ 
              echo "<a href='/our-jobs/page/$dir/'>$dir</a>";
            }
    echo "</div>";
  }
?>