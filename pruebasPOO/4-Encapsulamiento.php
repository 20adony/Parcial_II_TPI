<?php
class Red{
    //encapsulamos propiedades y metodos mediante modificadores de acceso.
    //asi nosotros controlamos quien o que tiene acceso a los datos.

    public $nombre = "Router";//visible desde cualquier parte
    private $protocolo = "https";//accesible solamente desde la clase red
    protected $puerto = 443;//Accesible desde la clase red y desde la subclase subred
}

class Subred extends Red{
    //tenemos disponible nombre y puerto
}
$red = new Red();
//en el entorno global, solamente tenemos disponible nombre
?>