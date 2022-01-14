<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

include "../src/config.php";

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

include "../src/middleware/middleAdmin.php";
include "../src/middleware/middleLogin.php";

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
} elseif ($r === "getRecursos") {
    $resposta = middleLogin($peticio, $resposta, $contenidor, "ctrlReservationQuary");
}

$resposta->resposta();