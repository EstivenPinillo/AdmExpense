<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' =>'mysql',
    'host' => 'localhost',
    'database' => 'db_adm_expense',
    'username' => 'admin',
    'password' => 'admin',
    'charset' => 'utf8',
]);

$capsule->bootEloquent();



?>