<?php

$config = array();

/* configuració de connexió a la base dades */
$config["db"] = array();
$config["db"]["user"] = 'programacio2';
$config["db"]["pass"] = '@dminProgramacio%2022';
$config["db"]["dbname"] = 'applisales';
$config["db"]["host"] = '185.66.41.58';

require_once "../src/emeset/peticio.php";
require_once "../src/emeset/resposta.php";
require_once "../src/emeset/contenidor.php";

require_once "../src/models/usuarisPDO.php";
