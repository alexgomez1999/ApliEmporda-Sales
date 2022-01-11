<?php

function ctrlLlistaReserves($peticio, $resposta, $contenidor)
{
        $CodiUsuari = $_SESSION['login']['Codi'];
        
        $sales = $contenidor->sales();

        $sala = $sales->getReserva($CodiUsuari);
        $resposta->set('sala', $sala);

    $resposta->SetTemplate("llistaReserves.php");
    return $resposta;
}