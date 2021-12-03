<div id="sidebaradmin" class="col-2 d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <?php if ($_REQUEST["info"] === "usuaris") { ?>
        <a href="index.php?info=usuaris" class="nav-link text-white itemsidebaractive">
          Usuaris
        </a>
        <?php } else { ?>
        <a href="index.php?info=usuaris" class="nav-link text-white">
          Usuaris
        </a>
        <?php } ?>
      </li>
      <li>
      <?php if ($_REQUEST["info"] === "sales") { ?>
        <a href="index.php?info=sales" class="nav-link text-white itemsidebaractive">
          Sales
        </a>
        <?php } else { ?>
        <a href="index.php?info=sales" class="nav-link text-white">
          Sales
        </a>
        <?php } ?>
      </li>
      <li>
      <?php if ($_REQUEST["info"] === "recursos") { ?>
        <a href="index.php?info=recursos" class="nav-link text-white itemsidebaractive">
          Recursos
        </a>
        <?php } else { ?>
        <a href="index.php?info=recursos" class="nav-link text-white">
          Recursos
        </a>
        <?php } ?>
      </li>
      <li>
      <?php if ($_REQUEST["info"] === "reserves") { ?>
        <a href="index.php?info=reserves" class="nav-link text-white itemsidebaractive">
          Reserves
        </a>
        <?php } else { ?>
        <a href="index.php?info=reserves" class="nav-link text-white">
          Reserves
        </a>
        <?php } ?>
      </li>
      <li>
      <?php if ($_REQUEST["info"] === "incidencies") { ?>
        <a href="index.php?info=incidencies" class="nav-link text-white itemsidebaractive">
          Incidències
        </a>
        <?php } else { ?>
        <a href="index.php?info=incidencies" class="nav-link text-white">
          Incidències
        </a>
        <?php } ?>
      </li>
    </ul>
  </div>