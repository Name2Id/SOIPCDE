<?php

class LaBaseDeDatos {
    protected $dbHost = '';
    protected $dbUser = '';
    protected $dbPass = '';
    protected $dbName = '';
    protected $ConexionEstablecida;
    protected $consulta;
    public function __construct () {
        $this->dbHost = LasConstantes::HOST();
        $this->dbUser = LasConstantes::USER();
        $this->dbPass = LasConstantes::PASS();
        $this->dbName = LasConstantes::DBNAME();
        $this->EstablecerLaConexion();
    }
    public function EstablecerLaConexion () {
        try {
            $this->ConexionEstablecida = new mysqli ($this->dbHost,$this->dbUser,$this->dbPass,$this->dbName);
        } catch (Exception $e) {
            require_once LasConstantes::PATH().'require/LaPlantillaErrorDeConexion.html';
            die ();
        }
    }
    public function Consultar ($sql) {
        $this->consulta = $this->ConexionEstablecida->query($sql);
        return $this;
    }
    public function Primer () {
        return $this->consulta->fetch_assoc();
    }
    public function Todos () {
        return $this->consulta->fetch_all(MYSQLI_ASSOC);
    }
}