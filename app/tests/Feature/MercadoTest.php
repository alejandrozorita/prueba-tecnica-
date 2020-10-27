<?php

namespace Tests\Feature;

use Tests\BaseTest;

class MercadoTest extends BaseTest
{
    /** @test  */
    public function getPresupuestoActual()
    {
        $mercado = $this->crearMercado();

        $jugador = $this->fakerMethod->createFactoryJugador();
        $presupuesto = $this->fakerMethod->createFactoryPresupuesto();

        $compra = $mercado->realizarCompra($jugador, $presupuesto);

        $this->assertTrue($compra);
        $this->assertEquals($this->presupuestoInicial - $jugador->getPrecio(), $presupuesto->getPresupuestoActual());
    }
}