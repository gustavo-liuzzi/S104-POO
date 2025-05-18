<?php

/*
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses;
Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
*/

class Shape
{
    protected $alto;
    protected $ancho;


    public function __construct($alto, $ancho)
    {
        $this->alto = $alto;
        $this->ancho = $ancho;
    }

}

class Triangle extends Shape
{
    public function area()
    {
        return ($this->alto * $this->ancho) / 2;
    }

}

class Rectangle extends Shape
{
    public function area()
    {
        return ($this->alto * $this->ancho);
    }
}

/* Prueba de métodos.
$triangulo = new Triangle(10, 5);
$rectangulo = new Rectangle(10, 5);
echo $rectangulo->area();
echo "<br>";
echo $triangulo->area();
*/

?>