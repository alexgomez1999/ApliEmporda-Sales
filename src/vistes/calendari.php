<!doctype html>
<html lang="en">
  <head>
    <?php include "../src/vistes/util/head.php"?>
    <title>Calendari de Sales</title>
    <script src="js/calendari.js"></script>
  </head>
  <body>
    <?php include "util/navbar.php" ?>
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
</html>