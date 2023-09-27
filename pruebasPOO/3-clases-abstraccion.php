<?php
class Financiera {
    /* La abstraccion se refiere a la capacidad de un objeto de esconder su complejidad y solamente presentar su funcionamiento de una manera
    simple. Nos referimos a que no interesa como lo hace, sino solo sabe que hace */

    public $salario;
    public $isss = 0.065;
    public $afp = 0.03;

    private function realizarDeducciones(){
        return $this->salario - (($this->salario*$this->isss)+($this->salario*$this->afp));
    }

    /* Dejamos la complejidad oculta. Un usuario solo necesita el salario neto, sin importar como se obtuvo
    solo necesita obtener un resultado confiable */

    public function calcularSalarioNeto($salarioBruto){
        $this->salario = $salarioBruto;
        if($salarioBruto < 500){
            return $this->realizarDeducciones();
        }else{
            #podriamos calcular la renta en este caso
        }
    }
}
#creacion de instancia a clase
$f = new Financiera();

echo $f->calcularSalarioNeto(450) . PHP_EOL;
?>