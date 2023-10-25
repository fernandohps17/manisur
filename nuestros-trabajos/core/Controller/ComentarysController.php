<?php
  // Funcion encargada de obtener los comentarios del post pasado por parametro
  function get_comentarys_for_post($id){
    try{
      $conn = open_db();
      $data = [];

      $get_comentarys = $conn->prepare("SELECT id, name, comentary, public FROM comentarys WHERE id_post=:id ORDER BY id DESC");

      $get_comentarys->execute(array(
        ":id"=>$id
      ));

      foreach($get_comentarys as $key=>$value){
        array_push($data, $value);
      }

      $get_comentarys->closeCursor();

      return $data;

    }catch(Exception $e){
      echo "Ha ocurrido un error en ComentarysController en la linea: " .$e->getLine();
    }finally{
      close_db($conn);
    }
  }

  // Funcion encargada de agregar un nuevo comentario
  function add_comentary($id_post, $name, $comentary, $email, $web){
    try{
      $conn = open_db();

      $add_comentary = $conn->prepare("INSERT INTO comentarys (name, email, web, comentary, id_post) VALUES (:name, :email, :web, :comentary, :id_post)");

      $add_comentary->execute(array(
        ":name"=>$name,
        ":email"=>$email,
        ":web"=>$web,
        ":comentary"=>$comentary,
        ":id_post"=>$id_post,
      ));

      $add_comentary->closeCursor();

      return true;

    }catch(Exception $e){
      echo "Ha ocurrido un error en ComentarysController en la linea: " .$e->getLine();
    }finally{
      close_db($conn);
    }
  }

  // Funcion encargada de borrar el comentario
  function delete_comentary($id){
    try{
      $conn =open_db();

      $delete_comentary = $conn->prepare("DELETE FROM comentarys WHERE id=:id");

      $delete_comentary->execute(array(
        ":id"=>$id
      ));

      $delete_comentary->closeCursor();

      return true;

    }catch(Exception $e){
      echo "Ha ocurrido un error en ComentarysController en la linea: " .$e->getLine();
    }finally{
      close_db($conn);
    }
  }

  // Funcion encargada de cambiar el estado del comentario
  function update_status_comentary($id, $status){
    try{
      $conn = open_db();

      $update_status = $conn->prepare("UPDATE comentarys SET public=:public WHERE id=:id");

      $update_status->execute(array(
        ":public"=>$status,
        ":id"=>$id
      ));
      
      $update_status->closeCursor();

      return true;

    }catch(Exception $e){
      echo "Ha ocurrido un error en ComentarysController en la linea: " .$e->getLine();
    }finally{
      close_db($conn);
    }
  }

?>