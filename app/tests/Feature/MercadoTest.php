<?php

namespace Tests\Feature;

use App\Http\Controllers\MercadoController;
use App\Http\Models\Equipo;
use Tests\BaseTest;

/**
 * Class MercadoTest
 *
 * @package Tests\Feature
 */
class MercadoTest extends BaseTest
{
    /** @test  */
    public function getPresupuestoActual()
    {
        $this->startApp();
        $equipo = Equipo::find(1);
        $controller = new MercadoController();
        $jugador = $controller->getPresupuestoActual($equipo);

        $this->assertTrue($compra);
        $this->assertEquals($this->presupuestoInicial - $jugador->getPrecio(), $presupuesto->getPresupuestoActual());
    }
}