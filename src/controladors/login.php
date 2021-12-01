<?php

function ctrlLogin($peticio, $resposta, $contenidor)
{
    $usuarilogat = $peticio->get(INPUT_COOKIE, "usuarilogat");

    $resposta->set("usuarilogat", $usuarilogat);

    $resposta->SetTemplate("login.php");
    return $resposta;
}
