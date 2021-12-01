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
      <th scope="col">Descripció</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
    <!-- FILES DINÀMIQUES CONFORME SALES TINGUI RESERVADES L'USUARI -->
    <tr>
      <th scope="row">1</th>
      <td>Sala Polivalent</td>
      <td>Àmplia sala amb moltes taules, cadires i recursos per a realitzar presentacions</td>
      <td>27/06/2022</td>
      <td><a href="#">Eliminar</a></td>
    </tr>
  </tbody>
</table>
<a href="index.php?r=newReservation" class="reservarBtn" style="text-decoration:none"><i class="fa fa-plus"></i></a>
      </div>

      <?php } else { ?>
        
      <!-- VISTA ADMINISTRADOR -->
      <div class="index-admin-container">
        <div class="selector-container">
          <div class="dip"><p>Sales</p></div>
          <div class="dip"><p>Reservar sala</p></div>
          <div class="dip"><p>Veure sales reservades</p></div>
          <div class="dip"><p>Calendari</p></div>
          <div class="dip"><p>Item extra 1</p></div>
          <div class="dip"><p>Item extra 2</p></div>
        </div>
        <div class="show-container">
          <h3>PROVA SHOW</h3>
        </div>
      </div>
      <?php } ?>
  </body>
</html>