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

/* inclou el fitxer config.php */
require_once "../src/config.php";

/* instancia els models contenidor i app */
$contenidor = new \Emeset\Contenidor($config);
$app = new \Emeset\Emeset($contenidor);

/* Depenent de la resposta executa un controlador o un altre */
$app->ruta("dologin", "ctrldoLogin");
$app->ruta("login", "ctrlLogin");
$app->ruta("logout", "ctrlLogout", ["middleLogin"]);
$app->ruta("userProfile", "ctrlUserProfile", ["middleLogin"]);
$app->ruta("calendari", "ctrlCalendari", ["middleLogin"]);
$app->ruta("newReservation", "ctrlNewReservation", ["middleLogin"]);
$app->ruta("deleteReservation", "ctrlDeleteReservation", ["middleLogin"]);
$app->ruta("checkUbi", "ctrlCheckUbi", ["middleLogin"]);
$app->ruta("checkCenter", "ctrlCheckCenter", ["middleLogin"]);
$app->ruta("checkDay", "ctrlCheckDay", ["middleLogin"]);
$app->ruta("checkHours", "ctrlCheckHours", ["middleLogin"]);
$app->ruta("checkPersons", "ctrlCheckPersons", ["middleLogin"]);
$app->ruta("llistaReserves", "ctrlLlistaReserves", ["middleLogin"]);
$app->ruta("tevesReservesAjax", "ctrlTevesReservesAjax");
$app->ruta("salesDisponibles", "ctrlSalesDisponibles", ["middleLogin"]);
$app->ruta("anarusuaris", "ctrlAjaxAdminUsuaris", ["middleLogin"]);
$app->ruta("NewReservationQuery", "ctrlReservationQuary", ["middleLogin"]);
$app->ruta("getRecursos", "ctrlGetRecursos", ["middleLogin"]);
$app->ruta("", "ctrlIndex", ["middleLogin"]);

/* Aplica la resposta */
$app->executa();
