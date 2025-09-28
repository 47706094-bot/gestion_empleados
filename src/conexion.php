<?php
declare(strict_types=1);

class Conexion
{
    public static function conectar()
    {
        $host = getenv('DB_HOST') ?: '127.0.0.1';
        $user = getenv('DB_USER') ?: 'root';
        $password = getenv('DB_PASS') ?: '';
        $dbname = getenv('DB_NAME') ?: 'gestion_usuario';

        // Intento de crear mysqli (silenciar warnings con @)
        $mysqli = @new mysqli($host, $user, $password, $dbname);

        if ($mysqli instanceof mysqli && $mysqli->connect_errno === 0) {
            return $mysqli;
        }

        // Si hay error, devolver null para permitir tests que no dependan de BD
        return null;
    }
}


/*
declare(strict_types=1);

// Implementación mínima para TDD - devuelve null por ahora
class Conexion
{
    public static function conectar()
    {
        // implementación mínima: devolver null (la API existe)
        return null;
    }
}

*/
/*
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
*/
/*
$host = "localhost";   // Host
$dbname = "gestion_usuario";     // Nombre BD
$username = "root";          // Usuario
$password = "";        // Contraseña

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // Solo mostrar mensaje de conexión en modo debug
    // echo "✅ Conexión exitosa";
} catch (PDOException $e) {
    die("❌ Error en la conexión: " . $e->getMessage());
}
*/
