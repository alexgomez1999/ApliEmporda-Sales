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
class UsuarisPDO extends ModelPDO
{
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
     * getCount: Opté tots els usuaris de la base de dades
     **/
    public function getCount()
    {
        $usuaris = parent::getCountModel("usuaris");
        
        return $usuaris["Total"];
    }

    /**
     * getLlistat: Opté tots els usuaris de la base de dades
     **/
    public function getLlistat()
    {
        $usuaris = parent::getLlistatModel("usuaris");
        
        return $usuaris;
    }
}
