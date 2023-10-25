<div class="login">
  <?php 
    require_once($_SERVER["DOCUMENT_ROOT"]."/our-jobs/components/errorForm.php");
  ?>
  <form action="/our-jobs/core/login.php" method="post">
    <div class="group">
      <label for="name">Username</label>
      <input type="text" name="user" id="name" required>
    </div>
    <div class="group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
    </div>
    <div class="group">
      <button type="submit">Start</button>
    </div>
    <div class='group'>
      <a href='/nuestros-trabajos/recuperar-contrasena/'>Recover password</a>
    </div>
  </form>
</div>