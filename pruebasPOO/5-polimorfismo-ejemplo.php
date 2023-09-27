<?php
//Clase base (superclase)
class Animal {
    public function hablar(){
        return "Hace un sonido generico";
    }
}

//clase derivada (sublclase)
class Perro extends Animal{
    public function hablar(){
        return "Hace ladridos";
    }
}

//clase derivada (subclase)
class Gato extends Animal{
    public function hablar(){
        return "Hace maullidos";
    }
}

//funcion que utiliza polimofismo
function hacerHablar(Animal $animal){
    return $animal->hablar();
}

//Creacion de objetos de las clases
$perro = new Perro();
$gato = new Gato();

//llama a la funcion con diferentes objetos
echo hacerHablar($perro).PHP_EOL;
echo hacerHablar($gato).PHP_EOL;
?>