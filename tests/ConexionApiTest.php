<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ConexionApiTest extends TestCase
{
    public function testClaseYMetodoExistentes(): void
    {
        $this->assertTrue(class_exists('Conexion'), 'La clase Conexion debe existir (aún no creada).');
        $this->assertTrue(method_exists('Conexion', 'conectar'), 'La clase Conexion debe declarar el método conectar().');
    }
}
