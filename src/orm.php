<?php
use Illuminate\Database\Capsule\Manager as Capsule;

require __DIR__ . '/../vendor/autoload.php';

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  => 'gestion_usuario', // 👈 Esta base debe existir
    'username'  => 'root',              // 👈 cámbialo si usas otro usuario
    'password'  => '',                  // 👈 tu contraseña de MySQL
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

