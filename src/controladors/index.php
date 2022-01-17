<?php

function ctrlIndex($peticio, $resposta, $contenidor)
{
    if ($_SESSION['login']['Rol'] != 'Administrador') {
        $resposta->redirect("Location:index.php?r=llistaReserves");
    } else {
        $usuarisPDO = $contenidor->usuaris();

        $llistatUsuaris = $usuarisPDO->getLlistat();

        $resposta->set('llistatUsuaris', $llistatUsuaris);

        $resposta->SetTemplate("index.php");
    }

    return $resposta;
}
