<?php

namespace App\database;

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class CreateUserTable
 *
 * @package App\database
 */
class CreateTableUser
{
    public function __construct()
    {
        try {
            Capsule::schema()->create('users', function ($table) {
                $table->increments('id');
                $table->string('nombre');
                $table->string('email')->unique();
                $table->timestamps();
            });
            return true;
        } catch (\Exception $e) {
            return "Tabla ya creada";
        }
    }
}