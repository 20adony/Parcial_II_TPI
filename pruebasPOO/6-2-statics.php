<?php
class Miclase{
    // propiedad estatica
    public static $propiedadStatica = 0;

    //Metodo estatico
    public static function metodoEstatico(){
        echo "Este es un metodo estatico\n";
    }

    //Metodo para modificar la propiedad estatica
    public static function incrementarPropiedad(){
        self::$propiedadStatica++;
    }
}

//acceder a la propiedad estatica
echo Miclase::$propiedadStatica .PHP_EOL;
//llamada al metodo estatico
Miclase::metodoEstatico();

//modificando la propiedad estatica
Miclase::incrementarPropiedad();
echo Miclase::$propiedadStatica .PHP_EOL;
?>