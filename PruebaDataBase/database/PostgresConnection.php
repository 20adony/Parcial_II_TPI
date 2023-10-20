<?php
require_once "DatabaseConnection.php";

class PostgresConnection implements DatabaseConnection {
    private static $connection;

    public function connect($host,$port,$dbname,$user,$pass) : PDO {
        try{
            $dns = "pgsql:host=$host;port=$port;dbname=$dbname";
            #realizamos la conexion
            self::$connection = new PDO($dns,$user,$pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return self::$connection;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function selectAll($sql){
        $stm = self::$connection->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function close(){
        self::$connection = null;
    }
    public function show($sql){
        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}