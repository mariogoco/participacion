<?php

class Conexion
{
    private $host;
    private $dbname;
    private $user;
    private $pwd;
    private $charset;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->dbname = 'participacion';
        $this->user = 'root';
        $this->pwd = '';
        $this->charset = 'utf8mb4';
    }

    protected function connect()
    {
        $connectString = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
        try {
            $dhb = new PDO($connectString, $this->user, $this->pwd);
            $dhb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dhb;
        } catch (Exception $e) {
            $dhb = 'Error de conexión.';
            echo 'Error: ' . $e->getMessage();
        }
    }
}
