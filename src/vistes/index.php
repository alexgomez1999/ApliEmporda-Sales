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
      <div class="col-10 index-admin-container">
        <div>
          <?php if ($_REQUEST["info"] === "usuaris") { ?>
            <table class="table crud-table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Codi</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Contrasenya</th>
                  <th scope="col">Rol</th>
                </tr>
              </thead>
              <tbody>
                <!-- FILES DINÀMIQUES CONFORME SALES TINGUI RESERVADES L'USUARI -->
              </tbody>
            </table>
          <?php } elseif ($_REQUEST["info"] === "sales") { ?>
            <table class="table crud-table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Codi</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Activa</th>
                  <th scope="col">Centre</th>
                  <th scope="col">Ubicació</th>
                  <th scope="col">Observacions</th>
                  <th scope="col">Fotos</th>
                </tr>
              </thead>
              <tbody>
                <!-- FILES DINÀMIQUES CONFORME SALES TINGUI RESERVADES L'USUARI -->
              </tbody>
            </table>
          <?php } elseif ($_REQUEST["info"] === "recursos") { ?>
            <table class="table crud-table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Codi</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Actiu</th>
                  <th scope="col">Presentacions</th>
                </tr>
              </thead>
              <tbody>
                <!-- FILES DINÀMIQUES CONFORME SALES TINGUI RESERVADES L'USUARI -->
              </tbody>
            </table>
          <?php } elseif ($_REQUEST["info"] === "reserves") { ?>
            <table class="table crud-table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Codi</th>
                  <th scope="col">Data</th>
                  <th scope="col">Aforament</th>
                  <th scope="col">HoraInici</th>
                  <th scope="col">HoraFi</th>
                  <th scope="col">ObservacionsReserva</th>
                  <th scope="col">ObservacionsFiReunio</th>
                </tr>
              </thead>
              <tbody>
                <!-- FILES DINÀMIQUES CONFORME SALES TINGUI RESERVADES L'USUARI -->
              </tbody>
            </table>
          <?php } elseif ($_REQUEST["info"] === "incidencies") { ?>
            <table class="table crud-table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Codi</th>
                  <th scope="col">Data</th>
                  <th scope="col">Descripció</th>
                </tr>
              </thead>
              <tbody>
                <!-- FILES DINÀMIQUES CONFORME SALES TINGUI RESERVADES L'USUARI -->
              </tbody>
            </table>
            <?php } else { ?>
                <div id="opcionsAdmin" class="row">
                  <div class="col-md-2">
                    Usuaris
                  </div>
                  <div class="col-md-2">
                    Sales
                  </div>
                  <div class="col-md-2">
                    Recursos
                  </div>
                  <div class="col-md-2">
                    Reserves
                  </div>
                  <div class="col-md-2">
                    Incidències
                  </div>
                </div>
            <?php } ?>
        </div>
      </div>
      </div>
      <?php } ?>
  </body>
</html>