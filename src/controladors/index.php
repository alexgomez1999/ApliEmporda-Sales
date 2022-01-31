<?php

function ctrlIndex($peticio, $resposta, $contenidor)
{
    if ($_SESSION['login']['Rol'] != 'Administrador') {
        $resposta->redirect("Location:index.php?r=llistaReserves");
    } else {
        $usuarisPDO = $contenidor->usuaris();

        $info = $peticio->get("INPUT_REQUEST", "info");

        $llistatUsuaris;
        $llistatSales;
        $listatRecursos;
        $llistatReserves;
        $llistatIncidencies;
        if ($info === "usuaris") {
            $llistatUsuaris = $usuarisPDO->getLlistat();
        } elseif ($info === "sales") {
            //
        } elseif ($info === "recursos") {
            //
        } elseif ($info === "reserves") {
            //
        } elseif ($info === "incidencies") {
            //
        }

        $llistatUsuaris = $usuarisPDO->getLlistat();

        $resposta->set('llistatUsuaris', $llistatUsuaris);
        $resposta->set('llistatSales', $llistatSales);
        $resposta->set('listatRecursos', $listatRecursos);
        $resposta->set('llistatReserves', $llistatReserves);
        $resposta->set('llistatIncidencies', $llistatIncidencies);

        $resposta->SetTemplate("index.php");
    }

    return $resposta;
}
