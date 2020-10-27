<?php

namespace Test\Unit;

use Tests\BaseTest;

/**
 * Class CreateTableJugadorTest
 *
 * @package App\test
 */
class MercadoTest extends BaseTest
{

    /** @test  */
    public function iniciarMercado()
    {
        $this->startApp();

        $numJugadoresaleatorios = 10;
        $rangoPrecio = [3000,4000];

        $mercado = new MercadoFactory($numJugadoresaleatorios, $rangoPrecio);
        $jugadores = $mercado->getJugadoresAleatorios();
        $this->assertEquals($numJugadoresaleatorios, count($jugadores));

        $precio = $mercado->getRangoPrecio();
        $this->assertEquals($rangoPrecio[0], $precio[0]);
        $this->assertEquals($rangoPrecio[1], $precio[1]);

    }

    public function berificarPropiedadesJugador()
    {
        $this->startApp();

        $numJugadoresaleatorios = 10;
        $rangoPrecio = [3000,4000];

        $mercado = new MercadoFactory($numJugadoresaleatorios, $rangoPrecio);
        $jugador = $mercado->getJugadoresAleatorios()[0];

        $this->assertIsString($jugador->nombre);
        $this->assertIsString($jugador->foto);
        $this->assertIsInt($jugador->agilidad);
        $this->assertIsInt($jugador->fuerza);
        $this->assertIsInt($jugador->suerte);
    }

    /** @test  */
    public function setRangoPrecio()
    {
        $this->startApp();

        $numJugadoresaleatorios = 10;
        $rangoPrecio = [3000,4000];

        $mercado = new MercadoFactory($numJugadoresaleatorios, $rangoPrecio);
        $mercado->setJugadoresAleatorios(20);
        $jugadores = $mercado->getJugadoresAleatorios();
        $this->assertEquals(20, count($jugadores));

        $mercado->setRangoPrecio([6000, 7000]);
        $precio = $mercado->getRangoPrecio();
        $this->assertEquals(6000, $precio[0]);
        $this->assertEquals(7000, $precio[1]);

    }


}