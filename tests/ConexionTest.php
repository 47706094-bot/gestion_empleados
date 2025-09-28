<?php
use PHPUnit\Framework\TestCase;

// Importa la clase desde src
require_once __DIR__ . '/../src/conexion.php';

class ConexionTest extends TestCase {

    public function testConectarDevuelveInstanciaMySQLi() {
        $conexion = Conexion::conectar();
        $this->assertInstanceOf(mysqli::class, $conexion);
    }

    public function testConexionNoEsNula() {
        $conexion = Conexion::conectar();
        $this->assertNotNull($conexion, "La conexión no debería ser nula");
    }

    public function testConexionValidaConsulta() {
        $conexion = Conexion::conectar();
        $resultado = $conexion->query("SELECT 1");
        $this->assertTrue($resultado !== false, "La consulta debería ejecutarse correctamente");
    }
}
