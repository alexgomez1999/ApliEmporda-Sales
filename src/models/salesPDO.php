<?php

namespace Daw;

class SalesPDO
{
    private $sql;

    public function __construct($config)
    {
        $dsn = "mysql:dbname={$config['dbname']};host={$config['host']}";
        $usuari = $config['user'];
        $clau = $config['pass'];

        try {
            $this->sql = new \PDO($dsn, $usuari, $clau);
        } catch (\PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage() . " $usuari");
        }
    }

    public function getReserva($CodiUsuari)
    {
        $query = 
        'SELECT A.Codi, B.Nom, B.Centre, B.Ubicacio,
        A.Data, A.HoraInici, A.HoraFi
        FROM reserves A
        INNER JOIN sales B ON(A.CodiSala = B.Codi)
        INNER JOIN usuaris C ON (A.CodiUsuari = C.Codi)
        WHERE C.Codi = :CodiUsuari';
        
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':CodiUsuari' => $CodiUsuari]);

        $llista = [];
        while ($sala = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $llista[] = $sala;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llista;
    }
}