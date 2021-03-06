<?php

/**
 * Exemple per a M07.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor,  té la responsabilitat d'instaciar els models i altres objectes.
 **/

namespace Emeset;

/**
 * Contenidor: Classe contenidor.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor, la responsabilitat d'instaciar els models i altres objectes.
 **/
class Contenidor
{
    public $config = [];
    public $connexio;

    /**
     * __construct:  Crear contenidor
     *
     * @param $config paràmetres de configuració de l'aplicació.
     **/
    public function __construct($config)
    {
        $this->config = $config;
        $this->connexio = new \Daw\Connexio($this->config["db"]);
    }

    public function resposta()
    {
        return new \Emeset\Http\Resposta("../src/vistes/");
    }

    public function peticio()
    {
        return new \Emeset\Http\Peticio();
    }

    public function ruter()
    {
        return new \Emeset\Ruters\RuterParam($this);
    }

    public function connexio()
    {
        return $this->connexio;
    }

    public function model()
    {
        return new \Daw\ModelPDO($this->connexio);
    }

    public function usuaris()
    {
        return new \Daw\UsuarisPDO($this->connexio);
    }

    public function sales()
    {
        return new \Daw\SalesPDO($this->connexio);
    }
}
