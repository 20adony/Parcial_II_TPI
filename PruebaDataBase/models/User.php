<?php
class User {
    public function index(){
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";
        $pgE = new PostgresConnection();
        try{
            $pgE->connect($host,$port,$dbname,$user,$pass);
            $users = $pgE->selectAll("SELECT * FROM users");
            return $users;
        }catch(Exception $e){
            die($e-getMessage());
        }
        finally{
            $pgE->close();
        }
    }
    public function select($data){
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";
        $pgE = new PostgresConnection();
        try {
            // $conn PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            $psE->connect($host,$port,$dbname,$user,$pass);
            $users = $psE->show("SELECT * FROM users WHERE username = '$data'");
            // $users = $conn->query("SELECT * FROM users");
            return $users;
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {
            
            $psE->close();
        }
    }
}