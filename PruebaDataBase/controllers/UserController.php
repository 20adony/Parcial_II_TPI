<?php

class UserController {
    public function index() {
        require_once "models/User.php";
        $user = new User();
        $users = $user->index();
        require_once "views/users.php";
    }
    public function show($id){
        require_once "models/User.php";
        $user = new User();
        $cliente = $user->select($_POST["user_name"]);
        require_once "views/showUser.php";
    }
}