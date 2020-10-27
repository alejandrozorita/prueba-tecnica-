<?php

namespace Test\Unit;

use Tests\BaseTest;

/**
 * Class CreateTableJugadorTest
 *
 * @package App\test
 */
class PresupuestoTest extends BaseTest
{

    /** @test  */
    public function obtenerPresupuesto()
    {
        $this->startApp();

        $presupuestoInicial = 10000;

        $user = new UserFactory('Alejandro', 'contacto@alejandrozorita.me');

        $presupuesto = new FactoryPresupuesto($user, $presupuestoInicial);
        $this->assertEquals($presupuestoInicial, $presupuesto->getPresupuesto());

    }

    /** @test  */
    public function setPresupuesto()
    {
        $this->startApp();

        $presupuestoInicial = 10000;

        $user = new UserFactory('Alejandro', 'contacto@alejandrozorita.me');

        $presupuesto = new FactoryPresupuesto($user, $presupuestoInicial);
        $presupuesto->setPresupuesto(20000);
        $this->assertEquals(20000, $presupuesto->getPresupuesto());
    }

    /** @test  */
    public function getPresupuestoActual()
    {
        $this->startApp();

        $presupuestoInicial = 10000;

        $user = new UserFactory('Alejandro', 'contacto@alejandrozorita.me');
        $jugador = new JugadorFactory('Nombre Jugador', 'img.jpg', 500, 90, 45, 22);

        $presupuesto = new FactoryPresupuesto($user, $presupuestoInicial);
        $compra = $presupuesto->realizarCompra($jugador);
        $this->assertTrue($compra);
        $this->assertEquals($presupuestoInicial - $jugador->getPrecio(), $presupuesto->getPresupuestoActual());
    }

    /** @test  */
    public function capacidadEndeudamientoTrue()
    {
        $this->startApp();

        $presupuestoInicial = 10000;
        $cpacidadEndeudamiento = 0.2;
        $precioJugador = ($presupuestoInicial * $cpacidadEndeudamiento) + $presupuestoInicial;

        $user = new UserFactory('Alejandro', 'contacto@alejandrozorita.me');
        $jugador = new JugadorFactory('Nombre Jugador', 'img.jpg', $precioJugador, 90, 45, 22);

        $presupuesto = new FactoryPresupuesto($user, $presupuestoInicial);
        $compra = $presupuesto->realizarCompra($jugador);
        $this->assertTrue($compra);
        $this->assertEquals($presupuestoInicial - $jugador->getPrecio(), $presupuesto->getPresupuestoActual());
    }

    /** @test  */
    public function capacidadEndeudamientoFalse()
    {
        $this->startApp();

        $presupuestoInicial = 10000;
        $cpacidadEndeudamiento = 0.21;
        $precioJugador = ($presupuestoInicial * $cpacidadEndeudamiento) + $presupuestoInicial;

        $user = new UserFactory('Alejandro', 'contacto@alejandrozorita.me');
        $jugador = new JugadorFactory('Nombre Jugador', 'img.jpg', $precioJugador, 90, 45, 22);

        $presupuesto = new FactoryPresupuesto($user, $presupuestoInicial);
        $compra = $presupuesto->realizarCompra($jugador);
        $this->assertTrue($compra);
        $this->assertEquals($presupuestoInicial - $jugador->getPrecio(), $presupuesto->getPresupuestoActual());
    }

}