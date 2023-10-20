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
        $user->escribir($_POST);
        $user->escribirJson($_POST);
        $user->store($_POST);
    }
    public function delete(){
        require_once "models/User.php";
        $clientes = new User();
        $clientes->delete($_POST["user_name"]);
    }
    public function show(){
        require_once "models/User.php";
        $user = new User();
        $cliente = $user->select($_POST["user_name"]);
        
        require_once "views/showUser.php";
    }
    public function edit(){
        require_once "models/User.php";
        $user = new User();
        $cliente = $user->select($_POST["user_name"]);
        require_once "views/edit.php";
    }
    public function change(){
        require_once "models/User.php";
        $user = new User();
        $user->modific($_POST);
    }
}