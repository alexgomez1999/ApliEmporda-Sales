<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <?php require "../src/vistes/util/head.php" ?>
    <title>Login</title>
  </head>
  <body class="login-body">
    <div class="login-container">
      <form class="login-form" action="index.php" method="POST">
        <?php if (isset($missatgelogin)) { ?>
            <p class="missatge-login"><?php echo $missatgelogin;?></p>
        <?php } ?>
        <input type="hidden" name="r" value="dologin">
        <div><label for="user"><i class="fas fa-user"></i></label><input type="text" name="user" id="user" value="<?php echo $usuarilogat;?>" placeholder="Usuari"></div>
        <div><label for="pass"><i class="fas fa-key"></i></label><input type="password" name="pass" id="pass" placeholder="Contrasenya"></div>
        <button type="submit" id="login">Accedir</button>
      </form>
    </div>
  </body>
  <?php require "util/footer.php" ?>
</html>


