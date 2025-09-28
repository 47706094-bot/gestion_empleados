<?php
class Conexion {
    private static $host = "127.0.0.1";   // o "localhost"
    private static $user = "root";        // ajusta según tu entorno
    private static $password = "";        // tu contraseña de MySQL
    private static $dbname = "test";      // una BD que exista en tu MySQL

    public static function conectar(): ?mysqli {
        $mysqli = @new mysqli(
            self::$host,
            self::$user,
            self::$password,
            self::$dbname
        );

        if ($mysqli->connect_errno) {
            return null; // en caso de error, retorna null
        }

        return $mysqli;
    }
}
