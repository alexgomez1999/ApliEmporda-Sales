<?php

namespace Daw;

class SalesPDO extends ModelPDO
{
    
    public function getReserva($CodiUsuari)
    {
        $query = 
        'SELECT A.Id, A.Codi, B.Nom, B.Centre, B.Ubicacio,
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

    public function delete($Id) 
    {
        $query = 'DELETE FROM reserves WHERE Id = :Id';
        $delete = $this->sql->prepare($query);
        $result = $delete->execute([':Id' => $Id]);

        if ($delete->errorCode() !== '00000') {
            $err = $delete->errorInfo();
            $code = $delete->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }
}