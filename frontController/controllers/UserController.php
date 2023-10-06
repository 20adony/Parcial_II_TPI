<?php

class UserController
{
    public function index()
    {
        require_once "models/User.php";
        $user = new User();
        $users = $user->index();
        require_once "views/users.php";
    }

    public function new()
    {
        require_once "views/newUser.php";
    }

    public function store()
    {
        require_once "models/User.php";
        $user = new User();
        $user->store();
    }

    public function delete(){
        require_once "models/User.php";
        $clientes = new User();
        $clientes->deleteCliente($_POST["user_name"]);
    }
    public function editCliente($id){
        require_once "models/User.php";
        $clientes =  new User();
        $cliente = $clientes->showClientes($id);
        if ($cliente) {
            require_once "views/editarCliente.php";
        } else {
            die("<h1>Cliente no encontrado - 404 Not Found</h1>");
        } 
    }
    public function editClienteJson(){
        require_once "models/User.php";
        $clientes =  new User();
        $clientes->edit();
    }

    public function showCliente($id){
        require_once "models/User.php";
        $clientes = new User();
        $cliente = $clientes->showClientes($id);
        if ($cliente) {
            require_once "views/usuario.php";
        } else {
            die("<h1>Cliente no encontrado - 404 Not Found</h1>");
        } 
    }
}