<?php

class UsuarioController{

    public function mostrarTodos(){
        require_once 'models/usuario.php';

        $usuario = new Usuario();
        $allUsers = $usuario->getAllUsers();

        require 'views/usuarios/mostrar-todos.php';
    }
    public function crear(){
        require 'views/usuarios/crear.php';
    }
}
