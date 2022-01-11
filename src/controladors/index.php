<?php

function ctrlIndex($peticio, $resposta, $contenidor)
{
    if ($_SESSION['login']['Rol'] != 'Administrador') {
        // USER
        $CodiUsuari = $_SESSION['login']['Codi'];
        $sales = $contenidor->sales();

        $sala = $sales->getReserva($CodiUsuari);
        $resposta->set('sala', $sala);
        $resposta->SetTemplate("llistaReserves.php");

    } else {
       $usuarisPDO = $contenidor->usuaris();

       $llistatUsuaris = $usuarisPDO->getLlistat();

       $resposta->set('llistatUsuaris', $llistatUsuaris);
    }

    $resposta->SetTemplate("index.php");
    
    return $resposta;
}