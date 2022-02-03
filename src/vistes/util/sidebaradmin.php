<div id="sidebaradmin">
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <?php if ($_REQUEST["info"] === "") { ?>
          <a href="index.php" class="nav-link text-white itemsidebaractive">
            <i class="fas fa-columns"></i>
          </a>
        <?php } else { ?>
          <a href="index.php" class="nav-link text-white">
            <i class="fas fa-columns"></i>
          </a>
        <?php } ?>
      </li>
      <li class="nav-item">
        <?php if ($_REQUEST["info"] === "estadistiques") { ?>
          <a href="index.php?info=estadistiques" class="nav-link text-white itemsidebaractive">
            <i class="fas fa-chart-line"></i>
          </a>
        <?php } else { ?>
          <a href="index.php?info=estadistiques" class="nav-link text-white">
            <i class="fas fa-chart-line"></i>
          </a>
        <?php } ?>
      </li>
      <li class="nav-item">
      <?php if ($_REQUEST["info"] === "reserves") { ?>
        <a href="index.php?info=reserves" class="nav-link text-white itemsidebaractive">
          <i class="fas fa-clock"></i>
        </a>
      <?php } else { ?>
        <a href="index.php?info=reserves" class="nav-link text-white">
          <i class="fas fa-clock"></i>
        </a>
      <?php } ?>
      </li>
      <li class="nav-item">
      <?php if ($_REQUEST["info"] === "incidencies") { ?>
        <a href="index.php?info=incidencies" class="nav-link text-white itemsidebaractive">
          <i class="fas fa-clipboard-list"></i>
        </a>
      <?php } else { ?>
        <a href="index.php?info=incidencies" class="nav-link text-white">
          <i class="fas fa-clipboard-list"></i>
        </a>
      <?php } ?>
      </li>
    </ul>
  </div>