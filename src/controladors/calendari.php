<?php

function ctrlCalendari($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("calendari.php");
    return $resposta;
}
