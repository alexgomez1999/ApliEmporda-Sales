<!doctype html>
<html lang="en">
  <head>
    <?php require "util/head.php" ?>
    <title>Inici</title>
  </head>
  <body>
  <?php require "util/navbar.php" ?>
      <!-- VISTA ADMINISTRADOR -->
      <div id="divRow">
      <?php require "util/sidebaradmin.php" ?>
      <div id="contingut" class="index-admin-container">
        <div>
          <?php if ($_REQUEST["info"] === "usuaris") { ?>
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Usuaris</h6>
              </div>
              <div class="card-body">
                <?php if (count($llistatUsuaris) > 0) { ?>
                  <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                              <th scope="col">#</th>
                              <th scope="col">Codi</th>
                              <th scope="col">Nom</th>
                              <th scope="col">Rol</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                              <th scope="col">#</th>
                              <th scope="col">Codi</th>
                              <th scope="col">Nom</th>
                              <th scope="col">Rol</th>
                              </tr>
                          </tfoot>
                          <tbody>
                            <?php foreach ($llistatUsuaris as $actual) { ?>
                              <tr>
                                <td><?php echo $actual["Id"]; ?></td>
                                <td><?php echo $actual["Codi"]; ?></td>
                                <td><?php echo $actual["Usuari"]; ?></td>
                                <td><?php echo $actual["Rol"]; ?></td>
                              </tr>
                            <?php } ?>
                          </tbody>
                      </table>
                  </div>
                  <?php } else { ?>
                    <div class="alert alert-warning" role="alert">
                      No hi han Usuaris
                    </div>
                  <?php } ?>
              </div>
            </div>
          <?php } elseif ($_REQUEST["info"] === "sales") { ?>
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Sales</h6>
              </div>
              <div class="card-body">
                <?php if (count($llistatSales) > 0) { ?>
                  <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
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
                          <tfoot>
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
                          </tfoot>
                          <tbody>
                          </tbody>
                      </table>
                  </div>
                  <?php } else { ?>
                    <div class="alert alert-warning" role="alert">
                      No hi han Sales
                    </div>
                  <?php } ?>
              </div>
            </div>
          <?php } elseif ($_REQUEST["info"] === "recursos") { ?>
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Recursos</h6>
              </div>
              <div class="card-body">
              <?php if (count($llistatRecursos) > 0) { ?>
                  <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                              <th scope="col">#</th>
                              <th scope="col">Codi</th>
                              <th scope="col">Nom</th>
                              <th scope="col">Actiu</th>
                              <th scope="col">Presentacions</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                              <th scope="col">#</th>
                              <th scope="col">Codi</th>
                              <th scope="col">Nom</th>
                              <th scope="col">Actiu</th>
                              <th scope="col">Presentacions</th>
                              </tr>
                          </tfoot>
                          <tbody>
                          </tbody>
                      </table>
                  </div>
                  <?php } else { ?>
                    <div class="alert alert-warning" role="alert">
                      No hi han Recursos
                    </div>
                  <?php } ?>
              </div>
            </div>
          <?php } elseif ($_REQUEST["info"] === "reserves") { ?>
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Reserves</h6>
              </div>
              <div class="card-body">
                <?php if (count($llistatReserves) > 0) { ?>
                  <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
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
                          <tfoot>
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
                          </tfoot>
                          <tbody>
                          </tbody>
                      </table>
                  </div>
                  <?php } else { ?>
                    <div class="alert alert-warning" role="alert">
                      No hi han Reserves
                    </div>
                  <?php } ?>
              </div>
            </div>
          <?php } elseif ($_REQUEST["info"] === "incidencies") { ?>
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Incidencies</h6>
              </div>
              <div class="card-body">
                <?php if (count($llistatIncidencies) > 0) { ?>
                  <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                              <th scope="col">#</th>
                              <th scope="col">Codi</th>
                              <th scope="col">Data</th>
                              <th scope="col">Descripció</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                              <th scope="col">#</th>
                              <th scope="col">Codi</th>
                              <th scope="col">Data</th>
                              <th scope="col">Descripció</th>
                              </tr>
                          </tfoot>
                          <tbody>
                          </tbody>
                      </table>
                  </div>
                  <?php } else { ?>
                    <div class="alert alert-warning" role="alert">
                      No hi han Incidencies
                    </div>
                  <?php } ?>
              </div>
            </div>
          <?php } else { ?>
                <div id="opcionsAdmin" class="row">
                  <div id="anarusuaris" class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Usuaris</div>
                                    <div id="countUsuaris" class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div id="anarsales" class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                      Sales</div>
                                    <div id="countSales" class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-person-booth fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div id="anarrecursos" class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                      Recursos</div>
                                    <div id="countRecursos" class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div id="anarreserves" class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                      Reserves</div>
                                    <div id="countReserves" class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-concierge-bell fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div id="anarincidencies" class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                      Incidències</div>
                                    <div id="countIncidencies" class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
          <?php } ?>
        </div>
      </div>
      </div>
      <script src="js/admin.js"></script>
  </body>
</html>
