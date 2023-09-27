<?php

class UsuarioController
{
    public function mostrarTodos()
    {
        require_once "models/Usuario.php";

        $usuario = new Usuario();
        $mostrarTodos = $usuario->mostrarTodos();

        require_once "views/todosUsuarios.php";
        
    }
    public function actualizarTodos()
    {
        
    }
}