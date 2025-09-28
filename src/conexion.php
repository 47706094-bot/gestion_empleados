<?php
class Conexion {
    public static function conectar() {
        $host = "127.0.0.1";   // o "localhost"
        $user = "root";        // usuario de tu MySQL
        $pass = "";            // contraseña (en XAMPP suele estar vacía)
        $db   = "gestion_usuario"; // ⚠️ reemplázalo con la base correcta

        try {
            $mysqli = new mysqli($host, $user, $pass, $db);

            if ($mysqli->connect_errno) {
                throw new Exception("Error de conexión: " . $mysqli->connect_error);
            }

            return $mysqli;
        } catch (Exception $e) {
            echo "❌ " . $e->getMessage();
            return null;
        }
    }
}
