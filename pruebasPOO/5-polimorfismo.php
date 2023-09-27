<?php
class Animal {
    //Animal es un concepto generico, ya que existen muchos tipos de animales.
    //debido a la naturaleza generica, tambien su metodo lo es, ya que aunque de manera distintas pero todos los animales comen

    protected function comer(){
        echo "comiendo ...";
    }
}

class Tortuga extends Animal{
    public function comer(){
        echo __CLASS__ . PHP_EOL;
    }
}

class Gallina extends Animal{
    public function comer(){
        echo __CLASS__ . PHP_EOL;
    }
}

$tortuga = new Tortuga();//Es un animal, pero concretamente una tortuga.
$gallina = new Gallina();//Es un animal, pero concretamente una gallina.

$tortuga->comer();
$gallina->comer();
?>