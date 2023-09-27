<?php
class Automovil{
    public function getMarca(){
        echo "Toyota\n";
    }
}

trait Modelo{
    public function getModelo(){
        parent::getMarca();
        echo "Corola\n";
    }
}

class Maquina extends Automovil{
    use Modelo;
}

$c = new Maquina();
$c->getMarca();
$c->getModelo();
?>