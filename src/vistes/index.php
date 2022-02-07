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
          <?php if ($_REQUEST["info"] === "estadistiques") { ?>
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Estadistiques</h6>
              </div>
              <div class="card-body">
                //
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
                              <th scope="col">Accions</th>
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
                              <th scope="col">Accions</th>
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
                              <th scope="col">Accions</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                              <th scope="col">#</th>
                              <th scope="col">Codi</th>
                              <th scope="col">Data</th>
                              <th scope="col">Descripció</th>
                              <th scope="col">Accions</th>
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
                <div id="opcionsAdmin" class="row mt-4">
                  <div id="anarreservesavui" class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="itemDashboard text-xs font-weight-bold text-uppercase mb-1">
                                      Reserves per Avui</div>
                                    <div id="countSales" class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                </div>
                                <div class="col-auto">
                                    <i class="far fa-clock fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div id="anarreservesfetesavui" class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="itemDashboard text-xs font-weight-bold text-uppercase mb-1">
                                      Reserves Fetes Avui</div>
                                    <div id="countSales" class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                </div>
                                <div class="col-auto">
                                    <i class="far fa-check-circle fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div id="anarincidenciesavui" class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="itemDashboard text-xs font-weight-bold text-uppercase mb-1">
                                      Incidències per Avui</div>
                                    <div id="countIncidencies" class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div id="anarincidenciesresoltes" class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="itemDashboard text-xs font-weight-bold text-uppercase mb-1">
                                      Incidències Resoltes</div>
                                    <div id="countIncidencies" class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

                <br>
                <hr>
                
                <div>
                  <h3 class="text-center text-uppercase">Estadistiques</h3>
                  <div class="text-center">
                    //
                  </div>
                </div>

                <hr>

                <div>
                  <h3 class="text-center text-uppercase">Reserves per Avui</h3>
                  <div class="text-center">
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
                                  <th scope="col">Accions</th>
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
                                  <th scope="col">Accions</th>
                                  </tr>
                              </tfoot>
                              <tbody>
                              </tbody>
                          </table>
                      </div>
                      <?php } else { ?>
                        <div class="alert alert-warning" role="alert">
                          No hi han Reserves per Avui
                        </div>
                      <?php } ?>
                  </div>
                </div>
          <?php } ?>
        </div>
      </div>
      </div>
      <script src="js/admin.js"></script>
  </body>
</html>
