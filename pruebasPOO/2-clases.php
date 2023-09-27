<?php
class Perro {
    /* Las propiedades en php no son mas que aquellas caracteristicas propias de un objeto por ejemplo
    perro tiene caracteristicas unicas y diferentes de otros objetos */
    public $nombre;
    public $color = "cafe oscuro";
    public $raza;
    public $tamanio;
    public const patas = 4;
    #definiciones de metodos set
    public function setRaza($raza){
        $this->raza = $raza;
    }
    public function setTamanio($tamanio){
        $this->tamanio = $tamanio;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    #definicion de metodos getter
    public function getRaza(){
        return $this->raza;
    }

    public function getTamanio(){
        return $this->tamanio;
    }

    public function getNombre(){
        return $this->nombre;
    }

    #Los metodos son los comportamientos propios que puede tener ese objeto
    public function ladrar(){
        echo "@@@@@ GUAU GUAU @@@@@";
    }
    public function grunir(){
        echo "Grrrrrr";
    }

    public function generalidades(){
        echo "Nombre: ".$this->nombre . PHP_EOL;
        echo "Color: " . $this->color . PHP_EOL;
        echo "Raza: ". $this->tamanio . PHP_EOL;
        echo "tamanio: ". $this->tamanio . PHP_EOL;
        echo "Patas: ". self::patas . PHP_EOL;
    }
}

$Pastor = new Perro();

$Pastor->setNombre("Rocky");
$Pastor->setRaza("Pastor Aleman");
$Pastor->setTamanio("120 centimetros");

$Pastor->generalidades();
?>