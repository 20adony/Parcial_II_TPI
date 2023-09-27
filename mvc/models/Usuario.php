<?php
require_once "database/DatabaseSqlite.php";
require_once "database/DatabaseMysql.php";

class Usuario
{
    public function mostrarTodos()
    {
        $db = new DatabaseSqlite("localhost", "tpi", "root", "");

        if($db->establecerConexion())
        {
            return "Sacando todos los usuarios de la bd Mysql";
        }
    }
    public function actualizarTodos()
    {
        
    }
}