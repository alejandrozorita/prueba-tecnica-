<?php

namespace App\database;

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class CreateTableJugador
 *
 * @package App\database
 */
class CreateTablePresupuesto
{
    public function __construct()
    {
        try {
            Capsule::schema()->create('presupuesto', function ($table)
            {
                $table->increments('id');
                $table->string('presupuesto');
                $table->foreignId('equipo_id');
                $table->timestamps();
            });
            return true;
        } catch (\Exception $e) {
            return "Tabla ya creada";
        }

    }

}