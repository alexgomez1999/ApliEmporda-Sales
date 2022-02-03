<div id="sidebaradmin">
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <?php if ($_REQUEST["info"] === "usuaris") { ?>
        <a href="index.php?info=usuaris" class="nav-link text-white itemsidebaractive">
          <i class="fas fa-users"></i>
        </a>
        <?php } else { ?>
        <a href="index.php?info=usuaris" class="nav-link text-white">
          <i class="fas fa-users"></i>
        </a>
        <?php } ?>
      </li>
      <li>
      <?php if ($_REQUEST["info"] === "sales") { ?>
        <a href="index.php?info=sales" class="nav-link text-white itemsidebaractive">
          <i class="fas fa-building"></i>
        </a>
      <?php } else { ?>
        <a href="index.php?info=sales" class="nav-link text-white">
          <i class="fas fa-building"></i>
        </a>
      <?php } ?>
      </li>
      <li>
      <?php if ($_REQUEST["info"] === "recursos") { ?>
        <a href="index.php?info=recursos" class="nav-link text-white itemsidebaractive">
          <i class="fas fa-chair"></i>
        </a>
      <?php } else { ?>
        <a href="index.php?info=recursos" class="nav-link text-white">
          <i class="fas fa-chair"></i>
        </a>
      <?php } ?>
      </li>
      <li>
      <?php if ($_REQUEST["info"] === "reserves") { ?>
        <a href="index.php?info=reserves" class="nav-link text-white itemsidebaractive">
          <i class="fas fa-concierge-bell"></i>
        </a>
      <?php } else { ?>
        <a href="index.php?info=reserves" class="nav-link text-white">
          <i class="fas fa-concierge-bell"></i>
        </a>
      <?php } ?>
      </li>
      <li>
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