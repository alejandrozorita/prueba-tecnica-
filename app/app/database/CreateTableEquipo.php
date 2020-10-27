<?php

namespace App\database;

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class CreateTableJugador
 *
 * @package App\database
 */
class CreateTableEquipo
{
    public function __construct()
    {
        try {
            Capsule::schema()->create('equipo', function ($table)
            {
                $table->increments('id');
                $table->string('nombre');
                $table->integer('user_id');
                $table->integer('max_jugadores');
                $table->integer('min_jugadores');
                $table->timestamps();
            });
            return true;
        } catch (\Exception $e) {
            return "Tabla ya creada";
        }

    }

}