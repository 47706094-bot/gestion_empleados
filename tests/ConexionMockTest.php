<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ConexionMockTest extends TestCase
{
    public function testMySQLConnectionIsUsedAndMocked(): void
    {
        // Creamos un stub para la interfaz: en vez de usar la clase real, creamos un stub que retorna 'stubbed'
        $stub = $this->createMock(ConnectionInterface::class);
        $stub->method('connect')->willReturn('fake-connection-object');

        // Assert que el stub funciona:
        $this->assertSame('fake-connection-object', $stub->connect());
    }
}
