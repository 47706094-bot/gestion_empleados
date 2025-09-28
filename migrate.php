<?php
// Carga el ORM (Eloquent)
require __DIR__ . '/src/orm.php';

// Ejecuta la migración
require __DIR__ . '/database/migrations/2025_09_28_000001_create_empleados_table.php';
echo "✅ Migración completada.\n";
?>