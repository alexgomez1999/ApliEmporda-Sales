<?php

/**
 * Classe que gestiona la gestió d'usuaris
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
 * UsuarisPDO: Classe que gestiona la gestió d'usiaris
 *
 * Sera la classe que permetra crear, editat o esborrar usuaris
 * **/
class UsuarisPDO
{
    private $sql;

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
     * getUser: Opté les dades d'un usuari de la base de dades
     *
     * @param user usuari del que volem obtenir les seves dades
     **/
    public function getUser($user)
    {
        $query = 'SELECT * FROM usuaris WHERE Usuari = :user';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':user' => $user]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * getLlistat: Opté tots els usuaris de la base de dades
     **/
    public function getLlistat()
    {
        $query = 'SELECT * FROM usuaris';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

        $usuaris = array();
        while ($usuari = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $usuaris[$usuari["Id"]] = $usuari;
        }
        
        return $usuaris;
    }
}
