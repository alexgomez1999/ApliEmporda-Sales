<!doctype html>
<html lang="en">
  <head>
    <?php include "util/head.php" ?>
    <title>Inici</title>
  </head>
  <body>
  <?php include "util/navbar.php" ?>
    <?php if($_SESSION['login']['Rol'] != 'Administrador') { ?>
      <!-- VISTA USUARI NORMAL -->
      <div class="index-user-container">
        <h3>USER PAGE</h3>
      </div>

      <?php } else { ?>
        
      <!-- VISTA ADMINISTRADOR -->
      <div class="index-admin-container">
        <h3>ADMIN DASHBOARD</h3>
      </div>
      <?php } ?>
  </body>
</html>