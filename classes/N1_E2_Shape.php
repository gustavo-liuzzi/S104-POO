<?php
declare(strict_types=1);


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