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
            Capsule::schema()->create('jugadores', function ($table)
            {
                $table->increments('id');
                $table->string('nombre');
                $table->string('imagen');
                $table->integer('precio');
                $table->foreignId('equipo_id')->nullable();
                $table->integer('agilidad');
                $table->integer('fuerza');
                $table->integer('suerte');
                $table->timestamps();
            });
            return true;
        } catch (\Exception $e) {
            return "Tabla ya creada";
        }

    }

}