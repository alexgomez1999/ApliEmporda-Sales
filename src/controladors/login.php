<?php

function ctrlLogin($peticio, $resposta, $contenidor)
{
    $missatgelogin = $peticio->get("SESSION", "missatge-login");
    $usuarilogat = $peticio->get(INPUT_COOKIE, "usuarilogat");

    $resposta->set("missatgelogin", $missatgelogin);
    $resposta->set("usuarilogat", $usuarilogat);

    if (isset($missatgelogin)) {
        unset($_SESSION['missatge-login']);
    }

    $resposta->SetTemplate("login.php");
    return $resposta;
}
