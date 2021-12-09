<!doctype html>
<html lang="en">
  <head>
    <?php include "../src/vistes/util/head.php" ?>
    <title>Inici</title>
  </head>
  <body>
  <?php include "../src/vistes/util/navbar.php" ?>
    <?php if($_SESSION['login']['Rol'] != 'Administrador') { ?>
      <!-- VISTA USUARI NORMAL -->
      <div class="index-user-container">
      <table class="table crud-table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Sala</th>
      <th scope="col">Centre</th>
      <th scope="col">Ubicació</th>
      <th scope="col">Data</th>
      <th scope="col">Hora entrada</th>
      <th scope="col">Hora sortida</th>
    </tr>
  </thead>
  <tbody>
    <!-- FILES DINÀMIQUES CONFORME SALES TINGUI RESERVADES L'USUARI -->
    <?php foreach ($sala as $row) { ?>
    <tr>
      <th scope="row"><?= $row['Codi'] ?></th>
      <td><?= $row['Nom'] ?></td>
      <td><?= $row['Centre'] ?></td>
      <td><?= $row['Ubicacio'] ?></td>
      <td><?= $row['Data'] ?></td>
      <td><?= $row['HoraInici'] ?></td>
      <td><?= $row['HoraFi'] ?></td>
      <td><a href="index.php?r=deleteReservation&id=<?= $row['Id'] ?>">Eliminar</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<a href="index.php?r=newReservation" class="reservarBtn" style="text-decoration:none"><i class="fas fa-plus"></i></a>
      </div>

      <?php } else { ?>
        
      <!-- VISTA ADMINISTRADOR -->
      <div class="row">
      <?php include "util/sidebaradmin.php" ?>
      <div class="col-9 index-admin-container">
        <div>
          <h3>PROVA SHOW</h3>
        </div>
      </div>
      </div>
      <?php } ?>
  </body>
</html>