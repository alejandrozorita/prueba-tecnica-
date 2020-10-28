<?php

namespace Tests\Unit;

use Tests\BaseTest;

/**
 * Class EquipoTest
 *
 * @package Test\Unit
 */
class EquipoTest extends BaseTest
{

    /** @test  */
    public function comprobarMaxyMinJugadores()
    {
        $this->startApp();

        $equipo = $this->fakerMethod->createFactoryEquipo([
          'max_jugadores' => 10,
          'min_jugadores' => 6,
        ]);

        $this->assertEquals(10, $equipo->getMaxJugadores());
        $this->assertEquals(6, $equipo->getMinJugadores());
    }
}