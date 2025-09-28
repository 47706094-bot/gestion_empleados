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
    //agregamos test de resta
    public function testRestaDosNumeros(): void
    {
        $calc = new Calculadora();
        $this->assertSame(0, $calc->resta(2, 2));
    }

    public function testDivisionDosNumeros(): void
    {
        $calc = new Calculadora();
        $this->assertSame(2, $calc->divide(4, 2));
    }

    public function testDivisionPorCeroLanzaExcepcion(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $calc = new Calculadora();
        $calc->divide(4, 0);
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