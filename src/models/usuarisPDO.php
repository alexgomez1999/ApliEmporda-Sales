<?php

namespace Daw;

class UsuarisPDO
{
    private $sql;

    public function __construct($connexio)
    {
        $this->sql = $connexio->getConnexio();
    }

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
