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
}
