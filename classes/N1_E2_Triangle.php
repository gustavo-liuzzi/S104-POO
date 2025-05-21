<?php
declare(strict_types=1);

class Triangle extends Shape
{
    public function area(): float
    {
        return ($this->alto * $this->ancho) / 2;
    }

}