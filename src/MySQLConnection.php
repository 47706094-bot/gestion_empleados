<?php
declare(strict_types=1);

class MySQLConnection implements ConnectionInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function connect()
    {
        $host = $this->config['host'] ?? getenv('DB_HOST') ?: '127.0.0.1';
        $user = $this->config['user'] ?? getenv('DB_USER') ?: 'root';
        $pass = $this->config['pass'] ?? getenv('DB_PASS') ?: '';
        $db   = $this->config['db']   ?? getenv('DB_NAME') ?: 'gestion_usuario';

        $mysqli = @new mysqli($host, $user, $pass, $db);
        if ($mysqli instanceof mysqli && $mysqli->connect_errno === 0) {
            return $mysqli;
        }
        return null;
    }
}
