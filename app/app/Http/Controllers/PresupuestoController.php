<?php

namespace App\Http\Controllers;

use App\Http\Models\Equipo;

/**
 * Class PresupuestoController
 *
 * @package App\Http\Controllers
 */
class PresupuestoController
{
    public function index()
    {
        /** @var \App\Http\Models\Equipo $equipo */
        $equipo = Equipo::find(1);

        return view('presupuesto', [
          'presupuesto' => $this->getPrespuestoInicial($equipo),
          'presupuestoActual' => $this->getPresupuestoActual($equipo),
          'capacidadEndeudamiento' => $this->getCapacidadEndeudamiento($equipo)
        ]);
    }


    public function getCapacidadEndeudamiento(Equipo $equipo)
    {
        return $equipo->presupuesto->getCapacidadEndeudamiento();
    }

    /**
     * @param  \App\Http\Models\Equipo  $equipo
     *
     * @return mixed
     */
    public function getPrespuestoInicial(Equipo $equipo)
    {
        return $equipo->presupuesto->presupuesto;
    }


    /**
     * @param  \App\Http\Models\Equipo  $equipo
     *
     * @return int
     */
    public function getPresupuestoActual(Equipo $equipo)
    {
        return $this->getPrespuestoInicial($equipo) - $equipo->getPrecioEquipo();
    }

}