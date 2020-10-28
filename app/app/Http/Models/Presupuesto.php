<?php

namespace App\Http\Models;

use App\Http\Models\Orm\PresupuestoORM;

/**
 * Class Presupuesto
 *
 * @package App\Http\Models
 */
class Presupuesto extends PresupuestoORM
{

    private $capacidadEndeudamiento = 0.2;


    /**
     * @return mixed
     */
    public function getPresupuesto(): int
    {
        return $this->presupuesto;
    }


    /**
     * @param $presupuesto
     */
    public function setPresupuesto($presupuesto): void
    {
        $this->presupuesto = $presupuesto;
    }


    public function validarCompra(Jugador $jugador)
    {
        $precioEquipo = $this->equipo->getPrecioEquipo();
        return ($precioEquipo + $jugador->precio) <= $this->getCapacidadEndeudamiento();
    }


    /**
     * @return float|int|mixed
     */
    public function getCapacidadEndeudamiento()
    {
        return ($this->presupuesto * $this->capacidadEndeudamiento) + $this->presupuesto;
    }

}
