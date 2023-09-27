<?php
class Automovil{
    public $color = "negro mate";
    public $potencia;
    public $marca;

    public function getColor(){
        return $this->color;
    }
    public function getPotencia(){
        return $this->potencia;
    }
    public function getMarca(){
        return $this->marca;
    }

    public function setPotencia($poder){
        $this->potencia = $poder;
    }
    public function setMarca($string){
        $this->marca = $string;
    }
}

$ferrari = new Automovil();

$ferrari->setPotencia("90 KM/H");
$ferrari->setMarca("Mitsubishi");

echo $ferrari->getColor() . PHP_EOL;
echo "Potencia ". $ferrari->getPotencia() . PHP_EOL;
echo "Marca ". $ferrari->getMarca(). PHP_EOL;
?>