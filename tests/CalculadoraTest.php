<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Calculadora.php';

final class CalculadoraTest extends TestCase
{
    public function testSumaDosNumeros(): void
    {
        $calc = new Calculadora();
        $this->assertSame(4, $calc->suma(2, 2));
    }
}


/*
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Calculadora.php';

final class CalculadoraTest extends TestCase
{
    public function testSumaDosNumeros(): void
    {
        $calc = new Calculadora();
        $this->assertSame(4, $calc->suma(2, 2));
    }
}
*/