<?php

function ctrlCheckUbi($peticio, $resposta, $contenidor)
{
    $ubi = $peticio->get(INPUT_POST, "ubicacio");
    
    $Sales = new \Daw\SalesPDO($contenidor->config["db"]);
    $dades = $Sales->searchUbication($ubi);

    $jsonDades = json_encode($dades);
    
    echo $jsonDades;

    return $resposta;
}

function ctrlCheckCenter($peticio, $resposta, $contenidor)
{
    $centre = $peticio->get(INPUT_POST, "centre");
    
    echo $centre;

    return $resposta;
}

function ctrlCheckDay($peticio, $resposta, $contenidor)
{
    $dia = $peticio->get(INPUT_POST, "dia");
    
    echo $dia;

    return $resposta;
}

function ctrlCheckHours($peticio, $resposta, $contenidor)
{
    $entrada = $peticio->get(INPUT_POST, "entrada");
    $sortida = $peticio->get(INPUT_POST, "sortida");
    
    echo "Entrada" . $entrada . " Sortida: " . $sortida;

    return $resposta;
}

function ctrlCheckPersons($peticio, $resposta, $contenidor)
{
    $persones = $peticio->get(INPUT_POST, "persones");
    
    echo $persones;

    return $resposta;
}