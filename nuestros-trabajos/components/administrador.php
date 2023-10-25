<?php

  require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/conexion.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/Controller/UsersController.php";

  $id = $_SESSION['id_user'];

  list($user, $email) = get_user($id);

  echo "<div class='login'>
          <form action='../core/administrador.php' method='post'>
            <div class='group'>
              <input type='hidden' name='id' value='$id' />
              <label for='name'>Perfil</label>
              <input type='text' name='user' id='name' value='$user' required>
            </div>
            <div class='group'>
              <label for='password'>Contraseña</label>
              <input type='password' name='password' id='password' value='' required>
            </div>
            <div class='group'>
              <label for='password'>Correo</label>
              <input type='email' name='email' id='email' value='$email' required>
            </div>
            <div class='group'>
              <button type='submit'>Cambiar</button>
            </div>
          </form>
        </div>";

?>