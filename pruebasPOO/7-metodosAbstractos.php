<?php
abstract class Database{
    abstract public function conectar();//no es posible crear cuerpo de la funcion
    abstract public function desconectar();//no es posible crear cuerpo de la funcion
}
//si no definimos los metodos abstractos nos marcara un error, porque la clase principal contiene metodos abstractos
class MySql extends Database{
    public function conectar(){
        echo "Coneccion exitosa desde MySql\n";
    }

    public function desconectar(){
        echo "Desconectando MySql\n";
    }
}

class PostGress extends Database{
    public function conectar(){
        echo "Conectando desde PostGress\n";
    }

    public function desconectar(){
        echo "desconectando PostGress\n";
    }
}

$mysql = new MySql();
$postgress = new PostGress();

$mysql->conectar();
$mysql->desconectar();

$postgress->conectar();
$postgress->desconectar();
?>