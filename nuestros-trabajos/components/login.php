<div class="login">
  <?php 
    require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/components/errorForm.php");
  ?>
  <form action="/nuestros-trabajos/core/login.php" method="post">
    <div class="group">
      <label for="name">Nombre de Usuario</label>
      <input type="text" name="user" id="name" required>
    </div>
    <div class="group">
      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" required>
    </div>
    <div class="group">
      <button type="submit">Iniciar</button>
    </div>
    <div class='group'>
      <a href='/nuestros-trabajos/recuperar-contrasena/'>Recuperar Contraseña</a>
    </div>
  </form>
</div>