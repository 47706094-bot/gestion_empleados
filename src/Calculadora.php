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

    //metodo que realiza las cuatro operaciones basicas
    public function calcular(int $a, int $b, string $operacion): int|float
    {
        return match($operacion) {
            '+' => $a + $b,
            '-' => $a - $b,
            '*' => $a * $b,
            '/' => ($b === 0)
                ? throw new InvalidArgumentException("División por cero no permitida")
                : $a / $b,
            default => throw new InvalidArgumentException("Operación no válida")
        };
    }


}
//Implementacion de metodos para realizar pruebas unitarias

