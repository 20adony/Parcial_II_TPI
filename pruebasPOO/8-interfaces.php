<?php
class Ave{
    public function volar(){
        echo "Puedo volar ....\n";
    }
}

interface PuedoNadar{
    public function nadar();
}

class Pinguino extends Ave implements PuedoNadar{
    public function nadar(){
        echo "puedo nadar ...\n";
    }
}
class Pez implements PuedoNadar{
    public function nadar(){
        echo "puedo nadar ...\n";
    }
}

$p = new Pez;
$p2 = new Pinguino;

$p->nadar();
$p2->volar();
$p2->nadar();
?>