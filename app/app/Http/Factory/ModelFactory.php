<?php

namespace App\Http\Factory;

use App\Http\Models\Equipo;
use App\Http\Models\Jugador;
use App\Http\Models\Presupuesto;
use App\Http\Models\User;

/**
 * Class ModelFactory
 *
 * @package App\Http\Factory
 */
class ModelFactory
{
    public static function user($attributes = [])
    {
        return new User($attributes);
    }
    public static function jugador($attributes = [])
    {
        return new Jugador($attributes);
    }
    public static function presupuesto($attributes = [])
    {
        return new Presupuesto($attributes);
    }
    public static function equipo($attributes = [])
    {
        return new Equipo($attributes);
    }

}