<?php

function ctrlDeleteReservation($peticio, $resposta, $contenidor)
{
    $id = $peticio->get(INPUT_POST, "id");
    $Sales = $contenidor->sales();
    $Sales->delete($id);

    $resposta->redirect("location: index.php");

    return $resposta;
}
