<?php

namespace App\database;

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class CreateTableJugador
 *
 * @package App\database
 */
class CreateTableJugador
{
    public function __construct()
    {
        try {
            Capsule::schema()->create('jugador', function ($table)
            {
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