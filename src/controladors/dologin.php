<?php

function ctrldoLogin($peticio, $resposta, $contenidor)
{
    $usuari = $peticio->get(INPUT_POST, "user");
    $pass = $peticio->get(INPUT_POST, "pass");

    $usuaris = new \Daw\UsuarisPDO($contenidor->config["db"]);

    $actual = $usuaris->getUser($usuari);

    if($actual && $actual["Contrasenya"] === $pass) {
        $resposta->setSession("logat", true);
        $resposta->setSession("login", $actual);
        $resposta->setCookie("usuarilogat" , $actual["Usuari"], strtotime("+1 days"));
        $resposta->redirect("location: index.php");
    } else {
        $resposta->setSession("logat", false);  
        $resposta->setSession("missatge-login", "Usuari o contrasenya incorrecte"); 
        $resposta->redirect("location: index.php?r=login");
    }
    return $resposta;
}
