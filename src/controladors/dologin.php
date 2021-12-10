<?php

function ctrldoLogin($peticio, $resposta, $contenidor)
{
    $usuari = $peticio->get(INPUT_POST, "user");
    $pass = $peticio->get(INPUT_POST, "pass");

    $usuaris = new \Daw\UsuarisPDO($contenidor->config["db"]);

    $actual = $usuaris->getUser($usuari);

    $resposta->setCookie("usuarilogat", $usuari, strtotime("+1 day"));

    if($actual && $actual["Contrasenya"] === $pass) {
        $resposta->setSession("logat", true);
        $resposta->setSession("login", $actual);
        $resposta->redirect("Location:index.php");
    } else {
        $resposta->setSession("logat", false);  
        $resposta->setSession("missatge-login", "Usuari o contrasenya incorrecte"); 
        $resposta->redirect("Location:index.php?r=login");
    }
    return $resposta;
}
