<?php

function ctrlUserProfile($peticio, $resposta, $contenidor)
{
    $usuarisPDO = $contenidor->usuaris();

    $usuarilogat = $peticio->get(INPUT_COOKIE, "usuarilogat");

    $dadesUsuariLogat = $usuarisPDO->getUser($usuarilogat);

    $resposta->set("dadesUsuariLogat", $dadesUsuariLogat);

    $resposta->setTemplate("userProfile.php");

    return $resposta;
}
