<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class DemoTest extends TestCase
{
    public function testSumaBasica(): void
    {
        $this->assertEquals(4, 2 + 2);
    }

    public function testTexto(): void
    {
        $this->assertSame("hola", strtolower("HOLA"));
    }
}
