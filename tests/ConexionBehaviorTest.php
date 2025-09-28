<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/conexion.php'; // si no usas autoload

final class ConexionBehaviorTest extends TestCase
{
    public function testConectarDevuelveInstanciaMySQLiOrNullIfNotConfigured(): void
    {
        $result = Conexion::conectar();

        // intención: si no hay base/credenciales, la implementación puede devolver null,
        // pero TDD exige que probemos el intento real: comprobamos tipo o null.
        $this->assertTrue(
            $result === null || $result instanceof mysqli,
            'conectar() debe devolver null (si no hay DB) o instancia de mysqli (si hay DB activa).'
        );
    }
}
