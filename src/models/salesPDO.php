<?php

/**
 * Classe que gestiona la gestió de sales
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
 * SalesPDO: Classe que gestiona la gestió de sales
 *
 * Sera la classe que podra crear, esborrar i modificar sales de la base de dades
 * **/
class SalesPDO
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
     * getReserva: Retorna totes les reserves d'un usuari a partir del seu codi
     *
     * @param CodiUsuari codi de l'usuari a consultar les seves reserves
     **/
    public function getReserva($CodiUsuari)
    {
        $query =
        'SELECT A.Id, A.Codi, B.Nom, D.Nom "Centre", B.Ubicacio,
        A.Data, A.HoraInici, A.HoraFi
        FROM reserves A
        INNER JOIN sales B ON(A.CodiSala = B.Codi)
        INNER JOIN usuaris C ON (A.CodiUsuari = C.Codi)
        INNER JOIN centres D ON (B.Centre = D.Codi)
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

    /**
     * ReservationQuary: Retorna totes les reserves que siguin en una ubicació concreta
     **/
    public function ReservationQuary($ubi, $centre, $dia, $entrada, $sortida, $persones)
    {
        $query =
        'SELECT A.Nom, A.Activa, A.NomRecurs, A.Centre, A.Ubicacio, A.Foto, A.AforamentDisponible, B.Nom "NomCentre" FROM sales A
        JOIN centres B ON (A.Centre = B.Codi) WHERE A.Ubicacio LIKE :ubicacio';

        if ($centre != 0) {
            $query .= ' AND A.centre = :centre';
        }

        if ($persones != 0) {
            $query .= ' AND A.AforamentDisponible >= :persones';
        }

        $stm = $this->sql->prepare($query);

        if ($persones != 0 && $centre != 0) {
            $result = $stm->execute([':ubicacio' => $ubi, ':centre' => $centre, ':persones' => $persones]);
        }

        if ($centre != 0 && $persones == 0) {
            $result = $stm->execute([':ubicacio' => $ubi, ':centre' => $centre]);
        }

        if ($persones == 0 && $centre == 0) {
            $result = $stm->execute([':ubicacio' => $ubi]);
        }

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

    /**
     * getReservaPerData: Retorna totes les reserves d'un usuari a partir del seu codi en una data determinada
     *
     * @param CodiUsuari codi de l'usuari a consultar les seves reserves
     * @param dataSelect data a consultar
     **/
    public function getReservaPerData($CodiUsuari, $dataSelect)
    {
        $query =
        'SELECT A.Id, A.Codi, B.Nom, D.Nom "Centre", B.Ubicacio,
        A.Data, A.HoraInici, A.HoraFi, A.Aforament
        FROM reserves A
        INNER JOIN sales B ON(A.CodiSala = B.Codi)
        INNER JOIN usuaris C ON (A.CodiUsuari = C.Codi)
        INNER JOIN centres D ON (B.Centre = D.Codi)
        WHERE C.Codi = :CodiUsuari AND A.Data = :DataSelect
        ORDER BY A.HoraInici desc, A.HoraFi desc';

        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':CodiUsuari' => $CodiUsuari,':DataSelect' => $dataSelect]);

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

    /**
     * delete: Esborrar una sala
     *
     * @param CodiUsuari codi de la sala a esborrar
     **/
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

    /**
     * getSales: Retorna totes les sales de la base de dades a partir de la seva ubicacio i el centre on siguin
     *
     * @param Ubicacio Centre a consultar
     * @param Centre Centre a consultar
     **/
    public function getSales($Ubicacio, $Centre)
    {
        $query = 'SELECT A.Nom, A.NomRecurs, A.Ubicacio, A.Foto,
        B.Nom "Centre"
        FROM sales A
        INNER JOIN centres B ON (A.Centre = B.Codi)
        WHERE A.Ubicacio = :Ubicacio
        AND B.Nom = :Centre';

        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':Ubicacio' => $Ubicacio, ':Centre' => $Centre]);

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

    /**
     * getUbicacio: Retorna totes les ubicacions de la base de dades
     **/
    public function getUbicacio()
    {
        $query = 'SELECT DISTINCT Ubicacio FROM sales';

        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

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

    /**
     * getCentre: Retorna tots els centres de la base de dades
     **/
    public function getCentre()
    {
        $query = 'SELECT DISTINCT A.Centre, B.Nom FROM sales A JOIN centres B ON (A.Centre = B.Codi)';

        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

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
