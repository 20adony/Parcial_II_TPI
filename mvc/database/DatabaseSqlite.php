<?php
require_once "IDatabase.php";

class DatabaseSqlite implements IDatabase
{
    private $host;
    private $databaseName;
    private $user;
    private $password;

    function __construct($host, $databaseName, $user, $password)
    {
        $this->host = $host;
        $this->databaseName = $databaseName;
        $this->user = $user;
        $this->password = $password;
    }

    public function establecerConexion()
    {   $dbConnect = true;
        return $dbConnect;
    }
    public function cerrarConexion()
    {
        $dbConnect = false;
        return $dbConnect;
    }
}