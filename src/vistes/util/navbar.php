<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fa fa-home"></i> ApliSales</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
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
            <a href="#" class="nav-link"><i class="fa fa-calendar"></i></a>
        </li>
        <li class="nav-item">
            <a href="index.php?r=logout" class="nav-link"><?= $_SESSION['login']['Usuari'] ?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>