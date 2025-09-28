<?php
declare(strict_types=1);

interface ConnectionInterface
{
    public static function conectar(): ?\mysqli;
}


/*

declare(strict_types=1);

interface ConnectionInterface
{
    public function connect();
}
*/