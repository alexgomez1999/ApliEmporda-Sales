<?php

/**
 * middleware que comprova que només puguin accedir als controladors els usuaris que siguin Administradors
 * 
 * @author   Àlex Gómez <agomez@cendrassos.net>
 * @author   Juan José Gómez Villegas <jgomez@cendrassos.net>
 * @license  MIT https://choosealicense.com/licenses/mit/
 * @version  1.0.0
 * @category ApliEmpordà-Sales
 * @package  ApliEmpordà-Sales
 * @link     http://localhost:8080/
 * **/

function middleAdmin($peticio, $resposta, $contenidor, $next)
{
    $login = $peticio->get("SESSION", "login");
    $logat = $peticio->get("SESSION", "logat");

    /* Validem que nom i cognom estan definits */
    if (!$logat && $login["Rol"] === "Administrador") {
        $resposta->setSession("error", "Has intentat accedir a la pàgina sense identificar-te!!!!!!\n");
        $resposta->redirect("Location:index.php?r=login");
    } else {
        $resposta = $next($peticio, $resposta, $contenidor);
    }

    return $resposta;
}
