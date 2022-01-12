<!doctype html>
<html lang="en">
  <head>
    <?php include "../src/vistes/util/head.php"?>
    <title>Calendari de Sales</title>
    <script src="js/calendari.js"></script>
  </head>
  <body>
    <?php include "../src/vistes/util/navbar.php" ?>
    <br>
    <div class="container-sm">
      <div id="navCalendari">
        <button type="button" id="btnAbans"><i class="fa fa-chevron-left"></i></button>
        <p id="infoCalendar"></p>
        <button type="button" id="btnDespres"><i class="fa fa-chevron-right"></i></button>
      </div>
      <div id="divCalendari"></div>
    </div>
  </body>

  <!-- Modal de Reserva Sala -->
  <div id="modalReservaSala" class="modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="TitolModal1" class="modal-title"></h5>
        <button id="TancaModal1" type="button" class="btn btn-close"><i class="fas fa-close"></i></button>
      </div>
      <div id="CosModal1" class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Reserva Sala</button>
        <button type="button" id="btnTancaModal1" class="btn btn-secondary" data-bs-dismiss="modal">Cancel·la</button>
      </div>
    </div>
  </div>
</div>
</html>