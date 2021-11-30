<?php

function ctrlNewReservation($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("newReservation.php");
    return $resposta;
}
