<?php
declare(strict_types=1);

class Empleado
{
    private string $nombre;
    private int $sueldo;

    public function __construct(string $nombre, int $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function print(): void
    {
        echo $this->nombre . " ";
        if ($this->sueldo > 6000) {
            echo "debe pagar impuestos.";
        } else {
            echo "no debe pagar impuestos.";
        }
    }
}
