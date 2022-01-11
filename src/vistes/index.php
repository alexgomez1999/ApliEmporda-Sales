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
        <?php foreach ($sala as $row) { ?>
        <div class="index-user-container2">
          <img src="https://www.desarrollolibre.net/public/broken-img.png" alt="" class="imatge-sala">
          <div class="column-container">
            <b><?= $row['Nom'] ?></b>
            <p><?= $row['Ubicacio'] ?>, <?= $row['Centre'] ?></p>
          </div>
          <div class="column-container">
            <b>Data</b>
            <p><?= $row['Data'] ?></p>
          </div>
          <div class="column-container">
            <b>Hora</b>
            <p>De:  <?= $row['HoraInici'] ?> A: <?= $row['HoraFi'] ?></p>
          </div>
          <a href="index.php?r=deleteReservation&id=<?= $row['Id'] ?>">Eliminar</a>
          <a href="index.php?r=newReservation" class="reservarBtn" style="text-decoration:none"><i class="fas fa-plus"></i></a>
        </div>
        <?php } ?>
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