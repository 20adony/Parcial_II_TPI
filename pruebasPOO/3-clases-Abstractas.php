<?php
/*La abstracción es uno de los conceptos fundamentales en la programación orientada a objetos (POO)
y permite definir una clase base (o interfaz) que proporciona una estructura general para otras clases derivadas.
Esto permite ocultar los detalles internos y centrarse en la funcionalidad esencial. */

abstract class Vehiculo {
    protected $marca;
    protected $modelo;

    public function __construct($marca, $modelo){#constructor
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    #metodo abstracto que debe implementarse en las clases derivadas
    abstract public function conducir();
}

#clase concreta que representa un automovil
class Automovil extends Vehiculo{
    public function conducir(){
        return "Conduciendo un automovil {$this->marca} {$this->modelo}";
    }
}

#clase concreta que representa una motocicleta
class Motocicleta extends Vehiculo{
    public function conducir(){
        return "Conduciendo una motocicleta {$this->marca} {$this->modelo}";
    }
}

//Creacion de objetos de las clases concretas
$automovil = new Automovil("Toyota", "Camry");
$motocicleta = new Motocicleta("Honda","CBR");

echo $automovil->conducir() . PHP_EOL;
echo $motocicleta->conducir() . PHP_EOL;
?>