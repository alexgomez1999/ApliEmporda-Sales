<?php

function ctrlLlistaReserves($peticio, $resposta, $contenidor)
{
        $CodiUsuari = $_SESSION['login']['Codi'];
        $sales = new \Daw\SalesPDO($contenidor->config["db"]);

        $sala = $sales->getReserva($CodiUsuari);
        $resposta->set('sala', $sala);

    $resposta->SetTemplate("llistaReserves.php");
    return $resposta;
}