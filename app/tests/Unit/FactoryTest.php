<?php

namespace Tests\Unit;

use Tests\BaseTest;

class FactoryTest extends BaseTest
{
    /** @test  */
    public function crearJugador()
    {
        $this->startApp();

        $jugador = $this->fakerMethod->createFactoryJugador([
          'nombre' => 'Nombre Jugador',
          'imagen' => 'img.jpg',
          'precio' => 90,
          'agilidad' => 90,
          'fuerza' => 45,
          'suerte' => 22,
        ]);
        $this->assertEquals('Nombre Jugador', $jugador->nombre);
        $this->assertEquals('img.jpg', $jugador->imagen);
        $this->assertEquals(90, $jugador->precio);
        $this->assertEquals(90, $jugador->agilidad);
        $this->assertEquals(45, $jugador->fuerza);
        $this->assertEquals(22, $jugador->suerte);
    }

    /** @test  */
    public function crearEquipo()
    {
        $this->startApp();

        $equipo = $this->fakerMethod->createFactoryEquipo([
          'nombre' => 'Nombre Equipo',
          'num_jugadores' => 11,
        ]);
        $this->assertEquals('Nombre Jugador', $equipo->nombre);
        $this->assertEquals(11, $equipo->num_jugadores);
    }

    /** @test  */
    public function crearUser()
    {
        $this->startApp();

        $user = $this->fakerMethod->createFactoryUser([
          'nombre' => 'Nombre Equipo',
          'email' => 'email@test.com',
        ]);
        $this->assertEquals('Nombre Jugador', $user->nombre);
        $this->assertEquals('email@test.com', $user->email);
    }

    /** @test  */
    public function crearPresupuesto()
    {
        $this->startApp();

        $presupuesto = $this->fakerMethod->createFactoryPresupuesto([
          'equipo_id' => 44,
          'presupuesto' => 95123,
        ]);
        $this->assertEquals(44, $presupuesto->equipo_id);
        $this->assertEquals(95123 , $presupuesto->presupuesto);
    }

}