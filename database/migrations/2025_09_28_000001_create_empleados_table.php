<?php
use Illuminate\Database\Capsule\Manager as Capsule;

require_once __DIR__ . '/../../src/orm.php';

Capsule::schema()->create('empleados', function ($table) {
    $table->increments('id');
    $table->string('nombre');
    $table->string('email')->unique();
    $table->timestamps();
});

echo "✅ Tabla 'empleados' creada exitosamente.\n";
