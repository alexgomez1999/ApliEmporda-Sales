<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <?php include "util/head.php" ?>
    <title>Login</title>
  </head>
  <body>
    <div class="login-container">
      <form class="login-form" action="index.php" method="POST">
        <input type="hidden" name="r" value="dologin">
        <div><i class="fas fa-user"></i><input type="text" name="user" placeholder="Usuari"></div>
        <div><i class="fas fa-key"></i><input type="password" name="pass" placeholder="Contrasenya"></div>
        <button type="submit" class="btn btn-primary">Accedir</button>
      </form>
      <?php if($_SESSION['missatge-login']) {
        echo "<h3 class='bad'>" . $_SESSION['missatge-login'] . "</h3>";
      } ?>
    </div>
  </body>
  <?php include "util/footer.php" ?>
</html>