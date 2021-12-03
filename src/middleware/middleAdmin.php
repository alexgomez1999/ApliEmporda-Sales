<?php

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
