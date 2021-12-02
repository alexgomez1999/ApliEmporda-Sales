<?php

function ctrlDeleteReservation($peticio, $resposta, $contenidor)
{
    $id = $peticio->get(INPUT_GET, "id");
    $Sales = new \Daw\SalesPDO($contenidor->config["db"]);
    $Sales->delete($id);

    $resposta->redirect("location: index.php");
    
    return $resposta;
}