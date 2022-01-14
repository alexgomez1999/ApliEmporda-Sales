<?php

/**
 * Aplicació que Gestiona les sales i les reserves que s'hen fan de cada sala
 * Projecte ApliEmpordà-Sales
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

error_reporting(E_ERROR | E_WARNING | E_PARSE);

require "../src/config.php";

require "../src/controladors/index.php";
require "../src/controladors/login.php";
require "../src/controladors/dologin.php";
require "../src/controladors/logout.php";
require "../src/controladors/userProfile.php";
require "../src/controladors/calendari.php";
require "../src/controladors/newReservation.php";
require "../src/controladors/eliminarReserva.php";
require "../src/controladors/ajaxServer.php";
require "../src/controladors/llistaReserves.php";
require "../src/controladors/salesDisponibles.php";

require "../src/middleware/middleAdmin.php";
require "../src/middleware/middleLogin.php";

$r = $_REQUEST["r"];

$contenidor = new Emeset\Contenidor($config);
$resposta = $contenidor->resposta();
$peticio = $contenidor->peticio();

if ($r == "") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlIndex");
} elseif ($r === "dologin") {
    $resposta = ctrldoLogin($peticio, $resposta, $contenidor);
} elseif ($r === "login") {
    $resposta = ctrlLogin($peticio, $resposta, $contenidor);
} elseif ($r === "logout") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlLogout");
} elseif ($r === "userProfile") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlUserProfile");
} elseif ($r === "calendari") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlCalendari");
} elseif ($r === "newReservation") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlNewReservation");
} elseif ($r === "deleteReservation") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlDeleteReservation");
} elseif ($r === "checkUbi") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlCheckUbi");
} elseif ($r === "checkCenter") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlCheckCenter");
} elseif ($r === "checkDay") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlCheckDay");
} elseif ($r === "checkHours") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlCheckHours");
} elseif ($r === "checkPersons") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlCheckPersons");
} elseif ($r === "llistaReserves") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlLlistaReserves");
} elseif ($r === "tevesReservesAjax") {
    $resposta = ctrlTevesReservesAjax($peticio, $resposta, $contenidor);
} elseif ($r === "salesDisponibles") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlSalesDisponibles");
} elseif ($r === "anarusuaris") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlAjaxAdminUsuaris");
} elseif ($r === "NewReservationQuery") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlReservationQuary");
}

$resposta->resposta();
