<?php
class Calculadora{
    public static $marca = "Casio";

    public static function sumar($n1, $n2){
        return $n1 + $n2;
    }

    public static function restar($n1, $n2){
        return $n1 - $n2;
    }
}
echo Calculadora::$marca . PHP_EOL;
echo Calculadora::sumar(10,10). PHP_EOL;
echo Calculadora::restar(10,5).PHP_EOL;
?>