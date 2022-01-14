<<<<<<< HEAD
<!doctype html>
<html lang="en">
  <head>
    <?php include "util/head.php" ?>
    <title>Inici</title>
  </head>
  <body>
  <?php include "util/navbar.php" ?>
      <?php if ($login["Rol"] != "Administrador") { ?>
      <!-- VISTA USUARI -->
        <?php header("Location:index.php?r=llistaReserves"); ?>
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
=======
<!doctype html>
<html lang="en">
  <head>
    <?php include "util/head.php" ?>
    <title>Inici</title>
  </head>
  <body>
  <?php include "util/navbar.php" ?>
      <?php if ($login["Rol"] != "Administrador") { ?>
      <!-- VISTA USUARI -->
        <?php header("Location:index.php?r=llistaReserves"); ?>
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
>>>>>>> develop
