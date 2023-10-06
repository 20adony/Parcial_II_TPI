<?php

class User {

    public function index() {
        $data = file_get_contents(BASE_DIR . "database.json");
        $users = json_decode($data, true);
        return $users;
    }

    public function store() {
        $data = file_get_contents(BASE_DIR . "database.json");
        $users = json_decode($data, true);

        end($users["users"]);
        $ultimoCliente = current($users["users"]);
        $id = isset($ultimoCliente["id"]) ? $ultimoCliente["id"]+1 : 0;
        array_push($users["users"],
            array(
                "id" => $id,
                "Nombres" => $_POST["Nombres"],
                "Apellidos" => $_POST["Apellidos"],
                "Nacimiento" =>$_POST["Nacimiento"],
                "Direccion" => $_POST["Direccion"],
                "Productos" => isset($_POST["productos"]) ? $_POST["productos"] : array(),
            )
        );

        file_put_contents("database.json", json_encode($users));
        header('Location: ' . BASE_DIR . 'cliente/');
    }
    public function showClientes($id){
        $data = file_get_contents(BASE_DIR . "database.json");
        $clientes = json_decode($data, true);
        $id = $id-1;
        $clienteExistente = isset($clientes["users"][$id]) ? $clientes["users"][$id] : null;
        return $clienteExistente;
    }

    public function deleteCliente($id){
        $data = file_get_contents(BASE_DIR . "database.json");
        $clientes = json_decode($data, true);
        $id = $id-1;
        unset($clientes["users"][$id]);
        file_put_contents("database.json", json_encode($clientes));

        header('Location: ' . BASE_DIR . 'cliente/');
    }
    public function edit(){
        $data = file_get_contents(BASE_DIR . "database.json");
        $clientes = json_decode($data, true);
        for ($i=0; $i < count($clientes["users"]) ; $i++) { 
            if($clientes["users"][$i]["id"] == $_POST["user_id"]){
                $clientes["users"][$i]["id"] = $_POST["user_id"];
                $clientes["users"][$i]["Nombres"] = $_POST["Nombres"];
                $clientes["users"][$i]["Apellidos"] = $_POST["Apellidos"];
                $clientes["users"][$i]["Nacimiento"] = $_POST["Nacimiento"];
                $clientes["users"][$i]["Direccion"] = $_POST["Direccion"];
                $clientes["users"][$i]["Productos"] = isset($_POST["productos"]) ? $_POST["productos"] : [];
            }
        }
        file_put_contents("database.json", json_encode($users));
        
        file_put_contents("database.json", json_encode($clientes));
        header('Location: ' . BASE_DIR . 'cliente/');
    }
}