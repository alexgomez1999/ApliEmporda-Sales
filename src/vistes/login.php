<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <?php include "../src/vistes/util/head.php" ?>
    <title>Login</title>
  </head>
  <body class="login-body">
    <div class="login-container">
      <form class="login-form" action="index.php" method="POST">
        <?php if (isset($missatgelogin)) { ?>
            <p class="missatge-login"><?=$missatgelogin;?></p>
        <?php } ?>
        <input type="hidden" name="r" value="dologin">
        <div><label for="user"><i class="fas fa-user"></i></label><input type="text" name="user" id="user" value="<?=$usuarilogat;?>" placeholder="Usuari"></div>
        <div><label for="pass"><i class="fas fa-key"></i></label><input type="password" name="pass" id="pass" placeholder="Contrasenya"></div>
        <button type="submit" id="login">Accedir</button>
      </form>
    </div>
  </body>
  <?php include "util/footer.php" ?>
</html>