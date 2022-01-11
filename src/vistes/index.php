<!doctype html>
<html lang="en">
  <head>
    <?php include "../src/vistes/util/head.php" ?>
    <title>Inici</title>
  </head>
  <body>
  <?php include "../src/vistes/util/navbar.php" ?>
      <!-- VISTA ADMINISTRADOR -->
      <div id="divCentral">
      <?php include "../src/vistes/util/sidebaradmin.php" ?>
      <div id="contentAdmin" class="index-admin-container">
        <div>
          <?php if ($_REQUEST["info"] === "usuaris") { ?>
            <table class="table crud-table">
              <thead>
                <tr>
                  <th scope="col">Codi</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Contrasenya</th>
                  <th scope="col">Rol</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($llistatUsuaris as $actual) { ?>
                    <tr>
                      <td><?=$actual["Codi"];?></td>
                      <td><?=$actual["Usuari"];?></td>
                      <td><?=$actual["Contrasenya"];?></td>
                      <td><?=$actual["Rol"];?></td>
                    </tr>
                <?php } ?>
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
                <div id="opcionsAdmin" class="col-md-10 row">
                  <div class="col-md-4" id="anarusuaris">
                    <p>Usuaris</p>
                  </div>
                  <div class="col-md-4" id="anarsales">
                    <p>Sales</p>
                  </div>
                  <div class="col-md-4" id="anarrecursos">
                    <p>Recursos</p>
                  </div>
                  <div class="col-md-4" id="anarreserves">
                    <p>Reserves</p>
                  </div>
                  <div class="col-md-4" id="anarincidencies">
                    <p>Incidències</p>
                  </div>
                </div>
            <?php } ?>
        </div>
      </div>
      </div>
  </body>
  <script src="js/admin.js"></script>
</html>