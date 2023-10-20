<?php

class User {

    public function index() {
        
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {
            // $conn PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            $users = PostgresConnection::selectAll("SELECT * FROM users");
            // $users = $conn->query("SELECT * FROM users");
            return $users;
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {
            
            PostgresConnection::close();
        }
        
    }

    public function store($data) {

        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {

            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            $sql = "INSERT INTO users(username, password) VALUES(:username, :password)";
            PostgresConnection::insert($sql, $data);

            header("Location: " . BASE_DIR . "/User/index/");
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {
            
            PostgresConnection::close();
        }
    }
    public function delete($data){
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            $sql = "DELETE FROM users WHERE username = '$data'";
            PostgresConnection::eliminar($sql);

            header("Location: " . BASE_DIR . "User/index/");
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {
            
            PostgresConnection::close();
        }
    }
    public function select($data){
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {
            // $conn PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            $users = PostgresConnection::show("SELECT * FROM users WHERE username = '$data'");
            // $users = $conn->query("SELECT * FROM users");
            return $users;
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {
            
            PostgresConnection::close();
        }
    }

    public function modific($data){
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {
            // $conn PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            PostgresConnection::modificar("UPDATE users SET username = '{$data["user_name"]}', password = '{$data["pass"]}' WHERE id = {$data["user_id"]}");
            // $users = $conn->query("SELECT * FROM users");
            header("Location: " . BASE_DIR . "User/index/");
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {
            
            PostgresConnection::close();
        }
    }
    public function escribir($data){
        $ar=fopen("archivo.txt","a") or die ("Error al crear");
        $usuario = $data['user'];
        $contrasenia = $data['pass'];
        fwrite($ar,$usuario . PHP_EOL);
        fwrite($ar, $contrasenia . PHP_EOL);
    }
    public function escribirJson($data){
        $file = "usuarios.json";
        $user = json_encode($data);
        
        file_put_contents($file,$user);
    }
}