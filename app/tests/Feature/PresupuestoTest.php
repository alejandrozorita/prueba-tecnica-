<?php

namespace Tests\Feature;

use Tests\BaseTest;

/**
 * Class PresupuestoTest
 *
 * @package Tests\Feature
 */
class PresupuestoTest extends BaseTest
{
    /** @test  */
    public function capacidadEndeudamientoTrue()
    {

        $presupuesto = $this->crearPresupuesto();

        $cpacidadEndeudamiento = 0.2;
        $precioJugador = ($presupuestoInicial * $cpacidadEndeudamiento) + $presupuestoInicial;

        $equipo = $this->fakerMethod->createFactoryEquipo();
        $jugador = new JugadorFactory('Nombre Jugador', 'img.jpg', $precioJugador, 90, 45, 22);

        $mercado = new FactoryPresupuesto($equipo, $presupuestoInicial);
        $compra = $mercado->realizarCompra($jugador);
        $this->assertTrue($compra);
        $this->assertEquals($presupuestoInicial - $jugador->getPrecio(), $presupuesto->getPresupuestoActual());
    }

    /** @test  */
    public function capacidadEndeudamientoFalse()
    {

        $presupuestoInicial = 10000;
        $cpacidadEndeudamiento = 0.21;
        $precioJugador = ($presupuestoInicial * $cpacidadEndeudamiento) + $presupuestoInicial;

        $equipo = $this->fakerMethod->createFactoryEquipo();
        $jugador = new JugadorFactory('Nombre Jugador', 'img.jpg', $precioJugador, 90, 45, 22);

        $presupuesto = new FactoryPresupuesto($equipo, $presupuestoInicial);
        $compra = $presupuesto->realizarCompra($jugador);
        $this->assertTrue($compra);
        $this->assertEquals($presupuestoInicial - $jugador->getPrecio(), $presupuesto->getPresupuestoActual());
    }
}