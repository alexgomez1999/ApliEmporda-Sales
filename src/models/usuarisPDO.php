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
 * UsuarisPDO: Classe que gestiona la gestió d'usuaris
 *
 * Sera la classe que podra crear, esborrar i modificar usuaris de la base de dades
 * **/
class UsuarisPDO
{
    private $sql;

    /**
     * __construct: Rep la Connexio a la base de dades de l'objecte Connexio
     *
     * @param connexio conte les dades necessaries per connectar-se amb la base de dades
     **/
    public function __construct($connexio)
    {
        $this->sql = $connexio->getConnexio();
    }

    /**
     * getUser: Retorna totes les dades d'un usuari a partir del seu username
     *
     * @param user usuari a consultar
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
     * getUser: Retorna tots els usuaris de la base de dades
     **/
    public function getLlistat()
    {
        $query = 'SELECT * FROM usuaris';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([]);

        $usuaris = array();
        while ($usuari = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $usuaris[$usuari["Id"]] = $usuari;
        }

        return $usuaris;
    }
}
