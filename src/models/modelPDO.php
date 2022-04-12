<?php

/**
 * Classe que serveix de model per les altres classes
 * 
 * @author   Àlex Gómez <agomez@cendrassos.net>
 * @author   Juan José Gómez Villegas <jgomez@cendrassos.net>
 * @license  MIT https://choosealicense.com/licenses/mit/
 * @version  1.0.0
 * @category ApliEmpordà-Sales
 * @package  ApliEmpordà-Sales
 * @link     http://localhost:8080/
 * **/

namespace Daw;

/**
 * ModelPDO: Classe que serveix de model per les altres classes
 *
 * Sera la classe de model per les altres classes
 * **/
class ModelPDO
{
    protected $sql;

    /**
     * __construct: S'encarrega de establir la connexió amb la base de dades
     *
     * @param connexio es l'objecte que fa servir la classe per connectar-se amb la base de dades
     **/
    public function __construct($connexio)
    {
        $this->sql = $connexio->getConnexio();
    }

    /**
     * getLlistatModel: Opté tots els registres de la base de dades
     **/
    public function getLlistatModel($taula)
    {
        $query = "SELECT * FROM $taula";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

        $registres = array();
        while ($registre = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $registres[$registre["Id"]] = $registre;
        }
        
        return $registres;
    }

    /**
     * getCountModel: Opté el numero de registres de la base de dades
     **/
    public function getCountModel($taula)
    {
        $query = "SELECT count(*) as Total FROM $taula";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

        $registres = $stm->fetch(\PDO::FETCH_ASSOC);
        
        return $registres;
    }
}
