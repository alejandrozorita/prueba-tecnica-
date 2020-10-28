<?php

namespace App\Http\Models;

use App\Http\Models\Orm\EquipoORM;

/**
 * Class Equipo
 *
 * @package App\Http\Models
 */
class Equipo extends EquipoORM
{

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getMaxJugadores()
    {
        return $this->max_jugadores;
    }

    public function getMinJugadores()
    {
        return $this->min_jugadores;
    }

    public function getPrecioEquipo()
    {
        $value = 0;
        $jugadores = $this->jugadores;
        foreach ($jugadores as $jugador) {
            $value += $jugador->precio;
        }
        return $value;
    }

}
