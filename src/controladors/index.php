<?php

function ctrlIndex($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("index.php");

    return $resposta;
}