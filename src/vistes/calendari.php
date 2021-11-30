<!doctype html>
<html lang="en">
  <head>
    <?php include "../src/vistes/util/head.php"?>
    <link rel="stylesheet" href="css/calendari.css">
    <title>Calendari de Sales</title>
    <script src="js/calendari.js"></script>
  </head>
  <body>
    <?php include "util/navbar.php" ?>
    <br>
    <div class="container-sm">
      <div id="navCalendari" class="row">
        <p id="infoCalendar" class="col">Novembre de 2021</p>
        <button type="button" id="btnAbans" class="col"><i class="fa fa-chevron-left"></i></button>
        <button type="button" id="btnDespres" class="col"><i class="fa fa-chevron-right"></i></button>
      </div>
      <div id="divCalendari"></div>
    </div>
  </body>
</html>