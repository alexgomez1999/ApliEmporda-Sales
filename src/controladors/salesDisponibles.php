<?php

function ctrlSalesDisponibles($peticio, $resposta, $contenidor)
{

    $Ubicacio = $peticio->get(INPUT_POST, "ubicacio");
    $Centre = $peticio->get(INPUT_POST, "centre");
        
    $sales = $contenidor->sales();

    $sala = $sales->getSales($Ubicacio, $Centre);

    $jsonDades = json_encode($sala);

    echo $jsonDades;

    return $resposta;
}