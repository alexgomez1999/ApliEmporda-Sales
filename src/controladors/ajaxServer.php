<?php

function ctrlCheckUbi($peticio, $resposta, $contenidor)
{
    $ubi = $peticio->get(INPUT_POST, "ubicacio");
    
    $sales = $contenidor->sales();
    $dades = $sales->searchUbication($ubi);

    $jsonDades = json_encode($dades);

    echo $jsonDades;

    return $resposta;
}

function ctrlCheckCenter($peticio, $resposta, $contenidor)
{
    $ubi = $peticio->get(INPUT_POST, "ubicacio");
    $centre = $peticio->get(INPUT_POST, "centre");

    $sales = $contenidor->sales();
    $dades = $sales->searchCenter($ubi, $centre);
    
    $jsonDades = json_encode($dades);
    
    echo $jsonDades;

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

function ctrlTevesReservesAjax($peticio, $resposta, $contenidor)
{
    $usuarisPDO = $contenidor->usuaris();
    $salesPDO = $contenidor->sales();

    $login = $peticio->get("SESSION", "login");
    $dataSelect = $peticio->get(INPUT_POST, "dataSelect");

    $dataSelectObj = new DateTime($dataSelect);

    $dadesUsuariLogat = $usuarisPDO->getUser($login["Usuari"]);

    $reserves = $salesPDO->getReservaPerData($dadesUsuariLogat["Id"], $dataSelectObj->format("Y-m-d"));
    
    echo json_encode($reserves);

    return $resposta;
}
