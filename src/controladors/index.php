<?php

function ctrlIndex($peticio, $resposta, $contenidor)
{

    $login = $peticio->get("SESSION", "login");
    $logat = $peticio->get("SESSION", "logat");

    $resposta->set("logat", $logat);
    $resposta->set("login", $login);

    $resposta->SetTemplate("index.php");

    return $resposta;
}
