<?php

/**
    * Exemple per a M07.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Classe contenidor,  té la responsabilitat d'instaciar els models i altres objectes.
    *
**/

namespace Emeset;

/**
    * Contenidor: Classe contenidor.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Classe contenidor, la responsabilitat d'instaciar els models i altres objectes.
    *
**/
class Contenidor
{
    public $config = [];

    /**
     * __construct:  Crear contenidor
     *
     * @param $config paràmetres de configuració de l'aplicació.
     *
    **/
    public function __construct($config)
    {
        $this->config = $config;
    }

    public function resposta(){
        return new \Emeset\Resposta();
    }

    public function peticio(){
        return new \Emeset\Peticio();
    }

    public function model(){
        return new \Daw\ModelPDO($this->config);
    }

    public function usuaris(){
        return new \Daw\UsuarisPDO($this->config);
    }

    public function sales(){
        return new \Daw\SalesPDO($this->config);
    }

}