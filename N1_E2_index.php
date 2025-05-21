<?php
declare(strict_types=1);

include "classes\N1_E2_Shape.php";
include "classes\N1_E2_Rectangle.php";
include "classes\N1_E2_Triangle.php";


// Prueba de métodos
$triangulo = new Triangle(10, 5);
$rectangulo = new Rectangle(10, 5);
echo $rectangulo->area()."<br>";
echo $triangulo->area();
