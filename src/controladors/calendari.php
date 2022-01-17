<?php

function ctrlCalendari($peticio, $resposta, $contenidor)
{
    $usuarisPDO = $contenidor->usuaris();

    $usuarisPDO->delete();

    $resposta->SetTemplate("calendari.php");
    return $resposta;
}
