<?php

/**
 * Fitxer que conté la configuració que necessita l'apllicació per funcionar, com per exemple:
 * La Configuració per connectar-se a la base de dades
 *
 * @author   Àlex Gómez <agomez@cendrassos.net>
 * @author   Juan José Gómez Villegas <jgomez@cendrassos.net>
 * @license  MIT https://choosealicense.com/licenses/mit/
 * @version  1.0.0
 * @category ApliEmpordà-Sales
 * @package  ApliEmpordà-Sales
 * @link     http://localhost:8080/
 *
 * Per provar com funcionar podeu executar php -S localhost:8080 a la carpeta public.
 * I amb el navegador visitar la url http://localhost:8080/
 **/

$config = array();

/* configuració de connexió a la base dades */
$config["db"] = array();
$config["db"]["user"] = 'programacio2';
$config["db"]["pass"] = '@dminProgramacio%2022';
$config["db"]["dbname"] = 'applisales';
$config["db"]["host"] = '185.66.41.58';

/* inclou els models de l'aplicació */
require_once "../src/emeset/peticio.php";
require_once "../src/emeset/resposta.php";
require_once "../src/emeset/contenidor.php";
require_once "../src/models/connexio.php";
require_once "../src/models/usuarisPDO.php";
require_once "../src/models/salesPDO.php";

/* inclou els controladors de l'aplicació */
include "../src/controladors/index.php";
include "../src/controladors/login.php";
include "../src/controladors/dologin.php";
include "../src/controladors/logout.php";
include "../src/controladors/userProfile.php";
include "../src/controladors/calendari.php";
include "../src/controladors/newReservation.php";
include "../src/controladors/eliminarReserva.php";
include "../src/controladors/ajaxServer.php";
include "../src/controladors/llistaReserves.php";
include "../src/controladors/salesDisponibles.php";

/* inclou els middleware de l'aplicació */
include "../src/middleware/middleAdmin.php";
include "../src/middleware/middleLogin.php";
