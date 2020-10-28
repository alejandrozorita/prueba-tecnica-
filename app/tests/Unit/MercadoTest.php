<?php

namespace Tests\Unit;

use Tests\BaseTest;

/**
 * Class CreateTableJugadorTest
 *
 * @package App\test
 */
class MercadoTest extends BaseTest
{

    /** @test */
    public function iniciarMercado()
    {
        $mercado = $this->crearMercado();

        $this->assertEquals($this->numJugadoresAleatorios, count($mercado->getJugadores()));

        $this->assertEquals($this->precioMax, $mercado->getMaxPrecio());
        $this->assertEquals($this->precioMin, $mercado->getMinPrecio());
    }


    /** @test */
    public function verificarPropiedadesJugador()
    {
        $mercado = $this->crearMercado();
        $jugador = $mercado->getJugadores()[0];

        $this->assertIsString($jugador->nombre);
        $this->assertIsString($jugador->imagen);
        $this->assertIsInt($jugador->agilidad);
        $this->assertIsInt($jugador->fuerza);
        $this->assertIsInt($jugador->suerte);
    }

    /** @test  */
    public function setRangoPrecio()
    {
        $mercado = $this->crearMercado();

        $mercado->setNumJugadoresAleatorios(20);
        $this->assertEquals(20, $mercado->getNumJugadoresAleatorios());

        $mercado->setMinPrecio(6000);
        $mercado->setMaxPrecio(7000);
        $this->assertEquals(6000, $mercado->getMinPrecio());
        $this->assertEquals(7000, $mercado->getMaxPrecio());
    }

}