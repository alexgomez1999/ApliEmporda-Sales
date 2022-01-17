<?php

function ctrlCalendari($peticio, $resposta, $contenidor)
{
    $usuarisPDO = $contenidor->usuaris();
    $resposta->SetTemplate("calendari.php");
    return $resposta;
}
