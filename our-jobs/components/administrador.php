<?php

  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/conexion.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/our-jobs/core/Controller/UsersController.php";

  $id = $_SESSION['id_user'];

  list($user, $email) = get_user($id);

  echo "<div class='login'>
          <form action='../core/administrador.php' method='post'>
            <div class='group'>
              <input type='hidden' name='id' value='$id' />
              <label for='name'>Profile</label>
              <input type='text' name='user' id='name' value='$user' required>
            </div>
            <div class='group'>
              <label for='password'>Password</label>
              <input type='password' name='password' id='password' value='' required>
            </div>
            <div class='group'>
              <label for='password'>Email</label>
              <input type='email' name='email' id='email' value='$email' required>
            </div>
            <div class='group'>
              <button type='submit'>Change</button>
            </div>
          </form>
        </div>";

?>