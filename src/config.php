<?php

$config = array();

/* configuració de connexió a la base dades */
$config["db"] = array();
$config["db"]["user"] = 'demologin';
$config["db"]["pass"] = '06C5rju2lfSGIQ7m';
$config["db"]["dbname"] = 'demologin';
$config["db"]["host"] = 'localhost';

require_once "../src/emeset/peticio.php";
require_once "../src/emeset/resposta.php";
require_once "../src/emeset/contenidor.php";

require_once "../src/models/usuarisPDO.php";
