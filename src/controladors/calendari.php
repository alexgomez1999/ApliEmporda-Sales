<?php

function ctrlCalendari($peticio, $resposta, $contenidor)
{
    $contenidor->usuaris();
    $resposta->SetTemplate("calendari.php");
    return $resposta;
}
