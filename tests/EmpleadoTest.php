<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/bootstrap.php';
require_once __DIR__ . '/../src/Empleado.php';

final class EmpleadoTest extends TestCase
{
    public function testCrearEmpleado(): void
    {
        $empleado = new Empleado();
        $empleado->nombre = "Jose Pinares";
        $empleado->email = "jose@example.com";
        $empleado->save();

        $this->assertNotNull($empleado->id);
    }
}
