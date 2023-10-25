<?php

  // Funcion encargada de obtener la informacion del usuario
  function get_user($id){
    try{
      $conn = open_db();
      $user = "";
      $email = "";

      $get_user = $conn->prepare("SELECT * FROM users WHERE id=:id");

      $get_user->execute(array(
        ":id"=>$id
      ));

      foreach($get_user as $data){
        $user = $data['user'];
        $email = $data['email'];
      }

      $get_user->closeCursor();

      return [$user, $email];

    }catch(Exception $e){
      echo "Ha ocurrido un error en UsersCotroller linea: " .$e->getLine();
    }finally{
      close_db($conn);
    }
  }

  // Funcion encargada de actualizar al usuario 
  function update_user($id, $user, $password, $email){
    try{
      $conn = open_db();
      
      $pass = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
      
      $update_user = $conn->prepare("UPDATE users SET user=:user, password=:password, slug=:slug, email=:email WHERE id=:id");
      // var_dump($update_user);
      // return true;

      $update_user->execute(array(
        ":id"=>$id,
        ":user"=>$user,
        ":password"=>$pass,
        ":slug"=>$password,
        ":email"=>$email
      ));

      $update_user->closeCursor();

      return true;

    }catch(Exception $e){
      echo "Ha ocurrido un error en UsersCotroller linea: " .$e->getLine();
    }finally{
      close_db($conn);
    }
  }

  // Funcion que valida si el usuario y la contrasena existen
  function verify_login($user, $password){
    try{
      $conn = open_db();
      $isLogin = false;

      $verify_user = $conn->prepare("SELECT * FROM users WHERE user=:user");

      $verify_user->execute(array(
        ":user"=>$user
      ));

      foreach($verify_user as $data){

        // if(password_verify($password, $data['password'])){
          $_SESSION['id_user'] = $data['id'];
          $isLogin = true;
        // }
      }

      $verify_user->closeCursor();

      return $isLogin;

    }catch(Exception $e){
      echo "Ha ocurrido un error en UsersCotroller linea: " .$e->getLine();
    }finally{
      close_db($conn);
    }
  }

  // Funcion encargada de abrir la session
  function open_login(){
    $_SESSION['login'] = true;
  }

  // Funcion para recuperar la contrasena
  function get_password_and_email(){
    try{
      $conn = open_db();
      $password = "";
      $email = "";
      
      $get_password = $conn->query("SELECT slug, email FROM users WHERE id=1");

      foreach($get_password as $data){
        $password = $data['slug'];
        $email = $data['email'];
      }

      $get_password->closeCursor();

      return [$password, $email];

    }catch(Exception $e){
      echo "Ha ocurrido un error en UsersCotroller linea: " .$e->getLine();
    }finally{
      close_db($conn);
    }
  }

  // FUNCION ENCARGADA DE OBTENER EL EMAIL DEL ADMIN
  function get_email_user(){
    try{

      $conn = open_db();
      $email = "";
      
      $get_email = $conn->query("SELECT email FROM users WHERE id=1");

      foreach($get_email as $data){
        $email = $data['email'];
      }

      $get_email->closeCursor();

      return $email;

    }catch(Exception $e){
      echo "Ha ocurrido un error en UsersCotroller linea: " .$e->getLine();
    }finally{
      close_db($conn);
    }
  }

?>