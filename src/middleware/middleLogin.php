<?php

/**
 * middleware que comprova que només puguin accedir als controladors els usuaris que estiguin logats
 * 
 * @author   Àlex Gómez <agomez@cendrassos.net>
 * @author   Juan José Gómez Villegas <jgomez@cendrassos.net>
 * @license  MIT https://choosealicense.com/licenses/mit/
 * @version  1.0.0
 * @category ApliEmpordà-Sales
 * @package  ApliEmpordà-Sales
 * @link     http://localhost:8080/
 * **/

/**
 * Middelware que gestiona l'aplicació
 *
 * @param petitcio $peticio
 * @param resposta $resposta
 * @param funcio $next  ha de ser el controlador
 * @param array $config  paràmetres de configuració de l'aplicació
 * @return result
 */
function middleLogin($peticio, $resposta, $contenidor, $next)
{
    $login = $peticio->get("SESSION", "login");
    $logat = $peticio->get("SESSION", "logat");

    if (!$logat) {
        $resposta->setSession("error", "Has intentat accedir a la pàgina sense identificar-te!!!!!!\n");
        $resposta->redirect("Location:index.php?r=login");
    } else {
        $resposta = nextMiddleware($peticio, $resposta, $contenidor, $next);
    }

    return $resposta;
}
