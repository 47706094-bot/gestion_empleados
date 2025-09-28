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

    public function testBuscarEmpleadoPorEmail(): void
    {
        $empleado = Empleado::where('email', 'jose@example.com')->first();
        $this->assertSame("Jose Pinares", $empleado->nombre);
    }

    public function scopePorEmail($query, string $email)
    {
        return $query->where('email', $email);
    }


}
