<?php
declare(strict_types=1);


/*
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses;
Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
*/

class Shape
{
    protected float $alto;
    protected float $ancho;


    public function __construct(float $alto, float $ancho)
    {
        $this->alto = $alto;
        $this->ancho = $ancho;
    }

}



?>