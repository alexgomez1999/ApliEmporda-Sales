<nav id="menu" class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i> ApliSales</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon"></span> -->
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa fa-tachometer-alt"></i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa fa-file-alt"></i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa fa-person-booth"></i></a>
        </li>
        <li class="nav-item">
            <a href="index.php?r=calendari" class="nav-link"><i class="fa fa-calendar"></i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarScrollingDropdown" href="#">
            <i class="fa fa-user-circle"></i> <?= $_SESSION['login']['Usuari'] ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="index.php?r=elMeuPerfil"><i class="fa fa-id-badge"></i> El Meu Perfil</a></li>
              <li><a class="dropdown-item" href="index.php?r=lesMevesSales"><i class="fa fa-person-booth"></i> Les Meves Sales</a></li>
              <li><hr class="dropdown-separacio"></li>
              <li><a class="dropdown-item" href="index.php?r=logout"><i class="fa fa-sign-out-alt"></i> Tanca la Sessió</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script src="js/menu.js"></script>