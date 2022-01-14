<?php

/**
 * Classe que gestiona la connexió a la base de dades
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
 * Connexio: Classe que gestiona la connexió a la base de dades
 *
 * Sera la classe que utilitzaran tots els models per connectar-se a la base de dades
 * **/
class Connexio
{
    private $sql;

    /**
     * __construct: S'encarrega de establir la connexió amb la base de dades
     *
     * @param config conte les dades necessaries per connectar-se amb la base de dades
     **/
    public function __construct($config)
    {
        $dsn = "mysql:dbname={$config['dbname']};host={$config['host']}";
        $usuari = $config['user'];
        $password = $config['pass'];

        try {
            $this->sql = new \PDO($dsn, $usuari, $password);
        } catch (\PDOException $e) {
            die("Ha fallat la connexió: " . $e->getMessage() . " $usuari");
        }
    }

    /**
     * getConnexio: S'encarrega de retorna la connexio a la base de dades
     *
     * @return sql conté la connexio a la base de dades
     **/
    public function getConnexio()
    {
        return $this->sql;
    }
}
