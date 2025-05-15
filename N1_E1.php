<?php

class Empleado
{
    private $nombre;
    private $sueldo;

    //asumo que en el enunciado del ejercicio "initialize" se refiere al constructor
    public function __construct($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function print()
    {
        echo $this->nombre . " ";
        if ($this->sueldo > 6000) {
            echo "debe pagar impuestos.";
        } else {
            echo "no debe pagar impuestos.";
        }
    }
}

/*
Prueba de instanciado y función
$persona1 = new Empleado("Juan", 30000);
$persona1->print();
*/
