<?php

function ctrlNewReservation($peticio, $resposta, $contenidor)
{

    $sales = $contenidor->sales();

    $ubi = $sales->getUbicacio();
    $centre = $sales->getCentre();

    $resposta->set('ubi', $ubi);
    $resposta->set('centre', $centre);

    $resposta->SetTemplate("newReservation.php");
    return $resposta;
}
