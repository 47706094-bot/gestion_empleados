<?php
declare(strict_types=1);

class Calculadora
{
    public function suma(int $a, int $b): int
    {
        return $a + $b;
    }

    //agregamos metodo resta
    public function resta(int $a, int $b): int
    {
        return $a - $b;
    }

    //agregamos metodo division
    public function divide(int $a, int $b): float
    {
        if ($b === 0) {
            throw new InvalidArgumentException("División por cero no permitida");
        }
        return $a / $b;
    }


}
//Implementacion de metodos para realizar pruebas unitarias

