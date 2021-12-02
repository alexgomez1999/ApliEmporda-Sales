<?php

function ctrlMakeReservation($peticio, $resposta, $contenidor)
{
    $Ubicacio = $peticio->get(INPUT_POST, "Ubicacio");
    $Centre = $peticio->get(INPUT_POST, "Centre");
    $Dia = $peticio->get(INPUT_POST, "Data");
    $HoraInici = $peticio->get(INPUT_POST, "HoraEntrada");
    $HoraFi = $peticio->get(INPUT_POST, "HoraFi");
    $Persones = $peticio->get(INPUT_POST, "Persones");

    $resposta->set('Ubicacio', $Ubicacio);
    $resposta->set('Centre', $Centre);
    $resposta->set('Dia', $Dia);
    $resposta->set('HoraInici', $HoraInici);
    $resposta->set('HoraFi', $HoraFi);
    $resposta->set('Persones', $Persones);

    $resposta->SetTemplate("makeReservation.php");
    return $resposta;
}
